<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/tabicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Novella</title>
</head>
<body class="bg-[url('./images/customerbg.png')] bg-cover bg-center bg-no-repeat bg-fixed relative">
        <nav class="flex items-center justify-between px-8 py-4 bg-[#011b33]">
                <!-- Logo -->
                <div class="flex-shrink-0">
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-[135px]">
                </div>

                <!-- Centered Navigation Links -->
                <ul class="flex space-x-12 hidden md:flex">
                        <li><a href="#" class="text-white hover:text-[#028ABE]">Home</a></li>
                        <li><a href="#" class="text-white hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="#" class="text-white hover:text-[#028ABE]">About Us</a></li>
                </ul>

                <!-- Right-aligned Shelf and My Account -->
                <div class="flex items-center space-x-12 hidden md:flex">
                        <a href="#" class="text-white hover:text-[#028ABE]">Shelf</a>
                        <!-- My Account with Dropdown -->
                        <div class="relative">
                                <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center">
                                        <i class="fa fa-user mr-2"></i>My Account
                                </button>
                                <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2">
                                        <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item">Profile</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item">Log Out</a></li>
                                </ul>
                        </div>
                </div>

                <!-- Hamburger Menu Button (for mobile view) -->
                <div class="md:hidden">
                        <button id="hamburgerMenu" class="text-white text-3xl">
                        <i class="fas fa-bars"></i>
                        </button>
                </div>
        </nav>

        <!-- Mobile Menu (hidden by default) -->
        <div id="mobileMenu" class="md:hidden fixed inset-0 bg-[#011b33] bg-opacity-90 z-50 flex flex-col items-center space-y-6 py-8 hidden">
                <!-- Close Button (X) -->
                <button id="closeMenu" class="absolute top-4 right-4 text-white text-3xl">
                        <i class="fas fa-times"></i>
                </button>

                <ul class="flex flex-col items-center space-y-6 translate-x-[80px] translate-y-[120px]">
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Home</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Log Out</a></li>
                </ul>
        </div>

        <section class="relative">
                <h1 class="text-6xl font-bold absolute left-20 translate-y-[190px] text-[#011B33] drop-shadow-[4px_4px_10px_rgba(0,0,0,0.5)]">
                        Discover your next
                </h1>
                <h1 class="text-6xl font-bold absolute left-20 translate-y-[260px] text-[#011B33] drop-shadow-[4px_4px_10px_rgba(0,0,0,0.5)]">
                        great read
                </h1>
        </section>




        <script>
                // DROPDOWN START
                // Select the toggle button, dropdown menu, and dropdown items
                const dropdownToggle = document.getElementById('dropdownToggle');
                const dropdownMenu = document.getElementById('dropdownMenu');
                const dropdownItems = document.querySelectorAll('.dropdown-item');

                // Add click event listener to the toggle button
                dropdownToggle.addEventListener('click', function () {
                // Toggle the visibility of the dropdown menu
                dropdownMenu.classList.toggle('hidden');
                });

                // Add click event listener to each dropdown item
                dropdownItems.forEach((item) => {
                item.addEventListener('click', function () {
                        // Close the dropdown menu when a dropdown item is clicked
                        dropdownMenu.classList.add('hidden');
                });
                });
                // DROPDOWN END

                // Get the hamburger button, mobile menu, and close button
                const hamburgerMenu = document.getElementById('hamburgerMenu');
                const mobileMenu = document.getElementById('mobileMenu');
                const closeMenuButton = document.getElementById('closeMenu');

                // Toggle mobile menu visibility when hamburger button is clicked
                hamburgerMenu.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                });

                // Close the mobile menu when the close button (X) is clicked
                closeMenuButton.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                });
        </script>

</body>
</html>