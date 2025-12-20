<head>
<style>
/* Sidebar */
.sidebar {
    width: 240px;
    height: 100vh;
    padding: 20px;
    position: fixed;
    background: rgba(1, 1, 1, 0.46);
    top: 0;
    backdrop-filter: blur(6px);
    left: 0;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    color: white;
    transition: transform 0.3s ease;
    z-index: 2000;
}
.sidebar a {
    display: block;
    padding: 12px 15px;
    margin: 8px 0;
    color: black;
    background:aliceblue;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.3s;
}
.sidebar a:hover {
    background: #1b5e20d;
}

/* Logout button */
.sidebar button {
    background: orange;
    width: 100%;
}

/* Content shifts in desktop */
.content {
    margin-left: 250px;
    transition: margin-left 0.3s ease;
}

/* Sidebar Toggle Button */
.sidebar-toggle {
    display: none;
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 3000;
    background: #0d6efd;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 6px;
    font-size: 18px;
}

/* MOBILE */
@media(max-width: 768px) {
    .sidebar {
        transform: translateX(-260px);
    }
    .sidebar.open {
        transform: translateX(0);
    }
    .sidebar-toggle {
        display: block;
    }
    .content {
        margin-left: 0 !important;
        margin-top: 60px;
    }
}
</style>
</head>

<!-- Toggle Button -->
<button class="sidebar-toggle" id="menu" onclick="toggleSidebar()">☰ Menu</button>

<!-- Sidebar -->
<div class="sidebar " id="sidebar">
    <h4 class="text-center mb-4" style="margin-top: 60px;">Hello, {{ Auth::user()->businessName }}</h4>

    <a href="{{route('superadmin.traders')}}">All Traders</a>
    <a href="{{route('manageVegetables')}}">Manage Vegatables</a>

    <form action="{{route('logout')}}" method="post" class="mt-3">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>

<script>
     let name=document.getElementById("menu");
function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("open");
    if(name.innerHTML=="☰ Menu"){
        name.innerHTML="close";
    }else{
        name.innerHTML="☰ Menu";
    }
}
</script>
