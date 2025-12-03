@extends('layouts.auth')
@section('title', 'Sign up')

@section('content')
@push('styles')
<style>
    .col-lg-5.login-part{
        width: 100% !important;
    }
</style>
@endpush
<div class="auth-wrapper">
    <div class="auth-card">

        <!-- Left Side - Visual & Information -->
        <div class="auth-visual">
            <h2>Join <span>Blood App</span> ❤️</h2>
            <p>Create your account and become a life-saver in our community of donors.</p>
            
            <ul class="features-list">
                <li>
                    <i class="fas fa-tint"></i>
                    <div>
                        <h5>Save Lives</h5>
                        <p>Your donation can save up to 3 lives</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-bell"></i>
                    <div>
                        <h5>Instant Notifications</h5>
                        <p>Get alerts when your blood type is needed</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <h5>Secure & Private</h5>
                        <p>Your data is protected with encryption</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-users"></i>
                    <div>
                        <h5>Community Support</h5>
                        <p>Join thousands of donors across the country</p>
                    </div>
                </li>
            </ul>
            
            <div class="mt-4">
                <p class="mb-0"><i class="fas fa-check-circle me-2"></i> Already have an account?
                    <br> 
                    <a href="{{ route('user.login') }}" class="btn btn-outline-light mt-3" style="border-width: 2px;">
                        <i class="fas fa-sign-in-alt me-2"></i> Sign In Now
                    </a>
                </p>
                
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="auth-form">
            <div class="auth-header">
                <h2>Create Your Account</h2>
                <p>Fill in your details to join our donor network</p>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation">
                
                <!-- Name -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" required>
                    </div>
                </div>

                <!-- Optional Phone -->
                <div class="col-md-6">
                    <label for="optional_number" class="form-label">Alternative Number</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="text" class="form-control" id="optional_number" placeholder="Optional phone number">
                    </div>
                </div>

                <!-- Present Address -->
                <div class="col-md-12">
                    <label for="present_address" class="form-label">Present Address <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-home"></i></span>
                        <textarea class="form-control" id="present_address" rows="2" placeholder="Enter your complete address" required></textarea>
                    </div>
                </div>

                <!-- Blood Group -->
                <div class="col-md-5">
                    <label for="blood_group" class="form-label">Blood Group <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-tint"></i></span>
                        <select class="form-select" id="blood_group" required>
                            <option value="">Select Blood Group</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                    </div>
                </div>

                <!-- Weight -->
                <div class="col-md-3">
                    <label for="weight" class="form-label">Weight (kg) <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-weight"></i></span>
                        <input type="text" class="form-control" id="weight" placeholder="00.00" required>
                        <span class="input-group-text">kg</span>
                    </div>
                </div>

                <!-- Last Donate -->
                <div class="col-md-4">
                    <label for="last_blood_donate" class="form-label">Last Blood Donation <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        <input type="date" class="form-control" id="last_blood_donate">
                    </div>
                </div>

                <!-- Photo Upload -->
                <div class="col-md-12">
                    <label class="form-label">Profile Photo</label>
                    <div class="file-upload-container">
                        <label for="photo" class="file-upload-label">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <span>Click to upload profile photo</span>
                            <small>JPG, PNG or GIF (Max 2MB)</small>
                        </label>
                        <input type="file" class="form-control" id="photo" accept="image/*">
                    </div>
                    
                    <div class="image-preview" id="imagePreviewContainer">
                        <p class="text-muted mb-2">Profile Preview:</p>
                        <img id="previewImage" src="" alt="Profile Preview">
                    </div>
                </div>

                <!-- Password -->
                <div class="col-md-12">
                    <label for="loginPassword" class="form-label">Password <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Create a strong password" required>
                        <span class="input-group-text" id="toggleLoginPassword">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="col-md-12">
                    <label for="confirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" class="text-decoration-none">Terms & Conditions</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                        </label>
                        <div class="invalid-feedback">You must agree to the terms and conditions.</div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-12">
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-user-plus me-2"></i> Create Account
                    </button>
                </div>

                <!-- Login Link -->
                <div class="col-12 login-link">
                    Already have an account? <a href="{{ route('user.login') }}">Sign in here</a>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form Validation
        const form = document.getElementById('signupForm');
        const photoInput = document.getElementById('photo');
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('previewImage');
        const togglePassword = document.getElementById('toggleLoginPassword');
        
        // Real-time image preview
        photoInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            if (file) {
                // Check file size (max 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('File size must be less than 2MB');
                    this.value = '';
                    previewContainer.style.display = 'none';
                    return;
                }
                
                // Check file type
                if (!file.type.match('image.*')) {
                    alert('Please select an image file');
                    this.value = '';
                    previewContainer.style.display = 'none';
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                previewContainer.style.display = 'none';
            }
        });
        
        // Toggle password visibility
        togglePassword.addEventListener('click', function() {
            const passwordInput = document.getElementById('loginPassword');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Form submission with validation
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            event.stopPropagation();
            
            // Check form validity
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            
            // Simulate form submission
            const submitBtn = form.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Creating Account...';
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            
            // In a real application, you would submit the form data here
            // For demo purposes, we'll simulate an API call
            setTimeout(() => {
                alert('Account created successfully! Welcome to Blood App ❤️');
                
                // Reset form
                form.classList.remove('was-validated');
                form.reset();
                previewContainer.style.display = 'none';
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                
                // Redirect to login (simulated)
                // window.location.href = "{{ route('user.login') }}";
            }, 2000);
        });
        
        // Real-time validation
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('input', function() {
                if (this.checkValidity()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                }
            });
        });
        
        // Set max date for last donation to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('last_blood_donate').max = today;
    });
</script>
@endpush

@endsection