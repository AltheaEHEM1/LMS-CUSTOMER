<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="../images/tabicon.png">
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
                <img src="../images/logo_login.png" alt="library logo" class="w-1/2 mb-6">
                
                <!-- Heading and paragraph -->
                <p class="text-3xl font-semibold mb-2" style="font-family: 'Poppins', sans-serif;">Reset Password</p>
                <p class="text-lg mb-4" style="font-family: 'Poppins', sans-serif;">Please enter your new password.</p>

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
                <form method="POST" action="{{ route('password.reset') }}" class="w-full max-w-sm space-y-4">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <!-- Email Input -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300 text-left">
                            New Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password" name="password" placeholder="Enter your new password"
                            class="mt-1 p-3 w-full rounded-md border border-gray-300 focus:ring-[#011b33] focus:border-[#011b33] text-black" required>
                    </div>

                    <!-- Password Input -->
                    <div class="relative">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-300 text-left">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your new password"
                            class="mt-1 p-3 w-full rounded-md border border-gray-300 focus:ring-[#011b33] focus:border-[#011b33] text-black" required>
                        
                        <span class="absolute top-2/3 right-3 transform -translate-y-1/2 cursor-pointer text-gray-500" id="togglePassword">
                            <i class="fas fa-eye text-lg"></i>
                        </span>
                    </div>

                    <!-- Sign In Button -->
                    <button type="submit" class="w-full py-3 bg-white text-black rounded-md hover:bg-[#034b72] hover:text-white transition duration-300">
                        Reset Password
                    </button>
                </form>
            </div>

            <!-- Image side -->
            <div class="w-1/2 overflow-hidden relative" style="border-top-left-radius: 40px; border-bottom-left-radius: 40px;">
                <img src="../images/login.jpg" alt="library bg image" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-start justify-center pt-16"> 
                </div>
            </div>
        </div>
    </section>

    <!-- Forgot Password Modal -->
    <div id="forgotPasswordModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold text-gray-900">Reset Password</h3>
                <button id="closeModal" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Email Form -->
            <form id="resetEmailForm" class="space-y-4">
                @csrf
                <div>
                    <label for="reset-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="reset-email" name="email" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div id="resetFormMessage" class="hidden rounded-md p-4 mb-4"></div>

                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Send Reset Link
                </button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password visibility toggle
            const togglePassword = document.getElementById('togglePassword');
            const passwordField = document.getElementById('password');
            const eyeIcon = togglePassword.querySelector('i');

            togglePassword.addEventListener('click', function () {
                const isPasswordHidden = passwordField.type === 'password';
                passwordField.type = isPasswordHidden ? 'text' : 'password';
                eyeIcon.classList.toggle('fa-eye');
                eyeIcon.classList.toggle('fa-eye-slash');
            });

            // Modal elements
            const modal = document.getElementById('forgotPasswordModal');
            const forgotPasswordBtn = document.getElementById('forgotPasswordBtn');
            const closeModal = document.getElementById('closeModal');
            const resetEmailForm = document.getElementById('resetEmailForm');
            const resetFormMessage = document.getElementById('resetFormMessage');

            // Show/hide message function
            function showMessage(type, message) {
                resetFormMessage.className = `rounded-md p-4 mb-4 ${
                    type === 'success' ? 'bg-green-50 text-green-800' : 'bg-red-50 text-red-800'
                }`;
                resetFormMessage.textContent = message;
                resetFormMessage.classList.remove('hidden');
            }

            // Modal controls
            forgotPasswordBtn.addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                resetEmailForm.reset();
                resetFormMessage.classList.add('hidden');
            });

            closeModal.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            });

            // Close modal when clicking outside
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });

            // Prevent modal close when clicking inside the form
            modal.querySelector('.bg-white').addEventListener('click', function(e) {
                e.stopPropagation();
            });

            // Handle forgot password form submission
            resetEmailForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                resetFormMessage.classList.add('hidden');

                try {
                    const response = await fetch('/forgot-password', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            email: document.getElementById('reset-email').value
                        })
                    });

                    const data = await response.json();

                    if (response.ok) {
                        showMessage('success', data.message);
                        resetEmailForm.reset();
                        // Close modal after success
                        setTimeout(() => {
                            modal.classList.add('hidden');
                            document.body.style.overflow = 'auto';
                        }, 3000);
                    } else {
                        showMessage('error', data.message);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    showMessage('error', 'There was an error processing your request. Please try again.');
                }
            });
        });
    </script>
</body>
</html>