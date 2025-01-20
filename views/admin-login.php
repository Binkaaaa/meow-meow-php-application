<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the admin is already logged in and redirect to the dashboard if true
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    header("Location: admin-dashboard.php");
    exit();
}

// Handle the login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once(__DIR__ . '/../app/controllers/AdminController.php');
    $controller = new AdminController();
    $controller->login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">

    <div class="flex w-full max-w-4xl rounded-lg shadow-xl bg-black">
        <!-- Left Side Image -->
        <div class="w-1/2">
            <img src="/petstore/public/uploads/adminlogin.jpeg" alt="Admin Image" class="w-full h-full object-cover rounded-l-lg">
        </div>

        <!-- Right Side Login Form -->
        <div class="w-1/2 p-10">
            <h1 class="text-2xl font-bold mb-6 text-center text-white">Admin Login</h1>
            <form action="admin-login.php" method="POST" class="space-y-6">
                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm font-medium text-white">Username:</label>
                    <input type="text" id="username" name="username" required 
                        class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-100 focus:border-blue-100">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-white">Password:</label>
                    <input type="password" id="password" name="password" required 
                        class="mt-2 block w-full border border-gray-400 rounded-lg shadow-sm p-2 focus:ring-blue-100 focus:border-blue-100">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                        class="w-full bg-yellow-200 text-black hover:bg-black hover:text-yellow-200 font-extrabold font-serif text-lg py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Login
                    </button>
                </div>
                <?php
                // Display an error message if login fails
                if (isset($_SESSION['loginError'])) {
                    echo "<p class='text-red-500 text-center'>{$_SESSION['loginError']}</p>";
                    unset($_SESSION['loginError']); // Clear the error after displaying
                }
                ?>
            </form>
        </div>
    </div>

</body>
</html>
