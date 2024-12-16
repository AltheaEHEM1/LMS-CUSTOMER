@include('layout.CHeader')
    <div class="container mx-auto bg-[#E4ECFF] min-h-screen p-8 mb-0">
        <div class="text-center">
            <h2 class="text-[#011B33] text-2xl font-bold mb-4 text-left">My Reservation</h2>
            <div class="flex justify-center relative mb-4">
                <div class="relative w-1/3">
                    <i class="fa fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input
                        type="text"
                        placeholder="Search"
                        class="w-full pl-10 px-4 py-2 border rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
                    />
                </div>
            </div>

            <table class="table-auto w-full border-2 border-white">
                <thead class="bg-[#011B33] border border-gray-300 text-white">
                    <tr>
                        <th class="rounded-tl-xl px-4 py-2">Reservation ID</th>
                        <th class="border border-gray-300 px-4 py-2">Book Title</th>
                        <th class="border border-gray-300 px-4 py-2">Author</th>
                        <th class="border border-gray-300 px-4 py-2">Reservation Date</th>
                        <th class="border border-gray-300 px-4 py-2">Pick-up Date</th>
                        <th class="border border-gray-300 px-4 py-2">Due Date</th>
                        <th class="rounded-tr-xl px-4 py-2 ">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center bg-gray-100">
                        <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">The 48 Laws of Power</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">Robert Greene</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">
                            <span class="bg-orange-200 font-semibold text-orange-800 px-2 py-1 rounded-md">Pending</span>
                        </td>
                    </tr>
                    <tr class="text-center bg-gray-100">
                        <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">Noli Me Tangere</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">Jose P. Rizal</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">
                            <span class="bg-blue-200 font-semibold text-blue-800 px-2 py-1 rounded-md">Confirmed</span>
                        </td>
                    </tr>
                    <tr class="text-center bg-gray-100">
                        <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">ABNKKBSNPLAko?!</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">Bob Ong</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">
                            <span class="bg-green-200 font-semibold text-green-800 px-2 py-1 rounded-md">Approved</span>
                        </td>
                    </tr>
                    <tr class="text-center bg-gray-100">
                        <td class="border bg-[#F4F7FF] px-4 py-2">123456789101112</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">The Woman Who Had Two Navels and Tales of the Tropical Gothic</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">Nick Joaquin</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 7</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">September 10</td>
                        <td class="border bg-[#F4F7FF] px-4 py-2">
                            <span class="bg-red-200 font-semibold text-red-800 px-2 py-1 rounded-md">Denied</span>
                        </td>
                    </tr>
                    <!-- Add more rows as necessary -->
                </tbody>
            </table>


            <div class="flex justify-center mt-4 space-x-1">
                <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">1</button>
                <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">2</button>
                <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">3</button>
                <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">4</button>
                <button class="w-8 h-8 text-black rounded-full flex items-center justify-center hover:bg-[#011B33] hover:text-[#F4F7FF]">5</button>
            </div>
            


        </div>
    </div>


@include('layout.CFooter')
</body>
</html>