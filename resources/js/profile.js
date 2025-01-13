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

// Function to update the profile picture and close modal
function updateProfilePhoto(event) {
    event.preventDefault(); // Prevent the default form submission

    const form = document.getElementById('profilePhotoForm');
    const formData = new FormData(form); // Prepare the data to send

    // Send the form data using Fetch API
    fetch('/profile/photo', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Include CSRF token
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Photo upload failed');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Ensure that the photo URL is absolute
                const photoUrl = window.location.origin + data.photoUrl; // Get the full URL

                // Update the profile photo in the UI
                const photoElement = document.getElementById('profilePhoto');
                photoElement.src = photoUrl; // Update the profile photo with the full URL

                closeModal('profileModal'); // Close the modal after successful upload
                alert('Profile photo updated successfully!');
            } else {
                alert('Error updating photo');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while updating the photo');
        });
}

// Add event listener to the form submit button
document.getElementById('profilePhotoForm').addEventListener('submit', updateProfilePhoto);
