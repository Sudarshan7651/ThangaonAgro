<head>
    <!-- Ensure FontAwesome is available if strictly relying on this partial -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Sidebar container */
        .superadmin-sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #1e1e2d; /* Premium Dark Background */
            color: #fff;
            transition: transform 0.3s ease;
            z-index: 1050;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
        }

        /* Header */
        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            background: rgba(0,0,0,0.1);
        }

        .sidebar-brand {
            font-size: 1.4rem;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: 5px;
            padding-left: 3px;
        }

        /* Navigation */
        .sidebar-nav {
            padding: 20px 15px;
            flex-grow: 1;
            overflow-y: auto;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #aeb2b7;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 8px;
            transition: all 0.3s ease;
            font-weight: 500;
            border-left: 3px solid transparent;
        }

        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.05);
            color: #fff;
            border-left-color: #198754; /* Thangaon Green */
        }

        .nav-link i {
            width: 25px;
            font-size: 1.1rem;
            text-align: center;
            margin-right: 10px;
        }

        /* Footer / Logout */
        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255,255,255,0.05);
            background: rgba(0,0,0,0.1);
        }

        .btn-logout {
            width: 100%;
            background: #dc3545;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: 500;
            transition: background 0.3s;
        }

        .btn-logout:hover {
            background: #c82333;
        }

        /* Layout Adjustments for Content */
        /* This ensures pages that just include the sidebar get the correct margin */
        @media (min-width: 769px) {
            .content {
                margin-left: 260px; 
            }
        }

        /* Mobile specific */
        .sidebar-toggle-btn {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1060;
            background: #1e1e2d;
            color: white;
            border: none;
            padding: 10px 14px;
            border-radius: 6px;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Overlay */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1040;
        }

        @media (max-width: 768px) {
            .superadmin-sidebar {
                transform: translateX(-100%);
            }
            .superadmin-sidebar.show {
                transform: translateX(0);
            }
            .sidebar-toggle-btn {
                display: block;
            }
            .sidebar-overlay.active {
                display: block;
            }
            .content {
                margin-left: 0 !important;
                padding-top: 80px; /* Space for toggle */
            }
        }
    </style>
</head>

<!-- Mobile Toggle Button -->
<button class="sidebar-toggle-btn" onclick="toggleSuperAdminSidebar()">
    <i class="fas fa-bars"></i>
</button>

<!-- Overlay for Mobile -->
<div class="sidebar-overlay" id="saSidebarOverlay" onclick="toggleSuperAdminSidebar()"></div>

<!-- Sidebar Layout -->
<div class="superadmin-sidebar" id="saSidebar">
    
    <!-- Branding -->
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <i class="fas fa-leaf text-success"></i>
            <span>SuperAdmin</span>
        </a>
        <div class="user-info">
            Hello, {{ Auth::user()->businessName }}
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="sidebar-nav">
        <a href="{{ route('superadmin.traders') }}" class="nav-link {{ request()->routeIs('superadmin.traders') ? 'active' : '' }}">
            <i class="fas fa-users-cog"></i> 
            <span>All Traders</span>
        </a>

        <a href="{{ route('manageVegetables') }}" class="nav-link {{ request()->routeIs('manageVegetables') ? 'active' : '' }}">
            <i class="fas fa-carrot"></i> 
            <span>Manage Vegetables</span>
        </a>
        
        <!-- Add more links here as needed -->
    </div>

    <!-- Logout -->
    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</div>

<script>
    function toggleSuperAdminSidebar() {
        const sidebar = document.getElementById('saSidebar');
        const overlay = document.getElementById('saSidebarOverlay');
        sidebar.classList.toggle('show');
        overlay.classList.toggle('active');
    }
</script>
