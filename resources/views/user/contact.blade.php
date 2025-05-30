
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

    <!-- Contact Start -->
    <div class="pt-6 pb-6">
        <div class="container-fluid appoinment py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container pt-5">
                <div class="row gy-5 gx-0">
                    <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-uppercase text-white mb-4">Have Any Query? Feel Free To Contact Us
                        </h1>
                        <p class="text-white mb-5 wow fadeIn" data-wow-delay="0.4s">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.5s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-envelope-at text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Mail Us</h6>
                                <span class="text-white">info@example.com</span>
                            </div>
                        </div>
                        <hr class="bg-body">
                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-telephone text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Call Us</h6>
                                <span class="text-white">+012 345 67890</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.7s">
                        <div class="bg-white p-5">
                            <h2 class="text-uppercase mb-4">Contact Us</h2>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                                        <label for="mail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="mobile" placeholder="Your Mobile">
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" id="message"
                                            style="height: 130px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 wow fadeInUp" data-wow-delay="0.5s">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.9878507883527!2d35.921262299999995!3d31.961226300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca0734768c69f%3A0xf4efcccf04b31597!2z2YXZg9iq2Kgg2YHYsdmK2YIg2YjZh9isINin2YTYtNmF2LMg2YTZhNmB2YbZiNmGINin2YTZhdiz2LHYrdmK2Kkg2YjYp9mE2YHZhNmD2YTZiNix2YrYqQ!5e0!3m2!1sen!2sjo!4v1748347377376!5m2!1sen!2sjo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Contact End -->
    <style>
.container-fluid.px-0.wow.fadeInUp {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    margin: 30px 0;
    transition: all 0.3s ease;
}

.container-fluid.px-0.wow.fadeInUp:hover {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.container-fluid.px-0.wow.fadeInUp iframe {
    display: block;
    filter: grayscale(20%) contrast(90%);
    transition: filter 0.5s ease;
}

.container-fluid.px-0.wow.fadeInUp:hover iframe {
    filter: grayscale(0%) contrast(100%);
}

/* For mobile responsiveness */
@media (max-width: 768px) {
    .container-fluid.px-0.wow.fadeInUp iframe {
        height: 350px;
    }
}

@media (max-width: 576px) {
    .container-fluid.px-0.wow.fadeInUp iframe {
        height: 300px;
    }
}
        </style>
    <!-- Newsletter End -->
    @endsection
