<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
     </nav>
    </div>
    </div>

    @include('layouts.header')

    <!-- Register Form Start (client-side only) -->
 <div class="container py-5">
    <section class="section register min-vh-90 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    
                    <div id="formAlert" class="alert d-none" role="alert"></div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                <p class="text-center small">Enter your details to create account</p>
                            </div>

                            <form class="row g-3 needs-validation" method="POST" action="{{route('registersave')}}">
                                @csrf
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Trader Name</label>
                                    <input type="text" name="businessName" class="form-control" id="yourName" required>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Enter Mobile No.</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile" required>
                                    <div class="invalid-feedback">Please enter a Mobile!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Adrress</label>
                                    <input type="text" name="address" class="form-control" id="address" required>
                                    <div class="invalid-feedback">Please enter an Address!</div>
                                </div>

                                
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>
                                
                                <div class="col-12">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" required>
                                    <div class="invalid-feedback" id="password_confirmation">Please confirm your password!</div>
                                </div>


                                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    // Client-side Bootstrap validation + password match (simplified)
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    var pw = document.getElementById('yourPassword').value;
                    var cpw = document.getElementById('confirmPassword').value;
                    var confirmInput = document.getElementById('confirmPassword');
                    var confirmFeedback = document.getElementById('confirmFeedback');

                    if (pw !== cpw) {
                        event.preventDefault();
                        event.stopPropagation();
                        confirmInput.classList.add('is-invalid');
                        confirmFeedback.textContent = 'Passwords do not match.';
                    } else {
                        confirmInput.classList.remove('is-invalid');
                        confirmInput.classList.add('is-valid');
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
    <!-- Register Form End -->



@include('layouts.footer')


@include('layouts.copyright')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        // Client-side Bootstrap validation + password match
        (function () {
            'use strict'
            var form = document.getElementById('registerForm');
            var formAlert = document.getElementById('formAlert');

            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();

                // reset custom alert
                formAlert.className = 'alert d-none';
                formAlert.textContent = '';

                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }

                var pw = document.getElementById('password').value;
                var cpw = document.getElementById('confirm_password').value;
                if (pw !== cpw) {
                    document.getElementById('confirm_password').classList.add('is-invalid');
                    document.getElementById('confirmFeedback').textContent = 'Passwords do not match.';
                    return;
                }

                // If all good, show a success message (client-side only)
                formAlert.className = 'alert alert-success';
                formAlert.textContent = 'Registration submitted (client-side only).';
                form.reset();
                form.classList.remove('was-validated');
            }, false)
        })();
    </script>
</body>

</html>