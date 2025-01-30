@include('CHeader')
{{-- @vite('resources/js/reservation-details.js') uncomment this line to enable Vite --}}

<main class="bg-[#E4ECFF] min-h-screen flex flex-col items-center justify-center p-8 mt-[-90px] mb-[-90px]">
    <!-- Book Details Section -->
    <div class="relative w-full max-w-7xl space-x-8 mt-10 flex flex-col lg:flex-row items-center justify-center">
        <!-- Back Button -->
        <div class="absolute top-[-32px] left-20">
            <a href="/Hbookdetailswithreserve" class="text-[#000] hover:text-[#028ABE] flex items-center">
                <i class="fas fa-arrow-left"></i>
                <span class="ml-2">Back</span>
            </a>
        </div>

        <!-- Book Details -->
        <div class="flex-shrink-0 w-40 mx-auto items-center text-center lg:w-48 lg:mx-0">
            <img src="{{ $book->photo }}" alt="{{ $book->title }}" class="w-full h-72 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mt-4">{{ $book->title }}</h2>
            <p class="text-gray-600">Rizal, Jose P.</p>
        </div>

        <!-- Book Details Information -->
        <div class="mt-6 lg:mt-0">
            <h1 class="font-bold text-[#011b33]">Information</h1>
            <div class="mt-6 space-y-2">
                <div>
                    <p class="font-semibold inline mr-2">ISBN:</p>
                    <p class="inline">{{ $book->isbn }}</p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Publisher:</p>
                    <p class="inline">{{ $book->publisher }}</p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Item Type:</p>
                    <p class="inline">{{ $book->media_type }}</p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Edition:</p>
                    <p class="inline">{{ $book->edition }}</p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Description:</p>
                    <p class="inline"></p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Loan Period:</p>
                    <p class="inline"></p>
                </div>
            </div>
        </div>

        <!-- Borrower Information -->
        <div class="mt-6 lg:mt-0">
            <h3 class="font-semibold text-[#011b33]">Borrower's Information</h3>
            <div class="space-y-2">
                <div>
                    <p class="font-semibold inline mr-2">Member ID:</p>
                    <p class="inline">{{ $user->id }}</p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Name:</p>
                    <p class="inline">{{ $user->firstName }} {{ $user->middleInitial }} {{ $user->lastName }}</p>
                </div>
                <div>
                    <p class="font-semibold inline mr-2">Email Address:</p>
                    <p class="inline">{{ $user->email }}</p>
                </div>

                <!-- Borrowing Details -->
                <div class="mt-6 space-y-2">
                    <h3 class="font-semibold text-[#011b33]">Borrowing Details</h3>
                    <p class="text-sm text-gray-600"><strong>Book Stock:</strong> {{ $book->copies }}</p>
                    <p class="text-sm text-gray-600"><strong>Status:</strong> In Library</p>
                    <div>
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <label for="borrow-date" class="block text-sm text-gray-600">Requested Borrow Date</label>
                        <input type="date" id="borrow-date" name="reservation_date" class="w-full mt-1 p-2 border rounded-md text-gray-600">
                    </div>
                </div>

            </div>
            <div class="flex justify-center space-x-4 mt-8">
                <button type="submit" id="reserve-button" class="px-4 py-2 bg-[#028ABE] text-white rounded-md hover:bg-[#046f9c]">Reserve</button>
            </div>
        </div>
    </div>
</main>

@include('CFooter')
</body>
<script>
    document.getElementById('reserve-button').addEventListener('click', function () {
        const bookId = document.querySelector('input[name="book_id"]').value;
        const reservationDate = document.querySelector('input[name="reservation_date"]').value;

        fetch('/reserve', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                book_id: bookId,
                reservation_date: reservationDate
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
</script>
</html>
