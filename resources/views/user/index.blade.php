@extends('layouts.user')
@section('Contact')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1">
                    <img class="img-fluid" src="{{ asset('img/p4.jpeg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="{{ asset('img/p5.jpeg') }}" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="{{ asset('img/p4.jpeg') }}" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/p1.jpeg') }}" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-uppercase text-white mb-4 animated zoomIn">Best Metalcraft Solutions</h1>
                        <a href="#" class="btn btn-primary py-3 px-4">Explore More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/p2.jpeg') }}" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-uppercase text-white mb-4 animated zoomIn">Best Metalcraft Solutions</h1>
                        <a href="#" class="btn btn-primary py-3 px-4">Explore More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/p1.jpeg') }}" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 text-uppercase text-white mb-4 animated zoomIn">Best Metalcraft Solutions</h1>
                        <a href="#" class="btn btn-primary py-3 px-4">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Image Column -->
                <div class="col-lg-6 wow fadeIn d-flex align-items-stretch" data-wow-delay="0.1s">
                    <div class="about-img w-100">
                        <img class="img-fluid w-100 h-100 object-fit-cover rounded shadow-sm"
                            src="{{ asset('img/p2.jpeg') }}" alt="Wahaj Shams Team">
                    </div>
                </div>

                <!-- Text Column -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Wahaj Shams for Theatrical and Folkloric Arts</h1>
                    <p class="mb-4">
                        Wahaj Shams is a non-profit artistic institution based in Amman, Jordan, founded on December 24,
                        2017. Our mission is to empower youth and communities through expressive and interactive theater
                        that highlights important social issues while promoting positive behavioral change and
                        community awareness.
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-users fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="text-uppercase mb-1">Over 1,075 Beneficiaries Trained</h6>
                                    <small>From various age groups and communities</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-theater-masks fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="text-uppercase mb-1">357 Theatrical Shows</h6>
                                    <small>Held across the Kingdom of Jordan</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p><i class="fa fa-check-circle text-primary me-2"></i>11 awards in art and social impact</p>
                    <p><i class="fa fa-check-circle text-primary me-2"></i>Networking with local and regional artists</p>
                    <p><i class="fa fa-check-circle text-primary me-2"></i>Promoting youth development and community service
                    </p>

                    <div class="border border-4 border-primary p-4 text-center mt-4 rounded">
                        <h5 class="lh-base text-uppercase mb-0">
                            Empowering society through meaningful art and inclusive theater
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Section - Title + 3 Columns Cards -->
<div class="container-fluid feature mt-6 mb-6 wow fadeIn" id="services" data-wow-delay="0.1s" style="background-color: #000;">
    <div class="container">

        <!-- Title -->
        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h1 class="display-6 text-white text-uppercase">What We Offer at Wahaj Al Shams</h1>
        </div>

        <!-- Cards -->
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-easel2-fill fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">Theatrical Performances</h5>
                    <p class="text-light">Engaging plays for various communities and causes.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-person-lines-fill fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">Actor Training</h5>
                    <p class="text-light">Skill-building for aspiring stage performers.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-heart-pulse-fill fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">Psychodrama Training</h5>
                    <p class="text-light">Therapeutic drama techniques for healing and growth.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-people-fill fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">Case Management & Referral</h5>
                    <p class="text-light">Support and referral services for those in need.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-emoji-smile-fill fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">Children's Theater</h5>
                    <p class="text-light">Interactive drama programs tailored for kids.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-ear-fill fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">Drama for Hearing-Impaired</h5>
                    <p class="text-light">Inclusive theater training using visual storytelling.</p>
                </div>
            </div>

            <!-- Full Width Card -->
            <div class="col-12">
                <div class="text-center border border-warning border-3 p-4 h-100">
                    <i class="bi bi-person-video3 fs-1 text-white mb-3"></i>
                    <h5 class="text-white text-uppercase">TOT - Training of Trainers</h5>
                    <p class="text-light">Empowering trainers to teach and lead in the world of theater.</p>
                </div>
            </div>

        </div>
    </div>
