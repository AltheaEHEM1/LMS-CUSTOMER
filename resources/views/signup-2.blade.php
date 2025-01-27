<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/tabicon.png">
    <title>Novella Sign-Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite('resources/js/Csignup2.js')
</head>
<body class="bg-[#E4ECFF] font-poppins">

    <section class="min-h-screen flex flex-col lg:flex-row items-center justify-center p-4 lg:p-0">
        <!-- Left Column (Image) -->
        <div class="w-full lg:w-[55%] bg-cover bg-center relative mb-6 lg:mb-0">
            <img src="images/signup_leftimage.jpg" alt="Background Image" class="w-full h-[300px] lg:h-screen object-cover rounded-lg lg:rounded-r-[30px] drop-shadow-lg">
            <!-- Transparent Overlay -->
            <div class="absolute inset-0 lg:w-[700px] lg:h-[800px] bg-white/5 border border-white/5 shadow-xl backdrop-blur-lg flex flex-col items-center justify-center p-6 lg:p-12 text-[#F4F7FF] rounded-[20px] lg:m-auto">
                <h1 class="text-xl lg:text-3xl font-semibold mb-2">Welcome</h1>
                <h2 class="text-2xl lg:text-4xl font-semibold">Discover your next read</h2>
                <p class="text-lg lg:text-2xl mt-2">with Novella</p>
                <p class="mt-6 lg:mt-10 text-sm lg:text-lg text-[#BBB9B9]">
                    Already have an account? 
                    <a href="login_customer" class="underline hover:text-[#011B33]">Login</a>
                </p>
            </div>
        </div>

        <!-- Right Column -->
        <div class="w-full lg:w-[45%] p-4 lg:p-12 bg-[#E4ECFF]">
            <h2 class="text-xl lg:text-3xl font-semibold text-gray-800 mb-4 text-center">Create an account</h2>
            <!-- Step Progress -->
            <div class="flex flex-col lg:flex-row justify-between items-center mb-8 space-y-4 lg:space-y-0">
                <div class="flex flex-col items-center space-y-1">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-[#011B33] text-white text-sm">1</div>
                    <p class="text-[#011B33] font-semibold text-xs">First Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Personal Information</p>
                </div>
                
                <div class="hidden lg:block lg:w-1/3 h-[2px] bg-[#011B33]"></div>
                <div class="flex flex-col items-center space-y-1 space-x-100">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-[#011B33] text-white text-sm">2</div>
                    <p class="text-[#011B33] font-semibold text-xs">Second Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Novella Account</p>
                </div>
            </div>

            <p class="text-[#011B33] font-semibold text-lg lg:text-xl mb-6">Library Information</p>

            <!-- Form -->
            <form action="{{ route('register') }}" method="POST" class="space-y-6" id="signupForm">
                @csrf
                
                <!-- Hidden fields for step 1 data -->
                <input type="hidden" name="firstName" value="{{ $stepOneData['firstName'] ?? '' }}">
                <input type="hidden" name="middleInitial" value="{{ $stepOneData['middleInitial'] ?? '' }}">
                <input type="hidden" name="lastName" value="{{ $stepOneData['lastName'] ?? '' }}">
                <input type="hidden" name="dobMonth" value="{{ $stepOneData['dobMonth'] ?? '' }}">
                <input type="hidden" name="dobDay" value="{{ $stepOneData['dobDay'] ?? '' }}">
                <input type="hidden" name="dobYear" value="{{ $stepOneData['dobYear'] ?? '' }}">
                <input type="hidden" name="gender" value="{{ $stepOneData['gender'] ?? '' }}">
                <input type="hidden" name="addressHouse" value="{{ $stepOneData['addressHouse'] ?? '' }}">
                <input type="hidden" name="addressStreet" value="{{ $stepOneData['addressStreet'] ?? '' }}">
                <input type="hidden" name="addressBarangay" value="{{ $stepOneData['addressBarangay'] ?? '' }}">
                <input type="hidden" name="addressCity" value="{{ $stepOneData['addressCity'] ?? '' }}">
                <input type="hidden" name="addressProvince" value="{{ $stepOneData['addressProvince'] ?? '' }}">
                <input type="hidden" name="addressZip" value="{{ $stepOneData['addressZip'] ?? '' }}">

                <div class="grid grid-row-4 lg:grid-row-4 gap-4">
                    <!-- Username -->
                    <div class="w-[80%]">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Enter your username" id="username" name="username" required class="w-full mt-1 border border-[#011B33] rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <p id="usernameError" class="text-red-500 text-sm hidden error-message">Username is required.</p>
                    </div>

                    <!-- Email -->
                    <div class="w-[80%]">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                        <input type="email" placeholder="Enter your email" id="email" name="email" required class="w-full mt-1 border border-[#011B33] rounded-md p-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <p id="emailError" class="text-red-500 text-sm hidden">Email is required.</p>
                        <p id="emailErrorInvalid" class="text-red-500 text-sm hidden error-message">Please enter a valid email address.</p>
                    </div>

                    <!-- Password -->
                    <div class="w-[80%] relative">
                        <label for="passwordField" class="block text-sm font-medium text-gray-700">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative w-full mt-1">
                            <input 
                                type="password" 
                                placeholder="Enter your password" 
                                id="passwordField" 
                                name="password" 
                                required 
                                class="w-full border border-[#011B33] rounded-md p-2 pr-10 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <!-- Toggle Icon -->
                            <span 
                                id="togglePassword" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 hover:text-gray-700">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="passwordError">Password is required.</p>
                    </div>

                    <!-- Confirm Password -->
                    <div class="w-[80%] relative">
                        <label for="confirmPasswordField" class="block text-sm font-medium text-gray-700">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative w-full mt-1">
                            <input 
                                type="password" 
                                placeholder="Enter your password again" 
                                id="confirmPasswordField" 
                                name="confirmPassword" 
                                required 
                                class="w-full border border-[#011B33] rounded-md p-2 pr-10 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <!-- Toggle Icon -->
                            <span 
                                id="toggleConfirmPassword" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 hover:text-gray-700">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="confirmPasswordError">Passwords do not match.</p>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="w-[80%]">
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="terms" 
                                name="terms" 
                                required 
                                class="w-4 h-4 border border-[#011B33] rounded focus:ring-2 focus:ring-blue-500">
                            <label for="terms" class="ml-2 text-sm text-gray-700">
                                I agree to the <a href="#" id="termsLink" class="text-blue-500 hover:underline">Terms and Conditions</a>.
                            </label>
                        </div>
                        <p id="termsError" class="text-red-500 text-sm hidden">You must agree to the terms and conditions.</p>
                    </div>

                    <!-- General Error -->
                    <div id="formErrorMessage" class="text-red-500 text-sm hidden">
                        Please fill out all fields.
                    </div>
                    <!-- Single Field Error -->
                    <div id="singleFieldErrorMessage" class="text-red-500 text-sm hidden">
                        Please fill out the missing field.
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end space-x-5"> 
                    <button type="submit" class="w-1/4 py-3 bg-[#011B33] text-white rounded-md hover:bg-blue-600 transition text-center">Register</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Terms and Conditions Modal -->
    <div id="termsModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] max-w-2xl">
            <h2 class="text-xl font-semibold mb-4">Terms and Conditions</h2>
            <div class="max-h-[60vh] overflow-y-auto">
                <p class="text-sm text-gray-700">
                    By using Novella, you agree to the following terms and conditions:
                </p>
                <ul class="list-disc list-inside mt-2 text-sm text-gray-700">
                    <li>Your data will be collected and used to improve your experience.</li>
                    <li>We will not share your data with third parties without your consent.</li>
                    <li>You can request to delete your data at any time.</li>
                    <li>We reserve the right to update these terms and conditions.</li>
                </ul>
            </div>
            <div class="mt-6 flex justify-end">
                <button id="closeTermsModal" class="px-4 py-2 bg-[#011B33] text-white rounded-md hover:bg-blue-600">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Open Terms and Conditions Modal
        document.getElementById('termsLink').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior
            document.getElementById('termsModal').classList.remove('hidden');
        });

        // Close Terms and Conditions Modal
        document.getElementById('closeTermsModal').addEventListener('click', function () {
            document.getElementById('termsModal').classList.add('hidden');
        });

        // Close modal when clicking outside
        document.getElementById('termsModal').addEventListener('click', function (e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
</body>
</html>