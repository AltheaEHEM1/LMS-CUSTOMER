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

                <div class="hidden lg:block lg:w-1/3 h-[2px] bg-[#011B33]"></div>
                <div class="flex flex-col items-center space-y-1">
                    <div class="w-6 h-6 flex items-center justify-center rounded-full bg-[#011B33] text-white text-sm">3</div>
                    <p class="text-[#011B33] font-semibold text-xs">Third Step</p>
                    <p class="text-gray-500 font-medium text-xs text-center">Account Information</p>
                </div>
            </div>

        <!-- Confirmation Email Section -->
        <div class="flex flex-col items-center justify-center text-center mt-12 bg-white rounded-lg shadow-lg p-8">
            <!-- Icon -->
            <div class="flex justify-center mb-6">
                <img src="/images/email.png" alt="Envelope Icon" class="w-12 h-12">
            </div>
            <!-- Title -->
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Verify your email address</h2>
            <!-- Instruction Text -->
            <p class="text-sm text-gray-600 mb-6">
                In order to start using your account, you need to confirm your email address.
            </p>
            <!-- Verify Button -->
            <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                Verify Email Address
            </button>
            <!-- Additional Information -->
            <p class="text-xs text-gray-500 mt-6">
                If you did not sign up for this account, you can ignore this email, and the account will be deleted.
            </p>
            
            <!-- Divider -->
            {{-- <hr class="my-6 border-gray-200"> --}}

            <!-- App Store Links -->
            {{-- <div class="flex justify-center space-x-4">
                <a href="#">
                    <img src="path-to-appstore-badge.svg" alt="App Store" class="h-10">
                </a>
                <a href="#">
                    <img src="path-to-googleplay-badge.svg" alt="Google Play" class="h-10">
                </a>
            </div> --}}

        </div>


            
        </div>
    </section>

    <script>
        document.getElementById('emailConfirmationModal').classList.remove('hidden');

    </script>



</body>
</html>
