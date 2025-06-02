@extends('layouts.admin')
@section('title', 'Add New masrahiya')

@section('content')


<div class="card shadow-sm">
    <div class="card-header"><h5 class="mb-0">Add New masrahiya</h5></div>

    <div class="card-body">
        <form action="{{ route('admin.masrahiyat.store') }}" method="POST" enctype="multipart/form-data" id="createForm">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Title *</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="title" style="display:none;"></small>
                </div>
                <div class="col-md-6">
                    <label>Author *</label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}">
                    @error('author')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="author" style="display:none;"></small>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Director *</label>
                    <input type="text" name="director" class="form-control @error('director') is-invalid @enderror" value="{{ old('director') }}">
                    @error('director')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="director" style="display:none;"></small>
                </div>
                <div class="col-md-6">
                    <label>Assistant Director</label>
                    <input type="text" name="assistant_director" class="form-control @error('assistant_director') is-invalid @enderror" value="{{ old('assistant_director') }}">
                    @error('assistant_director')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Music Composer</label>
                    <input type="text" name="music_composer" class="form-control @error('music_composer') is-invalid @enderror" value="{{ old('music_composer') }}">
                    @error('music_composer')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                    <label>Artistic Consultant</label>
                    <input type="text" name="artistic_consultant" class="form-control @error('artistic_consultant') is-invalid @enderror" value="{{ old('artistic_consultant') }}">
                    @error('artistic_consultant')<div class="text-danger small">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mb-3">
                <label>Collaborators</label>
                <textarea name="collaborators" class="form-control @error('collaborators') is-invalid @enderror" rows="2">{{ old('collaborators') }}</textarea>
                @error('collaborators')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Number of Participants *</label>
                    <input type="number" name="number_participants" class="form-control @error('number_participants') is-invalid @enderror" value="{{ old('number_participants') }}">
                    @error('number_participants')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="number_participants" style="display:none;"></small>
                </div>
                <div class="col-md-6">
                    <label>Performance Date *</label>
                    <input type="date" name="performance_dates" class="form-control @error('performance_dates') is-invalid @enderror" value="{{ old('performance_dates') }}">
                    @error('performance_dates')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="performance_dates" style="display:none;"></small>
                </div>
            </div>

            <div class="mb-3">
                <label>Performance Locations *</label>
                <textarea name="performance_locations" class="form-control @error('performance_locations') is-invalid @enderror" rows="2">{{ old('performance_locations') }}</textarea>
                @error('performance_locations')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="performance_locations" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>masrahiya Type *</label>
                <input type="text" name="play_type" class="form-control @error('play_type') is-invalid @enderror" value="{{ old('play_type') }}">
                @error('play_type')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="play_type" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>Significance *</label>
                <textarea name="significance" class="form-control @error('significance') is-invalid @enderror" rows="2">{{ old('significance') }}</textarea>
                @error('significance')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="significance" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>Inspiration Source *</label>
                <textarea name="inspiration_source" class="form-control @error('inspiration_source') is-invalid @enderror" rows="2">{{ old('inspiration_source') }}</textarea>
                @error('inspiration_source')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="inspiration_source" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>Artistic Paragraph *</label>
                <textarea name="artistic_paragraph" class="form-control @error('artistic_paragraph') is-invalid @enderror" rows="3">{{ old('artistic_paragraph') }}</textarea>
                @error('artistic_paragraph')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="artistic_paragraph" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>YouTube Video URL</label>
                <input type="url" name="youtube_url" class="form-control @error('youtube_url') is-invalid @enderror" value="{{ old('youtube_url') }}">
                @error('youtube_url')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label>masrahiya Image</label>
                <input type="file" name="image_path" class="form-control @error('image_path') is-invalid @enderror">
                @error('image_path')<div class="text-danger small">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label>Characters</label>
                <div id="character-wrapper">
                    <div class="input-group mb-2">
                        <input type="text" name="characters[]" class="form-control" placeholder="Character name">
                        <button type="button" class="btn btn-danger remove-character"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-secondary" id="add-character">
                    <i class="fas fa-plus"></i> Add Character
                </button>
            </div>

            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Save masrahiya</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dynamic characters
        document.getElementById('add-character').addEventListener('click', function () {
            const wrapper = document.getElementById('character-wrapper');
            const inputGroup = document.createElement('div');
            inputGroup.className = 'input-group mb-2';
            inputGroup.innerHTML = `
                <input type="text" name="characters[]" class="form-control" placeholder="Character name">
                <button type="button" class="btn btn-danger remove-character"><i class="fas fa-times"></i></button>
            `;
            wrapper.appendChild(inputGroup);
        });

        document.addEventListener('click', function (e) {
            if (e.target.closest('.remove-character')) {
                e.target.closest('.input-group').remove();
            }
        });

        // JS live validation
        const fields = [
            'title', 'author', 'director', 'number_participants', 'performance_dates',
            'performance_locations', 'play_type', 'significance', 'inspiration_source', 'artistic_paragraph'
        ];

        fields.forEach(name => {
            const input = document.querySelector(`[name="${name}"]`);
            const errorBox = document.querySelector(`[data-field="${name}"]`);

            if (input && errorBox) {
                input.addEventListener('input', () => {
                    const val = input.value.trim();
                    if (!val) {
                        errorBox.textContent = 'This field is required.';
                        errorBox.style.display = 'block';
                    } else {
                        errorBox.textContent = '';
                        errorBox.style.display = 'none';
                    }
                });
            }
        });
    });
</script>
@endpush
