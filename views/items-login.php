<?php
session_start();
include('header_login.php');

// Include the ProductController and fetch the products
require_once(__DIR__ . '/../app/controllers/ProductController.php');
$productController = new ProductController();
$products = $productController->showProducts(); // Fetch all products
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meow Miaw Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="public/src/output.css" rel="stylesheet">
</head>

<body class="bg-gray-50">

    <!-- Product Display Section -->
    <div class="container mx-auto px-4 py-8" style="max-width: calc(100% - 10cm);">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            if (!empty($products)) {
                foreach ($products as $product): ?>
                    <div class="product-container bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 max-w-sm mx-auto">
                        <img src="/petstore/public/uploads/<?= htmlspecialchars($product['productImage']); ?>" alt="<?= htmlspecialchars($product['productName']); ?>" class="product-image w-full h-48 object-cover rounded-lg mb-4">
                        <h2 class="product-name text-lg font-semibold text-gray-800 mb-2"><?= htmlspecialchars($product['productName']); ?></h2>
                        <p class="product-description text-gray-600 text-sm mb-4"><?= htmlspecialchars($product['productDescription']); ?></p>
                        <p class="product-price text-lg font-semibold text-gray-900 mb-2">$<?= htmlspecialchars($product['productPrice']); ?></p>
                        <p class="product-stock text-sm text-gray-500"><?= htmlspecialchars($product['stockQuantity']); ?> items available</p>

                        <!-- View More Details Button -->
                        <a href="product-details.php" class="view-more-button mt-4 inline-block bg-black text-yellow-300 py-2 px-4 rounded-lg hover:bg-yellow-300 hover:text-black transition-colors duration-300 font-extrabold font-serif">View More Details</a>
                    </div>
                <?php endforeach;
            } else {
                echo "<p class='text-center text-lg text-gray-500 col-span-3'>No products available.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include('footer.php'); ?>

</body>
</html>
