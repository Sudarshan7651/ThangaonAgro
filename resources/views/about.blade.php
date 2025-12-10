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



@section('title', 'About Us')

<!-- About Us Section Start -->
<div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: #1b5e20;">ThangaonAgro</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Delivering fresh, premium, and exotic vegetables across India. 
                We connect farms to your kitchen, ensuring quality, freshness, and timely delivery.
            </p>
        </div>

        <div class="row align-items-center g-5">
            <!-- Image Section -->
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('images/dummyOffice.webp') }}" class="img-fluid rounded shadow-sm" alt="Fresh Vegetables">
            </div>

            <!-- Text Section -->
            <div class="col-lg-6 col-md-12">
                <h3 class="fw-bold mb-3" style="color: #1b5e20;">Our Mission</h3>
                <p class="text-muted mb-4">
                    To provide hotels, restaurants, and bulk buyers with fresh and high-quality exotic vegetables directly from trusted farms. 
                    We aim to make vegetable supply seamless, reliable, and cost-effective.
                </p>

                <h3 class="fw-bold mb-3" style="color: #1b5e20;">Our Values</h3>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item">🌱 Freshness Guaranteed</li>
                    <li class="list-group-item">🚚 Timely Delivery</li>
                    <li class="list-group-item">🤝 Trusted Farmers & Vendors</li>
                    <li class="list-group-item">💰 Competitive Pricing</li>
                    <li class="list-group-item">💬 Easy Communication & Support</li>
                </ul>

                <a href="{{ route('product') }}" class="btn btn-success fw-bold px-4 py-2">
                    Explore Vegetables
                </a>
            </div>
        </div>

        <!-- Optional Team Section -->
        <div class="text-center mt-5 mb-4">
            <h3 class="fw-bold" style="color: #1b5e20;">Meet Our Team</h3>
            <p class="text-muted mx-auto" style="max-width: 700px;">Dedicated people behind your daily fresh vegetable delivery.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/dummy1.jpg') }}" class=" mb-3" alt="Team Member" style="width:150px;height:150px;">
                <h5 class="fw-bold">Rahul Sharma</h5>
                <p class="text-muted">Founder & CEO</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/dummy2.webp') }}" class="mb-3" alt="Team Member" style="width:150px;height:150px;">
                <h5 class="fw-bold">Meera Raj</h5>
                <p class="text-muted">Operations Head</p>
            </div> 
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/dummy3.jpg') }}" class=" mb-3" alt="Team Member" style="width:150px;height:150px;">
                <h5 class="fw-bold">Varun Kumar</h5>
                <p class="text-muted">Supply Chain Manager</p>
            </div>
        </div>

    </div>
</div>
<!-- About Us Section End -->



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