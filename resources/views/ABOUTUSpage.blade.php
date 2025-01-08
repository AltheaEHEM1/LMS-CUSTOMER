@include('CHeader')
{{-- @vite('resources/js/about-us.js') uncomment this line to enable Vite --}}

<div class="bg-[#E4ECFF] min-h-screen p-8 mb-0">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Meet our team</h1>
        <p class="text-gray-500 mt-2">Inspiring change, one step at a time.</p>
    </div>

    <!-- Parent container for centering -->
    <div class="flex items-center justify-center min-h-screen">
        <!-- Grid container to arrange team member cards in a 2x3 grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20">

            <!-- Team Member Card 1 -->
            <div class="bg-gray-100 rounded-lg shadow-md p-6 flex flex-col items-center w-[250px] relative group">
                <div class="bg-gray-100 w-[250px] h-[200px] rounded-t-lg p-4">
                    <img src="./images/Althea.png" alt="Team Member Photo" class="w-full h-full object-cover rounded-t-lg">
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-[#011B33] text-lg font-bold">Althea Amor J. Asis</h2>
                    <p class="text-sm text-gray-500">Project Manager</p>
                    <p class="text-sm text-gray-500">Front-end developer</p>
                </div>

                <!-- Hover Detail Box -->
                <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <div class="text-center p-4">
                        <h3 class="font-bold text-lg text-[#011B33]">Additional Details</h3>
                        <p class="text-sm text-gray-500">More information about Althea Amor J. Asis.</p>
                    </div>
                </div>
            </div>


            <!-- Team Member Card 2 -->
            <div class="bg-gray-100 rounded-lg shadow-md p-6 flex flex-col items-center w-[250px] relative group">
                <div class="bg-gray-100 w-[250px] h-[200px] rounded-t-lg p-4">
                    <img src="./images/Baron.jpg" alt="Team Member Photo" class="w-full h-full object-cover rounded-t-lg">
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-[#011B33] text-lg font-bold">Baron Raniel Aloveros</h2>
                    <p class="text-sm text-gray-500">Back-end Developer</p>
                    <p class="text-sm text-gray-500">Quality Assurance</p>
                </div>

                <!-- Hover Detail Box -->
                <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <div class="text-center p-4">
                        <h3 class="font-bold text-lg text-[#011B33]">Additional Details</h3>
                        <p class="text-sm text-gray-500">More information about Baron Raniel Aloveros.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member Card 3 -->
            <div class="bg-gray-100 rounded-lg shadow-md p-6 flex flex-col items-center w-[250px] relative group">
                <div class="bg-gray-100 w-[250px] h-[200px] rounded-t-lg p-4">
                    <img src="./images/ruben.jpg" alt="Team Member Photo" class="w-full h-full object-cover rounded-t-lg">
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-[#011B33] text-lg font-bold">Ruben Bertuso Jr.</h2>
                    <p class="text-sm text-gray-500">Back-end Developer</p>
                </div>

                <!-- Hover Detail Box -->
                <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <div class="text-center p-4">
                        <h3 class="font-bold text-lg text-[#011B33]">Additional Details</h3>
                        <p class="text-sm text-gray-500">More information about Ruben Bertuso Jr.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member Card 4 -->
            <div class="bg-gray-100 rounded-lg shadow-md p-6 flex flex-col items-center w-[250px] relative group">
                <div class="bg-gray-100 w-[250px] h-[200px] rounded-t-lg p-4">
                    <img src="./images/Nadine.png" alt="Team Member Photo" class="w-full h-full object-cover rounded-t-lg">
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-[#011B33] text-lg font-bold">Ma. Nadine Borja</h2>
                    <p class="text-sm text-gray-500">Front-end Developer</p>
                    <p class="text-sm text-gray-500">Quality Assurance</p>
                </div>

                <!-- Hover Detail Box -->
                <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <div class="text-center p-4">
                        <h3 class="font-bold text-lg text-[#011B33]">Additional Details</h3>
                        <p class="text-sm text-gray-500">More information about Ma. Nadine Borja.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member Card 5 -->
            <div class="bg-gray-100 rounded-lg shadow-md p-6 flex flex-col items-center w-[250px] relative group">
                <div class="bg-gray-100 w-[250px] h-[200px] rounded-t-lg p-4">
                    <img src="./images/Styvn.jpg" alt="Team Member Photo" class="w-full h-full object-cover rounded-t-lg">
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-[#011B33] text-lg font-bold">Styvn Rhyz Kyl Polocarpio</h2>
                    <p class="text-sm text-gray-500">Documentation</p>
                </div>

                <!-- Hover Detail Box -->
                <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <div class="text-center p-4">
                        <h3 class="font-bold text-lg text-[#011B33]">Additional Details</h3>
                        <p class="text-sm text-gray-500">More information about Styvn Rhyz Kyl Polocarpio.</p>
                    </div>
                </div>
            </div>





        </div>
    </div>

    

    <div class="text-center mt-10">
        <p class="text-lg text-[#011B33]">
            Novella is your community's gateway to knowledge and inspiration. <br>
            As a public library, we offer a vast collection of books, journals, and digital resources. <br>
            Our dedicated staff is committed to providing exceptional service and fostering a love of learning.
        </p>
    </div>
</div>



