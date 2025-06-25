{{-- <!-- Testimonial Start -->
<div class="container-fluid pt-6 pb-6">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 text-uppercase mb-5">What They’re Talking About Our Welding Work</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-img">
                    <div class="animated flip infinite">
                        <img class="img-fluid" src="{{ asset('img/testimonial-1.jpg') }}" alt="">
                    </div>
                    <div class="animated flip infinite">
                        <img class="img-fluid" src="{{ asset('img/testimonial-2.jpg') }}" alt="">
                    </div>
                    <div class="animated flip infinite">
                        <img class="img-fluid" src="{{ asset('img/testimonial-3.jpg') }}" alt="">
                    </div>
                    <div class="animated flip infinite">
                        <img class="img-fluid" src="{{ asset('img/testimonial-4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-4">
                                <img class="img-fluid" src="{{ asset("img/testimonial-$i.jpg") }}" alt="">
                                <div class="ms-3">
                                    <div class="mb-2">
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                        <i class="far fa-star text-primary"></i>
                                    </div>
                                    <h5 class="text-uppercase">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                                lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                            </p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
 --}}

{{-- <!-- Newsletter Start -->
    <div class="container-fluid newsletter mt-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container pb-5">
            <div class="bg-white p-5 mb-5">
                <div class="row g-5">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-uppercase mb-4">Newsletter</h1>
                        <div class="d-flex">
                            <i class="far fa-envelope-open fa-3x text-primary me-4"></i>
                            <p class="fs-5 fst-italic mb-0">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore lorem ipsum.</p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                            <label for="mail">Your Email</label>
                        </div>
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --}}



<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Our Office</h5>
                <p class="mb-2">
                    <i class="fa fa-map-marker-alt text-primary me-3"></i>
                    <a href="https://www.google.com/maps?q=Khaled+Ben+Al-Walid+St,+Amman" target="_blank"
                        class="text-white text-decoration-none">
                        Khaled Ben Al-Walid St., Amman
                    </a>
                </p>
                <p class="mb-2">
                    <i class="fa fa-phone-alt text-primary me-3"></i>
                    <a href="tel:+962791234567" class="text-white text-decoration-none">+962 7 9123 4567</a>
                </p>
                <p class="mb-2">
                    <i class="fa fa-envelope text-primary me-3"></i>
                    <a href="mailto:info@example.com" class="text-white text-decoration-none">info@example.com</a>
                </p>

                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light me-2" href="https://www.facebook.com/share/1Bvbd52wVR/"
                        target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-square btn-light me-2"
                        href="https://youtube.com/@shamsteam2119?si=NjQ335pD1kLIDM66" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>

                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                <a class="btn btn-link" href="{{ url('/#services') }}">Our Services</a>
            </div>

            <!-- Business Hours -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Business Hours</h5>
                <p class="text-uppercase mb-0">Monday - Friday</p>
                <p>09:00 am - 07:00 pm</p>
                <p class="text-uppercase mb-0">Saturday</p>
                <p>09:00 am - 12:00 pm</p>
                <p class="text-uppercase mb-0">Sunday</p>
                <p>Closed</p>
            </div>

            <!-- Gallery -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Gallery</h5>
                <div class="row g-1">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-4">
                            <img class="img-fluid rounded shadow-sm" src="{{ asset("img/f$i.jpg") }}" alt=""
                                style="height: 80px; object-fit: cover; width: 100%;">
                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>


<!-- Newsletter Start -->
<!-- Copyright Start -->
{{-- <div class="container-fluid text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div> --}}
<!-- Copyright End -->
