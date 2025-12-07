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
    </div>
    <!-- Spinner End -->


@include('layouts.header')

    <!-- Our Traders Section Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="display-6 fw-bold mb-2">Our Traders</h2>
                <p class="text-muted">Get in touch with our trusted traders for product enquiries and orders.</p>
            </div>

             
            <div class="row g-4">
                <!-- Trader 1 -->
                @foreach($users as $user)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="trader-card p-4 h-100 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <div class="trader-avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"><span class="input-group-text bg-primary text-white"><i class="fa fa-user"></i></span></div>
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $user->businessName }}</h5>
                                <small class="text-muted">ThangaonAgro</small>
                            </div>
                        </div>
                        <p class="mb-1"><i class="fa fa-phone text-primary me-2"></i><a href="tel:+1234567890">{{ $user->mobile }}</a></p>
                        <p class="mb-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $user->address }}</p>
                        <a class="btn btn-sm btn-outline-primary mt-auto" href="mailto:alex@example.com">Contact</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Our Traders Section End -->

    
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
</body>

</html>