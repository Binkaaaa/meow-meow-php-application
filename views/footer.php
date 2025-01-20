<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mewo Miaw Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=League+Spartan:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="public/src/output.css" rel="stylesheet">
</head>
<body>
<footer class="bg-black text-yellow-200 py-8 px-4">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
    <!-- Meow Miaw Care Section -->
    <div class="max-w-sm">
        <h2 class="font-bold text-xl uppercase mb-6">Meow Miaw Care</h2>
        <p class="text-base leading-relaxed text-justify font-serif">
            Providing premium pet care<br> essentials with love and<br> dedication to ensure your<br> furry friends stay happy<br> and healthy.
        </p>
    </div>

    <!-- Shop Section -->
    <div >
      <h2 class="font-bold text-lg uppercase mb-4">Shop</h2>
      <ul class="space-y-2">
        <li><a href="/petstore/index.php" class="hover:underline font-serif">Home</a></li>
        <li><a href="/petstore/views/items.php" class="hover:underline font-serif">Products</a></li>
        <li><a href="/petstore/views/contactus.php" class="hover:underline font-serif">Contact Us</a></li>
        <li><a href="/petstore/views/about.php" class="hover:underline font-serif">About Us</a></li>
      </ul>
    </div>
    <!-- My Account Section -->
    <div>
      <h2 class="font-bold text-lg uppercase mb-4">My Account</h2>
      <ul class="space-y-2">
        <li><a href="/petstore/views/login.php" class="hover:underline font-serif">Log In</a></li>
        <li><a href="#" class="hover:underline font-serif">Log Out</a></li>
        <li><a href="/petstore/views/cart.php" class="hover:underline font-serif">Cart</a></li>
        <li><a href="/petstore/views/checkout.php" class="hover:underline font-serif">Checkout</a></li>
      </ul>
    </div>
   <!-- Newsletter Section -->
   <div >
      <h2 class="font-bold text-xl uppercase mb-6">Sign Up for Updates</h2>
      <p class="text-base mb-6 font-serif">Get the latest updates about our products and promotions.</p>
      <form class="flex space-x-3">
        <input
          type="email"
          placeholder="Your email address"
          class="w-80 p-2 rounded-lg text-gray-800 text-base border-2 border-yellow-200 focus:outline-none"
        />
        <button
          type="submit"
          class="bg-gradient-to-r from-yellow-900 to-yellow-500 text-white px-6 py-3 rounded-lg font-semibold text-base shadow-lg hover:from-yellow-500 hover:to-yellow-900 transition-all duration-300"
        >
          Subscribe
        </button>
      </form>
    </div>
  </div>
  <div class="mt-6 text-center text-sm font-serif">
    <p>&copy; 2025 Meow Miaw Care. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>