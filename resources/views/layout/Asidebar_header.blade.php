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
        body {
            font-family: 'Poppins', sans-serif;
        }
        .sidebar-item {
            transition: background-color 0.1s ease, transform 0.1s ease;
        }
        .sidebar-item:hover {
            background-color: #028ABE;
            transform: translateX(5px);
        }
        .sidebar-item.active {
            background-color: #0E519B !important;
        }
        .sidebar-item.active:hover {
            background-color: #028ABE;
        }
        .fixed-icons {
            position: fixed;
            top: 16px;
            right: 16px;
            z-index: 20;
            display: flex;
            align-items: center;
            gap: 16px;
        }
    </style>
</head>
<body class="bg-gray-100 h-full">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="sidebar bg-[#012A4A] text-white flex flex-col w-72 fixed top-0 left-0 h-full z-10">
            <div class="p-5">
                <!-- Logo -->
                <div class="mb-10 mt-6">
                    <img src="./images/logo_login_headerC.png" alt="Logo" class="w-36 mx-auto">
                </div>

                <!-- Navigation Menu -->
                <ul class="mt-20">
                    <li><a href="/DASHBORDandingpage_employee" id="dashboard" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-tachometer-alt mr-4"></i> Dashboard</a></li>
                    <li><a href="/EMPLOYEE" id="employee" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-user-tie mr-4"></i> Employee</a></li>
                    <li><a href="/RESERVATION" id="Reservation" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-calendar-check mr-4"></i> Reservations</a></li>
                    <li><a href="/CATALOG" id="catalog" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-book-open mr-4"></i> Catalog</a></li>
                    <li><a href="/MEMBERS" id="members" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-users mr-4"></i> Members</a></li>
                    <li><a href="/CIRCULATION" id="circulation" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-exchange-alt mr-4"></i> Circulations</a></li>
                    <li><a href="/CIRCULATION_REPORTS" id="circulation_reports" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-chart-line mr-4"></i> Circulation Reports</a></li>
                    <li><a href="/MEMBER_REPORTS" id="member_reports" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-file-alt mr-4"></i> Member Reports</a></li>
                    <li><a href="/OVERDUE_REPORTS" id="overdue_reports" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-clock mr-4"></i> Overdue Reports</a></li>
                    <li><a href="/CATALOG_REPORTS" id="catalog_reports" class="sidebar-item flex items-center py-3 px-6 rounded-lg">
                        <i class="fas fa-chart-pie mr-4"></i> Catalog Reports</a></li>
                </ul>
            </div>
        </aside>
    </div>

    <div class="flex-1 ml-72 overflow-y-auto relative bg-blue-100">
        <!-- Header -->
        <header class="flex items-center px-10 py-4 bg-white shadow-md z-20 fixed top-0 w-full border-b border-gray-200">
            <!-- User Icon -->
            <div class="w-8 h-8 bg-blue-500 text-white flex items-center justify-center rounded-full">
                <i class="fas fa-user"></i> <!-- User icon, blue color -->
            </div>

            <!-- User Name & Role -->
            <div class="ml-3">
                <p class="font-semibold text-gray-800">[NAME]</p>
                <p class="text-sm text-gray-500">Administrator</p>
            </div>

            <!-- Fixed Bell and Dropdown Icons -->
            <div class="fixed-icons">
                <i class="fas fa-bell text-gray-600"></i>
                <div class="relative">
                    <button id="dropdownButton" class="flex items-center space-x-2 focus:outline-none">
                        <i class="fas fa-cog text-gray-600"></i>
                        <i class="fas fa-chevron-down text-gray-600"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-lg shadow-lg z-50">
                        <a href="#" id="settingsLink" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-cog mr-2"></i>Settings
                        </a>
                        <a href="#" id="logoutLink" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <script>
        // Highlight the active sidebar item based on URL
        document.addEventListener('DOMContentLoaded', () => {
            const currentUrl = window.location.pathname;
            const sidebarLinks = document.querySelectorAll('.sidebar-item');

            sidebarLinks.forEach(link => {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('active');
                }
            });
        });

        // JavaScript to toggle dropdown visibility
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const settingsLink = document.getElementById('settingsLink');
        const logoutLink = document.getElementById('logoutLink');

        // Toggle dropdown visibility
        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Redirect to appropriate page when clicking links
        settingsLink.addEventListener('click', () => {
            window.location.href = '/settings';
        });

        logoutLink.addEventListener('click', () => {
            window.location.href = '/logout';
        });
    </script>

