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
<style>
    .product-card {
    position: relative;
    padding-bottom: 40px; /* space so text does not overlap */
}

.posted-time {
    position: absolute;
    bottom: 10px;
    right: 10px;
    font-size: 13px;
    color: #6c757d; /* muted text */
}
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.header')

    <!-- Hero Section with Text and Carousel Start -->
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Text Section (40%) -->
                <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                    <h1 class="display-5 fw-bold mb-4" style="font-size: 3.5rem;color: green; margin-bottom: 1rem;line-height: 1.2;">Fresh Exotic Vegetables From All India</h1>
                    <p class="lead mb-4"> Your trusted source for premium exotic and Chinese vegetables. Fresh, organic, and delivered with care.</p>
                   
                    </div>
                <!-- Carousel Section (60%) -->
                <div class="col-lg-7 col-md-12">
                    <div class="hero-carousel owl-carousel">
                        <div class="item">
                            <img class="img-fluid rounded" src="images/celeryFarm.webp" alt="Celery">
                        </div>
                        <div class="item">
                            <img class="img-fluid rounded" src="images/BroccoliFarm.webp" alt="Broccoli">
                        </div>
                        <div class="item">
                            <img class="img-fluid rounded" src="images/CherrytomatoFarm.webp" alt="Cherry Tomato">
                        </div>
                        <div class="item">
                            <img class="img-fluid rounded" src="images/parsleyFarm.webp" alt="Parsley">
                        </div>
                        <div class="item">
                            <img class="img-fluid rounded" src="images/zucchiniFarm.webp" alt="Zucchini">
                        </div>
                    </div>
                    <!-- View All Button -->
                    <div class="text-center mt-4">
                        <a href="{{ route('product') }}" class="btn btn-danger px-4 py-2 fw-bold">
                            View All
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section with Text and Carousel End -->


<!-- Products Cards Section Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold mb-3" style="color:#1b5e20;">Today's Available Vegetables</h2>
        </div>
        <div class="row g-4">
            @foreach($vegetables as $veg)

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="product-card" onclick="location.href='{{ route('orderFormPage', [$veg->admin_id, $veg->vegetable_id ]) }}'">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('images/' . $veg->image) }}" alt="{{ $veg->name }}" class="card-img-top">
                    </div>
                    <div class="card-body p-4">
                       <!-- <h3>{{ $veg->admin_id}}</h3> -->
                        <h5 class="card-title fw-bold mb-2">{{ $veg->name }}</h5>
                        <p class="text mb-3">Available Stock: {{ $veg->quantity }} Kg</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-danger">{{ $veg->price }} Rs./KG</span>
                            <a href="{{ route('orderFormPage', [$veg->admin_id, $veg->vegetable_id ]) }}" class="btn btn-success mb-3">Give Order</a>
                            

                        </div>
                    </div>
                    <p class="text-muted small posted-time">
                        Posted {{ $veg->created_at->diffForHumans() }}
                        </p>
                </div>
                        

            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Products Cards Section End -->



<!-- Post Vegetable Requirement Section Start -->
<div class="container py-5" style="background-color: #f8f9fa;">
    <div class="container">

        <div class="text-center mb-4">
            <h2 class="display-6 fw-bold mb-3" style="color:#1b5e20;">Post Your Vegetable Requirement</h2>
            <p class="text-muted">Hotels, restaurants, and bulk buyers can submit their needs here.</p>
        </div>

        <!-- Two Column Layout -->
        <div class="row g-4">

            <!-- Left Info Section -->
            <div class="col-md-6">
                <div class="p-4 shadow-sm border-0 rounded-4 bg-white">

                    <h4 class="fw-bold mb-3" style="color:#1b5e20;">About This Requirement Form</h4>
                    <p class="text-muted">
                        Our Post Your Vegetable Requirement service allows hotels, restaurants, caterers,
                        and bulk buyers to quickly submit their vegetable needs directly to us.
                        Mention your required items, quantities, and delivery location — and we will
                        reach out with the best possible rates and availability.
                    </p>

                    <h5 class="fw-bold mt-4 mb-3" style="color:#1b5e20;">Advantages</h5>

                    <ul class="text-muted">
                        <li><strong>Easy & Fast Ordering:</strong> Submit all your needs in one simple form.</li>
                        <li><strong>Fresh Produce Guaranteed:</strong> Delivered farm-fresh daily.</li>
                        <li><strong>Wholesale Pricing:</strong> Best rates for bulk buyers.</li>
                        <li><strong>Custom Orders:</strong> Daily supply or one-time bulk orders supported.</li>
                        <li><strong>Reliable Delivery:</strong> Directly to your hotel or restaurant.</li>
                        <li><strong>Hassle-Free Communication:</strong> Our team contacts you quickly with all details.</li>
                    </ul>

                </div>
            </div>

            <!-- Right Form Section -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4">

                        <form action="{{ route('Specialorder') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Hotel / Restaurant Name</label>
                                <input type="text" name="business_name" class="form-control" placeholder="Hotel / Restaurant Name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Contact Number</label>
                                <input type="tel" name="contact" class="form-control" placeholder="Enter Contact Number" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Vegetable Requirements</label>
                                <textarea name="requirements" class="form-control" rows="4" placeholder="e.g., 20kg Broccoli, 10kg Cherry Tomato, etc." required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Quantity</label>
                                <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity Required" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Delivery Location</label>
                                <input type="text" name="delivery_location" class="form-control" placeholder="Enter Delivery Address" required>
                            </div>

                            <button class="btn btn-success w-100 py-2 fw-bold" type="submit">
                                Submit Requirement
                            </button>

                        </form>

                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->

    </div>
</div>
<!-- Post Vegetable Requirement Section End -->



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
