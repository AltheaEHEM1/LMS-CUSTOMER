
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