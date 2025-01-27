
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
            fetchNotifications()
            markNotificationsAsRead()
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

        
        function fetchNotifications() {
            fetch('/notifications', {
            method: 'GET',
            headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            })
            .then(response => response.json())
            .then(data => {
            if (data.success) {
                const notifications = data.notifications;
                const notificationBoxContent = document.createElement('div');
                const mobileNotificationBoxContent = document.createElement('div');
                
                if (notifications.length > 0) {
                    notifications.forEach(notification => {
                        const notificationItem = document.createElement('div');
                        notificationItem.className = 'p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100';
                        notificationItem.textContent = notification.message;
                
                        const mobileNotificationItem = document.createElement('div');
                        mobileNotificationItem.className = 'p-4 border-b border-gray-200 cursor-pointer hover:bg-gray-100';
                        mobileNotificationItem.textContent = notification.message;
                
                        notificationBoxContent.appendChild(notificationItem);
                        mobileNotificationBoxContent.appendChild(mobileNotificationItem);
                    });
                } else {
                    const noNotifications = document.createElement('div');
                    noNotifications.className = 'p-4 text-center text-gray-500';
                    noNotifications.textContent = 'No more notifications';
                
                    const mobileNoNotifications = document.createElement('div');
                    mobileNoNotifications.className = 'p-4 text-center text-gray-500';
                    mobileNoNotifications.textContent = 'No more notifications';
                
                    notificationBoxContent.appendChild(noNotifications);
                    mobileNotificationBoxContent.appendChild(mobileNoNotifications);
                }
                
                notificationBox.innerHTML = '';
                notificationBox.appendChild(notificationBoxContent);
                
                mobileNotificationBox.innerHTML = '';
                mobileNotificationBox.appendChild(mobileNotificationBoxContent);
            }
            })
            .catch(error => {
            console.error('Error fetching notifications:', error);
            });
        }

        function markNotificationsAsRead() {
                fetch('/mark-as-read', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
                })
                .then(response => response.json())
                .then(data => {
                if (data.success) {
                        notificationBadge.textContent = '0';
                        notificationBadge.classList.add('hidden');
                        mobileNotificationBadge.textContent = '0';
                        mobileNotificationBadge.classList.add('hidden');
                }
                })
                .catch(error => {
                console.error('Error marking notifications as read:', error);
                });
        }
 


