@include('CHeader')
{{-- @vite('resources/js/homepage.js') uncomment this line to enable Vite --}}

<section class="relative bg-[#E4ECFF] min-h-screen p-8 sm:p-6 md:p-4 mb-0">
    <img src="./images/customerbg.png" class="absolute inset-0 w-full h-full object-cover" alt="background">
        <h1 class="text-6xl font-bold absolute left-20 translate-y-[220px] text-[#011B33] drop-shadow-[4px_4px_10px_rgba(0,0,0,0.5)]">
                Discover your next <br> great read
        </h1>
</section>


<!-- SEARCH BAR -->
<div class=" mx-auto bg-[#E4ECFF] p-8 shadow-md flex items-center justify-center space-x-3">
        <!-- Dropdown -->
        <!-- <select class="p-2 border bg-[#E4ECFF] border-black-400 rounded-lg text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="" disabled selected>Keyword</option>
                <option value="title">Title</option>
                <option value="author">Author</option>
                <option value="category">Category</option>
        </select> -->

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
        <!-- <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
                Search
        </button> -->
</div>

<!-- Categories Section -->
<div class="mx-auto bg-[#E4ECFF] p-10 rounded-lg shadow-md">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @if($categories->isEmpty())
            <div class="col-span-full text-center py-4 text-gray-500">No categories.</div>
        @else
            @foreach($categories as $category)
                <div class="category-card bg-white p-4 rounded-lg shadow-md transform hover:scale-105 transition-all duration-300">
                    <a href="/Hspecific_category/{{ $category->category }}" class="block">
                        <img 
                            src="/images/300x200.png" 
                            alt="[category img]" 
                            class="w-full h-45 object-cover rounded-t-lg"
                        >
                        <div class="p-1 text-center font-semibold">{{ $category->category }}</div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>

@include('CFooter')

</body>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('input[type="text"]');
    const categoryCards = document.querySelectorAll('.category-card');

    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase();

        categoryCards.forEach(card => {
            const cardText = card.textContent.toLowerCase();
            if (cardText.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        const visibleCards = Array.from(categoryCards).filter(card => card.style.display !== 'none');
        const noResultsMessage = document.querySelector('.no-results-message');

        if (visibleCards.length === 0 && searchTerm !== '') {
            if (!noResultsMessage) {
                const categoriesSection = document.querySelector('.grid');
                const newMessage = document.createElement('div');
                newMessage.classList.add('no-results-message', 'col-span-full', 'text-center', 'py-4', 'text-gray-500');
                newMessage.textContent = 'No categories matched the search.';
                categoriesSection.appendChild(newMessage);
            }
        } else {
            if (noResultsMessage) {
                noResultsMessage.remove();
            }
        }
    });
});
</script>
</html>