
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

