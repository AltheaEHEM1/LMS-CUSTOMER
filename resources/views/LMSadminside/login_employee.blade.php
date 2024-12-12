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

<body class="bg-[url('./images/EM_bg.png')] bg-cover bg-center bg-no-repeat bg-fixed relative">
    
     <!-- Logo image -->
     <img src="./images/logo_login.png" alt="library logo" class="w-[550px] mb-10 translate-x-[80px] translate-y-[120px]">
    
    <!-- Sign In Form -->
    <form class="w-full max-w-sm space-y-6 translate-x-[160px] translate-y-[130px]" id="SigninForm">
    <!-- Email Input -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-300 text-left">
            Email <span class="text-red-500">*</span>
        </label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
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

    <!-- log in In Button -->
    <button type="submit" class="w-full py-3 bg-white text-black rounded-md hover:bg-[#034b72] hover:text-white transition duration-300">
        Sign In
    </button>
</form>

<script>
    // Get the form and the input elements
    const form = document.getElementById('SigninForm');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const togglePasswordIcon = document.getElementById('togglePassword');
    const eyeIcon = togglePasswordIcon.querySelector('i');

    // Add event listener to handle form submission
    form.addEventListener('submit', function (e) {
        // Prevent the form from submitting if validation fails
        e.preventDefault();

        // Check if email and password are provided
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if (email === '' || password === '') {
            alert('Please enter both email and password.');
            return; // Stop form submission if validation fails
        }

        // If validation passes, navigate to the landing page
        window.location.href = '/DASHBORDandingpage_employee'; // Navigate to the new page
    });

        // Toggle password visibility
        // Get the toggle button and password field
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        // Ensure password is hidden by default
        passwordInput.type = 'password';

        // Ensure the eye icon is set to 'open eye' by default
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');

        // Toggle password visibility logic
        togglePassword.addEventListener('click', function () {
            // Check if the password is currently hidden
            const isPasswordHidden = passwordInput.type === 'password';
            passwordInput.type = isPasswordHidden ? 'text' : 'password';

            // Update the eye icon
            if (isPasswordHidden) {
                // When password becomes visible, show the closed eye icon
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                // When password is hidden, show the open eye icon
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });


</script>


</body>
</html>
