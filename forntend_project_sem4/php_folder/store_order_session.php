<?php
require_once __DIR__ . '/../html_folder/includes/config.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['order_id']) || !isset($data['customer_name']) || 
    !isset($data['customer_email']) || !isset($data['customer_phone']) || 
    !isset($data['amount'])) {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
    exit;
}

// Store order data in session
$_SESSION['order_data'] = [
    'order_id' => $data['order_id'],
    'customer_name' => $data['customer_name'],
    'customer_email' => $data['customer_email'],
    'customer_phone' => $data['customer_phone'],
    'amount' => $data['amount']
];

echo json_encode(['status' => 'success']);
?>