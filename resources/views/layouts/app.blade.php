<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF token for security -->
    <title>App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Add your header content here -->
        <nav class="bg-[#011B33] p-4">
            <ul class="flex space-x-6">
                <li><a href="/" class="text-white">Home</a></li>
                <li><a href="/profile" class="text-white">Profile</a></li>
                <!-- Add more navigation items as needed -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#011B33] text-white p-4 text-center">
        <p>&copy; 2025 Your Company</p>
    </footer>

    <!-- Profile Edit Modal -->
    <div id="profileModal" class="modal hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white rounded-lg p-6 w-96">
            <h3 class="text-lg font-bold text-[#011B33]">Edit Profile</h3>
            <form id="profilePhotoForm" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4 text-gray-500">
                    <div>
                        <label for="photo" class="block">Profile Photo</label>
                        <input type="file" id="photo" name="photo" class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="firstName" class="block">First Name</label>
                        <input type="text" id="firstName" name="firstName" value="{{ Auth::user()->firstName }}" class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="lastName" class="block">Last Name</label>
                        <input type="text" id="lastName" name="lastName" value="{{ Auth::user()->lastName }}" class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block">Email</label>
                        <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div>
                        <label for="phoneNo" class="block">Phone No.</label>
                        <input type="text" id="phoneNo" name="phoneNo" value="{{ Auth::user()->phoneNo }}" class="w-full px-3 py-2 border rounded-md">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-[#011B33] text-white px-4 py-2 rounded-md" onclick="updateProfilePhoto(event)">Save Changes</button>
                    </div>
                </div>
            </form>
            <button class="absolute top-2 right-2 text-gray-500" onclick="closeModal('profileModal')">&times;</button>
        </div>
    </div>

    <!-- Profile JS and Modal Handling -->
    <script>
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

        // Function to update the profile photo and close modal
        function updateProfilePhoto(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = document.getElementById('profilePhotoForm');
            const formData = new FormData(form); // Prepare the data to send

            // Send the form data using Fetch API
            fetch('/profile/updatePhoto', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Include CSRF token
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update the profile photo in the UI
                        const photoElement = document.getElementById('profilePhoto');
                        photoElement.src = data.photoUrl; // Assuming the photo URL is returned
                        closeModal('profileModal'); // Close the modal after successful upload
                    } else {
                        alert('Error updating photo');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred');
                });
        }
    </script>
</body>

</html>
