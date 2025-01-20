<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meow Miaw Care</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=League+Spartan:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="public/src/output.css" rel="stylesheet">
</head>
<body class="font-sans bg-white">

<body class="bg-gray-50">
<style>
        /* Parallax Background with Padding */
        .parallax-bg {
            background-image: url('/petstore/public/uploads/about_us.webp');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            height: 40vh; /* Reduce height */
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

    <!-- About Us Section -->
    <section id="about-us" class="text-center py-5 px-4 fade-in">
    <h1 class="font-bold text-4xl text-black mb-6 font-serif">ABOUT US</h1>
        <p class="max-w-3xl mx-auto text-lg text-gray-600 leading-relaxed font-serif">
            Our mission is to bring comfort and joy to both pets and their owners with items designed to fit every need. We're proud to serve a community that values quality and care as much as we do.
        </p>
  
    </section>
    <section id="about-us" class="text-center py-16 px-6 bg-white">
    <p class="text-xl text-gray-600 mb-6 max-w-3xl mx-auto font-serif">
        Founded in America in 2023, <strong class="font-semibold text-yellow-500">Meow Miaw Care</strong> is dedicated to providing high-quality pet products that bring joy and comfort to your pets.
    </p>

    <!-- Divider -->
    <div class="border-t-2 border-gray-200 my-12 mx-auto w-20"></div>

    <!-- Contact Section -->
    <h2 class="text-3xl tracking-widest text-black mb-4 text font-serif font-bold">MAY WE HELP YOU?</h2>
    <p class="text-xl font-serif mb-8 max-w-2xl mx-auto leading-relaxed text-gray-600">
        Find everything you need to know about Meow Miaw Care with a Client Advisor.
    </p>
    <p>
        <a href="contactus.php" class="text-yellow-500 font-semibold hover:text-black transition duration-300 underline font-serif">
            Contact Meow Miaw Client Services
        </a>
    </p>
</section>


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
   
</section>


</body>
</html>
<?php include('footer.php'); ?>