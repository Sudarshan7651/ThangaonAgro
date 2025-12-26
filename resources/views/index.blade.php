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

        /* Filter Section Styles */
        .filter-section {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.04);
            border: 1px solid rgba(25, 135, 84, 0.1);
        }

        /* Search Wrapper */
        .search-wrapper {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 16px;
            z-index: 2;
        }

        .search-input {
            padding: 10px 40px 10px 40px !important;
            border-radius: 50px !important;
            border: 2px solid #e9ecef;
            background-color: #fff !important;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.08) !important;
            padding-right: 40px !important;
        }

        .clear-search {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: #999;
            cursor: pointer;
            padding: 4px;
            transition: color 0.3s;
            z-index: 2;
            font-size: 14px;
        }

        .clear-search:hover {
            color: #dc3545;
        }

        /* Filter Select */
        .filter-select {
            padding: 10px 12px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
            background-color: #fff;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.08);
        }

        /* Results Text */
        .results-text {
            font-size: 14px;
            color: #555;
            font-weight: 500;
        }

        .results-text strong {
            color: var(--primary);
            font-size: 16px;
        }

        /* Clear Filters Button */
        .clear-filters-btn {
            border-radius: 20px;
            padding: 6px 16px;
            font-weight: 600;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .clear-filters-btn:hover {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }

        /* Category Pills */
        .category-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding-top: 15px;
            border-top: 1px solid rgba(0,0,0,0.05);
        }

        .category-pill {
            background: #fff;
            color: #555;
            border: 2px solid #e9ecef;
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            white-space: nowrap;
        }

        .category-pill:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(25, 135, 84, 0.15);
        }

        .category-pill.active {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
            box-shadow: 0 3px 12px rgba(25, 135, 84, 0.25);
        }

        .category-pill i {
            font-size: 12px;
        }

        /* Product Card Enhancements for Filtering */
        .product-item {
            transition: all 0.4s ease;
        }

        .product-item.hidden {
            display: none !important;
        }

        .product-item.fade-out {
            opacity: 0;
            transform: scale(0.8);
        }

        /* No Results Message */
        .no-results {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }

        .no-results i {
            font-size: 64px;
            color: #e9ecef;
            margin-bottom: 20px;
        }

        .no-results h4 {
            color: #555;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .filter-section {
                padding: 15px;
            }

            .category-pills {
                gap: 8px;
            }

            .category-pill {
                padding: 6px 12px;
                font-size: 12px;
            }

            .results-text {
                font-size: 13px;
                width: 100%;
                margin-bottom: 8px;
            }
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

            <!-- Filter Section -->
            <div class="filter-section mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-3 align-items-center">
                    <!-- Search Box -->
                    <div class="col-lg-4 col-md-6">
                        <div class="search-wrapper">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" id="searchInput" class="form-control search-input" placeholder="Search vegetables...">
                            <button class="clear-search" id="clearSearch" style="display: none;">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Sort Dropdown -->
                    <div class="col-lg-3 col-md-6">
                        <select id="sortSelect" class="form-select filter-select">
                            <option value="default">Sort By: Default</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="name-asc">Name: A to Z</option>
                            <option value="name-desc">Name: Z to A</option>
                            <option value="stock">Stock Available</option>
                        </select>
                    </div>

                    <!-- Results Count & Clear -->
                    <div class="col-lg-5 col-md-12">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <span id="resultsCount" class="results-text">
                                <i class="fas fa-box-open me-2"></i>Showing <strong>{{ count($vegetables) }}</strong> vegetables
                            </span>
                            <button id="clearFilters" class="btn btn-outline-secondary btn-sm clear-filters-btn" style="display: none;">
                                <i class="fas fa-redo-alt me-2"></i>Clear All Filters
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Category Filter Pills -->
                <div class="category-pills mt-4">
                    <button class="category-pill active" data-category="all">
                        <i class="fas fa-th me-2"></i>All Vegetables
                    </button>
                    <button class="category-pill" data-category="exotic">
                        <i class="fas fa-star me-2"></i>Exotic
                    </button>
                    <button class="category-pill" data-category="chinese">
                        <i class="fas fa-leaf me-2"></i>Chinese
                    </button>
                    <button class="category-pill" data-category="leafy">
                        <i class="fas fa-seedling me-2"></i>Leafy Greens
                    </button>
                    <button class="category-pill" data-category="root">
                        <i class="fas fa-carrot me-2"></i>Root Vegetables
                    </button>
                    <button class="category-pill" data-category="fruiting">
                        <i class="fas fa-pepper-hot me-2"></i>Fruiting Vegetables
                    </button>
                </div>
            </div>

            <div class="row g-4" id="productsGrid">
                @foreach($vegetables as $veg)
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp product-item" 
                     data-wow-delay="0.1s"
                     data-name="{{ strtolower($veg->name) }}"
                     data-price="{{ $veg->price }}"
                     data-stock="{{ $veg->quantity }}"
                     data-category="{{ strtolower($veg->category ?? 'other') }}">
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

            <!-- No Results Message (for filtering) -->
            <div id="noResultsMessage" class="no-results" style="display: none;">
                <i class="fas fa-search"></i>
                <h4>No vegetables found</h4>
                <p>Try adjusting your filters or search terms</p>
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

    <script>
        // Product Filtering System
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const clearSearchBtn = document.getElementById('clearSearch');
            const sortSelect = document.getElementById('sortSelect');
            const categoryPills = document.querySelectorAll('.category-pill');
            const clearFiltersBtn = document.getElementById('clearFilters');
            const productsGrid = document.getElementById('productsGrid');
            const resultsCount = document.getElementById('resultsCount');
            const noResultsMessage = document.getElementById('noResultsMessage');
            
            let currentCategory = 'all';
            let currentSearchTerm = '';
            let currentSort = 'default';

            // Search Input
            searchInput.addEventListener('input', function(e) {
                currentSearchTerm = e.target.value.toLowerCase().trim();
                
                if (currentSearchTerm.length > 0) {
                    clearSearchBtn.style.display = 'block';
                    clearFiltersBtn.style.display = 'inline-block';
                } else {
                    clearSearchBtn.style.display = 'none';
                    checkClearButtonVisibility();
                }
                
                filterProducts();
            });

            // Clear Search
            clearSearchBtn.addEventListener('click', function() {
                searchInput.value = '';
                currentSearchTerm = '';
                clearSearchBtn.style.display = 'none';
                checkClearButtonVisibility();
                filterProducts();
            });

            // Category Pills
            categoryPills.forEach(pill => {
                pill.addEventListener('click', function() {
                    // Remove active class from all pills
                    categoryPills.forEach(p => p.classList.remove('active'));
                    
                    // Add active class to clicked pill
                    this.classList.add('active');
                    
                    currentCategory = this.dataset.category;
                    
                    if (currentCategory !== 'all') {
                        clearFiltersBtn.style.display = 'inline-block';
                    } else {
                        checkClearButtonVisibility();
                    }
                    
                    filterProducts();
                });
            });

            // Sort Select
            sortSelect.addEventListener('change', function() {
                currentSort = this.value;
                
                if (currentSort !== 'default') {
                    clearFiltersBtn.style.display = 'inline-block';
                } else {
                    checkClearButtonVisibility();
                }
                
                sortProducts();
                filterProducts();
            });

            // Clear All Filters
            clearFiltersBtn.addEventListener('click', function() {
                // Reset search
                searchInput.value = '';
                currentSearchTerm = '';
                clearSearchBtn.style.display = 'none';
                
                // Reset category
                currentCategory = 'all';
                categoryPills.forEach(p => p.classList.remove('active'));
                document.querySelector('.category-pill[data-category="all"]').classList.add('active');
                
                // Reset sort
                currentSort = 'default';
                sortSelect.value = 'default';
                
                this.style.display = 'none';
                
                filterProducts();
            });

            // Filter Products Function
            function filterProducts() {
                const products = productsGrid.querySelectorAll('.product-item');
                let visibleCount = 0;

                products.forEach(product => {
                    const name = product.dataset.name || '';
                    const category = product.dataset.category || '';
                    
                    let showProduct = true;

                    // Search filter
                    if (currentSearchTerm && !name.includes(currentSearchTerm)) {
                        showProduct = false;
                    }

                    // Category filter
                    if (currentCategory !== 'all') {
                        if (!category.includes(currentCategory)) {
                            showProduct = false;
                        }
                    }

                    // Show/Hide product with animation
                    if (showProduct) {
                        product.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        product.classList.add('hidden');
                    }
                });

                // Update results count
                updateResultsCount(visibleCount);

                // Show/hide no results message
                if (visibleCount === 0) {
                    noResultsMessage.style.display = 'block';
                    productsGrid.style.display = 'none';
                } else {
                    noResultsMessage.style.display = 'none';
                    productsGrid.style.display = 'flex';
                }
            }

            // Sort Products Function
            function sortProducts() {
                const products = Array.from(productsGrid.querySelectorAll('.product-item'));
                
                products.sort((a, b) => {
                    switch(currentSort) {
                        case 'price-low':
                            return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                        case 'price-high':
                            return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                        case 'name-asc':
                            return a.dataset.name.localeCompare(b.dataset.name);
                        case 'name-desc':
                            return b.dataset.name.localeCompare(a.dataset.name);
                        case 'stock':
                            return parseFloat(b.dataset.stock) - parseFloat(a.dataset.stock);
                        default:
                            return 0;
                    }
                });

                // Reorder products in DOM
                products.forEach(product => productsGrid.appendChild(product));
            }

            // Update Results Count
            function updateResultsCount(count) {
                resultsCount.innerHTML = `<i class="fas fa-box-open me-2"></i>Showing <strong>${count}</strong> vegetables`;
            }

            // Check if Clear Button should be visible
            function checkClearButtonVisibility() {
                if (currentSearchTerm.length === 0 && currentCategory === 'all' && currentSort === 'default') {
                    clearFiltersBtn.style.display = 'none';
                }
            }
        });
    </script>

</body>
</html>
