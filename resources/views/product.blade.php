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

<!-- Our Products Heading Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold mb-3">Our Featured Products</h2>
            <p class="lead text-muted">Discover our premium welding products and supplies</p>
        </div>
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="img/basil.jpg" alt="Product 1" class="card-img-top">
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Premium Rod</h5>
                        <p class="card-text text-muted mb-3">High-quality welding rod suitable for all welding applications with excellent arc stability.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="img/brocoli.avif" alt="Product 2" class="card-img-top">
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Safety Equipment Kit</h5>
                        <p class="card-text text-muted mb-3">Complete safety equipment including helmet, gloves, and apron for complete protection.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="img/cherryTomato.jpg" alt="Product 3" class="card-img-top">
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">MIG Welding Wire</h5>
                        <p class="card-text text-muted mb-3">Professional-grade MIG welding wire for smooth and precise welding operations.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="card-image-wrapper">
                        <img src="img/iceberg.jpg" alt="Product 4" class="card-img-top">
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Welding Clamps Set</h5>
                        <p class="card-text text-muted mb-3">Heavy-duty welding clamps for holding and positioning workpieces securely.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Our Products end -->


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