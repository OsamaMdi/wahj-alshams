@extends('layouts.user')

@section('Contact')
<div class="container-fluid px-0 mb-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="position-relative overflow-hidden" style="height: 500px;">
        <!-- Background image with overlay -->
        @if ($masrahiyat->image_path)
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark">
            <img src="{{ asset('storage/' . $masrahiyat->image_path) }}" 
                 alt="{{ $masrahiyat->title }} Poster" 
                 class="w-100 h-100 object-fit-cover"
                 style="opacity: 0.7;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark"></div>
        </div>
        @endif
        
        <!-- Content centered on the image -->
    
                <div class="col-lg-8 text-center">
                    <div class="p-4 p-lg-5 rounded-4 bg-white bg-opacity-10 backdrop-blur-10 shadow-lg border border-white border-opacity-10">
                        <h1 class="display-3 text-uppercase mb-3 text-white fw-bold">{{ $masrahiyat->title }}</h1>
                        <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
                            <span class="badge bg-primary bg-opacity-80 rounded-pill px-3 py-2 fs-6">
                                <i class="fas fa-theater-masks me-2"></i>{{ $masrahiyat->play_type }}
                            </span>
                            <span class="text-white fst-italic fs-5">
                                <i class="fas fa-user-tie me-1"></i>Directed by {{ $masrahiyat->director }}
                            </span>
                        </div>
                    </div>
                </div>
        
        
        <!-- Decorative elements -->
        <div class="position-absolute bottom-0 start-0 w-100">
            <div class="bg-white bg-opacity-10" style="height: 1px;"></div>
            <div class="bg-primary" style="height: 3px; width: 30%;"></div>
        </div>
    </div>
</div>

