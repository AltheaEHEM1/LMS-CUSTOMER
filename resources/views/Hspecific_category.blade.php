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

    <style>
        html, body {
            overflow-x: hidden;  /* Prevent horizontal scrolling */
            width: 100%;          /* Ensure the body takes full width */
            height: 100%;         /* Make sure the body takes full height */
        }

        section {
            overflow-x: hidden;  /* Prevent overflow for section if needed */
        }
    </style>
</head>

<body class="bg-[#E4ECFF]">
        <nav class="flex items-center justify-between px-8 py-4 bg-[#011b33] sticky top-0 z-50">
                <!-- Logo -->
                <div class="flex-shrink-0">
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-[135px]">
                </div>

                <!-- Centered Navigation Links -->
                <ul class="flex space-x-12 hidden md:flex">
                        <li><a href="/HOMElandingpage_customer" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-home mr-2"></i> Home</a></li>
                        <li><a href="/RESERVATIONreservation-page" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-calendar-alt mr-2"></i> Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-info-circle mr-2"></i> About Us</a></li>
                </ul>

                <!-- Right-aligned Shelf and My Account --->
                <div class="flex items-center space-x-12 hidden md:flex">
                        <a href="/SHELFpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-book mr-2"></i> Shelf</a>
                        <!-- My Account with Dropdown -->
                        <div class="relative">
                                <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-user mr-2"></i> My Account</button>
                                <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2 w-48">
                                        <li><a href="/PROFILEpage" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"><i class="fa fa-user-circle mr-2"></i> Profile</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"> <i class="fa fa-sign-out-alt mr-2"></i> Log Out</a></li>
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
        <div id="mobileMenu" class="md:hidden fixed inset-0 bg-[#011b33] bg-opacity-90 z-50 flex flex-col items-center justify-center space-y-6 py-8 hidden">
                <!-- Close Button (X) -->
                <button id="closeMenu" class="absolute top-4 right-4 text-white text-3xl">
                        <i class="fas fa-times"></i>
                </button>

                <!-- Navigation Links -->
                <ul class="flex flex-col items-center space-y-6">
                        <li><a href="/HOMElandingpage_customer" class="text-white text-2xl hover:text-[#028ABE]">Home</a></li>
                        <li><a href="/RESERVATIONreservation-page" class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                        <li><a href="/SHELFpage" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                        <li><a href="/PROFILEpage" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Log Out</a></li>
                </ul>
        </div>


         <!-- BOOKS -->
        <div class="bg-[#E4ECFF] min-h-screen p-8">
                <!-- Page Title -->
                <h1 class="text-center text-2xl p-4 font-bold mb-4">[Category Name]</h1>

                <!-- Back Button -->
                <div class="flex justify-start mb-5 ml-4 sm:ml-8 md:ml-16 lg:ml-60">
                        <a href="/HOMElandingpage_customer" class="text-[#000] hover:text-[#028ABE] flex items-center">
                                <i class="fas fa-arrow-left"></i>
                                <span class="ml-2">Back</span>
                        </a>
                </div>

                 <!-- BOOK LIST -->
                <div class="flex justify-center">
                        <div class="space-y-6 w-full max-w-4xl px-4">
                                <!-- BOOK LIST -->
                                <div class="flex justify-center px-4">
                                        <div class="space-y-6 w-full max-w-4xl">
                                                <!-- Single Book -->
                                                <div class="flex sm:flex-row items-center bg-white shadow-md rounded-lg p-4 mx-auto hover:scale-105 transition-transform duration-300">
                                                        <!-- Link for Book Image and Details -->
                                                        <a href="/Hbookdetailswithreserve" class="flex flex-col sm:flex-row items-center flex-grow text-left">
                                                        <!-- Book Image -->
                                                        <img src="https://via.placeholder.com/100" alt="Noli Me Tangere" 
                                                                class="w-24 h-32 rounded-lg sm:w-32 sm:h-40 object-cover">

                                                        <!-- Book Details -->
                                                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-grow text-center sm:text-left">
                                                                <p class="text-sm text-gray-500">Book</p>
                                                                <h2 class="text-lg font-semibold text-gray-800">Noli Me Tangere</h2>
                                                                <p class="text-gray-600">Rizal, Jose P.</p>
                                                                <p class="text-gray-500">Mandaluyong, National Bookstore</p>
                                                                <p class="text-gray-500">2021</p>
                                                        </div>
                                                        </a>

                                                        <!-- Bookmark Button -->
                                                        <div class="ml-4">
                                                                <button class="flex items-center bg-black text-white px-4 py-2 rounded-md hover:bg-[#028ABE]">
                                                                        <i class="fas fa-bookmark mr-2"></i> Bookmark
                                                                </button>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>




         <!-- Footer -->
        <footer class="flex flex-col md:flex-row justify-between items-start md:items-center px-8 md:px-16 lg:px-60 py-8 bg-[#011b33] text-white text-sm space-y-6 md:space-y-0">
                <!-- Left Section: Logo and Contact Information -->
                <div class="flex flex-col md:flex-row md:items-center space-y-6 md:space-y-0 md:space-x-9">
                        <!-- Logo -->
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-32 md:w-[135px]">
                        <!-- Contact Info -->
                        <div class="text-center md:text-left">
                        <p>Don Fabian St. Commonwealth</p>
                        <p>altheacamorasis@gmail.com</p>
                        <p>+639123456789</p>
                        </div>
                </div>

                <!-- Right Section: Rights Reserved -->
                <div class="text-center md:text-right">
                        <p>All rights reserved.</p>
                </div>
        </footer>


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