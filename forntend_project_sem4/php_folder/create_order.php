<?php
// Enable error reporting for development (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 0); // Don't display errors to users
ini_set('log_errors', 1); // But do log them

// Set headers at the very top - no output before this!
header('Content-Type: application/json');

// Include config file
require_once __DIR__ . '/../html_folder/includes/config.php';

try {
    // Get input data
    $input = json_decode(file_get_contents('php://input'), true);
    
    // Validate input
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid JSON input');
    }
    
    if (!isset($input['amount']) || !isset($input['customer_name']) || 
        !isset($input['customer_email']) || !isset($input['customer_phone'])) {
        throw new Exception('Missing required fields');
    }
    
    // Validate amount is numeric
    if (!is_numeric($input['amount'])) {
        throw new Exception('Invalid amount');
    }

    // Initialize Razorpay client
    $api = new Razorpay\Api\Api(RAZORPAY_KEY_ID, RAZORPAY_KEY_SECRET);
    
    // Create Razorpay order
    $order = $api->order->create([
        'amount' => $input['amount'],
        'currency' => 'INR',
        'receipt' => 'order_' . time(),
        'payment_capture' => 1
    ]);
    
    // Return success response
    echo json_encode([
        'status' => 'success',
        'razorpay_key' => RAZORPAY_KEY_ID,
        'amount' => $input['amount'],
        'currency' => 'INR',
        'razorpay_order_id' => $order->id
    ]);
    
} catch (Exception $e) {
    // Return error response
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
    exit;
}