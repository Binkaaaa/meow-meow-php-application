<?php
// Start session
session_start();

// Include dependencies
require_once(__DIR__ . '/../app/controllers/UserController.php'); // Adjust this path as necessary
?>
 
<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="public/src/output.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen" style="background-image: url('/petstore/public/uploads/login.webp'); background-size: cover; background-position: center;">

<div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-md mx-auto mt-20">
    <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

    <!-- Display error messages -->
<?php if (isset($_SESSION['login'])): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline"><?php echo $_SESSION['login']; ?></span>
    </div>
    <?php unset($_SESSION['login']); ?>
<?php endif; ?>


    <form action="/petstore/app/controllers/UserController.php" method="POST" class="space-y-6">
        <input type="hidden" name="type" value="login">
        
        <!-- Username -->
        <div>
            <label for="username" class="block text-sm font-medium text-gray-800">Username:</label>
            <input type="text" id="username" name="username" 
                class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-800">Password:</label>
            <input type="password" id="password" name="password" 
                class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" 
                class="w-full bg-black hover:bg-yellow-500 text-white font-semibold text-lg py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Login 
            </button>
        </div>

        <!-- Don't have an account? -->
        <div class="text-center text-gray-600">
            <p>Don't have an account? <a href="register.php" class="text-yellow-500 hover:text-black font-extrabold">Register here</a></p>
        </div>
    </form>
</div>
<br>
<br>

</body>
</html>
