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
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .sidebar-item:hover {
            background-color: #028ABE;
            transform: translateX(5px); /* Smooth movement on hover */
        }
        .sidebar-item.active {
            background-color: #0E519B !important; /* Active item background */
        }
        /* Retain hover effect even when active */
        .sidebar-item.active:hover {
            background-color: #028ABE; /* Retain hover background on active */
        }

        /* Fix bell and dropdown icons to the top right corner */
        .fixed-icons {
            position: fixed;
            top: 16px;
            right: 16px;
            z-index: 20; /* Ensure it's above other elements */
            display: flex;
            align-items: center;
            gap: 16px;
        }
    </style>
</head>
<body class="bg-gray-100 h-full">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar (Fixed) -->
        <aside class="sidebar bg-[#012A4A] text-white flex flex-col w-72 fixed top-0 left-0 h-full z-10">
            <div class="p-5">
                <!-- Logo -->
                <div class="mb-10 mt-6">
                    <img src="./images/logo_login_headerC.png" alt="Logo" class="w-36 mx-auto">
                </div>

                <!-- Navigation Menu -->
                <ul class="mt-8">
                    <li><a href="/DASHBORDandingpage_employee" id="dashboard" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-tachometer-alt mr-4"></i> Dashboard</a></li>
                    <li><a href="/EMPLOYEE" id="employee" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-user-tie mr-4"></i> Employee</a></li>
                    <li><a href="LIBRARIAN" id="librarian" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-calendar-check mr-4"></i> Reservations</a></li>
                    <li><a href="CATALOGER" id="cataloger" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-book-open mr-4"></i> Catalog</a></li>
                    <li><a href="MEMBERS" id="members" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-users mr-4"></i> Members</a></li>
                    <li><a href="CIRCULATION" id="circulation" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-exchange-alt mr-4"></i> Circulations</a></li>
                    <li><a href="CIRCULATION_REPORTS" id="circulation_reports" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-chart-line mr-4"></i> Circulation Reports</a></li>
                    <li><a href="MEMBER_REPORTS" id="member_reports" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-file-alt mr-4"></i> Member Reports</a></li>
                    <li><a href="OVERDUE_REPORTS" id="overdue_reports" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-clock mr-4"></i> Overdue Reports</a></li>
                    <li><a href="CATALOG" id="catalog" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-folder-open mr-4"></i> Catalog Reports</a></li>
                    <li><a href="CATALOG_REPORTS" id="catalog_reports" class="sidebar-item flex items-center py-3 px-6 hover:bg-[#028ABE] hover:text-white rounded-lg transition-all duration-200 ease-in-out">
                        <i class="fas fa-chart-pie mr-4"></i> Catalog Reports</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content (Scrollable) -->
        <main class="flex-1 bg-gray-100 ml-72 overflow-y-auto">
            <!-- Header -->
            <header class="flex items-center justify-between fixed bg-gray-200 px-12 py-4 shadow-sm w-full z-20">
                <h1 class="text-lg font-semibold text-gray-800">Novella Library</h1>
            </header>

            <!-- Direction of Tabs -->
            <section class="bg-gray-100 fixed px-11 py-6 w-full top-14">
                <p class="text-sm text-gray-600">
                    <i class="fas fa-home text-gray-800"></i>
                    Dashboard / My Settings
                </p>
            </section>

            <!-- Content Placeholder (Scrollable Frame) -->
            <div class="bg-gray-50 px-12 py-10 border-2 h-full overflow-y-auto mt-24">
                <p class="text-center text-gray-400">No content to display yet.</p>
            </div>
        </main>

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
                    <div class="flex items-center px-4 py-3">
                        <div class="w-8 h-8 bg-gray-300 rounded-full"></div> <!-- Placeholder for profile image -->
                        <p class="ml-3 font-semibold text-gray-800">Administrator</p>
                    </div>
                    <hr class="border-gray-200">
                    <a href="#" id="settingsLink" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-cog mr-2"></i>Settings
                    </a>
                    <a href="#" id="logoutLink" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
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

        // Highlight active sidebar item
        const sidebarLinks = document.querySelectorAll('.sidebar-item');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function() {
                sidebarLinks.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Set the current page as active by default
        const path = window.location.pathname;
        const activeLink = document.querySelector(`a[href="${path}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
    </script>
</body>
</html>