</div>



    <!-- Service Start -->
    <div class="container-fluid service pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Latest Plays</h1>
            </div>

            <!-- Cards Container -->
            <div id="masrahiyat-container" class="row g-4">
                @foreach ($masrahiyat as $index => $play)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index % 4) * 0.1 }}s">
                        <div class="service-item">
                            <div class="service-inner pb-5">
                                <img class="img-fluid w-100"
                                    src="{{ asset('storage/' . ($play->image_path ?? 'img/default.jpg')) }}"
                                    alt="{{ $play->title }}">
                                <div class="service-text px-4 pt-4">
                                    <h5 class="text-uppercase">{{ $play->title }}</h5>
                                    <p class="mb-1 text-muted small">Genre: {{ $play->play_type }}</p>
                                    <p class="mb-1 text-muted small">Date:
                                        {{ \Carbon\Carbon::parse($play->performance_dates)->format('M d, Y') }}</p>
                                </div>
                                <div class="readmore-wrapper mt-auto px-4 pb-3 text-end">
                                    <a href="{{ route('masrahiyat.details', $play->id) }}" class="custom-readmore-link">
                                        Read More <i class="bi bi-chevron-double-right ms-1"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @php $pages = ceil($total / 8); @endphp
            @if ($pages > 1)
                <div class="text-center mt-5">
                    @for ($i = 1; $i <= $pages; $i++)
                        <button class="btn btn-outline-dark mx-1 pagination-btn"
                            data-page="{{ $i }}">{{ $i }}</button>
                    @endfor
                </div>
            @endif

        </div>
    </div>
    <!-- Service End -->

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.pagination-btn').forEach(button => {
                    button.addEventListener('click', function() {
                        const page = this.dataset.page;
                        fetch(`/masrahiyat-home/page/${page}`)
                            .then(res => res.json())
                            .then(data => {
                                document.getElementById('masrahiyat-container').innerHTML = data
                                    .html;
                                window.scrollTo({
                                    top: document.getElementById('masrahiyat-container')
                                        .offsetTop - 80,
                                    behavior: 'smooth'
                                });
                            });
                    });
                });
            });
        </script>
    @endpush

    <!-- Appoinment Start -->
    <div id="quoteForm" class="container-fluid appoinment mt-6 mb-6 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row gy-5 gx-0">
                <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-uppercase text-white mb-4">Volunteer with Us and Be Part of the Warm Wahaj Al
                        Shams Family!</h1>
                    <p class="text-white mb-5 wow fadeIn" data-wow-delay="0.4s">At Wahaj Al Shams, volunteers play a vital
                        role in bringing vibrant theatrical performances to life. By joining the team, you'll have the
                        opportunity to support a variety of plays and take part in organizing exciting, high-energy events.
                        Whether it’s behind the scenes or in the spotlight, your contribution helps create unforgettable
                        experiences filled with creativity, teamwork, and passion. Volunteering with us means becoming part
                        of a warm, dynamic family that thrives on making a positive impact through art and community spirit.
                    </p>
                    <hr class="bg-body">

                </div>
                <form action="{{ route('volunteer.send') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control border-0 bg-light" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="number" name="age" class="form-control border-0 bg-light" id="age" placeholder="Your Age">
                                <label for="age">Your Age</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select border-0 bg-light" name="volunteerPeriod" id="volunteerPeriod">
                                    <option value="1-2 Weeks">1-2 Weeks</option>
                                    <option value="3-4 Weeks">3-4 Weeks</option>
                                    <option value="1-2 Months">1-2 Months</option>
                                    <option value="Flexible">Flexible</option>
                                </select>
                                <label for="volunteerPeriod">Preferred Volunteer Period</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 bg-light" name="whyVolunteer" id="whyVolunteer" style="height: 130px" placeholder="Tell us why you want to volunteer"></textarea>
                                <label for="whyVolunteer">Why do you want to volunteer?</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Application</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Appoinment End -->



    <!-- Team Start -->
    <div class="container-fluid team pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Meet Our Professional and Experience Welder</h1>
            </div>
            <div class="row g-4">
                @foreach ([['img' => 'team-1.jpg', 'name' => 'Alex Robin'], ['img' => 'team-2.jpg', 'name' => 'Andrew Bon'], ['img' => 'team-3.jpg', 'name' => 'Martin Tompson'], ['img' => 'team-4.jpg', 'name' => 'Clarabelle Samber']] as $index => $team)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.3 + $index * 0.1 }}s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('img/' . $team['img']) }}" alt="">
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark mx-1" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark mx-1" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark mx-1" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-dark mx-1" href="#"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-1">{{ $team['name'] }}</h5>
                                <span>Welder</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
