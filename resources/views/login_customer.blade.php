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

<body class="bg-[#011b33]">
    <section class="min-h-screen flex items-center justify-center">
        <!-- Login container -->
        <div class="flex w-full min-h-screen">
            <!-- Form -->
            <div class="w-1/2 flex items-center justify-center flex-col text-center text-white">
                <!-- Logo image -->
                <img src="./images/logo_login.png" alt="library logo" class="w-1/2 mb-6">
                
                <!-- Heading and paragraph -->
                <p class="text-3xl font-semibold mb-2" style="font-family: 'Poppins', sans-serif;">Sign In</p>
                <p class="text-lg mb-4" style="font-family: 'Poppins', sans-serif;">Please enter your account details.</p>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-3 rounded mb-4">
                        <ul class="list-disc ml-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Sign In Form -->
                <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm space-y-4">
                    @csrf <!-- CSRF Protection -->

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 text-left">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            value="{{ old('email') }}"
                            class="mt-1 p-3 w-full rounded-md border border-gray-300 focus:ring-[#011b33] focus:border-[#011b33] text-black" required>
                    </div>

                    <!-- Password Input -->
                    <div class="relative">
                        <label for="password" class="block text-sm font-medium text-gray-300 text-left">
                            Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            class="mt-1 p-3 w-full rounded-md border border-gray-300 focus:ring-[#011b33] focus:border-[#011b33] text-black" required>
                        
                        <!-- Eye icon to toggle password visibility -->
                        <span class="absolute top-2/3 right-3 transform -translate-y-1/2 cursor-pointer text-gray-500" id="togglePassword">
                            <i class="fas fa-eye text-lg"></i>
                        </span>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="text-sm text-right">
                        <a href="#" class="text-blue-500 hover:text-blue-700">Forgot Password?</a>
                    </div>

                    <!-- Sign In Button -->
                    <button type="submit" class="w-full py-3 bg-white text-black rounded-md hover:bg-[#034b72] hover:text-white transition duration-300">
                        Log In
                    </button>
                </form>
            </div>

            <!-- Image side -->
            <div class="w-1/2 overflow-hidden relative" style="border-top-left-radius: 40px; border-bottom-left-radius: 40px;">
                <!-- Background Image -->
                <img 
                    src="./images/login.jpg" 
                    alt="library bg image" 
                    class="w-full h-full object-cover"
                >

                <div class="absolute inset-0 flex items-start justify-center pt-16"> 
                    <!-- Overlay Container -->
                    <div class="bg-[#011b33] bg-opacity-40 rounded-xl w-[70%] h-[90%] p-10 flex flex-col justify-start items-center"> 
                        <!-- Text Content -->
                        <div class="text-left text-white space-y-2">
                            <p class="text-lg font-light">Welcome</p>
                            <h1 class="text-3xl font-bold">Discover your next read</h1>
                            <h2 class="text-xl font-semibold">with Novella</h2>
                        </div>
                        <!-- "Need an account?" -->
                        <div class="text-left text-white mt-auto"> 
                            Need an account? <a href="signup" class="text-blue-300 underline hover:text-blue-500">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const eyeIcon = togglePassword.querySelector('i');

        togglePassword.addEventListener('click', function () {
            // Toggle password visibility
            const isPasswordHidden = passwordField.type === 'password';
            passwordField.type = isPasswordHidden ? 'text' : 'password';

            // Toggle icon
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
