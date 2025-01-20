<?php include('header_login.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <br>
    <br>
    
    <div class=" flex items-center justify-center"> 
        <div class="lg p-10 w-full max-w-2xl">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Checkout</h2>
            
            <!-- Address Section -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="address1" class="block text-lg font-medium text-gray-700 mb-1">Address 1</label>
                    <input type="text" id="address1" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="address2" class="block text-lg font-medium text-gray-700 mb-1">Address 2</label>
                    <input type="text" id="address2" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="postalCode" class="block text-lg font-medium text-gray-700 mb-1">Postal Code</label>
                    <input type="text" id="postalCode" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="city" class="block text-lg font-medium text-gray-700 mb-1">City</label>
                    <input type="text" id="city" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
            </div>

            <!-- Delivery Options -->
            <h3 class="text-lg font-medium text-gray-800 mt-6 mb-4">Delivery Options</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <input type="radio" id="ship" name="delivery" class="h-5 w-5 text-blue-600 focus:ring-blue-500" checked>
                    <label for="ship" class="ml-3 text-lg text-gray-700">Ship</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="pickup" name="delivery" class="h-5 w-5 text-blue-600 focus:ring-blue-500">
                    <label for="pickup" class="ml-3 text-lg text-gray-700">Store Pickup</label>
                </div>
            </div>

            <!-- Order Button -->
            <button id="orderButton" class="mt-6 w-full bg-black text-white text-sm py-2 rounded-md hover:bg-yellow-300 transition">Place Order</button>
        </div>
    </div>

    <script>
        document.getElementById('orderButton').addEventListener('click', function () {
            const address1 = document.getElementById('address1').value;
            const address2 = document.getElementById('address2').value;
            const postalCode = document.getElementById('postalCode').value;
            const city = document.getElementById('city').value;
            const delivery = document.querySelector('input[name="delivery"]:checked').id;

            alert(`Order placed!\n\nAddress 1: ${address1}\nAddress 2: ${address2}\nPostal Code: ${postalCode}\nCity: ${city}\nDelivery: ${delivery}`);
        });
    </script>
</body>
</html>
