document.addEventListener('DOMContentLoaded', function() {
    // Handle partner type selection from buttons
    document.querySelectorAll('[data-partner-type]').forEach(button => {
        button.addEventListener('click', function() {
            const partnerType = this.getAttribute('data-partner-type');
            const partnerTypeSelect = document.getElementById('partnerType');
            if (partnerTypeSelect) {
                partnerTypeSelect.value = partnerType;
                
                // Scroll to form after a short delay to ensure the value is set
                setTimeout(() => {
                    const formSection = document.getElementById('partner-form');
                    if (formSection) {
                        formSection.scrollIntoView({ behavior: 'smooth' });
                        
                        // Focus on the first form field for better UX
                        const firstInput = formSection.querySelector('input, select, textarea');
                        if (firstInput) {
                            firstInput.focus();
                        }
                    }
                }, 100);
            }
        });
    });

    // Form validation and submission
    const partnerForm = document.getElementById('partnerForm');
    if (partnerForm) {
        // Handle form submission
        partnerForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            // Reset previous messages
            const existingAlert = this.previousElementSibling;
            if (existingAlert && existingAlert.classList.contains('alert')) {
                existingAlert.remove();
            }
            
            // Basic form validation
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                }
            });
            
            // Email validation
            const emailField = this.querySelector('input[type="email"]');
            if (emailField && emailField.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value.trim())) {
                    emailField.classList.add('is-invalid');
                    isValid = false;
                }
            }
            
            if (!isValid) {
                // Scroll to first invalid field
                const firstInvalid = this.querySelector('.is-invalid');
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstInvalid.focus();
                }
                return;
            }
            
            // Show loading state
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...';
            
            try {
                // Convert form data to URL-encoded string
                const formData = new FormData(this);
                const formDataObj = {};
                formData.forEach((value, key) => formDataObj[key] = value);
                const formBody = new URLSearchParams(formDataObj).toString();
                
                // Submit form via AJAX
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formBody,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                    },
                    credentials: 'same-origin'
                });

                // Check if response is OK
                if (!response.ok) {
                    const errorText = await response.text();
                    console.error('Server responded with status:', response.status, errorText);
                    throw new Error(`Server error: ${response.status} ${response.statusText}`);
                }

                // Check if response is JSON
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    const errorText = await response.text();
                    console.error('Expected JSON but got:', contentType, errorText);
                    throw new Error('Invalid response format from server');
                }
                
                const data = await response.json();
                
                if (!data) {
                    throw new Error('No data received from server');
                }
                
                console.log('Server response:', data);
                
                // Remove any existing alerts
                const existingAlerts = document.querySelectorAll('.form-alert');
                existingAlerts.forEach(alert => alert.remove());
                
                // Create alert element
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${data.success ? 'success' : 'danger'} mt-4 form-alert`;
                alertDiv.role = 'alert';
                
                // Determine the message to show
                let message = data.message || (data.success 
                    ? 'Your request has been submitted successfully! Our team will contact you soon.' 
                    : 'An error occurred. Please try again.');
                
                // Create alert content with better styling
                alertDiv.innerHTML = `
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                            <i class="bi ${data.success ? 'bi-check-circle-fill' : 'bi-exclamation-triangle-fill'} fs-4"></i>
                        </div>
                        <div>
                            <h5 class="alert-heading">${data.success ? 'Thank You!' : 'Error'}</h5>
                            <p class="mb-0">${message}</p>
                        </div>
                    </div>
                `;
                
                // Insert alert before form
                this.parentNode.insertBefore(alertDiv, this);
                
                // Scroll to alert
                alertDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
                
                // Reset form on success
                if (data.success) {
                    this.reset();
                    this.classList.remove('was-validated');
                    this.querySelectorAll('.is-valid, .is-invalid').forEach(el => {
                        el.classList.remove('is-valid', 'is-invalid');
                    });
                }
                
            } catch (error) {
                console.error('Error:', error);
                const errorAlert = document.createElement('div');
                errorAlert.className = 'alert alert-danger mt-4';
                errorAlert.role = 'alert';
                errorAlert.innerHTML = `
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <div>An error occurred while submitting the form. Please try again later.</div>
                    </div>
                `;
                this.parentNode.insertBefore(errorAlert, this);
                errorAlert.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } finally {
                // Reset button state
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="bi bi-send-fill me-2"></i>Submit Partner Request';
            }
        });
        
        // Real-time validation for required fields
        partnerForm.querySelectorAll('[required]').forEach(field => {
            field.addEventListener('input', function() {
                if (this.value.trim()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                }
            });
        });
        
        // Real-time email validation
        const emailField = document.getElementById('email');
        if (emailField) {
            emailField.addEventListener('input', function() {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (this.value.trim() && !emailRegex.test(this.value.trim())) {
                    this.classList.add('is-invalid');
                    this.classList.remove('is-valid');
                } else if (this.value.trim()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid', 'is-invalid');
                }
            });
        }
    }
});
