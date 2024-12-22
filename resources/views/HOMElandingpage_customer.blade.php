@include('layout.CHeader')
@vite('resources/js/Cheader.js')

<section class="relative bg-[#E4ECFF] min-h-screen p-8 sm:p-6 md:p-4 mb-0">
    <img src="./images/customerbg.png" class="absolute inset-0 w-full h-full object-cover" alt="background">
        <h1 class="text-6xl font-bold absolute left-20 translate-y-[220px] text-[#011B33] drop-shadow-[4px_4px_10px_rgba(0,0,0,0.5)]">
                Discover your next <br> great read
        </h1>
</section>


<!-- SEARCH BAR -->
<div class=" mx-auto bg-[#E4ECFF] p-8 shadow-md flex items-center justify-center space-x-3">
        <!-- Dropdown -->
        <select class="p-2 border bg-[#E4ECFF] border-black-400 rounded-lg text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="" disabled selected>Keyword</option>
                <option value="title">Title</option>
                <option value="author">Author</option>
                <option value="category">Category</option>
        </select>

        <!-- Search Icon and Input -->
        <div class="relative flex items-center w-1/2">
                <i class="fas fa-search absolute left-3 top-3 w-7 h-7 text-gray-400"></i>
                <!-- Input Field -->
                <input 
                type="text" 
                placeholder="Search here..." 
                class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-lg text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
        </div>

        <!-- Search Button -->
        <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
                Search
        </button>
</div>

<!-- Categories Section -->
<div class="mx-auto bg-[#E4ECFF] p-10 rounded-lg shadow-md mx-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Category Cards-->
                <div class="bg-white p-4 rounded-lg shadow-md transform hover:scale-105 transition-all duration-300">
                        <a href="/Hspecific_category" class="block">
                                <img 
                                src="https://via.placeholder.com/300x200" 
                                alt="[categoty img]" 
                                class="w-full h-45 object-cover rounded-t-lg"
                                >
                                <div class="p-1 text-center font-semibold">[categoty name]</div>
                        </a>
                </div>
        </div>
</div>

@include('layout.CFooter')

</body>
</html>