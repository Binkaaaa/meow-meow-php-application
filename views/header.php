<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meow Miaw Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=League+Spartan:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="public/src/output.css" rel="stylesheet">
</head>

<body class="font-sans bg-white">
    <!-- Header Section -->
    <header class="bg-black text-yellow-200 font-bold">
        <div class="container mx-auto flex justify-between items-center py-2 px-6 text-sm">
            <div class="flex space-x-4">
                <p><span class="font-medium">✆</span> 0710606123</p>
                <p><span class="font-medium">☏</span> 0112500177</p>
            </div>
            <div class="flex space-x-2">
                <a href="/petstore/views/login.php" class="hover:underline font-bold">Login</a>
                <p class="font-bold">|</p>
                <a href="/petstore/views/register.php" class="hover:underline font-bold">Register</a>
            </div>
        </div>
    </header>

    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <!-- Center Section: Logo -->
            <div class="flex items-left flex-grow ml-20">
                <a href="/petstore/index.php"> <img src="/petstore/public/uploads/Meow.png" alt="M2C Logo" class="object-cover h-20 w-56"></a>
                <span class="ml-10 text-2xl font-bold text-gray-800"></span>
            </div>

            <!-- Right Section: Search Bar and Icons -->
            <div class="flex items-center space-x-10 ">
                <div class="relative w-96 mx-auto">
                    <input type="text" placeholder="I'm shopping for..."
                        class="w-full border border-gray-300 bg-gray-100 rounded-full px-4 py-2 focus:outline-none focus:ring-10 focus:ring-gray-200">
                    <button
                        class="absolute right-1 top-1/2 transform -translate-y-1/2 text-gray-500 px-4 py-2 rounded-full hover:bg-gray-300 font-extrabold">
                        ⌕
                    </button>
                </div> 
                  
            </div>
        </div>
        
        <!-- Navigation Links -->
            <div class="bg-black py-3 font-semibold">
        <div class="container mx-auto flex justify-center space-x-8">
        <a href="/petstore/index.php" class="text-yellow-200 font-extrabold hover:underline">HOME</a>
        <a href="/petstore/views/items.php" class="text-yellow-200 font-extrabold hover:underline">PRODUCTS</a>
        <a href="/petstore/views/about.php" class="text-yellow-200 font-extrabold hover:underline">ABOUT</a>
        <a href="/petstore/views/contactus.php" class="text-yellow-200 font-extrabold hover:underline">CONTACT US</a>
    </div>
</div>

</div>

</body>

</html>
