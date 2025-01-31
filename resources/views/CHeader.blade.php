<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/tabicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite('resources/js/Cheader.js')
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

        /* Active navigation link styles */
        .active {
            font-weight: bold;
            color: #028ABE !important; /* Change text color */
        }

        /* Hide scrollbar for notification dropdown */
        #notificationBox, #mobileNotificationBox {
            scrollbar-width: none; /* For Firefox */
            -ms-overflow-style: none; /* For Internet Explorer and Edge */
        }

        #notificationBox::-webkit-scrollbar, #mobileNotificationBox::-webkit-scrollbar {
            display: none; /* For Chrome, Safari, and Opera */
        }

        #logoutModal {
            z-index: 9999; /* Ensure it's above other content */
        }

        
    </style>
</head>

<body>
        <nav class="flex items-center justify-between px-8 py-4 bg-[#011b33] sticky top-0 z-50">
                <!-- Logo -->
                <div class="flex-shrink-0">
                        <img src="{{ asset('images/logo_login_headerC.png') }}" alt="library logo" class="w-[135px]">
                </div>

                @auth
                        <!-- Centered Navigation Links -->
                        <ul class="space-x-12 md:flex hidden">
                                <li><a href="/HOMElandingpage_customer" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-home mr-2"></i> Home</a></li>
                                <li><a href="/RESERVATIONreservation-page.render" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-calendar-alt mr-2"></i> Reservation</a></li>
                                <li><a href="/ABOUTUSpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-info-circle mr-2"></i> About Us</a></li>
                        </ul>

                        <!-- Right-aligned Shelf and My Account -->
                        <div class="items-center space-x-12 hidden md:flex">
                                <ul><a href="/SHELFpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-book mr-2"></i> Shelf</a></ul>
        
                                <!-- Notification Icon -->
                                <div class="relative">
                                        <i id="notificationIcon" class="fa fa-bell text-white text-xl hover:text-[#028ABE] cursor-pointer"></i>
                                        <!-- Notification Badge -->
                                        <span id="notificationBadge" class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5 hidden">
                                        0
                                        </span>
                                        <!-- Notification Box -->
                                        <div id="notificationBox" class="absolute top-10 right-0 bg-white border border-gray-300 rounded-lg shadow-lg w-72 max-h-96 overflow-y-auto hidden z-50">
        
                                        </div>
                                </div>

                                <!-- My Account with Dropdown -->
                                <div class="relative">
                                        <button id="dropdownToggle" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-user mr-2"></i> My Account</button>
                                        <ul id="dropdownMenu" class="absolute hidden bg-[#011b33] text-white rounded-md shadow-lg mt-2 py-2 w-48">
                                                <li><a href="/PROFILEpage" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item items-center"><i class="fa fa-user-circle mr-2"></i> Profile</a></li>
                                                <li><a href="#" class="block px-4 py-2 text-white hover:text-[#028ABE] dropdown-item items-center" onclick="openModal('LogoutModal')"><i class="fa fa-sign-out-alt mr-2"></i> Log Out</a></li>
                                        </ul>
                                </div>
                        </div>

                        <!-- Hamburger Menu Button and Icons (for mobile view) -->
                        <div class="flex items-center md:hidden space-x-4">
                                <!-- Notification Icon -->
                                <div class="relative">
                                        <i id="mobileNotificationIcon" class="fa fa-bell text-white text-xl hover:text-[#028ABE] cursor-pointer"></i>
                                        <span id="mobileNotificationBadge" class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-500 text-white text-xs font-bold rounded-full px-2 py-0.5 hidden">
                                        5
                                        </span>
                                        <div id="mobileNotificationBox" class="absolute top-10 right-0 bg-white border border-gray-300 rounded-lg shadow-lg w-64 max-h-96 overflow-y-auto hidden z-50">
                                        <!-- <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">New message received</div>
                                        <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Your book is ready for pickup</div>
                                        <div class="p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100">Reminder: Return due tomorrow</div> -->
                                        <div class="p-4 text-center text-gray-500">No more notifications</div>
                                        </div>
                                </div>

                                <button id="hamburgerMenu" class="text-white text-3xl">
                                        <i class="fas fa-bars"></i>
                                </button>
                        </div>
                </nav>


                <!-- Mobile Menu (hidden by default) -->
                <div id="mobileMenu" class="md:hidden fixed inset-0 bg-[#011b33] bg-opacity-90 z-50 flex flex-col items-center justify-center space-y-6 py-8">
                        <!-- Close Button (X) -->
                        <button id="closeMenu" class="absolute top-4 right-4 text-white text-3xl">
                                <i class="fas fa-times"></i>
                        </button>

                        <!-- Navigation Links -->
                        <ul class="flex flex-col items-center space-y-6">
                                <li><a href="/HOMElandingpage_customer" id="home-link" class="text-white text-2xl hover:text-[#028ABE]">Home</a></li>
                                <li><a href="/RESERVATIONreservation-page" class="text-white text-2xl hover:text-[#028ABE]">Reservation</a></li>
                                <li><a href="/ABOUTUSpage" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                                <li><a href="/SHELFpage" class="text-white text-2xl hover:text-[#028ABE]">Shelf</a></li>
                                <li><a href="/PROFILEpage" class="text-white text-2xl hover:text-[#028ABE]">Profile</a></li>
                                <li><a href="#" class="text-white text-2xl hover:text-[#028ABE]" onclick="openModal('LogoutModal')">Log Out</a></li>
                        </ul>
                </div>

                <div id="LogoutModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center hidden z-50">
                        <div class="bg-white p-6 rounded-lg shadow-md w-[60%] max-w-sm">
                                <h1 class="text-2xl font-semibold text-center mb-6">Are you sure you want to log out of this account?</h1>

                                <!-- Hidden Logout Form -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>

                                <!-- Inline Cancel and Log Out Buttons -->
                                <div class="flex justify-center space-x-4">
                                <!-- Cancel Button with Icon -->
                                <button type="button" onclick="closeModal('LogoutModal')" class="flex items-center px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">
                                        <i class="fas fa-times mr-2"></i> Cancel
                                </button>

                                <!-- Log Out Button with Icon -->
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition-colors duration-300">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                                </a>
                        </div>
                </div>
                @endauth

                @guest
                        <!-- Centered Navigation Links -->
                        <ul class="space-x-12 md:flex hidden">
                                <li><a href="/HOMElandingpage_customer" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-home mr-2"></i> Home</a></li>
                                <li><a href="/ABOUTUSpage" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-info-circle mr-2"></i> About Us</a></li>
                                <li><a href="/login_customer" class="text-white hover:text-[#028ABE] flex items-center"><i class="fa fa-info-circle mr-2"></i> Log In</a></li>
                        </ul>

                        <!-- Hamburger Menu Button and Icons (for mobile view) -->
                        <div class="flex items-center md:hidden space-x-4">
                                <button id="hamburgerMenu" class="text-white text-3xl">
                                        <i class="fas fa-bars"></i>
                                </button>
                        </div>
                </nav>


                <!-- Mobile Menu (hidden by default) -->
                <div id="mobileMenu" class="md:hidden fixed inset-0 bg-[#011b33] bg-opacity-90 z-50 flex flex-col items-center justify-center space-y-6 py-8">
                        <!-- Close Button (X) -->
                        <button id="closeMenu" class="absolute top-4 right-4 text-white text-3xl">
                                <i class="fas fa-times"></i>
                        </button>

                        <!-- Navigation Links -->
                        <ul class="flex flex-col items-center space-y-6">
                                <li><a href="/HOMElandingpage_customer" id="home-link" class="text-white text-2xl hover:text-[#028ABE]">Home</a></li>
                                <li><a href="/ABOUTUSpage" class="text-white text-2xl hover:text-[#028ABE]">About Us</a></li>
                                <li><a href="/login_customer" class="text-white text-2xl hover:text-[#028ABE]">Log In</a></li>
                        </ul>
                </div>
                @endguest

            <script>

                // Open/Close mobile menu
                document.getElementById("hamburgerMenu").addEventListener("click", function() {
                document.getElementById("mobileMenu").classList.remove("hidden");
                });

                // Close mobile menu when 'X' is clicked
                document.getElementById("closeMenu").addEventListener("click", function() {
                document.getElementById("mobileMenu").classList.add("hidden");
                });
                
                // Function to open a modal by ID
                function openModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                        modal.classList.remove('hidden'); // Remove the hidden class
                        modal.classList.add('flex'); // Add the flex class to display the modal
                }
                }
        
                // Function to close a modal by ID
                function closeModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                        modal.classList.add('hidden'); // Add the hidden class to hide the modal
                        modal.classList.remove('flex'); // Remove the flex class
                }
                }

                document.addEventListener('DOMContentLoaded', function () {
                        const notificationBadge = document.getElementById('notificationBadge');
                        const mobileNotificationBadge = document.getElementById('mobileNotificationBadge');

                        function checkNotifications() {
                                fetch('/notif-checker', {
                                method: 'GET',
                                headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                },
                                })
                                .then(response => response.json())
                                .then(data => {
                                        if (data.success) {
                                                if (data.unread_count > 0) {
                                                notificationBadge.textContent = data.unread_count;
                                                notificationBadge.classList.remove('hidden'); 
                                                mobileNotificationBadge.textContent = data.unread_count;
                                                mobileNotificationBadge.classList.remove('hidden'); 
                                                } else {
                                                notificationBadge.classList.add('hidden'); 
                                                mobileNotificationBadge.classList.add('hidden'); 
                                                }
                                        }
                                })
                                .catch(error => {
                                console.error('Error checking notifications:', error.message);
                                });
                        }

                        checkNotifications()

                        setInterval(checkNotifications, 5000);
                });
            </script>
        </div>



