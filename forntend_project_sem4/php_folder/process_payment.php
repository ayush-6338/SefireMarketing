<?php
// Add at the VERY TOP of your PHP files
error_reporting(0); // Disable error display in production
header('Content-Type: application/json');

try {
    // Your existing code here
} catch(Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Payment processing failed: ' . $e->getMessage()
    ]);
    exit;
}

require_once __DIR__ . '/../html_folder/includes/config.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

// Verify payment for Razorpay
if (isset($data['razorpay_payment_id'])) {
    // Verify signature
    $generated_signature = hash_hmac('sha256', $data['razorpay_order_id'] . "|" . $data['razorpay_payment_id'], RAZORPAY_KEY_SECRET);
    
    if ($generated_signature !== $data['razorpay_signature']) {
        echo json_encode(['status' => 'error', 'message' => 'Payment verification failed']);
        exit;
    }
    
    $payment_method = 'razorpay';
} else {
    $payment_method = $data['payment_method'] ?? 'cod';
}

try {
    // Connect to database
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($db->connect_error) {
        throw new Exception("Database connection failed");
    }
    
    // Insert order
    $stmt = $db->prepare("INSERT INTO orders (
        order_id, customer_name, customer_email, customer_phone, 
        customer_address, city, state, zip, amount, payment_method,
        razorpay_payment_id, razorpay_order_id, razorpay_signature, status
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $status = $payment_method === 'cod' ? 'pending' : 'completed';
    
    $stmt->bind_param(
        "ssssssssdsssss",
        $data['order_id'],
        $data['customer_name'],
        $data['customer_email'],
        $data['customer_phone'],
        $data['customer_address'] ?? '',
        $data['city'] ?? '',
        $data['state'] ?? '',
        $data['zip'] ?? '',
        $data['amount'],
        $payment_method,
        $data['razorpay_payment_id'] ?? null,
        $data['razorpay_order_id'] ?? null,
        $data['razorpay_signature'] ?? null,
        $status
    );
    
    if ($stmt->execute()) {
        // Insert order items if available
        if (isset($data['products'])) {
            foreach ($data['products'] as $product) {
                $itemStmt = $db->prepare("INSERT INTO order_items (
                    order_id, product_id, product_name, product_price, quantity, total
                ) VALUES (?, ?, ?, ?, ?, ?)");
                
                $itemStmt->bind_param(
                    "sisdid",
                    $data['order_id'],
                    $product['id'],
                    $product['name'],
                    $product['price'],
                    $product['quantity'],
                    $product['total']
                );
                
                $itemStmt->execute();
                $itemStmt->close();
            }
        }
        
        echo json_encode(['status' => 'success', 'order_id' => $data['order_id']]);
    } else {
        throw new Exception("Failed to save order");
    }
    
    $stmt->close();
    $db->close();
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>