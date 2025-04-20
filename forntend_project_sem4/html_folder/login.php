<?php include 'includes/config.php'; ?>
<?php include 'includes/auth_functions.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (loginUser($email, $password, $conn)) {
        header("Location: page1.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FireShield</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="text-center mb-6">
            <img src="../img_folder/logo_pic.jpg" alt="Logo" class="h-16 w-16 mx-auto rounded-full">
            <h1 class="text-2xl font-bold mt-2">Sefire<span class="text-red-600">marketing</span></h1>
        </div>
        
        <h2 class="text-xl font-semibold text-center mb-6">Login to Your Account</h2>
        
        <?php if (isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form action="login.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
            </div>
            
            <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                <i class="fas fa-sign-in-alt mr-2"></i> Login
            </button>
        </form>
        
        <div class="mt-4 text-center">
            <a href="forgot-password.php" class="text-red-600 hover:text-red-800 text-sm">Forgot Password?</a>
        </div>
        
        <div class="mt-2 text-center">
            <span class="text-gray-600 text-sm">Don't have an account?</span>
            <a href="register.php" class="text-red-600 hover:text-red-800 text-sm font-semibold ml-1">Sign up</a>
        </div>
    </div>
</body>
</html>