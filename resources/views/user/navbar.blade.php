
  <!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="{{-- {{ route('home') }} --}}">
            <img class="me-3" src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 100px; height:100px;">
                {{-- <h2 class="text-white fw-bold m-0">WELDORK</h2> --}}
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{-- {{ route('home') }} --}}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">WELDORK</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{request()->routeIs('about') ? 'active' : ''}}">About</a>
                    <a href="" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="" class="dropdown-item">Features</a>
                            <a href="" class="dropdown-item">Our Team</a>
                            <a href="" class="dropdown-item">Testimonial</a>
                            <a href="" class="dropdown-item">Appointment</a>
                            <a href="" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{request()->routeIs('contact') ? 'active' : ''}}">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                <a href="/#quoteForm" class="btn btn-primary py-2 px-3">Volunteer</a>
            </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
