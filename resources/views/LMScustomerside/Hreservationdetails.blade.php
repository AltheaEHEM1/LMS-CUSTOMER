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


<<<<<<< HEAD
          <!-- Content Section -->
  <main class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">
    <div class="flex gap-6">
      <!-- Book Details -->
      <div>
        <img src="https://via.placeholder.com/150" alt="Noli Me Tangere" class="rounded shadow">
        <h2 class="text-xl font-bold mt-4">Noli Me Tangere</h2>
        <p class="text-gray-600">Rizal, Jose P.</p>
      </div>

      <!-- Book Information -->
      <div class="flex-grow">
        <h3 class="text-lg font-bold">Information</h3>
        <div class="grid grid-cols-2 gap-4 mt-4">
          <p><span class="font-bold">ISBN:</span> 9710807528</p>
          <p><span class="font-bold">Publisher:</span> Mandaluyong City: National Book Store</p>
          <p><span class="font-bold">Item Type:</span> Book</p>
          <p><span class="font-bold">Edition:</span> Fifth Edition</p>
          <p><span class="font-bold">Description:</span> xxii, 381 pages, 1 unnumbered leaf of plate</p>
          <p><span class="font-bold">Loan Period:</span> 3 days</p>
        </div>

        <!-- Borrower's Information -->
        <div class="border p-4 rounded-lg mt-6">
          <h4 class="font-bold">Borrower's Information</h4>
          <p><span class="font-bold">Member ID:</span> 12345678910</p>
          <p><span class="font-bold">Name:</span> Althea Amor J. Asis</p>
          <p><span class="font-bold">Phone no.:</span> +639123456789</p>
          <p><span class="font-bold">Email Address:</span> altheaamorjasis@gmail.com</p>
        </div>

        <!-- Borrowing Details -->
        <div class="mt-6">
          <h4 class="font-bold">Borrowing Details</h4>
          <div class="grid grid-cols-2 gap-4 mt-2">
            <p><span class="font-bold">Book Stock:</span> 4</p>
            <p><span class="font-bold">Status:</span> In Library</p>
          </div>
          <div class="flex items-center mt-4">
            <label for="date" class="font-bold mr-2">Date Borrowed:</label>
            <input type="date" id="date" class="border rounded p-2">
          </div>
          <p class="mt-4"><span class="font-bold">Due Date:</span> after 3 days</p>
        </div>

        <!-- Reserve Button -->
        <button class="bg-blue-900 text-white px-4 py-2 rounded mt-6 hover:bg-blue-700">
          Reserve
        </button>
      </div>
    </div>
  </main>
=======
        <main class="min-h-screen p-8 mb-0">
                 <!-- Back Button -->
                <div class="flex justify-start mb-4 ml-4 sm:ml-8 md:ml-16 lg:ml-60 mt-16">
                        <a href="/Hbookdetailswithreserve" class="text-[#000] hover:text-[#028ABE] flex items-center">
                        <i class="fas fa-arrow-left"></i>
                        <span class="ml-2">Back</span>
                        </a>
                </div>

                <div class="flex flex-col lg:flex-row ml-60 mt-10 space-x-8">
                        <!-- Book Details -->
                        <div class="flex-shrink-0 w-40 mx-auto items-center text-center lg:w-48 lg:mx-0">
                                <img src="https://via.placeholder.com/150" alt="Noli Me Tangere" class="w-full h-72 rounded-lg shadow-md">
                                <h2 class="text-xl font-bold mt-4">Noli Me Tangere</h2>
                                <p class="text-gray-600">Rizal, Jose P.</p>
                        </div>

                        <!-- Book Details Section -->
                        <div class="mt-6 lg:mt-0">
                                <h1 class="font-bold text-[#011b33]">Information</h1>
                                <div class="mt-6 space-y-2">
                                        <div>
                                                <p class="font-semibold inline mr-2">ISBN:</p>
                                                <p class="inline">9710807528</p>
                                        </div>
                                        <div>
                                                <p class="font-semibold inline mr-2">Publisher:</p>
                                                <p class="inline">Mandaluyong City: National Book Store</p>
                                        </div>
                                        <div>
                                                <p class="font-semibold inline mr-2">Item Type:</p>
                                                <p class="inline">Book</p>
                                        </div>
                                        <div>
                                                <p class="font-semibold inline mr-2">Edition:</p>
                                                <p class="inline">Fifth Edition</p>
                                        </div>
                                        <div>
                                                <p class="font-semibold inline mr-2">Description:</p>
                                                <p class="inline"> xxii, 381 pages, 1 unnumbered leaf of plate</p>
                                        </div>
                                        <div>
                                                <p class="font-semibold inline mr-2">Loan Period:</p>
                                                <p class="inline"> 3 days</p>
                                        </div>
                                </div>
                        </div>

                        <!-- Borrower Information -->
                        <div class="mt-6 lg:mt-0">
                                <h3 class="font-semibold text-[#011b33]">Borrower's Information</h3>
                                <div class="space-y-2">
                                <div>
                                        <p class="font-semibold inline mr-2">Member ID:</p>
                                        <p class="inline">12345678910</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Name:</p>
                                        <p class="inline">Althea Amor J. Asis</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Phone no.:</p>
                                        <p class="inline"> +639123456789</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Email Address:</p>
                                        <p class="inline">altheaamorjasis@gmail.com</p>
                                </div>

                                <!-- Borrowing Details -->
                                <div class="mt-6 space-y-2">
                                        <h3 class="font-semibold text-[#011b33]">Borrowing Details</h3>
                                        <p class="text-sm text-gray-600"><strong>Book Stock:</strong> 4</p>
                                        <p class="text-sm text-gray-600"><strong>Status:</strong> In Library</p>
                                        <div>
                                                <label for="borrow-date" class="block text-sm text-gray-600">Requested Borrow Date</label>
                                                <input type="date" id="borrow-date" class="w-full mt-1 p-2 border rounded-md text-gray-600">
                                        </div>
                                </div>

                                </div>
                                <div class="flex justify-end space-x-4 mt-8">
                                        <button class="px-4 py-2 bg-[#028ABE] text-white rounded-md hover:bg-[#046f9c]">Reserve</button>
                                </div>
                        </div>
                </div>
        </main>
>>>>>>> fb9046d (newbase)



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