<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - Contact Traders</title>
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
            background-color: var(--bg-light);
            color: #555;
        }

        /* Page Header - Matching Hero Section of Index */
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

        /* Trader Card - Matching Product Card Style */
        .trader-card {
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
            padding: 30px;
        }

        .trader-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: var(--primary);
        }

        .trader-avatar-wrapper {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px auto;
            position: relative;
        }

        .trader-avatar {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, #d1e7dd 0%, #e8f5e9 100%);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
            transition: transform 0.3s ease;
        }

        .trader-card:hover .trader-avatar {
            transform: scale(1.1) rotate(5deg);
        }

        .trader-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
            text-align: center;
        }

        .trader-badge {
            display: inline-block;
            background-color: #e8f5e9;
            color: var(--primary);
            font-size: 0.8rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 50px;
            margin-bottom: 20px;
            text-align: center;
            align-self: center;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            color: #555;
            font-size: 0.95rem;
        }

        .info-item i {
            color: var(--primary);
            margin-top: 4px;
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }

        .info-item a {
            color: #555;
            text-decoration: none;
            transition: color 0.2s;
        }

        .info-item a:hover {
            color: var(--primary);
        }

        .btn-contact-custom {
            margin-top: auto;
            background-color: var(--primary);
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(25, 135, 84, 0.2);
        }

        .btn-contact-custom:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(25, 135, 84, 0.3);
            color: #fff;
        }

        /* Section Title Decoration */
        .section-decoration {
            width: 60px; 
            height: 3px; 
            background: var(--primary); 
            margin: 15px auto;
            border-radius: 2px;
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
            <h1 class="page-title animated slideInDown">Our Trusted Traders</h1>
            <p class="page-subtitle animated slideInDown">
                Connect directly with our verified partners for bulk orders, contract farming, and consistent supply of premium vegetables.
            </p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Traders Section Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <span class="text-success fw-bold text-uppercase ls-wide">Verified Partners</span>
                <h2 class="display-5 fw-bold mt-2" style="color: #2c3e50;">Connect with Traders</h2>
                <div class="section-decoration"></div>
            </div>
             
            <div class="row g-4 justify-content-center">
                @foreach($users as $index => $user)
                <!-- Trader Card {{ $index + 1 }} -->
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ ($index % 3) + 1 }}s">
                    <div class="trader-card">
                        
                        <!-- Avatar -->
                        <div class="trader-avatar-wrapper">
                            <div class="trader-avatar">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>

                        <!-- Name & Badge -->
                        <h3 class="trader-name">{{ $user->businessName }}</h3>
                        <span class="trader-badge">Verified Partner</span>

                        <!-- Info -->
                        <div class="mb-4">
                            <div class="info-item">
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <span class="d-block text-muted small">Mobile</span>
                                    <a href="tel:{{ $user->mobile }}" class="fw-bold">{{ $user->mobile }}</a>
                                </div>
                            </div>
                            <div class="info-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <span class="d-block text-muted small">Location</span>
                                    <span>{{ $user->address }}</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <a class="btn-contact-custom" href="mailto:contact@example.com">
                            <i class="fas fa-envelope me-2"></i> Contact Trader
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            @if(isset($users) && count($users) == 0)
                <div class="text-center py-5">
                    <p class="text-muted">No traders found at the moment.</p>
                </div>
            @endif

        </div>
    </div>
    <!-- Traders Section End -->

    
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