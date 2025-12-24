<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - About Us</title>
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
            background-color: #fff;
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

        /* Image Styling */
        .about-img-wrapper {
            position: relative;
            padding-right: 50px; /* Space for the offset border/effect */
            padding-bottom: 50px;
        }

        .about-img {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
            z-index: 2;
        }

        .about-img-bg {
            position: absolute;
            top: 40px;
            left: 40px;
            right: 10px;
            bottom: 10px;
            background: linear-gradient(135deg, #d1e7dd 0%, #a3cfbb 100%);
            border-radius: 20px;
            z-index: 1;
        }

        /* Value List */
        .value-list li {
            padding: 10px 0;
            padding-left: 35px;
            position: relative;
            list-style: none;
            font-size: 1.05rem;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .value-list li:last-child {
            border-bottom: none;
        }

        .value-list li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--primary);
            position: absolute;
            left: 0;
            top: 14px;
        }

        /* Team Cards */
        .team-card {
            background: #fff;
            border-radius: 20px;
            border: none;
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.03);
            text-align: center;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: var(--primary);
        }

        .team-img-wrapper {
            height: 250px;
            overflow: hidden;
            background: #f8f9fa;
        }

        .team-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-card:hover .team-img-wrapper img {
            transform: scale(1.1);
        }

        .team-info {
            padding: 25px;
        }

        .team-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .team-role {
            display: inline-block;
            background-color: #e8f5e9;
            color: var(--primary);
            font-size: 0.85rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 50px;
            margin-bottom: 15px;
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

    <!-- Page Header -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="page-title animated slideInDown">About ThangaonAgro</h1>
            <p class="page-subtitle animated slideInDown">
                Connecting farms directly to your kitchen with quality, freshness, and trust.
            </p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Section Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Image Section -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="about-img-wrapper">
                        <div class="about-img-bg"></div>
                        <img src="{{ asset('images/dummyOffice.webp') }}" class="img-fluid about-img w-100" alt="Office Image">
                    </div>
                </div>

                <!-- Text Section -->
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <span class="text-success fw-bold text-uppercase ls-wide">Who We Are</span>
                    <h2 class="display-5 fw-bold mb-4" style="color: #2c3e50;">Bringing the Farm <br> Closer to You</h2>
                    <p class="lead text-muted mb-4">
                        Delivering fresh, premium, and exotic vegetables across India. We bridge the gap between farmers and bulk buyers, ensuring that only the highest quality produce reaches your doorstep.
                    </p>
                    
                    <div class="bg-light p-4 rounded-4 mb-4 border-start border-4 border-success">
                        <h5 class="fw-bold mb-3 text-dark">Our Values</h5>
                        <ul class="value-list p-0 m-0 text-secondary">
                            <li>Freshness Guaranteed Daily</li>
                            <li>Timely & Reliable Delivery</li>
                            <li>Direct from Trusted Farmers</li>
                            <li>Competitive Wholesale Pricing</li>
                            <li>Dedicated Customer Support</li>
                        </ul>
                    </div>

                    <a href="{{ route('product') }}" class="btn btn-success rounded-pill px-5 py-3 fw-bold shadow-sm">
                        Explore Our Products <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Team Section Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <span class="text-success fw-bold text-uppercase ls-wide">Team</span>
                <h2 class="display-5 fw-bold mt-2" style="color: #2c3e50;">Meet The Experts</h2>
                <div class="section-decoration"></div>
                <p class="text-muted mx-auto" style="max-width: 600px;">The dedicated people working behind the scenes to ensure fresh delivery every day.</p>
            </div>

            <div class="row g-4 justify-content-center">
                
                <!-- Team Member 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('images/dummy1.jpg') }}" alt="Rahul Sharma">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Rahul Sharma</h4>
                            <span class="team-role">Founder & CEO</span>
                            <div class="d-flex justify-content-center gap-3 mt-2">
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-card">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('images/dummy2.webp') }}" alt="Meera Raj">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Meera Raj</h4>
                            <span class="team-role">Operations Head</span>
                            <div class="d-flex justify-content-center gap-3 mt-2">
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card">
                        <div class="team-img-wrapper">
                            <img src="{{ asset('images/dummy3.jpg') }}" alt="Varun Kumar">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Varun Kumar</h4>
                            <span class="team-role">Supply Chain Manager</span>
                            <div class="d-flex justify-content-center gap-3 mt-2">
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-outline-success rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team Section End -->


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