<?php
session_start();
?>
<?php include('views\header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meow Miaw Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="public/src/output.css" rel="stylesheet">

    <style>
        /* Parallax Background with Padding */
        .parallax-bg {
            background-image: url('/petstore/public/uploads/indexpic.jpeg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            height: 40vh; /* Reduced height */
            margin: 4rem 7rem; /* Add space above, below, and sides */
            border-radius: 12px; /* Rounded corners for aesthetic */
            overflow: hidden; /* Ensure clean edges */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        }

        /* Smooth appearance effect for "About Us" */
        .fade-in {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Parallax Section -->
    <div class="parallax-bg"></div>

    <!-- Hero Section -->

    <section id="about-us" class="text-center py-5 px-4 fade-in hero">
        <div>
            <h1 class="text-4xl font-bold text-yellow-300 mb-6 font-serif">Welcome to Meow Miaw Care</h1>
            <p class=" text-gray-600 max-w-3xl mx-auto text-lg  leading-relaxed font-serif">Your pet's well-being is our top priority. Explore our range of products and services for your furry friend!</p>
        </div>
    </section>

<br>
<hr>

<!-- Our Newest Toys Section (Updated) -->
<section class="product-section py-16">
    <h2 class="text-3xl font-extrabold font-serif text-center text-gray-800 mb-6 hover:underline hover:text-yellow-300">Our Newest Toys</h2>
    <div class="flex overflow-x-auto space-x-6 px-4 justify-center mx-auto">
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/newtoy1.webp" alt="Toy 1" class="w-full h-70 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Trixie Gustav</h3>
                <br>
                <p class="text-gray-600 "> Interactive toy for cats that stimulates their natural hunting instincts.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs. 3400.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/newtoy2.webp" alt="Toy 2" class="w-full h-70 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Trixie Flamingo</h3>
                <br>
                <p class="text-gray-600 "> Interactive toy for cats that stimulates their natural hunting instincts.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.4500.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/newtoy3.webp" alt="Toy 3" class="w-full h-70 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Trixie Unicorn</h3>
                <br>
                <p class="text-gray-600 "> Interactive toy for cats that stimulates their natural hunting instincts.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.2400.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/newtoy4.webp" alt="Toy 4" class="w-full h-70 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Trixie Bird</h3>
                <br>
                <p class="text-gray-60"> Interactive toy for cats that stimulates their natural hunting instincts.</p>
                <p class="text-black hover:text-red-600  font-extrabold text-2xl">Rs.4900.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/newtoy5.webp" alt="Toy 5" class="w-full h-70 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Trixie Cat</h3>
                <br>
                <p class="text-gray-600 "> Interactive toy for cats that stimulates their natural hunting instincts.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.900.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
    </div>
</section>

<!-- Our Best Selling Products Section (Updated) -->
<section class="product-section py-16 bg-gray-100">
    <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6 hover:underline hover:text-yellow-300 font-serif">Our Best Selling Products</h2>
    <div class="flex overflow-x-auto space-x-6 px-4 justify-center mx-auto">
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/bestselling1.webp" alt="Product 1" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">ZooRoyal Minka Chicken and Salmon Tray 100g</h3>
                <br>
                <p class="text-gray-600">High-quality pet food made with organic ingredients.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.2100.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/bestselling2.jpg" alt="Product 2" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Josi Dog Active</h3>
                <br>
                <p class="text-gray-600">Eco-friendly pet grooming tools for a healthy coat.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.4300.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/bestselling3.webp" alt="Product 3" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Josera Nature Cat</h3>
                <br>
                <p class="text-gray-600">Comfortable bedding to ensure a good night's sleep for your pet.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.3300.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
        <div class="product-card bg-white shadow-md rounded-lg overflow-hidden w-60">
            <img src="/petstore/public/uploads/bestselling4.webp" alt="Product 4" class="w-full h-60 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-extrabold text-gray-800">Josera Young Star</h3>
                <br>
                <p class="text-gray-600">Durable chew toys for pets that love to gnaw and chew.</p>
                <p class="text-black hover:text-red-600 font-extrabold text-2xl">Rs.2900.00</p>
                <br>
                <button class="mt-4 bg-yellow-300 text-black py-2 px-4 rounded-md hover:bg-black hover:text-yellow-300 transition font-extrabold">View Product</button>
            </div>
        </div>
    </div>


<br>
<br>
<hr>
    <!-- Contact Section -->
    <section class="contact py-16 text-center">
        <p class="text-lg mb-6 text-gray-700">Have questions? Reach out to us, and we will get back to you as soon as possible!</p>
        <a href="contact-us.php" class="bg-black text-yellow-300 py-2 px-6 font-extrabold font-serif rounded-md inline-block mt-4 hover:bg-yellow-300 hover:text-black transition">Contact Us</a>
    </section>
    </section>
    <!-- Footer Section -->
    <?php include('views\footer.php'); ?>

    <!-- JavaScript to handle scroll animation -->
    <script>
        document.addEventListener('scroll', () => {
            const aboutUsSection = document.getElementById('about-us');
            const scrollPosition = window.scrollY + window.innerHeight;
            const sectionTop = aboutUsSection.offsetTop;

            if (scrollPosition > sectionTop) {
                aboutUsSection.classList.add('visible');
            }
        });
    </script>
</body>

</html>