<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ThangaonAgro - Place Order</title>
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
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.03);
            height: 100%;
        }

        /* Product Styles */
        .product-img-main {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .gallery-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s;
            margin-right: 10px;
        }

        .gallery-img:hover {
            transform: scale(1.05);
        }

        .product-badge {
            background-color: #e8f5e9;
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Form Styles */
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            background-color: #fff;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
        }

        .btn-submit {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.3);
            color: white;
        }

        .btn-back {
            background-color: #f1f3f5;
            color: #495057;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 600;
            width: 100%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn-back:hover {
            background-color: #e9ecef;
            color: #212529;
        }

        /* Fullscreen Modal */
        .fullscreen-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            animation: fadeIn 0.3s ease;
        }

        .fullscreen-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .fullscreen-content {
            position: relative;
            max-width: 90%;
            max-height: 90vh;
            animation: zoomIn 0.3s ease;
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .fullscreen-img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            z-index: 10000;
        }

        .modal-close:hover {
            background: var(--primary);
            transform: rotate(90deg);
        }

        .modal-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 30px;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            user-select: none;
        }

        .modal-nav:hover {
            background: var(--primary);
            transform: translateY(-50%) scale(1.1);
        }

        .modal-prev {
            left: 30px;
        }

        .modal-next {
            right: 30px;
        }

        .image-counter {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
        }

    </style>
</head>

<body>
    
    @include('layouts.header')

    <!-- Page Header -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="page-title animated slideInDown">Complete Your Order</h1>
            <p class="page-subtitle animated slideInDown">
                Provide your details below to place a bulk order for fresh farm produce.
            </p>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container py-5">
        <div class="row g-5">
            
            <!-- Product Details Column -->
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="custom-card">
                    <h3 class="fw-bold mb-4 text-dark border-bottom pb-3">Product Summary</h3>
                    
                    @if($veg)
                        <div class="mb-4 text-center">
                            <img src="{{ asset('images/' . $veg->image) }}" class="product-img-main mb-3" alt="{{ $veg->name }}">
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="fw-bold m-0 text-dark">{{ $veg->name }}</h2>
                            <span class="product-badge"><i class="fas fa-check-circle me-1"></i> In Stock</span>
                        </div>

                        <div class="d-flex justify-content-between mb-4 bg-light p-3 rounded-3">
                            <div>
                                <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.7rem;">Price Per Kg</small>
                                <span class="fw-bold fs-5 text-dark">₹{{ $veg->price }}</span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.7rem;">Available Qty</small>
                                <span class="fw-bold fs-5 text-dark">{{ $veg->quantity }} Kg</span>
                            </div>
                        </div>

                        <!-- Gallery Section -->
                        @if($veg->images && $veg->images->count() > 0)
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 class="fw-bold m-0 text-muted">More Images</h6>
                                    <button id="viewMoreBtn" class="btn btn-sm btn-outline-success rounded-pill px-3">View More</button>
                                </div>
                                <div id="galleryImages" style="display: none;" class="mt-3">
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach($veg->images as $gallery)
                                            <img src="{{ asset('vegetable/gallery/' . $gallery->image) }}" class="gallery-img shadow-sm" alt="Gallery Image" onclick="openFullscreen(this.src)">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                    @else
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-triangle me-2"></i> Vegetable details not found.
                        </div>
                    @endif
                </div>
            </div>

            <!-- Order Form Column -->
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                <div class="custom-card">
                    <h3 class="fw-bold mb-4 text-dark border-bottom pb-3">Billing & Delivery</h3>

                    <form action="{{ route('storeOrder') }}" method="POST">
                        @csrf
                        
                        <!-- Hidden Inputs -->
                        <input type="hidden" name="admin_id" value="{{ $veg->admin_id }}">
                        <input type="hidden" name="vegetable_id" value="{{ $veg->vegetable_id }}">
                        <input type="hidden" name="invoice" value="Null">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4 rounded-3" role="alert">
                                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Business Name <span class="text-danger">*</span></label>
                                <input type="text" name="businessname" class="form-control" placeholder="e.g. Green Valley Hotel" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Contact Number <span class="text-danger">*</span></label>
                                <input type="text" name="contact" class="form-control" placeholder="e.g. 9876543210" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Delivery Location <span class="text-danger">*</span></label>
                                <textarea name="delivery_location" class="form-control" rows="4" placeholder="Enter complete delivery address including landmark..." required></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="row g-3">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn-submit">
                                            <i class="fas fa-paper-plane me-2"></i> Confirm Order
                                        </button>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ route('index') }}" class="btn-back">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- Fullscreen Image Modal -->
    <div id="fullscreenModal" class="fullscreen-modal">
        <span class="modal-close" onclick="closeFullscreen()">&times;</span>
        <span class="modal-nav modal-prev" onclick="changeImage(-1)"><i class="fas fa-chevron-left"></i></span>
        <div class="fullscreen-content">
            <img id="fullscreenImg" class="fullscreen-img" src="" alt="Fullscreen Image">
        </div>
        <span class="modal-nav modal-next" onclick="changeImage(1)"><i class="fas fa-chevron-right"></i></span>
        <div class="image-counter">
            <span id="currentImage">1</span> / <span id="totalImages">1</span>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.copyright')

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        document.getElementById('viewMoreBtn')?.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent submit if inside form
            const gallery = document.getElementById('galleryImages');
            if (gallery.style.display === "none") {
                gallery.style.display = "block";
                this.textContent = "View Less"; 
                this.classList.remove('btn-outline-success');
                this.classList.add('btn-success');
            } else {
                gallery.style.display = "none";
                this.textContent = "View More";
                this.classList.remove('btn-success');
                this.classList.add('btn-outline-success');
            }
        });

        // Fullscreen Image Functionality
        let galleryImages = [];
        let currentIndex = 0;

        // Collect all gallery images when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.gallery-img');
            galleryImages = Array.from(images).map(img => img.src);
        });

        function openFullscreen(imageSrc) {
            const modal = document.getElementById('fullscreenModal');
            const img = document.getElementById('fullscreenImg');
            
            currentIndex = galleryImages.indexOf(imageSrc);
            img.src = imageSrc;
            modal.classList.add('active');
            
            updateCounter();
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeFullscreen() {
            const modal = document.getElementById('fullscreenModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto'; // Re-enable scrolling
        }

        function changeImage(direction) {
            currentIndex += direction;
            
            // Loop around if at ends
            if (currentIndex >= galleryImages.length) {
                currentIndex = 0;
            } else if (currentIndex < 0) {
                currentIndex = galleryImages.length - 1;
            }
            
            const img = document.getElementById('fullscreenImg');
            img.style.opacity = '0';
            
            setTimeout(() => {
                img.src = galleryImages[currentIndex];
                img.style.opacity = '1';
                updateCounter();
            }, 150);
        }

        function updateCounter() {
            document.getElementById('currentImage').textContent = currentIndex + 1;
            document.getElementById('totalImages').textContent = galleryImages.length;
        }

        // Close modal on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeFullscreen();
            } else if (e.key === 'ArrowLeft') {
                changeImage(-1);
            } else if (e.key === 'ArrowRight') {
                changeImage(1);
            }
        });

        // Close modal when clicking outside the image
        document.getElementById('fullscreenModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeFullscreen();
            }
        });
    </script>
</body>

</html>