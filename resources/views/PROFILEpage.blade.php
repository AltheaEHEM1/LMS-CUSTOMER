@include('layout.CHeader')
@vite('resources/js/Cheader.js')

<div class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
                <!-- Profile Header -->
                <div class="bg-white shadow-md rounded-lg p-6 flex items-center space-x-4 mb-6">
                        <!-- Profile Image -->
                        <div class="w-16 h-20 bg-gray-300 rounded-full"></div>
                        <!-- Profile Name -->
                        <div>
                                <h2 class="text-lg font-bold text-[#011B33]">Althea Amor J. Asis</h2>
                                <p class="text-sm text-gray-500">Student</p>
                        </div>
                        
                <!-- Edit Buttons -->
                <div class="ml-auto flex space-x-2">
                        <!-- Edit Button for Upload Photo -->
                        <button onclick="openModal('photoModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">
                                Edit Photo
                        </button>
                </div>
        </div>
        
        <!-- Content Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Personal Information -->
                <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-bold text-[#011B33]">Personal Information</h3>
                                <button onclick="openModal('profileModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">Edit</button>
                        </div>
                        <div class="space-y-2 text-gray-500">
                                <div class="flex justify-between">
                                        <span>Name</span>
                                        <span class="text-black font-semibold">Althea Amor</span>
                                </div>
                                
                                <div class="flex justify-between">
                                        <span>Middle Initial</span>
                                        <span class="text-black font-semibold">J</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Last Name</span>
                                        <span class="text-black font-semibold">Asis</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Bio</span>
                                        <span class="text-black font-semibold">Student</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Date of Birth</span>
                                        <span class="text-black font-semibold">March 02, 2004</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Email address</span>
                                        <span class="text-black font-semibold">altheaamorjasis@gmail.com</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Phone No.</span>
                                        <span class="text-black font-semibold">+639123456789</span>
                                </div>
                        </div>
                </div>
        
                <!-- Address Section -->
                <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-bold text-[#011B33]">Address</h3>
                                <button onclick="openModal('addressModal')" class="bg-[#011B33] text-white px-4 py-1 rounded text-sm">Edit</button>
                        </div>
                        <div class="space-y-2 text-gray-500">
                                <div class="flex justify-between">
                                        <span>House no.</span>
                                        <span class="text-black font-semibold">1103</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Street name</span>
                                        <span class="text-black font-semibold">Hev Abi</span>
                                </div>
                                
                                <div class="flex justify-between">
                                        <span>Barangay</span>
                                        <span class="text-black font-semibold">Holy Spirit</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>City or Municipality</span>
                                        <span class="text-black font-semibold">Quezon City</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Province</span>
                                        <span class="text-black font-semibold">Metro Manila</span>
                                </div>

                                <div class="flex justify-between">
                                        <span>Zip Code</span>
                                        <span class="text-black font-semibold">1008</span>
                                </div>
                        </div>
                </div>
        </div>
        </div>

        <!-- Photo Upload Modal -->
        <div id="photoModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-6 rounded-lg w-full max-w-md">
                <!-- Modal Header -->
                <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-[#011B33]">Upload Photo</h3>
                        <button onclick="closeModal('photoModal')" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                </div>
        
                <!-- Form for Uploading Photo -->
                <form>
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
        <div id="profileModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-6 rounded-lg w-full max-w-lg">
                        <!-- Modal Header -->
                        <div class="flex justify-between mb-4">
                                <h3 class="text-lg font-bold">Edit Personal Information</h3>
                                <button onclick="closeModal('profileModal')" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                        </div>

                        <!-- Email Address (Already Filled, Read-Only) -->
                        <div class="mb-4">
                                <label class="text-sm font-semibold text-gray-700">Email Address</label>
                                <div class="mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-700">
                                altheaamorjasis@gmail.com
                                </div>
                        </div>

                        
                        <form>
                                <div class="grid grid-cols-2 gap-4 mb-4">

                                        <div>
                                                <label class="text-sm text-gray-600">Name</label>
                                                <input type="text" placeholder="Althea Amor" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                        </div>

                                        <div>
                                                <label class="text-sm text-gray-600">Middle Initial</label>
                                                <input type="text" placeholder="J" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                        </div>

                                        <div>
                                                <label class="text-sm text-gray-600">Last Name</label>
                                                <input type="text" placeholder="Asis" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                        </div>

                                        <div>
                                                <label class="text-sm text-gray-600">Date of Birth</label>
                                                <input type="date" value="2004-03-02" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                        </div>
                                </div>
                
                                <div class="grid grid-cols-2 gap-4 mb-4">
                                        <div>
                                                <label class="text-sm text-gray-600">Phone No.</label>
                                                <input type="text" placeholder="+639123456789" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                        </div>
                                </div>

                                <!-- Modal Buttons -->
                                <div class="flex justify-end">
                                        <button type="button" onclick="closeModal('profileModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Save</button>
                                </div>

                        </form>
                </div>
        </div>
        
        <!-- Address Modal -->
        <div id="addressModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-6 rounded-lg w-full max-w-lg">
                        <!-- Modal Header -->
                        <div class="flex justify-between mb-4">
                                <h3 class="text-lg font-bold">Edit Address</h3>
                                <button onclick="closeModal('addressModal')" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                        </div>
                    <form>
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                            <label class="text-sm text-gray-600">House no.</label>
                                            <input type="text" placeholder="10B" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">Street Name</label>
                                            <input type="text" placeholder="Manggahan" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">Barangay</label>
                                            <input type="text" placeholder="Holy Spirit" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">City/Municipality</label>
                                            <input type="text" placeholder="Quezon City" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                    </div>

                            </div>
                    
                            <div class="grid grid-cols-2 gap-4 mb-4">
                                    <div>
                                            <label class="text-sm text-gray-600">Province </label>
                                            <input type="text" placeholder="Metro Manila" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                    </div>

                                    <div>
                                            <label class="text-sm text-gray-600">Zip Code</label>
                                            <input type="text" placeholder="0000" class="w-full mt-1 px-3 py-2 border rounded bg-gray-100 text-gray-800">
                                    </div>
                            
                            </div>

                            <!-- Modal Buttons -->
                            <div class="flex justify-end">
                                    <button type="button" onclick="closeModal('addressModal')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-200">Cancel</button>
                                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-[#011B33]">Save</button>
                            </div>

                    </form>
                </div>
        </div>
@include('layout.CFooter')
</body>
</html>