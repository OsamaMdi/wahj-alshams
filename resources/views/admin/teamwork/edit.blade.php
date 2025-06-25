@extends('layouts.admin')
@section('title', 'Edit Team Member')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Edit Team Member</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.teamwork.update', $teamwork) }}" method="POST" enctype="multipart/form-data"
                id="editTeamForm">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $teamwork->name) }}" required>
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <small class="text-danger js-error" data-field="name" style="display:none;"></small>
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image_path" accept="image/*"
                        class="form-control @error('image_path') is-invalid @enderror" onchange="previewImage(event)">
                    @error('image_path')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <small class="text-danger js-error" data-field="image_path" style="display:none;"></small>

                    @if ($teamwork->image_path)
                        <div class="mt-2">
                            <img id="imagePreview" src="{{ asset('storage/' . $teamwork->image_path) }}" alt="Current Image"
                                class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    @else
                        <div class="mt-2">
                            <img id="imagePreview" src="#" alt="Image Preview" class="img-thumbnail d-none"
                                style="max-height: 200px;">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $teamwork->description) }}</textarea>
                    @error('description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <small class="text-danger js-error" data-field="description" style="display:none;"></small>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="home" value="1" class="form-check-input" id="homeCheckbox"
                        {{ old('home', $teamwork->home) ? 'checked' : '' }}>
                    <label class="form-check-label" for="homeCheckbox">Show on Home Page</label>
                </div>


                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Real-time validation
        document.querySelectorAll('#editTeamForm input, #editTeamForm textarea').forEach(input => {
            input.addEventListener('input', function() {
                const field = input.name;
                const errorElement = document.querySelector(`.js-error[data-field="${field}"]`);
                if (input.checkValidity()) {
                    input.classList.remove('is-invalid');
                    if (errorElement) {
                        errorElement.textContent = '';
                        errorElement.style.display = 'none';
                    }
                } else {
                    input.classList.add('is-invalid');
                    if (errorElement) {
                        errorElement.textContent = 'Please enter a valid value.';
                        errorElement.style.display = 'block';
                    }
                }
            });
        });
    </script>
@endpush
