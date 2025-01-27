@include('CHeader')
{{-- @vite('resources/js/reservation.js') uncomment this line to enable Vite --}}

<main>
    <div class="bg-[#E4ECFF] min-h-screen p-4 sm:p-8 mb-0">
        <div class="text-center">
            <h2 class="text-[#011B33] text-xl sm:text-2xl font-bold mb-4 text-left">My Reservation</h2>
            <div class="flex justify-center relative mb-4">
                <div class="relative w-full sm:w-2/3 md:w-1/3">
                    <i class="fa fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input
                        type="text"
                        placeholder="Search"
                        class="w-full pl-10 px-4 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
            </div>

            <div class="overflow-x-auto sm:overflow-x-hidden">
                <table class="table-auto w-full border-2 border-white">
                    <thead class="bg-[#011B33] border border-gray-300 text-white">
                        <tr>
                            <th class="border border-gray-300 px-2 sm:px-4 py-2">Book Title</th>
                            <th class="border border-gray-300 px-2 sm:px-4 py-2">Author</th>
                            <th class="border border-gray-300 px-2 sm:px-4 py-2">Reservation Date</th>
                            <th class="border border-gray-300 px-2 sm:px-4 py-2">Pick-up Date</th>
                            <th class="border border-gray-300 px-2 sm:px-4 py-2">Due Date</th>
                            <th class="rounded-tr-xl px-2 sm:px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($reservations->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center py-4 text-gray-500">No Books</td>
                            </tr>
                        @else
                            @foreach($reservations as $reservation)
                                <tr class="text-center bg-gray-100">
                                    <td class="border bg-[#F4F7FF] px-2 sm:px-4 py-2">{{ $reservation->title }}</td>
                                    <td class="border bg-[#F4F7FF] px-2 sm:px-4 py-2">{{ $reservation->author }}</td>
                                    <td class="border bg-[#F4F7FF] px-2 sm:px-4 py-2">{{ $reservation->reservation_date }}</td>
                                    <td class="border bg-[#F4F7FF] px-2 sm:px-4 py-2">{{ $reservation->pickup_date ?? '-' }}</td>
                                    <td class="border bg-[#F4F7FF] px-2 sm:px-4 py-2">{{ $reservation->due_date ?? '-' }}</td>
                                    <td class="border bg-[#F4F7FF] px-2 sm:px-4 py-2">
                                        @if($reservation->borrow_status == 'pending')
                                            <span class="bg-orange-200 font-semibold text-orange-800 px-2 py-1 rounded-md">Pending</span>
                                        @elseif($reservation->borrow_status == 'confirmed')
                                            <span class="bg-blue-200 font-semibold text-blue-800 px-2 py-1 rounded-md">Confirmed</span>
                                        @elseif($reservation->borrow_status == 'approved')
                                            <span class="bg-green-200 font-semibold text-green-800 px-2 py-1 rounded-md">Approved</span>
                                        @elseif($reservation->borrow_status == 'denied')
                                            <span class="bg-red-200 font-semibold text-red-800 px-2 py-1 rounded-md">Denied</span>
                                        @else
                                            <span class="bg-gray-200 font-semibold text-gray-800 px-2 py-1 rounded-md">Unknown Status</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center mt-4 space-x-1">
                <button class="w-6 h-6 sm:w-8 sm:h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">1</button>
                <button class="w-6 h-6 sm:w-8 sm:h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">2</button>
                <button class="w-6 h-6 sm:w-8 sm:h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">3</button>
                <button class="w-6 h-6 sm:w-8 sm:h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">4</button>
                <button class="w-6 h-6 sm:w-8 sm:h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">5</button>
            </div>
        </div>
    </div>
</main>


@include('CFooter')
</body>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.querySelector('input[type="text"]');
    const tableRows = document.querySelectorAll('tbody tr');

    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const rowText = row.textContent.toLowerCase();

            if (searchTerm === '') {
                row.style.display = '';
            } 
            else if (rowText.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        const visibleRows = Array.from(tableRows).filter(row => row.style.display !== 'none');
        const noResultsRow = document.querySelector('.no-results-row');

        if (visibleRows.length === 0 && searchTerm !== '') {
            if (!noResultsRow) {
                const tbody = document.querySelector('tbody');
                const newRow = document.createElement('tr');
                newRow.classList.add('no-results-row');
                newRow.innerHTML = `
                    <td colspan="6" class="text-center py-4 text-gray-500">No books matched the search.</td>
                `;
                tbody.appendChild(newRow);
            }
        } else {
            if (noResultsRow) {
                noResultsRow.remove();
            }
        }
    });
});
</script>
</html>