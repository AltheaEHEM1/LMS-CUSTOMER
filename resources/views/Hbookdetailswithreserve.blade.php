@include('CHeader')
@vite('resources/js/book-details.js')

<main class="bg-[#E4ECFF] min-h-screen flex items-center justify-center p-8 mt-[-90px] mb-[-90px]">
    <!-- Content Wrapper -->
    <div class="w-full max-w-4xl">
        <!-- Back Button -->
        <div class="flex justify-start mb-4 w-full">
            <a href="/Hspecific_category/{{ $category->id }}" class="text-[#000] hover:text-[#028ABE] flex items-center">
                <i class="fas fa-arrow-left"></i>
                <span class="ml-2">Back</span>
            </a>
        </div>

        <!-- Book Details Section -->
        <div class="flex flex-col lg:flex-row w-full space-y-8 lg:space-y-0 lg:space-x-8 mt-5">
            <!-- Book Image -->
            <div class="flex-shrink-0 w-40 mx-auto lg:w-48 lg:mx-0 mt-20">
                <img src="{{ $book->photo }}" alt="{{ $book->title }}" class="w-full h-72 rounded-lg shadow-md">
            </div>

            <!-- Book Information and Reserve Button -->
            <div class="flex-grow flex flex-col lg:flex-row items-start space-y-4 lg:space-y-0 lg:space-x-6">
                <div class="space-y-2 text-gray-700 w-full">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $book->title }}</h1>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Type:</p>
                        <p class="inline">{{ $book->media_type }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Authors:</p>
                        <p class="inline">{{ $book->author }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">ISBN 10:</p>
                        <p class="inline">{{ $book->isbn }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">ISBN 13:</p>
                        <p class="inline">{{ $book->isbn_13 }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Published:</p>
                        <p class="inline">{{ $book->year }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Publisher:</p>
                        <p class="inline">{{ $book->publisher }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Pages:</p>
                        <p class="inline">{{ $book->pages }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Stock:</p>
                        <p class="inline">{{ $book->copies }}</p>
                    </div>
                    <div>
                        <p class="font-semibold inline mr-2">Language</p>
                        <p class="inline">{{ $book->language }}</p>
                    </div>
                </div>

                <!-- Reserve Button and Status -->
                <div class="flex flex-col space-y-4">
                    @auth
                    <a href="/Hreservationdetails/{{ $book->id }}">
                        <button class="bg-[#028ABE] text-white py-2 px-4 rounded-lg w-full hover:bg-[#026c94] transition duration-200">
                            Reserve
                        </button>
                    </a>
                    @endauth
                    <div class="text-center">
                        <p class="text-lg font-semibold">Status:</p>
                        @if($book->copies > 0)
                        <p class="text-green-600">Available</p>
                        @else
                        <p class="text-red-600">Not Available</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('CFooter')

</body>
</html>
