@include('CHeader')
@vite('resources/js/profile.js')

<main class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
    <!-- Profile Section -->
    <div>
        <!-- Profile Header -->
        <div class="bg-white shadow-md rounded-lg p-10 flex items-center space-x-4 mb-6">
            <!-- Profile Image -->
            <div class="w-20 h-20 bg-gray-300 rounded-full">
                <img class="profile-photo" src="{{ Auth::user()->photoUrl }}" alt="Profile Photo">
            </div>
            <!-- Profile Name -->
            <div>
                <h2 class="text-lg font-bold text-[#011B33]">{{ Auth::user()->firstName }} {{ Auth::user()->middleInitial }} {{ Auth::user()->lastName }}</h2>
                <p class="text-sm text-gray-500">Student</p>
            </div>
            
            <!-- Edit Buttons -->
            <div class="ml-auto flex space-x-2">
                <!-- Edit Button for Upload Photo -->
                <button onclick="openModal('photoModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">Edit Photo</button>
            </div>
        </div>

        <!-- Content Section -->
        <div class="flex flex-wrap gap-6">
            <!-- Personal Information -->
            <div class="bg-white shadow-md rounded-lg p-6 flex-1">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#011B33]">Personal Information</h3>
                    <button onclick="openModal('profileModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">Edit</button>
                </div>

                <div class="space-y-2 text-gray-500">
                    <div class="flex justify-between">
                        <span>Name</span>
                        <span class="text-black font-semibold">{{ Auth::user()->firstName }} {{ Auth::user()->middleInitial }} {{ Auth::user()->lastName }}</span>
                    </div>
                    
                    <div class="flex justify-between">
                        <span>Gender</span>
                        <span class="text-black font-semibold">{{ Auth::user()->gender }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Date of Birth</span>
                        <span class="text-black font-semibold">{{ Auth::user()->dobMonth }} {{ Auth::user()->dobDay }}, {{ Auth::user()->dobYear }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Email address</span>
                        <span class="text-black font-semibold">{{ Auth::user()->email }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Phone No.</span>
                        <span class="text-black font-semibold">{{ Auth::user()->phoneNo }}</span>
                    </div>
                </div>
            </div>

            <!-- Address Section -->
            <div class="bg-white shadow-md rounded-lg p-6 flex-1">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#011B33]">Address</h3>
                    <button onclick="openModal('addressModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">Edit</button>
                </div>

                <div class="space-y-2 text-gray-500">
                    <div class="flex justify-between">
                        <span>House no.</span>
                        <span class="text-black font-semibold">{{ Auth::user()->addressHouse }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Street name</span>
                        <span class="text-black font-semibold">{{ Auth::user()->addressStreet }}</span>
                    </div>
                    
                    <div class="flex justify-between">
                        <span>Barangay</span>
                        <span class="text-black font-semibold">{{ Auth::user()->addressBarangay }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>City or Municipality</span>
                        <span class="text-black font-semibold">{{ Auth::user()->addressCity }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Province</span>
                        <span class="text-black font-semibold">{{ Auth::user()->addressProvince }}</span>
                    </div>

                    <div class="flex justify-between">
                        <span>Zip Code</span>
                        <span class="text-black font-semibold">{{ Auth::user()->addressZip }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!--modals-->
       <!-- Photo Upload Modal -->
        <div id="photoModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center opacity-0 transition-opacity duration-300">
            <div class="bg-white p-6 rounded-lg w-full max-w-md opacity-100">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#011B33]">Upload Photo</h3>
                </div>
                <form id="photoForm" method="POST" action="{{ route('profile.updatePhoto') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="uploadPhoto" class="text-sm font-semibold text-gray-700">Choose a Photo</label>
                        <input type="file" id="uploadPhoto" name="photo" accept="image/*" class="w-full mt-1 px-3 py-2 border rounded">
                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="closeModal('photoModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Upload</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Profile Modal -->
        <div id="profileModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center opacity-0 transition-opacity duration-300">
            <div class="bg-white p-6 rounded-lg w-full max-w-md opacity-100">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#011B33]">Edit Personal Information</h3>
                </div>
                
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-sm text-gray-600">First Name</label>
                            <input type="text" name="firstName" value="{{ Auth::user()->firstName }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Middle Initial</label>
                            <input type="text" name="middleInitial" value="{{ Auth::user()->middleInitial }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Last Name</label>
                            <input type="text" name="lastName" value="{{ Auth::user()->lastName }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Gender</label>
                            <input type="text" name="gender" value="{{ Auth::user()->gender }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="text-sm text-gray-600">Date of Birth</label>
                        <input type="date" name="dobMonth" value="{{ Auth::user()->dobMonth }}-{{ Auth::user()->dobDay }}-{{ Auth::user()->dobYear }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                    </div>

                    <div class="mb-4">
                        <label class="text-sm text-gray-600">Bio</label>
                        <textarea name="bio" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">{{ Auth::user()->bio }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" onclick="closeModal('profileModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Address Modal -->
        <div id="addressModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center opacity-0 transition-opacity duration-300">
            <div class="bg-white p-6 rounded-lg w-full max-w-md opacity-100">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#011B33]">Edit Address</h3>
                </div>
                
                <form method="POST" action="{{ route('profile.updateAddress') }}">
                    @csrf
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-sm text-gray-600">House No.</label>
                            <input type="text" name="addressHouse" value="{{ Auth::user()->addressHouse }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Street Name</label>
                            <input type="text" name="addressStreet" value="{{ Auth::user()->addressStreet }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Barangay</label>
                            <input type="text" name="addressBarangay" value="{{ Auth::user()->addressBarangay }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">City</label>
                            <input type="text" name="addressCity" value="{{ Auth::user()->addressCity }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-sm text-gray-600">Province</label>
                            <input type="text" name="addressProvince" value="{{ Auth::user()->addressProvince }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>

                        <div>
                            <label class="text-sm text-gray-600">Zip Code</label>
                            <input type="text" name="addressZip" value="{{ Auth::user()->addressZip }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" onclick="closeModal('addressModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Profile Page -->
</main>

<script>
// Function to open a modal by ID with a fade-in effect
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('hidden');  // Show modal
        setTimeout(() => modal.classList.add('opacity-100'), 10); // Add fade-in effect
    }
}

// Function to close a modal by ID with a fade-out effect
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('opacity-100');  // Remove fade-in effect
        setTimeout(() => modal.classList.add('hidden'), 300); // Add hidden class after the fade-out
    }
}

// Handle Photo Upload dynamically (with form submission)
const photoForm = document.querySelector('#photoForm');
if (photoForm) {  // Check if the form exists
    photoForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        var formData = new FormData(this);  // Create FormData from the form

        fetch(this.action, {  // Send a POST request to the form's action URL
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Add CSRF token if using Laravel
            }
        })
        .then(response => response.json())  // Parse JSON response from the server
        .then(data => {
            if (data.success) {
                // Update profile photo if upload is successful
                document.querySelector('.profile-photo').src = data.photoUrl;
                closeModal('photoModal');  // Close the modal after updating the photo
            } else {
                alert('Error uploading photo');  // Show error message if upload fails
            }
        })
        .catch(error => {
            console.error(error);  // Log any error
            alert('Error uploading photo');  // Show a generic error message
        });
    });
}
</script>


@include('CFooter')
