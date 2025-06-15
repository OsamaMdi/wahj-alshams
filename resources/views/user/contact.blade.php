@extends('layouts.user')
@section('Contact')

  <!-- Page Header Start -->
    <div class="container-fluid page-header pt-5 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white p-5">
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">Contact</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Map Embed -->
<div class="container-fluid px-0 mb-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.9878507883527!2d35.921262299999995!3d31.961226300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca0734768c69f%3A0xf4efcccf04b31597!2z2YXZg9iq2Kgg2YHYsdmK2YIg2YjZh9isINin2YTYtNmF2LMg2YTZhNmB2YbZiNmGINin2YTZhdiz2LHYrdmK2Kkg2YjYp9mE2YHZhNmD2YTZiNix2YrYqQ!5e0!3m2!1sen!2sjo!4v1748347377376!5m2!1sen!2sjo"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<!-- Contact Info + Form Section -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="bg-dark text-white p-5 h-100">
                    <h3 class="text-uppercase mb-4">Have Any Query? Feel Free To Contact Us</h3>
                    <p class="mb-4">If you have any questions or need support, don't hesitate to reach out to us through the contact form or by using the details below.</p>
                    <div class="d-flex align-items-start mb-4">
                        <div class="btn-lg-square bg-white me-3">
                            <i class="bi bi-envelope-at text-dark fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-uppercase mb-1">Mail Us</h6>
                            <small class="text-white">info@example.com</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="btn-lg-square bg-white me-3">
                            <i class="bi bi-telephone text-dark fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-white text-uppercase mb-1">Call Us</h6>
                            <small class="text-white">+962 6 1234 5678</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="bg-white p-5 h-100">
                    <h3 class="text-uppercase mb-4">Contact Us</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light" placeholder="Your Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Your Mobile">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3 text-uppercase fw-bold" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
