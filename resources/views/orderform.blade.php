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

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


<style>
    .order-container {
    max-width: 950px;
    margin: auto;
}

.order-card {
    border-radius: 12px black;
    overflow: hidden;
    border: 1px solid #e0e0e0;
    padding: 25px;
}

/* Left + Right Layout */
.order-flex {
    display: flex;
    gap: 25px;
}

/* Left Side — Vegetable Info */
.veg-box {
    width: 25%; 
    background: #f9f9f9;
    border-radius: 12px;
    padding: 20px;
}

.veg-box img {
    width: 100%;
    height: 200px;
    border-radius: 12px;
    object-fit: cover;
    margin-bottom: 30px;
}

.veg-text h5 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

/* Right Side — Form */
.form-box {
    width: 50%;
    padding:20px;
     border-radius:12px black;
    border: 1px solid #e0e0e0;
}

.form-box h4 {
    font-weight: bold;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    border-radius: 6px;
    padding: 10px;
    border: 1px solid #ccc;
}

.button-group {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.btn-submit {
    background: green;
    color: white;
    border: none;
    padding: 12px 15px;
    border-radius: 6px;
    font-weight: bold;
}

.btn-back {
    background: #444;
    color: white;
    padding: 12px 15px;
    border-radius: 6px;
    text-decoration: none;
}

/* 📱 Responsive Mobile View */
@media (max-width: 768px) {
    .order-flex {
        flex-direction: column;
    }

    .veg-box,
    .form-box {
        width: 100%;
    }
}

</style>
</head>

<body>
    @include('layouts.header')

 <div class="order-card">

    <div class="order-flex">

        

        <!-- RIGHT SIDE: Form -->
        <div class="form-box">

            <h4>Your Details</h4>

            <form action="{{ route('storeOrder') }}" method="POST">
                @csrf

            
                <h1>{{$veg->admin_id}}</h1>

                <input type="hidden" name="admin_id" value="{{ $veg->admin_id }}">
                <input type="hidden" name="vegetable_id" value="{{ $veg->vegetable_id }}">

                <div class="form-group">
                    <label>Business Name <span style="color:red">*</span></label>
                    <input type="text" name="businessname" required>
                </div>

                <div class="form-group">
                    <label>Contact Number <span style="color:red">*</span></label>
                    <input type="text" name="contact" required>
                </div>

                <div class="form-group">
                    <label>Delivery Location <span style="color:red">*</span></label>
                    <textarea name="delivery_location" rows="3" required></textarea>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn-submit">✓ Place Order</button>
                    <a href="{{ route('index') }}" class="btn-back">← Back</a>
                </div>

            </form>
        </div>

    </div>

</div>


@include('layouts.footer')
@include('layouts.copyright')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
