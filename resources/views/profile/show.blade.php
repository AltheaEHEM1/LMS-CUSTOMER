@extends('layouts.app')

@section('content')
    <main class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
        <div>
            <!-- Profile Section -->
            <div class="bg-white shadow-md rounded-lg p-10 flex items-center space-x-4 mb-6">
                <!-- Display profile photo -->
                <img id="profilePhoto" src="{{ Storage::url(Auth::user()->photo) }}" alt="Profile Photo" class="w-20 h-20 bg-gray-300 rounded-full">
                
                <div>
                    <h2 class="text-lg font-bold text-[#011B33]">{{ Auth::user()->firstName }} {{ Auth::user()->middleInitial }} {{ Auth::user()->lastName }}</h2>
                    <p class="text-sm text-gray-500">Student</p>
                </div>
                <div class="ml-auto flex space-x-2">
                    <button onclick="openModal('profileModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">Edit Profile</button>
                </div>
            </div>

            <!-- Personal Information Section -->
            <div class="flex flex-wrap gap-6">
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

            <!-- Address Edit Modal -->
            <div id="addressModal" class="modal hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white rounded-lg p-6 w-96">
                    <h3 class="text-lg font-bold text-[#011B33]">Edit Address</h3>
                    <form action="{{ route('profile.updateAddress') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="space-y-4 text-gray-500">
                            <div>
                                <label for="addressHouse" class="block">House No.</label>
                                <input type="text" id="addressHouse" name="addressHouse" value="{{ Auth::user()->addressHouse }}" class="w-full px-3 py-2 border rounded-md">
                            </div>
                            <div>
                                <label for="addressStreet" class="block">Street Name</label>
                                <input type="text" id="addressStreet" name="addressStreet" value="{{ Auth::user()->addressStreet }}" class="w-full px-3 py-2 border rounded-md">
                            </div>
                            <div>
                                <label for="addressBarangay" class="block">Barangay</label>
                                <input type="text" id="addressBarangay" name="addressBarangay" value="{{ Auth::user()->addressBarangay }}" class="w-full px-3 py-2 border rounded-md">
                            </div>
                            <div>
                                <label for="addressCity" class="block">City</label>
                                <input type="text" id="addressCity" name="addressCity" value="{{ Auth::user()->addressCity }}" class="w-full px-3 py-2 border rounded-md">
                            </div>
                            <div>
                                <label for="addressProvince" class="block">Province</label>
                                <input type="text" id="addressProvince" name="addressProvince" value="{{ Auth::user()->addressProvince }}" class="w-full px-3 py-2 border rounded-md">
                            </div>
                            <div>
                                <label for="addressZip" class="block">Zip Code</label>
                                <input type="text" id="addressZip" name="addressZip" value="{{ Auth::user()->addressZip }}" class="w-full px-3 py-2 border rounded-md">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="bg-[#011B33] text-white px-4 py-2 rounded-md">Save Changes</button>
                                <button type="button" onclick="closeModal('addressModal')" class="bg-gray-400 text-white px-4 py-2 rounded-md">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Add JavaScript for Modal -->
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>
@endsection
