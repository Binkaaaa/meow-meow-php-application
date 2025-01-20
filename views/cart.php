<?php include('header_login.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<br>
<br>

<body class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6">MY CART</h1>

        <!-- Cart Item -->
        <div class="flex items-center border-b pb-4 mb-4">
        <img src="/petstore/public/uploads/newtoy1.webp" alt="Trixie Bird" class="w-20 h-20 object-cover mr-4">



            <div class="flex-1">
                <h2 class="text-lg font-semibold">Trixie Bird</h2>
                <p class="text-sm text-gray-500">Trixie</p>
                <p class="text-lg font-bold mt-2">Rs 4,600.00</p>
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">-</button>
                <input type="text" value="1" class="w-12 text-center border rounded" readonly>
                <button class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
            </div>
            <button class="ml-4 px-4 py-2 text-red-500 border border-red-500 rounded hover:bg-red-100">Remove</button>
        </div>

        <!-- Subtotal -->
        <div class="flex justify-between items-center">
            <p class="text-lg font-semibold">Subtotal</p>
            <p class="text-lg font-bold">Rs 4,600.00</p>
        </div>

        <!-- Additional Comments -->
        <div class="mt-4">
            <label for="comments" class="block text-sm font-medium text-gray-700">Additional Comments</label>
            <textarea id="comments" class="w-full mt-2 p-2 border rounded" rows="3" placeholder="Add your comments here..."></textarea>
        </div>

        <!-- Proceed to Checkout -->
        <div class="mt-6 text-right">
            <button class="px-6 py-2 bg-black text-white rounded hover:bg-yellow-300">PROCEED TO CHECKOUT</button>
        </div>
    </div>
</body>
</html>
