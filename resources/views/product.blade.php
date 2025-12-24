<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - Our Products</title>
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
            --primary: #198754; /* Bootstrap Success Green */
            --primary-dark: #146c43;
            --accent: #ffc107;
            --bg-light: #f8f9fa;
        }
        
        body {
            font-family: 'Outfit', sans-serif;
            color: #555;
            background-color: var(--bg-light);
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #f0fdf4 0%, #e6fffa 100%);
            padding: 60px 0;
            margin-bottom: 50px;
            text-align: center;
            border-bottom: 1px solid rgba(25, 135, 84, 0.1);
        }

        .page-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-dark);
            margin-bottom: 15px;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Section Decoration */
        .section-decoration {
            width: 60px; 
            height: 3px; 
            background: var(--primary); 
            margin: 15px auto;
            border-radius: 2px;
        }

        /* Product Card */
        .product-card {
            background: #fff;
            border-radius: 20px;
            border: none;
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
            border: 1px solid rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: var(--primary);
        }

        .card-img-wrapper {
            height: 250px;
            overflow: hidden;
            background: #f8f9fa;
            position: relative;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .card-img-wrapper img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .product-info {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }
        
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    @include('layouts.header')

    <!-- Page Header (Hero Style) -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="page-title animated slideInDown">Our Products</h1>
            <p class="page-subtitle animated slideInDown">
                Explore our premium collection of fresh, farm-picked vegetables delivered straight to your kitchen.
            </p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Grid Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <span class="text-success fw-bold text-uppercase ls-wide">Farm Fresh</span>
                <h2 class="display-5 fw-bold mt-2" style="color: #2c3e50;">Featured Products</h2>
                <div class="section-decoration"></div>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($vegetables as $index => $veg)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ ($index % 3) + 1 }}s">
                    <div class="product-card">
                        <div class="card-img-wrapper">
                            <img src="{{ asset($veg->image) }}" alt="{{ $veg->name }}">
                        </div>
                        <div class="card-body">
                            <h3 class="product-title">{{ $veg->name }}</h3>
                            <p class="product-info">
                                {{ $veg->info }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @if(isset($vegetables) && count($vegetables) == 0)
                <div class="text-center py-5">
                    <p class="text-muted">No products available at the moment.</p>
                </div>
            @endif

        </div>
    </div>
    <!-- Product Grid End -->

    
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