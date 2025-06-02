@extends('layouts.admin')
@section('title', 'Play Details')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Play Details</h5>
        <a href="{{ route('admin.masrahiyat.index') }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back
        </a>
    </div>

    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-6"><strong>Title:</strong> {{ $masrahiya->title }}</div>
            <div class="col-md-6"><strong>Author:</strong> {{ $masrahiya->author }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6"><strong>Director:</strong> {{ $masrahiya->director }}</div>
            <div class="col-md-6"><strong>Assistant Director:</strong> {{ $masrahiya->assistant_director }}</div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6"><strong>Music Composer:</strong> {{ $masrahiya->music_composer }}</div>
            <div class="col-md-6"><strong>Artistic Consultant:</strong> {{ $masrahiya->artistic_consultant }}</div>
        </div>

        <div class="mb-3"><strong>Collaborators:</strong> {{ $masrahiya->collaborators }}</div>

        <div class="row mb-3">
            <div class="col-md-6"><strong>Number of Participants:</strong> {{ $masrahiya->number_participants }}</div>
            <div class="col-md-6"><strong>Performance Date:</strong> {{ $masrahiya->performance_dates?->format('Y-m-d') }}</div>
        </div>

        <div class="mb-3"><strong>Performance Locations:</strong> {{ $masrahiya->performance_locations }}</div>
        <div class="mb-3"><strong>Play Type:</strong> {{ $masrahiya->play_type }}</div>
        <div class="mb-3"><strong>Significance:</strong> {{ $masrahiya->significance }}</div>
        <div class="mb-3"><strong>Inspiration Source:</strong> {{ $masrahiya->inspiration_source }}</div>
        <div class="mb-3"><strong>Artistic Paragraph:</strong> {{ $masrahiya->artistic_paragraph }}</div>

        @if ($masrahiya->characters && is_array($masrahiya->characters))
            <div class="mb-3">
                <strong>Characters:</strong>
                <ul class="mb-0">
                    @foreach ($masrahiya->characters as $character)
                        <li>{{ $character }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($masrahiya->image_path)
            <div class="mb-3">
                <strong>Image:</strong><br>
                <img src="{{ asset('storage/' . $masrahiya->image_path) }}" alt="Play Image" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
            </div>
        @endif

        @if ($masrahiya->youtube_url)
            <div class="mb-3">
                <strong>YouTube Video:</strong><br>
                <a href="{{ $masrahiya->youtube_url }}" target="_blank" class="btn btn-sm btn-outline-primary mb-2">
                    <i class="fab fa-youtube"></i> Watch on YouTube
                </a>

                @php
                    // Extract embed ID from YouTube URL if possible
                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $masrahiya->youtube_url, $matches);
                    $videoId = $matches[1] ?? null;
                @endphp

                @if ($videoId)
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
@endsection  
