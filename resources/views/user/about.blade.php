@extends('layouts.user')
@section('Contact')
    <!-- Page Header Start -->
    <div class="container-fluid page-header pt-5 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white p-5">
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">About</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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
                    <div class="my-5"></div>
                    <p><i class="fa fa-check-circle text-primary me-2"></i>Networking with local and regional artists</p>
                    <p><i class="fa fa-check-circle text-primary me-2"></i>Promoting youth development and community service</p>
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

    <!-- Features Start -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container pt-4">
            <div class="row g-0 feature-row wow fadeIn" data-wow-delay="0.1s">
                <!-- Total Plays -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 text-center">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4 mx-auto">
                            <i class="fas fa-theater-masks fa-2x text-white"></i>
                        </div>
                        <div class="p-4 pt-0">
                            <h5 class="text-uppercase mb-2">Total Plays</h5>
                            <h2 class="text-primary fw-bold">{{ $statistics->number_of_plays }}</h2>
                            <p class="mb-0">Plays presented nationwide</p>
                        </div>
                    </div>
                </div>
                <!-- Awards -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="feature-item border h-100 text-center">
                        <div class="feature-icon btn-xxl-square bg-success mb-4 mt-n4 mx-auto">
                            <i class="fas fa-trophy fa-2x text-white"></i>
                        </div>
                        <div class="p-4 pt-0">
                            <h5 class="text-uppercase mb-2">Awards Won</h5>
                            <h2 class="text-success fw-bold">{{ $statistics->number_of_awards }}</h2>
                            <p class="mb-0">National & local achievements</p>
                        </div>
                    </div>
                </div>
                <!-- Volunteers -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 text-center">
                        <div class="feature-icon btn-xxl-square bg-warning mb-4 mt-n4 mx-auto">
                            <i class="fas fa-users fa-2x text-white"></i>
                        </div>
                        <div class="p-4 pt-0">
                            <h5 class="text-uppercase mb-2">Volunteers</h5>
                            <h2 class="text-warning fw-bold">{{ $statistics->number_of_volunteers }}</h2>
                            <p class="mb-0">Supporting every step</p>
                        </div>
                    </div>
                </div>
                <!-- Governorates -->
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="feature-item border h-100 text-center">
                        <div class="feature-icon btn-xxl-square bg-danger mb-4 mt-n4 mx-auto">
                            <i class="fas fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <div class="p-4 pt-0">
                            <h5 class="text-uppercase mb-2">Governorates</h5>
                            <h2 class="text-danger fw-bold">{{ $statistics->number_of_governorates }}</h2>
                            <p class="mb-0">Areas we've reached</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Vision Section -->
    <div class="container-fluid pt-6 pb-3 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="display-6 text-uppercase">Our Vision</h2>
            </div>
            <p class="lead text-center">
                To spread theatrical awareness and influence behavior change—especially among the most vulnerable youth—through arts, while developing and empowering them to serve their communities effectively and sustainably.
            </p>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="container-fluid pt-6 pb-3">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="display-6 text-uppercase">Our Mission</h2>
            </div>
            <ul class="list-unstyled fs-5 px-4 px-md-5">
                <li><i class="fa fa-check-circle text-primary me-2"></i>Engage the local community in selecting priority social issues.</li>
                <li><i class="fa fa-check-circle text-primary me-2"></i>Provide artistic and developmental training for youth through expressive and interactive theater tools.</li>
                <li><i class="fa fa-check-circle text-primary me-2"></i>Promote behavioral change and raise awareness of social issues.</li>
                <li><i class="fa fa-check-circle text-primary me-2"></i>Offer protection services against gender-based violence to enhance psychological well-being and safe environments.</li>
            </ul>
        </div>
    </div>

    <!-- Core Values Section -->
    <div class="container-fluid pt-6 pb-3 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="display-6 text-uppercase">Our Core Values</h2>
            </div>
            <ul class="list-unstyled fs-5 px-4 px-md-5">
                <li><i class="fa fa-star text-primary me-2"></i>Art as a message</li>
                <li><i class="fa fa-star text-primary me-2"></i>Focus on beneficiaries and involve them in change-making</li>
                <li><i class="fa fa-star text-primary me-2"></i>Community service as a tool for growth and impact</li>
                <li><i class="fa fa-star text-primary me-2"></i>Do-no-harm development, respecting privacy</li>
                <li><i class="fa fa-star text-primary me-2"></i>Humanitarian work as a core value in everything we do</li>
            </ul>
        </div>
    </div>

    <!-- Areas of Work Section -->
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h2 class="display-6 text-uppercase">Areas of Work</h2>
            </div>
            <ul class="list-unstyled fs-5 px-4 px-md-5">
                <li><i class="fa fa-check text-primary me-2"></i>Engaging the community in identifying social issues and creative solutions</li>
                <li><i class="fa fa-check text-primary me-2"></i>Theatrical training and artistic capacity building</li>
                <li><i class="fa fa-check text-primary me-2"></i>Youth development and empowerment of vulnerable groups</li>
                <li><i class="fa fa-check text-primary me-2"></i>Protection services, especially against gender-based violence</li>
                <li><i class="fa fa-check text-primary me-2"></i>Networking beneficiaries with artists and supporters to enhance impact</li>
            </ul>
        </div>
    </div>

    <!-- Team Section Start -->
    <div class="container-fluid wahj-team pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Meet The Wahaj Al Shams Team</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($team as $index => $member)
                    <div class="col-xl-3 col-md-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay="{{ 0.3 + $index * 0.1 }}s">
                        <div class="wahj-team-card">
                            <div class="wahj-team-img">
                                <img src="{{ asset('storage/' . $member->image_path) }}" alt="{{ $member->name }}">
                            </div>
                            <div class="wahj-team-content">
                                <h5>{{ $member->name }}</h5>
                                <p class="role">{{ $member->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team Section End -->
@endsection
