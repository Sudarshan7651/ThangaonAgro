<!-- Navbar Start -->
<div class="container-fluid bg-white shadow-lg sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
<a class="navbar-brand" href="{{ route('index') }}" 
   style="font-weight: 700; font-size: 28px; color:#1b5e20;">
    ThangaonAgro
</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Left Links -->
                <div class="navbar-nav me-auto ms-4">
                    <a href="{{route('index')}}" class="nav-item nav-link">Home</a>
                    <a href="{{route('product')}}" class="nav-item nav-link">Product Listing</a>
                    <a href="{{ route('contact')}}" class="nav-item nav-link">Contacts</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                </div>

                <!-- Right Buttons -->
                <div class="d-flex">
                    <a href="{{route('cart')}}" class="nav-item nav-link bg-info text-white px-3 py-2 me-2" style="border-radius:10px;">
                        Contract Farming
                    </a>
                    <a href="{{route('register')}}" class="nav-item nav-link bg-danger text-white px-3 py-2" style="border-radius:10px;">
                        Login/SignUp
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
