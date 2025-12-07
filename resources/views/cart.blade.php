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
        body {
            background:white;
        }
        .header {
            background: #1e1e2d;
            color: white;
            padding: 15px 30px;
        }
        .section-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
        .btn-custom {
            background: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background: #218838;
        }
    </style>
</head>

<body>
 

    @include('layouts.header')
<div class="container py-5">

    <h2 class="mb-4 text-center">Special Orders & Contract Farming</h2>
    <p class="text-center mb-5 text-muted">Order bulk vegetables or request long-term farming contracts</p>

    <div class="row g-4">

 <!-- Benefits Section (left Side) -->
        <div class="col-md-6">
            <div class="section-card">
                <h4>✔ Benefits of Contract Farming</h4>
                <ul class="mt-3" style="line-height: 1.8;">
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

    <!-- Contract Farming Form (right Side) -->
        <div class="col-md-6">
            <div class="section-card">
                <h4>🌾 Contract Farming Request</h4>
                <p class="text-muted">Partner with us to grow vegetables on a contracted basis.</p>
                <form method="POST" action="{{ route('contractfarming') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Business Name</label>
                        <input type="text" name="businessname" class="form-control" placeholder="Hotel / Restaurant Name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" name="contact" class="form-control" placeholder="Enter Mobile Number" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Vegetable to Grow</label>
                        <input type="text" name="togrow" class="form-control" placeholder="e.g., Cauliflower, Beans..." required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contract Duration</label>
                        <select name="duration" class="form-select">
                            <option>3 Months</option>
                            <option>6 Months</option>
                            <option>1 Year</option>
                            <option>2 Years</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Expected Monthly Supply (Kg)</label>
                        <input type="number" name="monthlysupply" class="form-control" placeholder="Enter amount" required>
                    </div>

                    <button class="btn btn-custom w-100">Apply for Contract Farming</button>

                </form>
            </div>
        </div>


    </div>
</div>


    @include('layouts.footer')
      @include('layouts.copyright')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
