<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in and has admin role
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: admin-login.php");
    exit();
}

// Handle logout if requested
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_unset();
    session_destroy();
    header("Location: admin-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('/petstore/public/uploads/admindahsboard.jpeg'); /* Replace with correct path */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh; /* Ensure it covers full height */
            width: 100vw; /* Ensure it covers full width */
            margin: 0;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans min-h-screen">

    <!-- Logo Section -->
    <div class="absolute top-4 left-4 flex items-center">
        <a href="/petstore/index.php">
            <img src="/petstore/public/uploads/Meowbluebg.png" alt="M2C Logo" class="object-cover h-20 w-56">
        </a>
    </div>
    <!-- Logout Button -->
    <div class="absolute top-6 right-4">
    <a href="admin-dashboard.php?action=logout" class="bg-red-500 text-white px-4 py-2 rounded-md shadow hover:bg-red-600 transition" >Logout</a>
    </div>
    <!-- Main Content -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="mx-auto px-10 py-10 bg-black bg-opacity-30 rounded-lg shadow-md">

            <!-- Welcome Section -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-white mb-4">Admin Dashboard</h1>
                <p class="text-lg text-white">Efficiently manage your products, customers, payments, and orders.</p>
            </div>

            <!-- Blocks Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- Block 1 -->
                <a href="product/view_product.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition w-11/12 mx-auto">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Manage Products</h2>
                    <p class="text-gray-600">Add, edit, or remove products from your inventory.</p>
                </a>

                <!-- Block 3 -->
                <a href="users/view_customer.php" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition w-11/12 mx-auto">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Manage Customers</h2>
                    <p class="text-gray-600">View, edit, or delete customer information.</p>
                </a>

                <!-- Block 4 -->
                <a href="#" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition w-11/12 mx-auto">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Manage Orders</h2>
                    <p class="text-gray-600">Oversee and process customer orders effectively.</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
