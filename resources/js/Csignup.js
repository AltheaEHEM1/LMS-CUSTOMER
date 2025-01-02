    document.querySelector('form').addEventListener('submit', function (event) {
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

        requiredFields.forEach(function (field) {
            const input = document.getElementById(field);
            if (input && !input.value.trim()) {
                isValid = false;
                input.classList.add('border-red-500'); // Highlight the field
            } else if (input) {
                input.classList.remove('border-red-500'); // Remove highlight if valid
            }

            // Ensure the error is removed on focus
            input.addEventListener('focus', function () {
                input.classList.remove('border-red-500');
            });

        });

        const errorMessage = document.getElementById('formErrorMessage');
        if (!isValid) {
            event.preventDefault();
            if (errorMessage) {
                errorMessage.textContent = 'Please fill in all required fields.';
                errorMessage.classList.remove('hidden');
            }
        } else {
            if (errorMessage) {
                errorMessage.textContent = '';
                errorMessage.classList.add('hidden');
            }
        }
    });

    // Code for name fields validation
    const nameFields = ['firstName', 'middleInitial', 'lastName'];
    const nameRegex = /^[a-zA-Z]+$/;

    nameFields.forEach(function (field) {
        const input = document.getElementById(field);
        if (input) {
            input.addEventListener('input', function () {
                const errorMessage = document.getElementById('formErrorMessage');
                if (!nameRegex.test(input.value)) {
                    input.classList.add('border-red-500');
                    if (errorMessage) {
                        errorMessage.textContent = 'Names cannot contain numbers or special characters.';
                        errorMessage.classList.remove('hidden');
                    }
                } else {
                    input.classList.remove('border-red-500');
                    if (errorMessage) {
                        input.value = input.value.toUpperCase();
                        errorMessage.textContent = '';
                        errorMessage.classList.add('hidden');
                    }
                }
            });
        }
    });

    // Code for address fields to convert input to uppercase
    const addressFields = ['addressHouse', 'addressStreet', 'addressBarangay', 'addressCity', 'addressProvince'];
    addressFields.forEach(function (field) {
        const input = document.getElementById(field);
        if (input) {
            input.addEventListener('input', function () {
                input.value = input.value.toUpperCase(); // Convert to uppercase
            });
        }
    });

    