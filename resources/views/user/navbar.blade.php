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
                <img class="me-3" src="{{ asset('img/logo.png') }}" alt="Logo"
                    style="width: 100px; height:100px;">
                {{-- <h2 class="text-white fw-bold m-0">WELDORK</h2> --}}
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Khaled Ben Al-Walid St., Amman</small>
                <small class="ms-4">
                    <i class="fa fa-envelope me-3"></i>
                    <a href="mailto:info@example.com" class="text-white text-decoration-none">info@example.com</a>
                </small>
                <small class="ms-4">
                    <i class="fa fa-phone-alt me-3"></i>
                    <a href="tel:+962791234567" class="text-white text-decoration-none">+962 7 9123 4567</a>
                </small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-primary ms-2"
                        href="https://www.facebook.com/share/1Bvbd52wVR/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a class="btn btn-sm-square btn-light text-primary ms-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-light text-primary ms-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
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
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                    <a href="{{ url('/#services') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="/#quoteForm" class="btn btn-primary py-2 px-3">Volunteer</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
