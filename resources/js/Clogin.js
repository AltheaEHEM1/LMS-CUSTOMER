document.addEventListener('DOMContentLoaded', function () {
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
    const resetFormMessage = document.getElementById('resetFormMessage');
    const resetEmailForm = document.getElementById('resetEmailForm'); // Changed from resetPasswordForm

    // Show/hide message functions
    function showMessage(type, message, isLink = false) {
        resetFormMessage.className = `rounded-md p-4 mb-4 ${type === 'success' ? 'bg-green-50 text-green-800' : 'bg-red-50 text-red-800'
            }`;

        if (isLink) {
            // Create clickable link for reset URL
            const linkElement = document.createElement('a');
            linkElement.href = message;
            linkElement.textContent = 'Click here to reset your password';
            linkElement.className = 'underline';
            linkElement.target = '_blank';
            resetFormMessage.textContent = 'Reset link generated: ';
            resetFormMessage.appendChild(linkElement);
        } else {
            resetFormMessage.textContent = message;
        }

        resetFormMessage.classList.remove('hidden');
    }

    function hideMessage() {
        resetFormMessage.classList.add('hidden');
    }

    // Modal controls
    forgotPasswordBtn.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        hideMessage();
        resetEmailForm.reset(); // Clear form when opening modal
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        hideMessage();
        resetEmailForm.reset(); // Clear form when closing modal
    });

    // Close modal when clicking outside
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            hideMessage();
            resetEmailForm.reset(); // Clear form when closing modal
        }
    });

    // Prevent modal close when clicking inside the form
    modal.querySelector('.bg-white').addEventListener('click', (e) => {
        e.stopPropagation();
    });

    // Handle forgot password form submission
    resetEmailForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        hideMessage();

        const emailInput = document.getElementById('reset-email');
        const submitButton = resetEmailForm.querySelector('button[type="submit"]');

        try {
            // Disable submit button and show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = 'Sending...';

            const response = await fetch('/forgot-password', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    email: emailInput.value
                })
            });

            const data = await response.json();

            if (response.ok) {
                if (data.reset_link) {
                    // Show the reset link as a clickable link
                    showMessage('success', data.reset_link, true);
                } else {
                    showMessage('success', data.message);
                }

                // Close modal after 5 seconds on success
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                    hideMessage();
                    resetEmailForm.reset();
                }, 5000);
            } else {
                showMessage('error', data.message || 'An error occurred. Please try again.');
            }
        } catch (error) {
            console.error('Error:', error);
            showMessage('error', 'There was an error processing your request. Please try again.');
        } finally {
            // Re-enable submit button and restore original text
            submitButton.disabled = false;
            submitButton.innerHTML = 'Send Reset Link';
        }
    });
});