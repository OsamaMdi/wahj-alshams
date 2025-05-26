<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Wahj Al Shams')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
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
                <h2 class="text-white fw-bold m-0">WELDORK</h2>
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
                    <a href="{{-- {{ route('home') }} --}}" class="nav-item nav-link active">Home</a>
                    <a href="{{-- {{ route('about') }} --}}" class="nav-item nav-link">About</a>
                    <a href="{{-- {{ route('services') }} --}}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{-- {{ route('feature') }} --}}" class="dropdown-item">Features</a>
                            <a href="{{-- {{ route('team') }} --}}" class="dropdown-item">Our Team</a>
                            <a href="{{-- {{ route('testimonial') }} --}}" class="dropdown-item">Testimonial</a>
                            <a href="{{-- {{ route('appointment') }} --}}" class="dropdown-item">Appointment</a>
                            <a href="{{-- {{ route('notfound') }} --}}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{-- {{ route('contact') }} --}}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="#" class="btn btn-primary py-2 px-3">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

