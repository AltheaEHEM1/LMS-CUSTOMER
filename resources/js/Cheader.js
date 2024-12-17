
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
 