<div class="py-5" style="background-color:rgba(248, 245, 238, 0.25);">
    <div class="container">
        @if ($masrahiyat->youtube_url)
            @php
                preg_match(
                    '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|v\/))([^\s&]+)/',
                    $masrahiyat->youtube_url,
                    $matches,
                );
                $videoId = $matches[1] ?? null;
            @endphp
            @if ($videoId)
                <div class="d-flex justify-content-center mb-5 animate__animated animate__fadeIn">
                    <div class="video-wrapper rounded-4 overflow-hidden shadow-lg" style="max-width: 800px; width: 800px;height: 400px; border: 4px solid white;">
                        <iframe src="https://www.youtube.com/embed/{{ $videoId }}?autoplay=1&mute=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                class="w-100 h-100"></iframe>
                    </div>
                </div>
            @endif
        @endif

        <div class="row g-4 mt-4">
            <!-- Left Column - Key Details -->
            <div class="col-lg-6">
                <div class="detail-card p-4 bg-white rounded-4 shadow-sm h-100">
                    <h3 class="mb-4 d-flex align-items-center">
                        <span class="icon-circle bg-primary me-3">
                            <i class="fas fa-info-circle text-white"></i>
                        </span>
                        <span class="text-gradient-primary">Production Details</span>
                    </h3>
                    
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-pen-fancy text-primary"></i>
                            <span class="detail-label">Written By:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->author }}</span>
                    </div>
                    
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-user-tie text-primary"></i>
                            <span class="detail-label">Directed By:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->director }}</span>
                    </div>
                    
                    @if ($masrahiyat->assistant_director)
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-user-shield text-primary"></i>
                            <span class="detail-label">Assistant Director:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->assistant_director }}</span>
                    </div>
                    @endif
                    
                    @if ($masrahiyat->music_composer)
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-music text-primary"></i>
                            <span class="detail-label">Music Composer:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->music_composer }}</span>
                    </div>
                    @endif
                    
                    @if ($masrahiyat->artistic_consultant)
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-palette text-primary"></i>
                            <span class="detail-label">Artistic Consultant:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->artistic_consultant }}</span>
                    </div>
                    @endif
                    
                    @if ($masrahiyat->collaborators)
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-handshake text-primary"></i>
                            <span class="detail-label">Collaborators:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->collaborators }}</span>
                    </div>
                    @endif
                    
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-calendar-day text-primary"></i>
                            <span class="detail-label">Performance Date:</span>
                        </div>
                        <span class="detail-value">
                            {{ \Carbon\Carbon::parse($masrahiyat->performance_dates)->format('F d, Y') }}
                        </span>
                    </div>
                    
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span class="detail-label">Location:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->performance_locations }}</span>
                    </div>
                    
                    <div class="detail-item">
                        <div class="icon-text">
                            <i class="fas fa-users text-primary"></i>
                            <span class="detail-label">Participants:</span>
                        </div>
                        <span class="detail-value">{{ $masrahiyat->number_participants }}</span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Descriptions -->
            <div class="col-lg-6">
                <div class="detail-card p-4 bg-white rounded-4 shadow-sm mb-4">
                    <h3 class="mb-4 d-flex align-items-center">
                        <span class="icon-circle bg-primary me-3">
                            <i class="fas fa-star text-white"></i>
                        </span>
                        <span class="text-gradient-primary">Significance & Message</span>
                    </h3>
                    <div class="description-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $masrahiyat->significance }}
                    </div>
                </div>

                <div class="detail-card p-4 bg-white rounded-4 shadow-sm mb-4">
                    <h3 class="mb-4 d-flex align-items-center">
                        <span class="icon-circle bg-primary me-3">
                            <i class="fas fa-lightbulb text-white"></i>
                        </span>
                        <span class="text-gradient-primary">Inspiration Behind</span>
                    </h3>
                    <div class="description-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $masrahiyat->inspiration_source }}
                    </div>
                </div>

                <div class="detail-card p-4 bg-white rounded-4 shadow-sm">
                    <h3 class="mb-4 d-flex align-items-center">
                        <span class="icon-circle bg-primary me-3">
                            <i class="fas fa-paint-brush text-white"></i>
                        </span>
                        <span class="text-gradient-primary">Artistic Description</span>
                    </h3>
                    <div class="description-text">
                        <i class="fas fa-quote-left text-muted me-2"></i>
                        {{ $masrahiyat->artistic_paragraph }}
                    </div>
                </div>
            </div>
        </div>

        @php
            $characters = is_array($masrahiyat->characters)
                ? $masrahiyat->characters
                : json_decode($masrahiyat->characters, true);
        @endphp

        @if ($characters && is_array($characters))
            <div class="mt-5">
                <div class="detail-card p-4 bg-white rounded-4 shadow-sm">
                    <h3 class="mb-4 d-flex align-items-center">
                        <span class="icon-circle bg-primary me-3">
                            <i class="fas fa-users text-white"></i>
                        </span>
                        <span class="text-gradient-primary">Featured Characters</span>
                    </h3>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach ($characters as $character)
                            <div class="character-badge">
                                <i class="fas fa-user-circle me-2"></i>{{ $character }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<style>
    /* Color Variables */
    :root {
        --primary-color: #4e54c8;
        --secondary-color: #8f94fb;
        --text-color: #333;
        --text-muted: #6c757d;
        --light-bg: #f8f9fa;
    }

    /* Text Gradient */
    .text-gradient-primary {
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: 600;
    }

    /* Header Styles */
    .page-header {
        background-size: cover;
        background-position: center;
        padding-bottom: 5rem;
    }

    /* Icon Circles */
    .icon-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Detail Cards */
    .detail-card {
        border-left: 4px solid var(--primary-color);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }

    /* Detail Items */
    .detail-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .detail-item:last-child {
        border-bottom: none;
    }

    .icon-text {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-label {
        font-weight: 600;
        color: var(--text-color);
        min-width: 150px;
    }

    .detail-value {
        color: var(--text-color);
        text-align: right;
        font-weight: 500;
    }

    /* Description Text */
    .description-text {
        line-height: 1.8;
        color: var(--text-color);
        font-size: 1rem;
        position: relative;
    }

    /* Character Badges */
    .character-badge {
        background-color: rgba(78, 84, 200, 0.1);
        color: var(--primary-color);
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .character-badge:hover {
        background-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    /* Video Wrapper */
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
        overflow: hidden;
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .detail-label {
            min-width: 120px;
        }
    }

    @media (max-width: 768px) {
        .detail-item {
            flex-direction: column;
            align-items: flex-start;
            gap: 5px;
        }
        
        .detail-value {
            text-align: left;
            width: 100%;
            padding-left: 30px;
        }
        
        .page-header h1 {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 576px) {
        .page-header h1 {
            font-size: 1.8rem;
        }
        
        .detail-card {
            padding: 20px;
        }
    }
</style>
@endpush