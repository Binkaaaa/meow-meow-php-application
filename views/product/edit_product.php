<?php
// Include the controller to fetch product details for editing
require_once(__DIR__ . '/../../app/controllers/ProductController.php');

// Assuming the product ID is passed via query string
if (isset($_GET['id'])) {
    $productController = new ProductController();
    $product = $productController->getProductById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-relaxed tracking-wide relative">

<!-- Logo Section -->
<div class="absolute top-2 left-4 flex items-center">
    <a href="/petstore/index.php">
        <img src="/petstore/public/uploads/Meowbluebg.png" alt="M2C Logo" class="object-cover h-20 w-56">
    </a>
</div>
<br>
    <br>
    <br>


<div class="container mx-auto p-8 bg-white rounded-lg shadow-lg mt-12 w-full max-w-xl">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-extrabold text-gray-800">Edit Product</h1>
    </div>

    <!-- Back Button -->
    <form action="view_product.php" method="get" class="mb-4">
        <button type="submit" class="bg-gray-500 text-white px-5 py-3 rounded-md shadow-md hover:bg-gray-600 transition duration-200 w-full">
            Back to Product List
        </button>
    </form>


    <!-- Edit Product Form -->
    <form action="../../app/controllers/ProductController.php?action=update&id=<?php echo $product['productID']; ?>" method="POST" enctype="multipart/form-data">

        <!-- Product Name -->
        <div class="mb-4">
            <label for="productName" class="block text-gray-700 text-lg font-medium mb-2">Product Name</label>
            <input type="text" id="productName" name="productName" value="<?php echo htmlspecialchars($product['productName']); ?>" required class="w-full border-2 border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
        </div>

        <!-- Product Description -->
        <div class="mb-4">
            <label for="productDescription" class="block text-gray-700 text-lg font-medium mb-2">Description</label>
            <textarea id="productDescription" name="productDescription" required class="w-full border-2 border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300"><?php echo htmlspecialchars($product['productDescription']); ?></textarea>
        </div>

        <!-- Product Price -->
        <div class="mb-4">
            <label for="productPrice" class="block text-gray-700 text-lg font-medium mb-2">Price (LKR)</label>
            <input type="number" step="0.01" id="productPrice" name="productPrice" value="<?php echo $product['productPrice']; ?>" required class="w-full border-2 border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
        </div>

        <!-- Stock Quantity -->
        <div class="mb-4">
            <label for="stockQuantity" class="block text-gray-700 text-lg font-medium mb-2">Stock Quantity</label>
            <input type="number" id="stockQuantity" name="stockQuantity" value="<?php echo $product['stockQuantity']; ?>" required class="w-full border-2 border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" name="updateProduct" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 transition duration-300">Update Product</button>
        </div>
    </form>
</div>
<br>
<br>

</body>
</html>
