<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$user = "root";
$pass = "";
$db = "fire_safety_project";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}
define('RAZORPAY_KEY_ID', 'rzp_test_qZI6MuNL6cIuim');
define('RAZORPAY_KEY_SECRET', '5KfXF3e2DGmrrQmkZjjHJ32M');
define('RAZORPAY_CURRENCY', 'INR');
?>


