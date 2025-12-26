<head>
    <!-- Ensure FontAwesome is included if not already in main layout -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #1e1e2d; /* Modern Dark Theme */
            color: #fff;
            padding-top: 20px;
            transition: transform 0.3s ease;
            z-index: 1050;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
        }

        .sidebar-header {
            padding: 20px 25px;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .sidebar-header h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
        }
        
        .sidebar-header p {
            font-size: 0.8rem;
            color: #6c757d;
            margin: 5px 0 0;
        }

        /* Links */
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            position: relative;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 25px;
            color: #aeb2b7;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar-link:hover, .sidebar-link.active {
            background: rgba(255,255,255,0.05);
            color: #fff;
            border-left-color: #28a745; /* Green accent */
        }

        .sidebar-link i {
            width: 25px;
            margin-right: 10px;
            font-size: 1.1rem;
            text-align: center;
        }

        /* Logout Button */
        .sidebar-footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            padding: 0 20px;
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
            gap: 10px;
            font-weight: 500;
            transition: background 0.3s;
        }

        .btn-logout:hover {
            background: #c82333;
        }

        /* Toggle Button (Mobile) */
        .sidebar-toggle {
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

        /* Overlay for mobile */
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

        .sidebar-overlay.active {
            display: block;
        }

        /* Main Content Layout */
        .content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .sidebar-toggle {
                display: block;
            }
            
            /* Adjust content in main views */
            .content {
                margin-left: 0 !important;
                padding-top: 70px; /* Space for toggle button */
            }
        }
    </style>
</head>

<!-- Mobile Toggle Button -->
<button class="sidebar-toggle" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</button>

<!-- Overlay -->
<div class="sidebar-overlay" onclick="toggleSidebar()" id="sidebarOverlay"></div>

<!-- Sidebar -->
<nav class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="d-flex align-items-center gap-2">
            <i class="fas fa-leaf text-success fa-lg"></i>
            <h4>Veggie Admin</h4>
        </div>
        <p>Hello, {{ Auth::user()->businessName }}</p>
    </div>

    <ul class="sidebar-menu">
        <li>
            <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('vegetableslist') }}" class="sidebar-link {{ request()->routeIs('vegetableslist') ? 'active' : '' }}">
                <i class="fas fa-list"></i> Vegetables List
            </a>
        </li>
        <li>
            <a href="{{ route('addvegetable') }}" class="sidebar-link {{ request()->routeIs('addvegetable') ? 'active' : '' }}">
                <i class="fas fa-plus-circle"></i> Add Vegetable
            </a>
        </li>
        <li>
            <a href="{{ route('orders') }}" class="sidebar-link {{ request()->routeIs('orders') ? 'active' : '' }}">
                <i class="fas fa-shopping-bag"></i> Orders
            </a>
        </li>
        <li>
            <a href="{{ route('specialOrders') }}" class="sidebar-link {{ request()->routeIs('specialOrders') ? 'active' : '' }}">
                <i class="fas fa-star"></i> Special Orders
            </a>
        </li>
        <li>
            <a href="{{ route('contractFarmingPage') }}" class="sidebar-link {{ request()->routeIs('contractFarmingPage') ? 'active' : '' }}">
                <i class="fas fa-tractor"></i> Contract Farming
            </a>
        </li>
        <li>
            <a href="{{ route('adminProfile') }}" class="sidebar-link {{ request()->routeIs('adminProfile') ? 'active' : '' }}">
                <i class="fas fa-user-circle"></i> My Profile
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</nav>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('show');
        overlay.classList.toggle('active');
    }
</script>
