<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/tabicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Novella</title>

</head>
<body class="bg-[#E4ECFF] font-poppins">

    <section class="min-h-screen flex flex-col lg:flex-row items-center justify-center p-4 lg:p-0">
        <!-- Left Column (Image) --->
        <div class="w-full lg:w-[55%] bg-cover bg-center relative mb-6 lg:mb-0">
            <img src="images/signup_leftimage.jpg" alt="Background Image" class="w-full h-[300px] lg:h-screen object-cover rounded-lg lg:rounded-r-[30px] drop-shadow-lg">
            <!-- Transparent Overlay -->
            <div class="absolute inset-0 bg-white/5 border border-white/5 shadow-xl backdrop-blur-lg flex flex-col items-center justify-center p-6 lg:p-12 text-[#F4F7FF] rounded-[20px] m-auto w-full h-full lg:w-[700px] lg:h-[800px]">
                <h1 class="text-xl lg:text-3xl font-semibold mb-2">Welcome</h1>
                <h2 class="text-2xl lg:text-4xl font-semibold">Discover your next read</h2>
                <p class="text-lg lg:text-2xl mt-2">with Novella</p>
                <p class="mt-6 lg:mt-10 text-sm lg:text-lg text-[#BBB9B9]">
                    Already have an account? 
                    <a href="login_customer" class="underline hover:text-[#011B33]">Login</a>
                </p>
            </div>
        </div>

        <!-- Right Column (Form) -->
        <div class="w-full lg:w-[45%] p-4 lg:p-12 bg-[#E4ECFF]">
            <h2 class="text-xl lg:text-3xl font-semibold text-gray-800 mb-4 text-center">Create an account</h2>

            <!-- Step Progress -->
            <div class="flex flex-col lg:flex-row justify-between items-center mb-8 space-y-4 lg:space-y-0">
                <div class="flex flex-col items-center space-y-1">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-[#011B33] text-white text-sm">1</div>
                    <p class="text-[#011B33] font-semibold text-xs">First Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Personal Information</p>
                </div>
                
                <div class="hidden lg:block lg:w-1/3 h-[2px] bg-gray-300"></div>
                <div class="flex flex-col items-center space-y-1 space-x-100">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-sm">2</div>
                    <p class="text-[#011B33] font-semibold text-xs">Second Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Novella Account</p>
                </div>

                <div class="hidden lg:block lg:w-1/3 h-[2px] bg-gray-300"></div>
                <div class="flex flex-col items-center space-y-1">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-sm">3</div>
                    <p class="text-[#011B33] font-semibold text-xs">Third Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Account Information</p>
                </div>
            </div>

            <p class="text-[#011B33] font-semibold text-lg lg:text-xl mb-6">Personal Information</p>

            <!-- Form -->
            <form action="/signup-2" method="POST" class="space-y-6">
                @csrf
                <!-- Personal Information -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm text-gray-600">First Name</label>
                        <input type="text" id="firstName" name="firstName" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label for="middleInitial" class="block text-sm text-gray-600">Middle Name</label>
                        <input type="text" id="middleInitial" name="middleInitial" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label for="lastName" class="block text-sm text-gray-600">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                <!-- Date of Birth and Gender -->
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
                    <div class="lg:col-span-3">
                        <label for="dob" class="block text-sm text-gray-600">Date of Birth</label>
                        <div class="grid grid-cols-3 gap-2">
                            <input type="text" id="dobMonth" name="dobMonth" placeholder="Month" class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <input type="text" id="dobDay" name="dobDay" placeholder="Day" class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <input type="text" id="dobYear" name="dobYear" placeholder="Year" class="border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>
                    </div>

                    <div>
                        <label for="gender" class="block text-sm text-gray-600">Gender</label>
                        <select id="gender" name="gender" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Address -->
                <div>
                    <label for="address" class="block text-sm text-gray-600">Address</label>
                    <div class="grid grid-cols-1 lg:grid-cols-6 gap-2">
                        <input type="text" id="addressHouse" name="addressHouse" placeholder="House No." class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <input type="text" id="addressStreet" name="addressStreet" placeholder="Street Name" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <input type="text" id="addressBarangay" name="addressBarangay" placeholder="Barangay" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <input type="text" id="addressCity" name="addressCity" placeholder="City" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <input type="text" id="addressProvince" name="addressProvince" placeholder="Province" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <input type="text" id="addressZip" name="addressZip" placeholder="Zip Code" class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3 bg-[#011B33] text-white rounded-md hover:bg-blue-600 transition">Next Step</button>

                <!-- General Error -->
                <div id="formErrorMessage" class="text-red-500 text-sm hidden">
                    Please fill out all fields.
                </div>
            </form>
        </div>
    </section>

    <script>
        // This code serves as a check if clicks the button "Next Step" without filling up the required fields.
        document.querySelector('form').addEventListener('submit', function(event) {
            const requiredFields = [
                'firstName', 
                'middleInitial', 
                'lastName', 
                'dobMonth', 
                'dobDay', 
                'dobYear', 
                'gender', 
                'addressHouse', 
                'addressStreet', 
                'addressBarangay', 
                'addressCity', 
                'addressProvince', 
                'addressZip'
            ];
            let isValid = true;

            requiredFields.forEach(function(field) {
                const input = document.getElementById(field);
                if (input && !input.value.trim()) {
                    isValid = false;
                    input.classList.add('border-red-500'); // Highlight the field
                } else if (input) {
                    input.classList.remove('border-red-500'); // Remove highlight if valid
                }
            });

            if (!isValid) {
                // Prevent form submission
                event.preventDefault();
                const errorMessage = document.getElementById('formErrorMessage');
                if (errorMessage) {
                    errorMessage.textContent = 'Please fill in all required fields.';
                    errorMessage.classList.remove('hidden');
                }
            } else {
                const errorMessage = document.getElementById('formErrorMessage');
                if (errorMessage) {
                    errorMessage.textContent = '';
                    errorMessage.classList.add('hidden');
                }
            }
        });


        // This code serves as a check if the user put numbers and special characters in name, middle initial, and last name. 
        const nameFields = ['firstName', 'middleInitial', 'lastName'];
        const nameRegex = /^[a-zA-Z]+$/;

        nameFields.forEach(function(field) {
            const input = document.getElementById(field);
            if (input) {
            input.addEventListener('input', function() {
                if (!nameRegex.test(input.value)) {
                input.classList.add('border-red-500');
                const errorMessage = document.getElementById('formErrorMessage');
                if (errorMessage) {
                    errorMessage.textContent = 'Names cannot contain numbers or special characters.';
                    errorMessage.classList.remove('hidden');
                }
                } else {
                input.classList.remove('border-red-500');
                const errorMessage = document.getElementById('formErrorMessage');
                if (errorMessage) {
                    errorMessage.textContent = '';
                    errorMessage.classList.add('hidden');
                }
                }
            });
            }
        });




    </script>

</body>
</html>
