<?php include('header_login.php'); ?>

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
<body class="bg-black text-gray-100">
    <!-- Map Section -->
    <section class="w-full mt-12">
        <div class="flex justify-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7528253.247629697!2d-52.28739397678626!3d-22.879970973215116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bdf20cda84797%3A0xfee99c374352d841!2sAmerican%20Pet%20-%20Bangu!5e0!3m2!1sen!2slk!4v1736946146147!5m2!1sen!2slk" 
                width="1000" height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-12">
        <h2 class="text-center text-2xl font-bold text-yellow-500 pb-8">Get In Touch With Us Now!</h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <!-- Phone Number -->
            <div class="bg-black p-6 rounded-lg shadow-lg font-serif">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 class="font-semibold text-lg text-yellow-500">Phone Number</h3>
                <p class="text-sm text-yellow-500">+94 701 738 840</p>
            </div>
            <!-- Email -->
            <div class="bg-black p-6 rounded-lg shadow-lg font-serif">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="font-semibold text-lg text-yellow-500 font-serif">Email</h3>
                <p class="text-sm text-yellow-500">nevinkawickramasinghe@gmail.com</p>
                <p class="text-sm text-yellow-500">support@miawcare.lk</p>
            </div>
            <!-- Location -->
            <div class="bg-black p-6 rounded-lg shadow-lg font-serif">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="font-semibold text-lg text-yellow-500">Location</h3>
                <p class="text-sm text-yellow-500">R. Francisco Real, 1095 - Bangu, Rio de Janeiro - RJ, 21810-041, Brazil</p>
            </div>
            <!-- Working Hours -->
            <div class="bg-black p-6 rounded-lg shadow-lg font-serif">
                <div class="text-yellow-500 text-4xl mb-4">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="font-semibold text-lg text-yellow-500">Working Hours</h3>
                <p class="text-sm text-yellow-500">Monday to Saturday: 9:30 AM - 7:30 PM</p>
                <p class="text-sm text-yellow-500">Sunday: 9:30 AM - 7:00 PM</p>
            </div>
        </div>
    </section>
</body>
</html>
<?php include('footer.php'); ?>