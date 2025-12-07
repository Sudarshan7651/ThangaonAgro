<head>
<style>
/* Sidebar Base */
.sidebar {
    width: 240px;
    height: 100vh;
    background:black;
    padding: 20px;
    position: fixed;
    top: 0;
    left: 0;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    color: white;
    transition: transform 0.3s ease;
}

.sidebar a {
    display: block;
    padding: 12px 15px;
    margin: 8px 0;
    color: white;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.3s;
}

.sidebar a:hover {
    background: rgba(255,255,255,0.2);
}

/* Logout Button */
.sidebar button {
    width: 100%;
}

/* Toggle Button (Mobile Only) */
.sidebar-toggle {
    display: none;
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 999;
    background: #0d6efd;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 6px;
    font-size: 18px;
}

/* MOBILE RESPONSIVE */
@media(max-width: 768px) {
    .sidebar {
        transform: translateX(-260px); /* Hide sidebar */
    }
    .sidebar.open {
        transform: translateX(0); /* Show sidebar */
    }
    .sidebar-toggle {
        display: block;
    }
}
</style>
</head>   
   
   <!-- Sidebar -->
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰ Menu</button>
    <div class="sidebar">
        <h4 class="text-center mb-4">Hello,{{ Auth::user()->businessName}}</h4>
        <a href="{{route('dashboard')}}">Dashboard</a>
        <a href="{{route('vegetableslist')}}" >Vegetables List</a>
        <a href="{{route('addvegetable')}}">Add Vegetable</a>
        <a href="{{route('orders')}}">Orders</a>
        <a href="{{route('specialOrders')}}">Special Orders</a>
        <a href="{{route('contractFarmingPage')}}">Contract Farming</a>
  <form action="{{route('logout')}}" method="post" style="padding:12px;"> 
       @csrf 
    <button type="submit" class="btn btn-danger">logOut</button>

    </form>
    </div>

    <script>
    function toggleSidebar() {
        document.querySelector(".sidebar").classList.toggle("open");
    }
</script>

    