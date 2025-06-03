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

        @php
            $fields = [
                'Title' => $masrahiya->title,
                'Author' => $masrahiya->author,
                'Director' => $masrahiya->director,
                'Assistant Director' => $masrahiya->assistant_director,
                'Music Composer' => $masrahiya->music_composer,
                'Artistic Consultant' => $masrahiya->artistic_consultant,
                'Collaborators' => $masrahiya->collaborators,
                'Number of Participants' => $masrahiya->number_participants,
                'Performance Date' => $masrahiya->performance_dates?->format('Y-m-d'),
                'Performance Locations' => $masrahiya->performance_locations,
                'Play Type' => $masrahiya->play_type,
                'Significance' => $masrahiya->significance,
                'Inspiration Source' => $masrahiya->inspiration_source,
                'Artistic Paragraph' => $masrahiya->artistic_paragraph,
            ];
        @endphp

        @foreach ($fields as $label => $value)
            @if (!empty($value))
                <div class="mb-3"><strong>{{ $label }}:</strong> {!! nl2br(e($value)) !!}</div>
            @endif
        @endforeach

        @if ($masrahiya->characters && is_array($masrahiya->characters) && count($masrahiya->characters))
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
                <strong>Play Image:</strong><br>
                <img src="{{ asset('storage/' . $masrahiya->image_path) }}" alt="Play Image" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
            </div>
        @endif

        @if ($masrahiya->youtube_url)
            @php
                preg_match('/(?:v=|youtu\.be\/|embed\/)([^&\n?#]+)/', $masrahiya->youtube_url, $matches);
                $videoId = $matches[1] ?? null;
            @endphp

            @if ($videoId)
                <div class="mb-3">
                    <strong>YouTube Video:</strong><br>
                    <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank">
                        <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg" alt="YouTube Thumbnail" class="img-fluid rounded shadow-sm" style="max-width: 360px;">
                    </a>
                </div>
            @endif
        @endif

        <div class="text-muted small mt-4">
            <strong>Created at:</strong> {{ $masrahiya->created_at?->format('Y-m-d H:i') }}<br>
            <strong>Last updated:</strong> {{ $masrahiya->updated_at?->format('Y-m-d H:i') }}
        </div>

    </div>
</div>
@endsection
