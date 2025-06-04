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
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="{{ asset('img/p5.jpeg') }}" alt="Image">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Ultimate Welding and Quality Metal Solutions</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-5 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-users-cog fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Certified Expert & Team</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-tachometer-alt fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Fast & Reliable Services</h5>
                            </div>
                        </div>
                    </div>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum
                    </p>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum
                    </p>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum
                    </p>
                    <div class="border border-5 border-primary p-4 text-center mt-4">
                        <h4 class="lh-base text-uppercase mb-0">We’re Good in All Metal Works Using Quality Welding Tools
                        </h4>
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


    {{--   <!-- Newsletter Start -->
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
    <!-- Newsletter End --> --}}
@endsection
