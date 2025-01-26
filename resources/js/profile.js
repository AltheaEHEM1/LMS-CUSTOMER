

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

