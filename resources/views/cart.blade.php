<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - Contract Farming</title>
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

        /* Card Styles */
        .custom-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.03);
            height: 100%;
        }

        .section-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        /* Benefits List */
        .benefits-list li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 15px;
            list-style: none;
            color: #555;
            font-size: 1.05rem;
        }

        .benefits-list li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--primary);
            position: absolute;
            left: 0;
            top: 4px;
        }

        /* Form Styles */
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }
        
        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            background-color: #fff;
            color: #555;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
        }

        .btn-submit {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.3);
            color: white;
        }

    </style>
</head>

<body>
    
    @include('layouts.header')

    <!-- Page Header -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="page-title animated slideInDown">Contract Farming</h1>
            <p class="page-subtitle animated slideInDown">
                Secure a consistent supply of premium vegetables by partnering with us for long-term contract farming.
            </p>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container py-5">
        <div class="row g-5">

            <!-- Benefits Section (Left) -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="custom-card">
                    <h3 class="section-title"><i class="fas fa-handshake text-success me-2"></i> Why Partner With Us?</h3>
                    <ul class="benefits-list p-0 m-0">
                        <li>Daily fresh & consistent vegetable supply</li>
                        <li>Customized crop production as per your menu</li>
                        <li>Stable pricing with no market fluctuations</li>
                        <li>Guaranteed premium quality & hygiene</li>
                        <li>Saves time, labour & transport cost</li>
                        <li>Direct partnership with reliable farmers</li>
                        <li>Organic or low-chemical growing options</li>
                        <li>Bulk supply available for events & seasons</li>
                        <li>Full transparency – farm to kitchen delivery</li>
                        <li>Supports sustainable and eco-friendly sourcing</li>
                    </ul>
                </div>
            </div>

            <!-- Contract Farming Form (Right) -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="custom-card bg-white">
                    <h3 class="section-title"><i class="fas fa-file-signature text-success me-2"></i> Submit Request</h3>
                    <p class="text-muted mb-4">Fill out the details below to initiate a contract farming agreement.</p>
                    
                    <form method="POST" action="{{ route('contractfarming') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Business Name</label>
                            <input type="text" name="businessname" class="form-control" placeholder="e.g. Grand Hotel / Resort" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="text" name="contact" class="form-control" placeholder="e.g. 9876543210" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Vegetable to Grow</label>
                            <input type="text" name="togrow" class="form-control" placeholder="e.g. Cauliflower, Broccoli, Beans..." required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Contract Duration</label>
                                <select name="duration" class="form-select">
                                    <option>3 Months</option>
                                    <option>6 Months</option>
                                    <option>1 Year</option>
                                    <option>2 Years</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Monthly Supply (Kg)</label>
                                <input type="number" name="monthlysupply" class="form-control" placeholder="e.g. 500" required>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit">
                            Apply for Contract Farming <i class="fas fa-arrow-right ms-2"></i>
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>


    @include('layouts.footer')
    @include('layouts.copyright')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
