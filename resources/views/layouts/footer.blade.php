<style>

            /* Footer Visibility Fix */
        .footer, .footer a, .footer p, 
        .copyright, .copyright a, .copyright p {
            color: #ffffff6f !important;
        }

        .copyright {
            background-color: #212529 !important; /* Ensure dark background for white text */
        }
        
        .footer .btn-link {
            display: block;
            margin-bottom: 5px;
            padding: 0;
            text-align: left;
            color: rgba(255,255,255,0.8) !important;
            font-weight: normal;
            text-transform: capitalize;
            transition: .3s;
        }

        .footer .btn-link::before {
            position: relative;
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 10px;
        }

        .footer .btn-link:hover {
            color: var(--primary) !important; /* Use primary green for hover */
            letter-spacing: 1px;
            box-shadow: none;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-title { font-size: 2.5rem; }
            .hero-text { font-size: 1.1rem; }
        }
        
        @media (max-width: 576px) {
            .hero-section { text-align: center; padding: 50px 0; }
            .hero-title { font-size: 2rem; }
        }
</style>
  
  
  <!-- Footer Start -->
    <div class="container-fluid bg-dark footer py-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-lg-6 col-md-6">
                    <h5 class="text-uppercase text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ route('about') }}">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="{{ route('about') }}">Support</a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h5 class="text-uppercase text-light mb-4">Business Hours</h5>
                    <p class="text-uppercase mb-0">Monday - Friday</p>
                    <p>09:00 am - 07:00 pm</p>
                    <p class="text-uppercase mb-0">Saturday</p>
                    <p>09:00 am - 12:00 pm</p>
                    <p class="text-uppercase mb-0">Sunday</p>
                    <p>Closed</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->