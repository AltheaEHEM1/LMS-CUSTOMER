@include('CHeader')
{{-- @vite('resources/js/specific-category.js') uncomment this line to enable Vite for this file --}}

<main>
        <!-- BOOKS -->
        <div class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
                <!-- Page Title -->
                <h1 class="text-center text-2xl p-4 font-bold mb-">[Category Name]</h1>

                <!-- Back Button -->
                <div class="flex justify-start mb-7 ml-4 sm:ml-8 md:ml-16 lg:ml-60">
                        <a href="/HOMElandingpage_customer" class="text-[#000] hover:text-[#028ABE] flex items-center">
                                <i class="fas fa-arrow-left"></i>
                                <span class="ml-2">Back</span>
                        </a>
                </div>

                        <!-- BOOK LIST -->
                <div class="flex justify-center">
                        <div class="space-y-6 w-full max-w-4xl px-4">
                                <!-- BOOK LIST -->
                                <div class="flex justify-center px-4">
                                        <div class="space-y-6 w-full max-w-4xl">
                                                <!-- Single Book -->
                                                <div class="flex sm:flex-row items-center bg-white shadow-md rounded-lg p-4 mx-auto hover:scale-105 transition-transform duration-300">
                                                        <!-- Link for Book Image and Details -->
                                                        <a href="/Hbookdetailswithreserve" class="flex flex-col sm:flex-row items-center flex-grow text-left">
                                                        <!-- Book Image -->
                                                        <img src="https://via.placeholder.com/100" alt="Noli Me Tangere" 
                                                                class="w-24 h-32 rounded-lg sm:w-32 sm:h-40 object-cover">

                                                        <!-- Book Details -->
                                                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-grow text-center sm:text-left">
                                                                <p class="text-sm text-gray-500">Book</p>
                                                                <h2 class="text-lg font-semibold text-gray-800">Noli Me Tangere</h2>
                                                                <p class="text-gray-600">Rizal, Jose P.</p>
                                                                <p class="text-gray-500">Mandaluyong, National Bookstore</p>
                                                                <p class="text-gray-500">2021</p>
                                                        </div>
                                                        </a>

                                                       @auth
                                                                <!-- Bookmark Button -->
                                                        <div class="ml-4">
                                                                <button class="flex items-center bg-black text-white px-4 py-2 rounded-md hover:bg-[#028ABE]">
                                                                        <i class="fas fa-bookmark mr-2"></i> Bookmark
                                                                </button>
                                                        </div>
                                                       @endauth
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

</main>

@include('CFooter')
