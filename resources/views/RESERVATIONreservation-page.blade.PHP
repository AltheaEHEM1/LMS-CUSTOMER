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
                        <li><a href="/RESERVATIONreservation-page" class="text-[#028ABE] flex items-center font-bold hover:text-[#028ABE]"><i class="fa fa-calendar-alt mr-2"></i> Reservation</a></li>
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
                        <li><a href="/RESERVATIONreservation-page" id="reservation-link" class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                        <li><a href="/ABOUTUSpage" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                        <li><a href="/SHELFpage" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                        <li><a href="/PROFILEpage" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                        <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]">Log Out</a></li>
                </ul>
        </div>

        <div class="container mx-auto mt-6">
            <div class="text-center">
                <h2 class="text-[#011B33] text-2xl font-bold mb-4 text-left">My Reservation</h2>
                <div class="flex justify-center relative mb-4">
                    <div class="relative w-1/3">
                        <i class="fa fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input
                            type="text"
                            placeholder="Search"
                            class="w-full pl-10 px-4 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                </div>

                <table class="table-auto w-full border-2 border-white">
                    <thead class="bg-[#011B33] border border-gray-300 text-white">
                        <tr>
                            <th class="rounded-tl-xl px-4 py-2">Reservation ID</th>
                            <th class="border border-gray-300 px-4 py-2">Book Title</th>
                            <th class="border border-gray-300 px-4 py-2">Author</th>
                            <th class="border border-gray-300 px-4 py-2">Reservation Date</th>
                            <th class="border border-gray-300 px-4 py-2">Pick-up Date</th>
                            <th class="border border-gray-300 px-4 py-2">Due Date</th>
                            <th class="rounded-tr-xl px-4 py-2 ">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center bg-gray-100">
                            <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">The 48 Laws of Power</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">Robert Greene</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">
                                <span class="bg-orange-200 font-semibold text-orange-800 px-2 py-1 rounded-md">Pending</span>
                            </td>
                        </tr>
                        <tr class="text-center bg-gray-100">
                            <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">Noli Me Tangere</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">Jose P. Rizal</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">
                                <span class="bg-blue-200 font-semibold text-blue-800 px-2 py-1 rounded-md">Confirmed</span>
                            </td>
                        </tr>
                        <tr class="text-center bg-gray-100">
                            <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">ABNKKBSNPLAko?!</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">Bob Ong</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">
                                <span class="bg-green-200 font-semibold text-green-800 px-2 py-1 rounded-md">Approved</span>
                            </td>
                        </tr>
                        <tr class="text-center bg-gray-100">
                            <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">The Woman Who Had Two Navels and Tales of the Tropical Gothic</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">Nick Joaquin</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                            <td class="border bg-[#F4F7FF] px-4 py-2">
                                <span class="bg-red-200 font-semibold text-red-800 px-2 py-1 rounded-md">Denied</span>
                            </td>
                        </tr>
                        <!-- Add more rows as necessary -->
                    </tbody>
                </table>


                <div class="flex justify-center mt-4 space-x-1">
                    <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">1</button>
                    <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">2</button>
                    <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">3</button>
                    <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">4</button>
                    <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">5</button>
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


                // Check if the current page is 'landingpage_customer'
                if (window.location.pathname === '/RESERVATIONreservation-page') {
                        // Add the selected class to the Home link
                        document.getElementById('reservation-link').classList.add('text-[#028ABE]');
                }
        </script>

</body>
</html>