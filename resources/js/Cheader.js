
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
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }
        }

        // Function to close a modal by ID
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        }
 


