@include('CHeader')
{{-- @vite('resources/js/specific-category.js') uncomment this line to enable Vite for this file --}}

<main>
        <!-- BOOKS -->
        <div class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
                <!-- Page Title -->
                <h1 class="text-center text-2xl p-4 font-bold mb-">{{ $categoryId->name }}</h1>

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

                                                @foreach($categoryId->books as $book)
                                                <div class="flex sm:flex-row items-center bg-white shadow-md rounded-lg p-4 mx-auto hover:scale-105 transition-transform duration-300">
                                                        <!-- Link for Book Image and Details -->
                                                        <a href="{{ route('home.book', ['book' => $book->id, 'category' => $categoryId->id]) }}"class="flex flex-col sm:flex-row items-center flex-grow text-left">View Details</a>
                                                                <!-- Book Image -->
                                                        <img src="{{ $book->photo }}" alt="{{ $book->title }}" 
                                                                class="w-24 h-32 rounded-lg sm:w-32 sm:h-40 object-cover">

                                                        <!-- Book Details -->
                                                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-grow text-center sm:text-left">
                                                                <p class="text-sm text-gray-500">{{ $book->media_type }}</p>
                                                                <h2 class="text-lg font-semibold text-gray-800">{{ $book->title }}</h2>
                                                                <p class="text-gray-600">{{ $book->author }}</p>
                                                                <p class="text-gray-500">{{ $book->publisher }}</p>
                                                                <p class="text-gray-500">{{ $book->year }}</p>
                                                        </div>
                                                        </a>

                                                       @auth
                                                                <!-- Bookmark Button -->
                                                        <div class="ml-4">
                                                                <button class="flex items-center bg-black text-white px-4 py-2 rounded-md hover:bg-[#028ABE] bookmark-button" data-book-id="{{ $book->id }}">
                                                                        <i class="fas fa-bookmark mr-2"></i> Bookmark
                                                                </button>
                                                        </div>
                                                       @endauth
                                                </div>
                                                @endforeach
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

</main>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const bookmarkButtons = document.querySelectorAll('.bookmark-button');

    bookmarkButtons.forEach(button => {
        button.addEventListener('click', function() {
            const bookId = this.getAttribute('data-book-id');

            fetch('/bookmark', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    book_id: bookId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.message,
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message,
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                });
            });
        });
    });
});
</script>

@include('CFooter')
