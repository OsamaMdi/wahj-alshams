@extends('layouts.user')

@section('Contact')

    <div class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="card shadow-sm rounded-4 p-4 bg-white">
                <div class="text-center mb-5">
                    <h1 class="fw-bold text-uppercase">{{ $masrahiyat->title }}</h1>
                    <p class="fst-italic text-muted">A Theatrical Production</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="pb-2 border-bottom">
                            <small class="text-muted text-uppercase">Written By</small>
                            <p class="fs-5 mb-0">{{ $masrahiyat->author }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pb-2 border-bottom">
                            <small class="text-muted text-uppercase">Directed By</small>
                            <p class="fs-5 mb-0">{{ $masrahiyat->director }}</p>
                        </div>
                    </div>

                    @if ($masrahiyat->assistant_director)
                        <div class="col-md-6">
                            <div class="pb-2 border-bottom">
                                <small class="text-muted text-uppercase">Assistant Director</small>
                                <p class="fs-5 mb-0">{{ $masrahiyat->assistant_director }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($masrahiyat->music_composer)
                        <div class="col-md-6">
                            <div class="pb-2 border-bottom">
                                <small class="text-muted text-uppercase">Music Composer</small>
                                <p class="fs-5 mb-0">{{ $masrahiyat->music_composer }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($masrahiyat->artistic_consultant)
                        <div class="col-md-6">
                            <div class="pb-2 border-bottom">
                                <small class="text-muted text-uppercase">Artistic Consultant</small>
                                <p class="fs-5 mb-0">{{ $masrahiyat->artistic_consultant }}</p>
                            </div>
                        </div>
                    @endif

                    @if ($masrahiyat->collaborators)
                        <div class="col-md-6">
                            <div class="pb-2 border-bottom">
                                <small class="text-muted text-uppercase">In Collaboration With</small>
                                <p class="fs-5 mb-0">{{ $masrahiyat->collaborators }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="col-md-6">
                        <div class="pb-2 border-bottom">
                            <small class="text-muted text-uppercase">Performance Date</small>
                            <p class="fs-5 mb-0">
                                {{ \Carbon\Carbon::parse($masrahiyat->performance_dates)->format('F d, Y') }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="pb-2 border-bottom">
                            <small class="text-muted text-uppercase">Location</small>
                            <p class="fs-5 mb-0">{{ $masrahiyat->performance_locations }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="pb-2 border-bottom">
                            <small class="text-muted text-uppercase">Play Genre</small>
                            <p class="fs-5 mb-0">{{ $masrahiyat->play_type }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="pb-2 border-bottom">
                            <small class="text-muted text-uppercase">Participants</small>
                            <p class="fs-5 mb-0">{{ $masrahiyat->number_participants }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <small class="text-muted text-uppercase d-block mb-1">Play Significance & Message</small>
                    <p class="fs-6">{{ $masrahiyat->significance }}</p>
                </div>

                <div class="mt-4">
                    <small class="text-muted text-uppercase d-block mb-1">Inspiration Behind the Play</small>
                    <p class="fs-6">{{ $masrahiyat->inspiration_source }}</p>
                </div>

                <div class="mt-4">
                    <small class="text-muted text-uppercase d-block mb-1">Artistic Description</small>
                    <p class="fs-6">{{ $masrahiyat->artistic_paragraph }}</p>
                </div>

                @php
                    $characters = is_array($masrahiyat->characters)
                        ? $masrahiyat->characters
                        : json_decode($masrahiyat->characters, true);
                @endphp

                @if ($characters && is_array($characters))
                    <div class="mt-4">
                        <small class="text-muted text-uppercase d-block mb-2">Featured Characters</small>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($characters as $character)
                                <span class="badge bg-secondary px-3 py-2 rounded-pill">{{ $character }}</span>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if ($masrahiyat->youtube_url)
                    @php
                        preg_match(
                            '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([^\s&]+)/',
                            $masrahiyat->youtube_url,
                            $matches,
                        );
                        $videoId = $matches[1] ?? null;
                    @endphp
                    @if ($videoId)
                        <div class="text-center mt-5">
                            <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank">
                                <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                    class="img-fluid rounded shadow" style="max-width: 100%; cursor: pointer;"
                                    alt="Watch Video">
                            </a>
                            <p class="text-muted mt-2">Click to watch the official teaser</p>
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .card h1 {
            letter-spacing: 1px;
            font-size: 2.2rem;
        }

        .badge {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .text-muted {
            font-size: 0.78rem;
            letter-spacing: 1px;
        }

        @media (max-width: 576px) {
            .fs-5 {
                font-size: 1rem !important;
            }

            .fs-6 {
                font-size: 0.95rem !important;
            }
        }
    </style>
@endpush
