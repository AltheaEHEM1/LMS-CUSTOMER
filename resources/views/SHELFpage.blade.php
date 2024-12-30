@include('CHeader')
@vite('resources/js/Shelf.js')

<main class="bg-[#E4ECFF] min-h-screen p-10 mb-0">
    <h1 class="text-2xl font-bold ml-20 text-gray-800">My Shelf</h1>

    <!-- container-->
    <div class="flex flex-col lg:flex-row justify-center items-center mt-6">
        
        <!-- Right Side: Search Box and Image -->
        <div class="w-full lg:w-1/4 pl-8 mr-10 mb-6 lg:mb-0">
            <!-- Search Bar -->
            <div class="flex items-center bg-[#011b33] text-white rounded-md px-2 py-1 w-full mb-4">
                <svg class="w-4 h-8 text-gray-300 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10 2a8 8 0 105.293 14.707l5.387 5.387a1 1 0 001.415-1.415l-5.387-5.387A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z"/>
                </svg>
                <input 
                    type="text" 
                    placeholder="Search item" 
                    class="bg-transparent placeholder-gray-300 text-white focus:outline-none text-sm w-full"
                />
            </div>

            <!-- Select All and Trash -->
            <div class="flex justify-between items-center mb-4">
                <label class="flex items-center text-gray-800">
                    <input type="checkbox" class="form-checkbox mr-2" />
                    Select All (10)
                </label>
                <button class="text-gray-800 hover:text-red-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M9 3V1h6v2h5v2H4V3h5zm2 6v9h2V9h-2zm4 0v9h2V9h-2zm-8 0v9h2V9H7z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Left Side: Shelf Table -->
        <div class="w-full lg:w-2/3 ml-10 mb-8 lg:mb-0">
            <!-- Table wrapper to handle scrolling on small screens -->
            <div class="overflow-x-auto w-full">
                <table class="table-auto w-full border-2 border-white rounded-lg overflow-hidden">
                    <thead class="bg-[#011B33] border border-gray-300 text-white">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2"></th>
                            <th class="border border-gray-300 px-1 py-1"></th>
                            <th class="border border-gray-300 px-4 py-2">Title</th>
                            <th class="border border-gray-300 px-4 py-2 hidden lg:table-cell">ISBN</th>
                            <th class="border border-gray-300 px-4 py-2 hidden lg:table-cell">Item Type</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-white items-center text-center hover:scale-105 transition-transform duration-300" onclick="handleRowClick(event)">
                            <td class="px-4 py-2">
                                <input type="checkbox" class="form-checkbox w-4 h-4" onclick="handleCheckboxClick(event)" />
                            </td>
                            <td class="px-4 py-2">
                                <img src="https://via.placeholder.com/100" alt="Noli Me Tangere" 
                                    class="w-24 h-32 rounded-lg sm:w-32 sm:h-30 object-cover mx-auto">
                            </td>
                            <td class="px-4 py-2">Noli Me Tangere</td>
                            <td class="px-4 py-2 hidden lg:table-cell">978-1-933624-76-1</td>
                            <td class="px-4 py-2 hidden lg:table-cell">Book</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    // Handle the row click for redirection
    function handleRowClick(event) {
        if (event.target.type !== 'checkbox') {
            window.location = 'Hbookdetailswithreserve'; 
        }
    }

    // Prevent the row click event when the checkbox is clicked
    function handleCheckboxClick(event) {
        event.stopPropagation(); // Prevent the row click from triggering
    }
</script>

@include('CFooter')


