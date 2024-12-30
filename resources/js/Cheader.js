
        // Highlight active navigation link
        const currentUrl = window.location.pathname;
        const navLinks = document.querySelectorAll('nav ul a, #mobileMenu ul a');
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentUrl) {
                link.classList.add('active');
            }
        });

        // Toggle notification dropdown
        const notificationIcon = document.getElementById('notificationIcon');
        const notificationBox = document.getElementById('notificationBox');
        notificationIcon.addEventListener('click', () => {
            notificationBox.classList.toggle('hidden');
        });

        const mobileNotificationIcon = document.getElementById('mobileNotificationIcon');
        const mobileNotificationBox = document.getElementById('mobileNotificationBox');
        mobileNotificationIcon.addEventListener('click', () => {
            mobileNotificationBox.classList.toggle('hidden');
        });

        // Toggle My Account dropdown
        const dropdownToggle = document.getElementById('dropdownToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Toggle mobile menu
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenu = document.getElementById('closeMenu');

        hamburgerMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
 

        //logout
       // Show the Log Out confirmation modal
        function showLogoutModal() {
            // Check if the modal is being triggered correctly
            const logoutModal = document.getElementById('logoutModal');
            if (logoutModal) {
                logoutModal.classList.remove('hidden');
            }
        }

        // Close the Log Out confirmation modal
        function closeLogoutModal() {
            const logoutModal = document.getElementById('logoutModal');
            if (logoutModal) {
                logoutModal.classList.add('hidden');
            }
        }

        // Perform the Log Out action
        function logout() {
            console.log("User has logged out.");
            closeLogoutModal();  // Close the modal after logging out
            window.location.href = '/login';  // Redirect to login page after logout
        }

        // Ensure the logout modal works in mobile and desktop views
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', (e) => {
                if (e.target.textContent === 'Log Out') {
                    showLogoutModal(); // Trigger modal on logout
                }
            });
        });


