

// Toggle password visibility
        function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(fieldId + 'Icon');
    
        // Toggle the password field type
        const isPassword = field.type === "password";
        field.type = isPassword ? "text" : "password";
    
        // Toggle the icon
        if (isPassword) {
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }  }
    
    // Add event listener to the password toggle icon
    document.querySelectorAll(".password-toggle").forEach(icon => {
        icon.addEventListener("click", function () {
            const fieldId = this.dataset.fieldId;
            togglePassword(fieldId);
        });
    });


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
