<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novella Sign-Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

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
                    <a href="#" class="underline hover:text-[#011B33]">Login</a>
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

                <div class="hidden lg:block lg:w-1/3 h-[2px] bg-gray-300"></div>
                <div class="flex flex-col items-center space-y-1">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-gray-300 text-gray-500 text-sm">3</div>
                    <p class="text-[#011B33] font-semibold text-xs">Third Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Account Information</p>
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
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative w-full mt-1">
                            <input 
                                type="password" 
                                placeholder="Enter your password" 
                                id="password" 
                                name="password" 
                                required 
                                class="w-full border border-[#011B33] rounded-md p-2 pr-10 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            
                            <!-- Toggle Icon -->
                            <span 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 hover:text-gray-700" 
                                onclick="togglePassword('password')">
                                <img id="passwordIcon" src="images/show-password.png" class="h-5 w-5">
                            </span>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="passwordError">Password is required.</p>
                    </div>

                    <!-- Confirm Password -->
                    <div class="w-[80%] relative">
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-700">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <div class="relative w-full mt-1">
                            <input 
                                type="password" 
                                placeholder="Enter your password again" 
                                id="confirmPassword" 
                                name="confirmPassword" 
                                required 
                                class="w-full border border-[#011B33] rounded-md p-2 pr-10 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                            <!-- Toggle Icon for Confirm Password -->
                            <span 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-500 hover:text-gray-700" 
                                onclick="togglePassword('confirmPassword')">
                                <img id="confirmPasswordIcon" src="images/show-password.png" class="h-5 w-5">
                            </span>
                        </div>
                        <p class="text-red-500 text-sm mt-1 hidden" id="confirmPasswordError">Passwords do not match.</p>
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
                <div class="flex justify-end space-x-10 space-x-5"> 
                    Step 1 link (to go back)
                    <a href="part1" class="w-1/4 py-3 bg-[#011B33] text-white rounded-md hover:bg-blue-600 transition text-center">Step 1</a>
            
                    <!-- Submit Button to go to signup-3 -->
                    <button type="submit">Register</button>
                            
                </div>
            </form>
        </div>
    </section>

    <script>

        // Toggle password visibility
            function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = document.getElementById(fieldId + 'Icon');

            // Toggle the password field type
            const isPassword = field.type === "password";
            field.type = isPassword ? "text" : "password";

            // Toggle the icon
            if (isPassword) {
                icon.src = "images/hide-password.png"; // Replace with the path to your "hide" icon
            } else {
                icon.src = "images/show-password.png"; // Replace with the path to your "show" icon
            }
        }

        // Real-time input validation (optional)
                document.querySelectorAll("#signupForm input").forEach(input => {
                input.addEventListener("input", function () {
                const errorId = this.id + "Error";

                document.getElementById(errorId)?.classList.add("hidden"); // Hide specific error
                document.getElementById("emailErrorInvalid").classList.add("hidden"); // Hide general error
                document.getElementById("formErrorMessage").classList.add("hidden"); // Hide general error
                document.getElementById("singleFieldErrorMessage").classList.add("hidden"); // Hide single field error

            });
        });

    
        // Validate the form and show error messages if fields are missing
        document.getElementById("signupForm").addEventListener("submit", function (event) {
            // Get field values
            const username = document.getElementById("username").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();
            const confirmPassword = document.getElementById("confirmPassword").value.trim();

            let hasErrors = false;

            // Clear previous error messages
            document.querySelectorAll(".error-message").forEach((error) => {
                error.classList.add("hidden");
            });

            // Clear general error message
            const generalError = document.getElementById("formErrorMessage");
            generalError.classList.add("hidden");

            // Check for any empty fields
            if (!username || !email || !password || !confirmPassword) {
                formErrorMessage.textContent = "Please fill empty fields.";
                formErrorMessage.classList.remove("hidden");
                hasErrors = true;
            }

            // Validate username
            if (!username) {
                document.getElementById("usernameError").textContent = "Username is required.";
                document.getElementById("usernameError").classList.remove("hidden");
                hasErrors = true;
            } else {
                const invalidCharsPattern = /[&=+,<>]/;
                if (invalidCharsPattern.test(username)) {
                    document.getElementById("usernameError").textContent = 
                        "Username cannot contain &, =, +, comma, <, >.";
                    document.getElementById("usernameError").classList.remove("hidden");
                    hasErrors = true;
                }
            }

            // Validate email
            if (!email) {
                document.getElementById("emailError").textContent = "Email is required.";
                document.getElementById("emailError").classList.remove("hidden");
                hasErrors = true;
            } else {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    document.getElementById("emailErrorInvalid").textContent = "Invalid email format.";
                    document.getElementById("emailErrorInvalid").classList.remove("hidden");
                    hasErrors = true;
                }
            }

            // Validate password
            if (!password) {
                document.getElementById("passwordError").textContent = "Password is required.";
                document.getElementById("passwordError").classList.remove("hidden");
                hasErrors = true;
            }

            // Validate confirm password
            if (!confirmPassword) {
                document.getElementById("confirmPasswordError").textContent = 
                    "Please confirm your password.";
                document.getElementById("confirmPasswordError").classList.remove("hidden");
                hasErrors = true;
            } else if (confirmPassword !== password) {
                document.getElementById("confirmPasswordError").textContent = 
                    "Passwords do not match.";
                document.getElementById("confirmPasswordError").classList.remove("hidden");
                hasErrors = true;
            }

            // Prevent form submission if there are errors
            if (hasErrors) {
                event.preventDefault();
            }
        });



        

    </script>

</body>
</html>