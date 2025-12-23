<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - Fresh Exotic Vegetables</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Fresh Vegetables, Exotic Vegetables, Farm Fresh, Wholesale" name="keywords">
    <meta content="Premium quality exotic vegetables delivered fresh from farm to your doorstep." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">

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
            --primary: #198754; /* Bootstrap Success Green */
            --primary-dark: #146c43;
            --accent: #ffc107;
            --bg-light: #f8f9fa;
        }
        
        body {
            font-family: 'Outfit', sans-serif;
            
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #f0fdf4 0%, #e6fffa 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary-dark);
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-text {
            font-size: 1.25rem;
            color: #555;
            margin-bottom: 30px;
        }

        .hero-btn {
            background-color: var(--primary);
            color: #fff;
            padding: 12px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 135, 84, 0.3);
            text-decoration: none;
            display: inline-block;
        }
        
        .hero-btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(25, 135, 84, 0.4);
            color: #fff;
        }

        .owl-carousel .item img {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Product Cards */
        .product-card {
            background: #fff;
            border-radius: 20px;
            border: none;
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            cursor: pointer;
            position: relative;
            border: 1px solid rgba(0,0,0,0.03);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: var(--primary);
        }

        .card-image-wrapper {
            height: 220px;
            overflow: hidden;
            background: #f8f9fa;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .card-image-wrapper img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 25px;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .price-tag {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            background: #e8f5e9;
            padding: 5px 12px;
            border-radius: 8px;
        }

        .btn-order {
            width: 100%;
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
            margin-top: 15px;
            background-color: #333;
            color: white;
            border: none;
            transition: 0.3s;
        }
        
        .btn-order:hover {
            background-color: var(--primary);
        }
        
        .posted-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #555;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        /* Requirements Section */
        .requirements-section {
            background-color: #f8f9fa;
            position: relative;
        }
        
        .feature-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            list-style: none;
        }
        
        .feature-list li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--primary);
            position: absolute;
            left: 0;
            top: 2px;
        }

        .form-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            background-color: #fff;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
        }

    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.header')

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Text Content -->
                <div class="col-lg-6 order-2 order-lg-1 animate__animated animate__fadeInLeft">
                    <span class="d-inline-block py-1 px-3 rounded-pill bg-success bg-opacity-10 text-success fw-bold mb-3 small border border-success border-opacity-25">
                        <i class="fas fa-leaf me-2"></i> 100% Organic & Fresh
                    </span>
                    <h1 class="hero-title">Fresh Exotic Vegetables<br>From All India</h1>
                    <p class="hero-text">Your trusted source for premium exotic and Chinese vegetables. Sourced directly from farms, delivered with care to your kitchen.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="{{ route('product') }}" class="hero-btn">
                            Explore Products <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Carousel Image -->
                <div class="col-lg-6 order-1 order-lg-2 animate__animated animate__fadeInRight">
                    <div class="hero-carousel owl-carousel">
                        <div class="item">
                            <img class="img-fluid" src="images/celeryFarm.webp" alt="Celery">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/BroccoliFarm.webp" alt="Broccoli">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/CherrytomatoFarm.webp" alt="Cherry Tomato">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/zucchiniFarm.webp" alt="Zucchini">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- Products Section -->
    <div class="container-fluid py-5">
        <div class="container py-3">
            <div class="text-center mb-5 animate__animated animate__fadeInUp">
                <span class="text-success fw-bold text-uppercase ls-wide">Our Harvest</span>
                <h2 class="display-5 fw-bold mt-2" style="color: #2c3e50;">Today's Available Vegetables</h2>
                <div style="width: 60px; height: 3px; background: #198754; margin: 15px auto;"></div>
            </div>

            <div class="row g-4">
                @foreach($vegetables as $veg)
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-card h-100" onclick="location.href='{{ route('orderFormPage', [$veg->admin_id, $veg->vegetable_id ]) }}'">
                        
                        <div class="posted-tag">
                            <i class="far fa-clock me-1"></i> {{ $veg->created_at->diffForHumans() }}
                        </div>

                        <div class="card-image-wrapper">
                            <img src="{{ asset('images/' . $veg->image) }}" alt="{{ $veg->name }}">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="product-title">{{ $veg->name }}</h5>
                            
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-light text-dark border">
                                    <i class="fas fa-box-open me-1 text-muted"></i> Stock: {{ $veg->quantity }} Kg
                                </span>
                            </div>

                            <div class="mt-auto d-flex justify-content-between align-items-center">
                                <span class="price-tag">₹{{ $veg->price }} / kg</span>
                            </div>
                            
                            <button class="btn-order">
                                <i class="fas fa-shopping-cart me-2"></i> Order Now
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach

                @if($vegetables->isEmpty())
                <div class="col-12 text-center py-5">
                    <img src="img/no-data.png" alt="No Data" style="max-width: 150px; opacity: 0.5;">
                    <p class="text-muted mt-3">No vegetables available at the moment. Please check back later.</p>
                </div>
                @endif
            </div>

             <div class="text-center mt-5">
                <a href="{{ route('product') }}" class="btn btn-outline-success rounded-pill px-5 py-2 fw-bold">View All Products</a>
            </div>
        </div>
    </div>
    <!-- Products Section End -->


    <!-- Requirements Section -->
    <div class="requirements-section py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                
                <!-- Info Column -->
                <div class="col-lg-6 wow fadeInLeft">
                    <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">Bulk Requirements? <br> <span class="text-success">We've Got You Covered!</span></h2>
                    <p class="lead text-secondary mb-4">Hotels, restaurants, and caterers can submit their custom vegetable requirements directly to us.</p>
                    
                    <div class="bg-white p-4 rounded-4 shadow-sm mb-4 border-start border-4 border-success">
                        <h5 class="fw-bold mb-3 text-dark"><i class="fas fa-star text-warning me-2"></i>Why Partner With Us?</h5>
                        <ul class="feature-list p-0 m-0 text-secondary">
                            <li><strong>Farm Fresh:</strong> Produce harvested daily for maximum freshness.</li>
                            <li><strong>Wholesale Rates:</strong> Competitive pricing for bulk orders.</li>
                            <li><strong>Consistent Supply:</strong> Reliable delivery schedules you can trust.</li>
                            <li><strong>Quality Assured:</strong> Sort & grading proceses to ensure best quality.</li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="col-lg-6 wow fadeInRight">
                    <div class="form-card">
                        <h3 class="fw-bold mb-4 text-center">Submit Requirement</h3>
                        
                        <form action="{{ route('Specialorder') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Business Name</label>
                                    <input type="text" name="business_name" class="form-control" placeholder="e.g. The Grand Hotel" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Contact Number</label>
                                    <input type="tel" name="contact" class="form-control" placeholder="e.g. 9876543210" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Quantity Needed</label>
                                    <input type="text" name="quantity" class="form-control" placeholder="e.g. 50 kg" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Delivery Location</label>
                                    <input type="text" name="delivery_location" class="form-control" placeholder="Enter complete address" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Specific Requirements</label>
                                    <textarea name="requirements" class="form-control" rows="3" placeholder="List vegetables and specific quality needs..." required></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <button class="btn btn-success w-100 py-3 rounded-3 fw-bold shadow-sm" type="submit">
                                        Send Request <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Requirements Section End -->


 @include('layouts.footer')

@include('layouts.copyright')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top rounded-circle shadow">
        <i class="bi bi-arrow-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>
