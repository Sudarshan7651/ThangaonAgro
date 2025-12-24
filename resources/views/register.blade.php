<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        :root {
            --primary: #198754; 
            --primary-dark: #146c43;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-light);
            color: #555;
        }

        .auth-container {
            min-height: 80vh; 
            background: linear-gradient(135deg, #f0fdf4 0%, #e6fffa 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .auth-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: none;
            overflow: hidden;
            width: 100%;
            max-width: 500px;
        }

        .auth-header {
            background-color: #fff;
            padding: 30px 30px 10px;
            text-align: center;
        }

        .auth-logo {
            color: var(--primary);
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 10px;
            display: inline-block;
            text-decoration: none;
        }

        .auth-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .auth-subtitle {
            color: #888;
            font-size: 0.95rem;
        }

        .auth-body {
            padding: 30px;
        }

        .form-floating > .form-control {
            border-radius: 12px;
            border: 1px solid #dee2e6;
        }

        .form-floating > .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
        }

        .form-floating > label {
            color: #999;
        }

        .btn-register {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-register:hover {
            background-color: var(--primary-dark);
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.3);
            color: white;
            transform: translateY(-2px);
        }

        .btn-google {
            background-color: #fff;
            color: #555;
            border: 1px solid #ddd;
            padding: 12px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .btn-google:hover {
            background-color: #f8f9fa;
            border-color: #ccc;
            color: #333;
        }

        .login-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
            color: var(--primary-dark);
        }

    </style>
</head>

<body>
    
    @include('layouts.header')

    <!-- Register Section -->
    <div class="auth-container">
        <div class="container d-flex justify-content-center">
            
            <div class="auth-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="auth-header">
                    <a href="{{ route('index') }}" class="auth-logo">
                        <i class="fas fa-leaf me-2"></i>ThangaonAgro
                    </a>
                    <h5 class="auth-title">Create Account</h5>
                    <p class="auth-subtitle">Join us to start trading fresh produce</p>
                </div>

                <div class="auth-body">
                    
                    <div id="formAlert" class="alert d-none" role="alert"></div>

                    <form class="row g-3 needs-validation" id="registerForm" method="POST" action="{{route('registersave')}}" novalidate>
                        @csrf
                        
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="businessName" class="form-control" id="yourName" placeholder="Trader Name" required>
                                <label for="yourName">Trader Name / Business Name</label>
                                <div class="invalid-feedback">Please enter your name</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required>
                                <label for="mobile">Mobile Phone</label>
                                <div class="invalid-feedback">Please enter a valid mobile number</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                                <label for="address">Full Address</label>
                                <div class="invalid-feedback">Please enter your address</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                                <label for="yourPassword">Password</label>
                                <div class="invalid-feedback">Please enter a password</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                                <label for="confirmPassword">Confirm Password</label>
                                <div class="invalid-feedback" id="confirmFeedback">Please confirm your password</div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <button class="btn-register" type="submit">Create Account</button>
                        </div>

                        <div class="col-12">
                            <a href="{{ url('/auth/google') }}" class="btn-google">
                                <i class="fab fa-google text-danger me-2"></i> Register with Google
                            </a>
                        </div>
                        
                        <div class="col-12 text-center mt-3">
                            <p class="small mb-0">Already have an account? <a href="{{route('login')}}" class="login-link">Log in</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Register Section End -->


    @include('layouts.footer')
    @include('layouts.copyright')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top rounded-circle shadow"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        // Client-side Bootstrap validation + password match
        (function () {
            'use strict'
            
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation');

            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    
                    var pw = document.getElementById('yourPassword');
                    var cpw = document.getElementById('confirmPassword');
                    var confirmFeedback = document.getElementById('confirmFeedback');

                    // Reset Match Validity
                    cpw.setCustomValidity('');

                    if (pw.value !== cpw.value) {
                         cpw.setCustomValidity('Passwords do not match');
                         confirmFeedback.textContent = 'Passwords do not match.';
                    } else {
                        confirmFeedback.textContent = 'Please confirm your password';
                    }

                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add('was-validated');
                }, false)
            })
        })()
    </script>
</body>

</html>