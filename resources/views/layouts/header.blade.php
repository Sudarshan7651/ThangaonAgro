<!-- Navbar Start -->
<style>
    /* Custom Header Styles */
    .navbar-custom {
        padding: 15px 0;
        background-color: #ffffff;
        font-family: 'Outfit', sans-serif;
    }
    
    /* Brand Style */
    .navbar-brand-custom {
        font-weight: 800;
        font-size: 26px;
        color: #198754 !important; /* var(--primary) */
        text-decoration: none;
        display: flex;
        align-items: center;
        letter-spacing: -0.5px;
    }
    
    /* Navigation Links */
    .navbar-nav .nav-link {
        font-weight: 600;
        font-size: 16px;
        color: #555 !important;
        margin: 0 12px;
        padding: 8px 0;
        position: relative;
        transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: #198754 !important;
    }

    /* Buttons */
    .header-btn {
        padding: 8px 24px;
        font-weight: 600;
        font-size: 14px;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        white-space: nowrap;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .btn-contract {
        border: 2px solid #198754;
        color: #198754;
        background: transparent;
    }

    .btn-contract:hover {
        background-color: #198754;
        color: #ffffff;
    }

    .btn-login {
        background-color: #198754;
        color: #ffffff;
        border: 2px solid #198754;
        box-shadow: 0 4px 10px rgba(25, 135, 84, 0.2);
    }

    .btn-login:hover {
        background-color: #146c43;
        border-color: #146c43;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(25, 135, 84, 0.3);
        color: #ffffff;
    }

    /* Mobile Responsive Adjustments */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            margin-top: 15px;
            padding-top: 10px;
            border-top: 1px solid #f0f0f0;
        }
        
        .navbar-nav {
            margin-bottom: 15px;
        }

        .navbar-nav .nav-link {
            margin: 5px 0;
        }

        .header-buttons {
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .header-btn {
            width: 100%;
        }
    }
</style>

<div class="container-fluid shadow-sm sticky-top navbar-custom">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            
            <!-- Logo -->
            <a class="navbar-brand-custom" href="{{ route('index') }}">
                <i class="fas fa-leaf me-2"></i> ThangaonAgro
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation & Actions -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                
                <!-- Center Links -->
                <div class="navbar-nav ms-auto me-auto">
                    <a href="{{route('index')}}" class="nav-item nav-link">Home</a>
                    <a href="{{route('product')}}" class="nav-item nav-link">Product Listing</a>
                    <a href="{{ route('contact')}}" class="nav-item nav-link">Contacts</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                </div>

                <!-- Right Buttons -->
                <div class="d-flex header-buttons gap-2">
                    <a href="{{route('cart')}}" class="header-btn btn-contract">
                        <i class="fas fa-file-contract me-2"></i> Contract Farming
                    </a>
                    <a href="{{route('register')}}" class="header-btn btn-login">
                        Login / Sign Up
                    </a>
                </div>

            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
