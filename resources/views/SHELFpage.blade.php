@include('CHeader')
@vite('resources/js/shelf.js')

<main class="bg-[#E4ECFF] min-h-screen p-10 mb-0">
    <h1 class="text-2xl font-bold ml-20 text-gray-800">My Shelf</h1>

    <!-- Container -->
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
                    id="searchInput" 
                    placeholder="Search item" 
                    class="bg-transparent placeholder-gray-300 text-white focus:outline-none text-sm w-full"
                />
            </div>

            <!-- Select All and Trash -->
            <div class="flex justify-between items-center mb-4">
                <label class="flex items-center text-gray-800">
                    <input type="checkbox" id="selectAllCheckbox" class="form-checkbox mr-2" />
                    Select All
                </label>
                <button id="deleteButton" class="text-gray-800 hover:text-red-600 transition-colors">
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
                    <tbody id="shelfTableBody">
                        @foreach($bookmarks as $bookmark)
                        <tr class="bg-white items-center text-center table-row hover:bg-gray-100" data-book-id="{{ $bookmark->book_id }}">
                            <td class="px-4 py-2">
                                <input type="checkbox" class="form-checkbox w-4 h-4 bookmarkCheckbox" value="{{ $bookmark->bookmark_id }}" />
                            </td>
                            <td class="px-4 py-2">
                                <img src="{{ $bookmark->photo }}" alt="{{ $bookmark->title }}" 
                                    class="w-24 h-32 rounded-lg sm:w-32 sm:h-30 object-cover mx-auto">
                            </td>
                            <td class="px-4 py-2">{{ $bookmark->title }}</td>
                            <td class="px-4 py-2 hidden lg:table-cell">{{ $bookmark->isbn }}</td>
                            <td class="px-4 py-2 hidden lg:table-cell">{{ $bookmark->media_type }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const tableBody = document.getElementById('shelfTableBody');
    const rows = tableBody.getElementsByTagName('tr');

    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.trim().toLowerCase();

        for (let row of rows) {
            const title = row.cells[2].textContent.toLowerCase(); 
            const isbn = row.cells[3].textContent.toLowerCase(); 
            const mediaType = row.cells[4].textContent.toLowerCase(); 

            if (title.includes(searchTerm) || isbn.includes(searchTerm) || mediaType.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });

    const selectAllCheckbox = document.getElementById('selectAllCheckbox');
    const checkboxes = document.querySelectorAll('.bookmarkCheckbox');

    selectAllCheckbox.addEventListener('change', function () {
        checkboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });

    const deleteButton = document.getElementById('deleteButton');

    deleteButton.addEventListener('click', function () {
        const selectedBookmarks = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedBookmarks.push(checkbox.value);
            }
        });

        if (selectedBookmarks.length === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'No Selection',
                text: 'Please select at least one bookmark to unbookmark.',
            });
            return;
        }

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to unbookmark the selected books.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete them!',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('/unbookmark', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        bookmark_ids: selectedBookmarks
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Unbookmarked!',
                            text: 'Unbookmarked successfully!',
                        }).then(() => {
                            window.location.reload(); 
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            text: 'Failed to unbookmark.',
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong. Please try again.',
                    });
                });
            }
        });
    });
});
</script>

@include('CFooter')


