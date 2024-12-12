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

<body>
        <nav class="flex items-center justify-between px-8 py-4 bg-[#011b33] sticky top-0 z-50">
                <!-- Logo -->
                <div class="flex-shrink-0">
                        <img src="./images/logo_login_headerC.png" alt="library logo" class="w-[135px]">
                </div>

                <!-- Centered Navigation Links -->
                <ul class="flex space-x-12 hidden md:flex">
                        <li><a href="/HOMElandingpage_customer" class="text-white hover:text-[#028ABE] flex items-center" ><i class="fa fa-home mr-2"></i> Home</a></li>
                        <li><a href="/RESERVATIONreservation-page" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-calendar-alt mr-2"></i> Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-[#028ABE] flex items-center font-bold hover:text-[#028ABE]"><i class="fa fa-info-circle mr-2"></i> About Us</a></li>
                </ul>

                <!-- Right-aligned Shelf and My Account --->
                <div class="flex items-center space-x-12 hidden md:flex">
                        <a href="/SHELFpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-book mr-2"></i> Shelf</a>

                        <!-- Notification Icon -->
                        <div class="relative">
                                <i id="notificationIcon" class="fa fa-bell text-white text-xl hover:text-[#028ABE] cursor-pointer"></i>
                                <!-- Notification Badge -->
                                <span id="notificationBadge" class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5">
                                5
                                </span>
                                <!-- Notification Box -->
                                <div id="notificationBox" class="absolute top-10 right-0 bg-white border border-gray-300 rounded-lg shadow-lg w-72 max-h-96 overflow-y-auto hidden z-50">
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">New message received</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Your book is ready for pickup</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Reminder: Return due tomorrow</div>
                                <div class="p-4 text-center text-gray-500">No more notifications</div>
                                </div>
                        </div>

                        <!-- My Account with Dropdown -->
                        <div class="relative">
                                <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-user mr-2"></i> My Account</button>
                                <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2 w-48">
                                        <li><a href="/PROFILEpage" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"><i class="fa fa-user-circle mr-2"></i> Profile</a></li>
                                        <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item flex items-center"> <i class="fa fa-sign-out-alt mr-2"></i> Log Out</a></li>
                                </ul>
                        </div>
                </div>

                <!-- Hamburger Menu Button and Icons (for mobile view) -->
                <div class="flex items-center md:hidden space-x-4">
                        <!-- Notification Icon -->
                        <div class="relative">
                                <i id="mobileNotificationIcon" class="fa fa-bell text-white text-xl hover:text-[#028ABE] cursor-pointer"></i>
                                <span id="mobileNotificationBadge" class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5">
                                5
                                </span>
                                <div id="mobileNotificationBox" class="absolute top-10 right-0 bg-white border border-gray-300 rounded-lg shadow-lg w-64 max-h-96 overflow-y-auto hidden z-50">
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">New message received</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Your book is ready for pickup</div>
                                <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Reminder: Return due tomorrow</div>
                                <div class="p-4 text-center text-gray-500">No more notifications</div>
                                </div>
                        </div>

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
                        <li><a href="/RESERVATIONreservation-page"  class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="/ABOUTUSpage" id="aboutus" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                        <li><a href="/SHELFpage" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                        <li><a href="/PROFILEpage" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Log Out</a></li>
                </ul>
        </div>


        <div class="bg-gray-50 py-5">
                <div class="text-center mb-10">
                        <h1 class="text-3xl font-bold text-gray-800">Meet our team</h1>
                        <p class="text-gray-500 mt-2">Inspiring change, one step at a time.</p>
                </div>

                <!-- Flex container to center the team member cards -->
                <div class="flex justify-center gap-7">
                        <!-- Team Member Card 1 -->
                        <div class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center w-80">
                        <div class="bg-gray-300 w-full h-full rounded-t-lg">
                                <img src="images/sample.jpg" alt="Team Member Photo" class="w-full h-full object-cover">
                        </div>
                        <div class="mt-4 text-center">
                                <h2 class="text-[#011B33] text-lg font-bold">Althea Amor J. Asis</h2>
                                <p class="text-sm text-gray-500">Personal Manager</p>
                        </div>
                </div>

                <!-- Team Member Card 2 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center w-80">
                        <div class="bg-gray-300 w-full h-full rounded-t-lg">
                                <img src="images/sample.jpg" alt="Team Member Photo" class="w-full h-full object-cover">
                        </div>
                        <div class="mt-4 text-center">
                                <h2 class="text-[#011B33] text-lg font-bold">Althea Amor J. Asis</h2>
                                <p class="text-sm text-gray-500">Personal Manager</p>
                        </div>
                </div>

                <!-- Team Member Card 3 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center w-80">
                        <div class="bg-gray-300 w-full h-full rounded-t-lg">
                                <img src="images/sample.jpg" alt="Team Member Photo" class="w-full h-full object-cover">
                        </div>
                        <div class="mt-4 text-center">
                                <h2 class="text-[#011B33] text-lg font-bold">Althea Amor J. Asis</h2>
                                <p class="text-sm text-gray-500">Personal Manager</p>
                        </div>
                </div>

                <!-- Team Member Card 4 -->
                <div class="bg-gray-100 rounded-lg shadow-md p-4 flex flex-col items-center w-80">
                        <div class="bg-gray-300 w-full h-full rounded-t-lg">
                                <img src="images/sample.jpg" alt="Team Member Photo" class="w-full h-full object-cover">
                        </div>
                        <div class="mt-4 text-center">
                                <h2 class="text-[#011B33] text-lg font-bold">Althea Amor J. Asis</h2>
                                <p class="text-sm text-gray-500">Personal Manager</p>
                        </div>
                        </div>
                </div>

                <div class="text-center mt-10">
                        <p class="text-lg text-[#011B33]">
                        Novella is your community's gateway to knowledge and inspiration. <br>
                        As a public library, we offer a vast collection of books, journals, and digital resources. <br>
                        Our dedicated staff is committed to providing exceptional service and fostering a love of learning.
                        </p>
                </div>
        </div>




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


                // Check if the current page is 'landingpage_customer'
                if (window.location.pathname === '/ABOUTUSpage') {
                        // Add the selected class to the Home link
                        document.getElementById('aboutus-link').classList.add('text-[#028ABE]');
                }
        </script>

</body>
</html>