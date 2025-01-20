<?php
// Include the controller to fetch products
require_once(__DIR__ . '/../../app/controllers/ProductController.php');

// Instantiate the controller
$productController = new ProductController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Popup styling */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 50;
        }
        .modal.active {
            display: flex;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Logo Section -->
    <div class="absolute top-4 left-4 flex items-center">
        <a href="/petstore/index.php">
            <img src="/petstore/public/uploads/Meowbluebg.png" alt="M2C Logo" class="object-cover h-20 w-56">
        </a>
    </div>
<br>
<br>
    <div class="container mx-auto mt-10 px-4">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Welcome to Product Management</h1>
            <!-- Button to Open Popup -->
            <button id="openModal" class="bg-blue-600 text-white px-5 py-3 rounded-md shadow-md hover:bg-blue-700 transition duration-200">
                Create Product
            </button>
        </div>

        <!-- Product Table -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg text-sm mx-auto">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 border-b">Product ID</th>
                        <th class="py-3 px-6 border-b">Name</th>
                        <th class="py-3 px-6 border-b">Description</th>
                        <th class="py-3 px-6 border-b">Price</th>
                        <th class="py-3 px-6 border-b">Image</th>
                        <th class="py-3 px-6 border-b">Stock Quantity</th>
                        <th class="py-3 px-6 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once(__DIR__ . '/../../include/db_connect.php');

                    // Fetch all products
                    $sql = "SELECT * FROM product";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr class='border-b hover:bg-gray-50'>
                                    <td class='py-3 px-6'>{$row['productID']}</td>
                                    <td class='py-3 px-6'>{$row['productName']}</td>
                                    <td class='py-3 px-6'>{$row['productDescription']}</td>
                                    <td class='py-3 px-6'>\${$row['productPrice']}</td>
                                    <td class='py-3 px-6'>
                                        <img src='/petstore/public/uploads/{$row['productImage']}' alt='Product Image' class='max-w-16 max-h-16'>
                                    </td>
                                    <td class='py-3 px-6'>{$row['stockQuantity']}</td>
                                    <td class='py-3 px-6 flex space-x-2'>
                                        <a href='edit_product.php?id={$row['productID']}' class='bg-blue-600 text-white px-3 py-1 rounded-md hover:bg-blue-700 transition duration-200'>Edit</a>
                                        <button class='bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 transition duration-200' onclick='confirmDelete({$row['productID']})'>Delete</button>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr>
                                <td colspan='7' class='py-4 px-6 text-center text-gray-500'>
                                    No products found.
                                </td>
                            </tr>";
                    }
                    mysqli_close($conn);
                    ?>
                </tbody>    
            </table>
        </div>

        <!-- Popup Modal -->
        <div id="createModal" class="modal">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Add New Product</h2>
                <form action="create_product.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label for="productName" class="block text-sm font-medium text-gray-700">Product Name</label>
                        <input type="text" id="productName" name="productName" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="productDescription" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="productDescription" name="productDescription" rows="3" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="productPrice" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="productPrice" name="productPrice" step="0.01" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="productImage" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="productImage" name="productImage" accept="image/*" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="stockQuantity" class="block text-sm font-medium text-gray-700">Stock Quantity</label>
                        <input type="number" id="stockQuantity" name="stockQuantity" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end space-x-3">
                        <button type="button" id="closeModal"
                            class="bg-gray-500 text-white px-5 py-2 rounded-md shadow-md hover:bg-gray-600 transition duration-200">
                            Cancel
                        </button>
                        <button type="submit" name="addProduct"
                            class="bg-blue-600 text-white px-5 py-2 rounded-md shadow-md hover:bg-blue-700 transition duration-200">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Confirmation Popup Modal -->
        <div id="deleteModal" class="modal">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Are you sure you want to delete this product?</h2>
                <div class="flex justify-end space-x-3">
                    <button id="cancelDelete" class="bg-gray-500 text-white px-5 py-2 rounded-md shadow-md hover:bg-gray-600 transition duration-200">
                        Cancel
                    </button>
                    <button id="confirmDelete" class="bg-red-600 text-white px-5 py-2 rounded-md shadow-md hover:bg-red-700 transition duration-200">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    
    <form action="../../views/admin-dashboard.php" method="get">
        <button type="submit" class="bg-gray-500 text-white px-5 py-3 rounded-md shadow-md hover:bg-gray-600 transition duration-200">
            Back to Admin Dashboard
        </button>
    </form>
    <script>
        let deleteProductId = null;

        function confirmDelete(productId) {
            deleteProductId = productId;
            document.getElementById('deleteModal').classList.add('active');
        }

        document.getElementById('cancelDelete').addEventListener('click', () => {
            document.getElementById('deleteModal').classList.remove('active');
        });

        document.getElementById('confirmDelete').addEventListener('click', () => {
            if (deleteProductId) {
                window.location.href = `delete_product.php?id=${deleteProductId}`;
            }
        });

        const openModal = document.getElementById('openModal');
        const closeModal = document.getElementById('closeModal');
        const createModal = document.getElementById('createModal');

        openModal.addEventListener('click', () => {
            createModal.classList.add('active');
        });

        closeModal.addEventListener('click', () => {
            createModal.classList.remove('active');
        });

        window.addEventListener('click', (event) => {
            if (event.target === createModal) {
                createModal.classList.remove('active');
            }
        });
    </script>
</body>
</html>
