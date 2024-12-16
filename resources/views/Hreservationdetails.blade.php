@include('layout.CHeader')
<main class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
                <!-- Back Button -->
        <div class="flex justify-start mb-4 ml-4 sm:ml-8 md:ml-16 lg:ml-60 mt-16">
                <a href="/Hbookdetailswithreserve" class="text-[#000] hover:text-[#028ABE] flex items-center">
                <i class="fas fa-arrow-left"></i>
                <span class="ml-2">Back</span>
                </a>
        </div>

        <div class="flex flex-col lg:flex-row ml-60 mt-10 space-x-8">
                <!-- Book Details -->
                <div class="flex-shrink-0 w-40 mx-auto items-center text-center lg:w-48 lg:mx-0">
                        <img src="https://via.placeholder.com/150" alt="Noli Me Tangere" class="w-full h-72 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold mt-4">Noli Me Tangere</h2>
                        <p class="text-gray-600">Rizal, Jose P.</p>
                </div>

                <!-- Book Details Section -->
                <div class="mt-6 lg:mt-0">
                        <h1 class="font-bold text-[#011b33]">Information</h1>
                        <div class="mt-6 space-y-2">
                                <div>
                                        <p class="font-semibold inline mr-2">ISBN:</p>
                                        <p class="inline">9710807528</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Publisher:</p>
                                        <p class="inline">Mandaluyong City: National Book Store</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Item Type:</p>
                                        <p class="inline">Book</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Edition:</p>
                                        <p class="inline">Fifth Edition</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Description:</p>
                                        <p class="inline"> xxii, 381 pages, 1 unnumbered leaf of plate</p>
                                </div>
                                <div>
                                        <p class="font-semibold inline mr-2">Loan Period:</p>
                                        <p class="inline"> 3 days</p>
                                </div>
                        </div>
                </div>

                <!-- Borrower Information -->
                <div class="mt-6 lg:mt-0">
                        <h3 class="font-semibold text-[#011b33]">Borrower's Information</h3>
                        <div class="space-y-2">
                        <div>
                                <p class="font-semibold inline mr-2">Member ID:</p>
                                <p class="inline">12345678910</p>
                        </div>
                        <div>
                                <p class="font-semibold inline mr-2">Name:</p>
                                <p class="inline">Althea Amor J. Asis</p>
                        </div>
                        <div>
                                <p class="font-semibold inline mr-2">Phone no.:</p>
                                <p class="inline"> +639123456789</p>
                        </div>
                        <div>
                                <p class="font-semibold inline mr-2">Email Address:</p>
                                <p class="inline">altheaamorjasis@gmail.com</p>
                        </div>

                        <!-- Borrowing Details -->
                        <div class="mt-6 space-y-2">
                                <h3 class="font-semibold text-[#011b33]">Borrowing Details</h3>
                                <p class="text-sm text-gray-600"><strong>Book Stock:</strong> 4</p>
                                <p class="text-sm text-gray-600"><strong>Status:</strong> In Library</p>
                                <div>
                                        <label for="borrow-date" class="block text-sm text-gray-600">Requested Borrow Date</label>
                                        <input type="date" id="borrow-date" class="w-full mt-1 p-2 border rounded-md text-gray-600">
                                </div>
                        </div>

                        </div>
                        <div class="flex justify-end space-x-4 mt-8">
                                <button class="px-4 py-2 bg-[#028ABE] text-white rounded-md hover:bg-[#046f9c]">Reserve</button>
                        </div>
                </div>
        </div>
</main>

@include('layout.CFooter')
</body>
</html>