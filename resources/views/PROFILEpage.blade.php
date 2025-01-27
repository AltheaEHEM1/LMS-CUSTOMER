@include('CHeader')
@vite('resources/js/profile.js')

<main class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
        <!-- Profile Section -->
        <div>
                <!-- Profile Header -->
                <div class="bg-white shadow-md rounded-lg p-10 flex items-center space-x-4 mb-6">
                        <!-- Profile Image -->
                        <div class="w-20 h-20 bg-gray-300 rounded-full overflow-hidden">
                            @if(Auth::user()->photo_path)
                                <img src="{{ asset('storage/' . Auth::user()->photo_path) }}" alt="Profile Photo" class="w-full h-full object-cover">
                            @endif
                        </div>
                        <!-- Profile Name -->
                        <div>
                                <h2 class="text-lg font-bold text-[#011B33]">{{ Auth::user()->firstName }} {{ Auth::user()->middleInitial }}. {{ Auth::user()->lastName }}</h2>
                                <p class="text-sm text-gray-500">Student</p>
                        </div>
                        
                <!-- Edit Buttons -->
                <div class="ml-auto flex space-x-2">
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
                                        <span class="text-black font-semibold">{{ Auth::user()->firstName }}</span>
                                </div>
                                
                                <div class="flex justify-between">
                                        <span>Middle Initial</span>
                                        <span class="text-black font-semibold">{{ Auth::user()->middleInitial }}</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Last Name</span>
                                        <span class="text-black font-semibold">{{ Auth::user()->lastName }}</span>
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
                                        <span>Username</span>
                                        <span class="text-black font-semibold">{{ Auth::user()->username }}</span>
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

       

                
        <!-- Photo Upload Modal -->
        <div id="photoModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg w-full max-w-md">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-[#011B33]">Upload Photo</h3>
                    <button onclick="closeModal('photoModal')" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <form action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="profile_photo" class="block text-sm font-medium text-gray-700">Choose a Photo</label>
                        <div class="mt-1 flex items-center">
                            <input type="file" id="profile_photo" name="profile_photo" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
                        </div>
                        @error('profile_photo')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="closeModal('photoModal')" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Upload Photo
                        </button>
                    </div>
                </form>
            </div>
        </div>

                <!-- Profile Modal -->
<div id="profileModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center mt-20">
    <div class="bg-white p-6 rounded-lg w-full max-w-md opacity-100">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold text-[#011B33]">Edit Personal Information</h3>
        </div>

        <form action="{{ route('profile.updateInfo') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="text-sm text-gray-600">First Name</label>
                    <input type="text" name="firstName" value="{{ old('firstName', Auth::user()->first_name) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    @error('firstName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="text-sm text-gray-600">Middle Initial</label>
                    <input type="text" name="middleInitial" value="{{ old('middleInitial', Auth::user()->middle_initial) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                    @error('middleInitial') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="text-sm text-gray-600">Last Name</label>
                    <input type="text" name="lastName" value="{{ old('lastName', Auth::user()->last_name) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    @error('lastName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="text-sm text-gray-600">Username</label>
                    <input type="text" name="username" value="{{ old('username', Auth::user()->username) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    @error('username') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-600">Gender</label>
                <select name="gender" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    <option value="Male" {{ old('gender', Auth::user()->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender', Auth::user()->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="text-sm text-gray-600">Month</label>
                    <input type="text" name="dobMonth" value="{{ old('dobMonth', Auth::user()->dob_month) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    @error('dobMonth') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-sm text-gray-600">Day</label>
                    <input type="text" name="dobDay" value="{{ old('dobDay', Auth::user()->dob_day) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    @error('dobDay') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="text-sm text-gray-600">Year</label>
                    <input type="text" name="dobYear" value="{{ old('dobYear', Auth::user()->dob_year) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                    @error('dobYear') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-end">
                <button type="button" onclick="closeModal('profileModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Save</button>
            </div>
        </form>
    </div>
</div>


        <!-- Address Modal -->
        <div id="addressModal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center">
                <div class="bg-white p-6 rounded-lg w-full max-w-md">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-bold text-[#011B33]">Edit Address</h3>
                        </div>

                        <form action="{{ route('profile.updateAddress') }}" method="POST">
                            @csrf
                           
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                            <label class="text-sm text-gray-600">House no.</label>
                                            <input type="text" name="addressHouse" value="{{ Auth::user()->addressHouse }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">Street Name</label>
                                            <input type="text" name="addressStreet" value="{{ Auth::user()->addressStreet }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">Barangay</label>
                                            <input type="text" name="addressBarangay" value="{{ Auth::user()->addressBarangay }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">City/Municipality</label>
                                            <input type="text" name="addressCity" value="{{ Auth::user()->addressCity }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                                    </div>
                            </div>
                    
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                            <label class="text-sm text-gray-600">Province</label>
                                            <input type="text" name="addressProvince" value="{{ Auth::user()->addressProvince }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">Zip Code</label>
                                            <input type="text" name="addressZip" value="{{ Auth::user()->addressZip }}" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800" required>
                                    </div>
                            </div>

                            <div class="flex justify-end">
                                    <button type="button" onclick="closeModal('addressModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Save</button>
                            </div>
                        </form>
                </div>
        </div>
</main>



{{-- TO BE REMOVED --}}
{{-- <script>
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

</script> --}}

@include('CFooter')
