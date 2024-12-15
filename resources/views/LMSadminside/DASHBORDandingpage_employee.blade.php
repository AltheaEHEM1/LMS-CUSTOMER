@include('layout.Asidebar_header')
<!-- Direction of Tabs -->
<section class="bg-gray-100 fixed ml-72 px-11 py-6 w-full top-20 left-0"> 
    <p class="text-sm text-gray-600">
        <i class="fas fa-home text-gray-800"></i>
        Dashboard
    </p>
</section>

<!-- Scrollable Box below the Direction Tabs -->
<div class="bg-white border border-gray-300 rounded-lg h-[75vh] overflow-y-auto shadow-sm fixed top-[calc(8rem+1rem)] left-[59%] transform -translate-x-1/2 w-3/4">
    <div class="p-4 text-center text-gray-500">
       <!-- 3 Line Graphs -->
       <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Graph 1: Books -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-2 text-center">Books</h3>
                        <div class="h-150">
                            <canvas id="booksGraph"></canvas>
                        </div>
                    </div>

                    <!-- Graph 2: Reserved -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-4 text-center">Reserved</h3>
                        <div class="h-64">
                            <canvas id="reservedGraph" class="w-full h-full"></canvas>
                        </div>
                    </div>

                    <!-- Graph 3: Overdue -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-4 text-center">Overdue</h3>
                        <div class="h-64">
                            <canvas id="overdueGraph" class="w-full h-full"></canvas>
                        </div>
                    </div>
                </div>

                <!-- 4 Boxes -->
                <div class="mt-10 grid grid-cols-2 gap-6">
                    <!-- Box 1: New Arrival -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-2">New Arrival</h3>
                        <hr class="border-gray-300 mb-2" />

                        <!-- Content under the line -->
                        <!-- Book 1 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: ISBN and Title -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ISBN: 978-3-16-148410-0</p>
                                <p class="text-sm text-gray-700">The Great Gatsby</p>
                            </div>
                        </div>

                        <!-- Book 2 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" alt="Book Cover" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: ISBN and Title -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ISBN: 978-1-40-289462-6</p>
                                <p class="text-sm text-gray-700">To Kill a Mockingbird</p>
                            </div>
                        </div>

                        <!-- Book 3 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" alt="Book Cover" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: ISBN and Title -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ISBN: 978-0-452-28423-4</p>
                                <p class="text-sm text-gray-700">1984 by George Orwell</p>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Box 2: Checkouts -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-2">Checkouts</h3>
                        <hr class="border-gray-300 mb-2" />

                        <!-- Content under the line -->
                        <!-- Book 1 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: Book Title, Author, Due Date -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ADD BOOK TITLE</p>
                                <p class="text-sm text-gray-700">ADD BOOK AUTHOR</p>
                                <p class="text-sm text-gray-700">Due Mon, Dec 16, 24</p>
                            </div>
                        </div>

                        <!-- Book 2 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: Book Title, Author, Due Date -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ADD BOOK TITLE</p>
                                <p class="text-sm text-gray-700">ADD BOOK AUTHOR</p>
                                <p class="text-sm text-gray-700">Due Mon, Dec 16, 24</p>
                            </div>
                        </div>

                    </div>

                    <!-- Box 3: Member -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-2">Member</h3>
                        <hr class="border-gray-300 mb-2" />

                        <!-- Content under the line -->
                        <!-- Member 1 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Member Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: Member Details (Name, Date Joined) -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ADD BOOK TITLE</p>
                                <p class="text-sm text-gray-700">Due Sun, Oct 27, 24</p>
                            </div>
                        </div>

                        <!-- Member 2 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Member Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: Member Details (Name, Date Joined) -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ADD BOOK TITLE</p>
                                <p class="text-sm text-gray-700">Due Sun, Oct 27, 24</p>
                            </div>
                        </div>

                    </div>

                    <!-- Box 4: Overdues -->
                    <div class="bg-white shadow-md rounded p-4">
                        <h3 class="text-lg text-[#011B33] font-bold mb-2">Overdues</h3>
                        <hr class="border-gray-300 mb-2" />

                        <!-- Content under the line -->
                        <!-- Overdue 1 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: Book Details (Title, Author, Due Date) -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ADD BOOK TITLE</p>
                                <p class="text-sm text-gray-700">ADD BOOK AUTHOR</p>
                                <p class="text-sm text-gray-700">Due Mon, Dec 16, 24</p>
                            </div> 
                        </div>

                        <!-- Overdue 2 -->
                        <div class="mt-4 flex items-start space-x-4">
                            <!-- Left column: Book Image -->
                            <div class="w-1/4">
                                <img src="https://via.placeholder.com/20" class="w-full h-auto rounded shadow-md">
                            </div>
                            <!-- Right column: Book Details (Title, Author, Due Date) -->
                            <div class="w-2/3">
                                <p class="text-sm text-[#011B33] font-semibold">ADD BOOK TITLE</p>
                                <p class="text-sm text-gray-700">ADD BOOK AUTHOR</p>
                                <p class="text-sm text-gray-700">Due Mon, Dec 16, 24</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







<script>
    // Chart.js for the 3 line graphs
    document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('booksGraph').getContext('2d');
            const reservedCtx = document.getElementById('reservedGraph').getContext('2d');
            const overdueCtx = document.getElementById('overdueGraph').getContext('2d');

            // Create the line chart
                const booksChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], // X-axis labels
                    datasets: [{
                        label: 'Books Added',
                        data: [12, 19, 3, 5, 2, 10], // Data points
                        borderColor: '#4F46E5', // Line color (Books theme color)
                        backgroundColor: 'rgba(79, 70, 229, 0.2)', // Fill color under the line
                        fill: true, // Enables the fill under the line
                        tension: 0.4 // Smoothness of the line
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true // Displays the legend for consistency
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false // Hides vertical grid lines for cleaner visuals
                            }
                        },
                        y: {
                            beginAtZero: true, // Starts the Y-axis at 0
                            grid: {
                                color: 'rgba(200, 200, 200, 0.3)' // Light gray grid lines
                            }
                        }
                    }
                }
            });


            // Graph 2: Reserved
            new Chart(reservedCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], // Example labels
                    datasets: [{
                        label: 'Reserved Books',
                        data: [5, 15, 10, 20, 25, 40], // Example data
                        borderColor: '#F59E0B',
                        backgroundColor: 'rgba(245, 158, 11, 0.2)',
                        fill: true,
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true },
                    },
                    scales: {
                        x: { grid: { display: false } },
                        y: { beginAtZero: true },
                    },
                },
            });

            // Graph 3: Overdue
            new Chart(overdueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], // Example labels
                    datasets: [{
                        label: 'Overdue Books',
                        data: [2, 5, 7, 10, 15, 12], // Example data
                        borderColor: '#EF4444',
                        backgroundColor: 'rgba(239, 68, 68, 0.2)',
                        fill: true,
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: true },
                    },
                    scales: {
                        x: { grid: { display: false } },
                        y: { beginAtZero: true },
                    },
                },
            });

        });
        
</script>
   
</body>
</html>
