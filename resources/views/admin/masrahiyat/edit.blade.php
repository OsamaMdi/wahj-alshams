@extends('layouts.admin')

@section('title', 'Edit Play')

@section('content')

<div class="card shadow-sm">
    <div class="card-header"><h5 class="mb-0">Edit Play</h5></div>

    <div class="card-body">
        <form action="{{ route('admin.masrahiyat.update', $masrahiyat) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $masrahiyat->title) }}" required>
                    @error('title')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="col-md-6">
                    <label>Author *</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author', $masrahiyat->author) }}" required>
                    @error('author')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Director *</label>
                    <input type="text" name="director" class="form-control" value="{{ old('director', $masrahiyat->director) }}" required>
                    @error('director')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="col-md-6">
                    <label>Assistant Director</label>
                    <input type="text" name="assistant_director" class="form-control" value="{{ old('assistant_director', $masrahiyat->assistant_director) }}">
                    @error('assistant_director')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Music Composer</label>
                    <input type="text" name="music_composer" class="form-control" value="{{ old('music_composer', $masrahiyat->music_composer) }}">
                    @error('music_composer')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="col-md-6">
                    <label>Artistic Consultant</label>
                    <input type="text" name="artistic_consultant" class="form-control" value="{{ old('artistic_consultant', $masrahiyat->artistic_consultant) }}">
                    @error('artistic_consultant')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="mb-3">
                <label>Collaborators</label>
                <textarea name="collaborators" class="form-control">{{ old('collaborators', $masrahiyat->collaborators) }}</textarea>
                @error('collaborators')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Number of Participants *</label>
                    <input type="number" name="number_participants" class="form-control" value="{{ old('number_participants', $masrahiyat->number_participants) }}" required>
                    @error('number_participants')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="col-md-6">
                    <label>Performance Date *</label>
                    <input type="date" name="performance_dates" class="form-control" value="{{ old('performance_dates', $masrahiyat->performance_dates?->format('Y-m-d')) }}" required>
                    @error('performance_dates')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
            </div>

            <div class="mb-3">
                <label>Performance Locations *</label>
                <textarea name="performance_locations" class="form-control" required>{{ old('performance_locations', $masrahiyat->performance_locations) }}</textarea>
                @error('performance_locations')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>Play Type *</label>
                <input type="text" name="play_type" class="form-control" value="{{ old('play_type', $masrahiyat->play_type) }}" required>
                @error('play_type')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>Significance *</label>
                <textarea name="significance" class="form-control" required>{{ old('significance', $masrahiyat->significance) }}</textarea>
                @error('significance')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>Inspiration Source *</label>
                <textarea name="inspiration_source" class="form-control" required>{{ old('inspiration_source', $masrahiyat->inspiration_source) }}</textarea>
                @error('inspiration_source')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>Artistic Paragraph *</label>
                <textarea name="artistic_paragraph" class="form-control" required>{{ old('artistic_paragraph', $masrahiyat->artistic_paragraph) }}</textarea>
                @error('artistic_paragraph')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>YouTube Video URL</label>
                <input type="url" name="youtube_url" class="form-control" value="{{ old('youtube_url', $masrahiyat->youtube_url) }}">
                @error('youtube_url')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>Play Image</label>
                @if ($masrahiyat->image_path)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $masrahiyat->image_path) }}" alt="Image" style="max-height: 120px;">
                    </div>
                @endif
                <input type="file" name="image_path" class="form-control">
                @error('image_path')<small class="text-danger">{{ $message }}</small>@enderror
            </div>

            <div class="mb-3">
                <label>Characters</label>
                <div id="character-wrapper">
                    @php
                        $characters = old('characters', $masrahiyat->characters ?? []);
                        if (is_string($characters)) $characters = json_decode($characters, true);
                    @endphp
                    @foreach ($characters as $char)
                        <div class="input-group mb-2">
                            <input type="text" name="characters[]" class="form-control" value="{{ $char }}" placeholder="Character name">
                            <button type="button" class="btn btn-danger remove-character"><i class="fas fa-times"></i></button>
                        </div>
                    @endforeach
                    @if (empty($characters))
                        <div class="input-group mb-2">
                            <input type="text" name="characters[]" class="form-control" placeholder="Character name">
                            <button type="button" class="btn btn-danger remove-character"><i class="fas fa-times"></i></button>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn btn-sm btn-secondary" id="add-character">
                    <i class="fas fa-plus"></i> Add Character
                </button>
                @error('characters')<small class="text-danger d-block">{{ $message }}</small>@enderror
            </div>

            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Update Play</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#add-character').click(function () {
            $('#character-wrapper').append(`
                <div class="input-group mb-2">
                    <input type="text" name="characters[]" class="form-control" placeholder="Character name">
                    <button type="button" class="btn btn-danger remove-character"><i class="fas fa-times"></i></button>
                </div>
            `);
        });

        $(document).on('click', '.remove-character', function () {
            $(this).closest('.input-group').remove();
        });
    });
</script>
@endpush
