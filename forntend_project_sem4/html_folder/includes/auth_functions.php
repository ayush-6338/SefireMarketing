<?php
function registerUser($email, $password, $full_name, $phone, $conn) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (email, password, full_name, phone) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$email, $hashedPassword, $full_name, $phone]);
}

function loginUser($email, $password, $conn) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['full_name'] = $user['full_name'];
        return true;
    }
    return false;
}
?>