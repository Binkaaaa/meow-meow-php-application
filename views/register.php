<?php
// Include required files
require_once(__DIR__ . '/../app/controllers/UserController.php');

// Start session
if (!isset($_SESSION)) { 
    session_start();
}
?>
<?php include('header.php'); ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="public/src/output.css" rel="stylesheet">
    <style>
    body {
        background-image: url('C:/xampp/htdocs/petstore/public/uploads/register.jpg'); 
        background-size: cover; 
        background-position: center;
    }
</style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen" >
    <div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-2xl mx-auto mt-16">
        <!-- Flash Message -->
        <?php
        if (isset($_SESSION['register'])) {
            // Check if register_class exists in session
            $class = isset($_SESSION['register_class']) ? $_SESSION['register_class'] : 'alert-warning'; // Default class if not set
            echo '<div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">';
            echo '<strong>Error:</strong> ' . $_SESSION['register'];
            echo '</div>';
            unset($_SESSION['register']);
            unset($_SESSION['register_class']);
        }
        ?>

        <h1 class="text-2xl font-bold mb-6 text-center">Registration Form</h1>
        <form action="/petstore/app/controllers/UserController.php" method="POST" class="space-y-6">
            <input type="hidden" name="type" value="register">
            <!-- First Name and Last Name -->
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="firstName" class="block text-sm font-medium text-gray-800">First Name:</label>
                    <input type="text" id="firstName" name="firstName" 
                        class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="lastName" class="block text-sm font-medium text-gray-800">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" 
                        class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-800">Username:</label>
                <input type="text" id="username" name="username" 
                    class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-800">Email:</label>
                <input type="email" id="email" name="email" 
                    class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Password and Repeat Password -->
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-800">Password:</label>
                    <input type="password" id="password" name="password" 
                        class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="repeatPassword" class="block text-sm font-medium text-gray-800">Repeat Password:</label>
                    <input type="password" id="repeatPassword" name="repeatPassword" 
                        class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" 
                    class="w-full bg-black hover:bg-yellow-500 text-white font-semibold text-lg py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                    Register
                </button>
            </div>

            <!-- Already have an account -->
            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">
                    Already have an account? 
                    <a href="login.php" class="text-yellow-600 hover:text-black font-extrabold">Log in</a>
                </p>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
</body>
</html>
