@extends('layouts.admin')
@section('title', 'Add Team Member')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Add New Team Member</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.teamwork.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" required>
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

                    <div class="mt-2">
                        <img id="imagePreview" src="#" alt="Image Preview" class="img-thumbnail d-none"
                            style="max-height: 200px;">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <small class="text-danger js-error" data-field="description" style="display:none;"></small>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="home" value="1" class="form-check-input" id="homeCheckbox"
                        {{ old('home') ? 'checked' : '' }}>
                    <label class="form-check-label" for="homeCheckbox">Show on Home Page</label>
                </div>


                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save me-1"></i> Save</button>
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

        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const fields = ['name', 'image_path'];

            fields.forEach(field => {
                const input = form.querySelector(`[name="${field}"]`);
                if (input) {
                    input.addEventListener('input', () => {
                        const errorElement = document.querySelector(
                            `.js-error[data-field="${field}"]`);
                        errorElement.style.display = 'none';
                        errorElement.textContent = '';
                        input.classList.remove('is-invalid');

                        if (field === 'name' && input.value.trim().length === 0) {
                            errorElement.textContent = 'Name is required.';
                            errorElement.style.display = 'block';
                            input.classList.add('is-invalid');
                        }

                        if (field === 'image_path' && input.files.length) {
                            const file = input.files[0];
                            const validTypes = ['image/jpeg', 'image/png', 'image/webp',
                                'image/jpg'];
                            if (!validTypes.includes(file.type) || file.size > 2048 * 1024) {
                                errorElement.textContent =
                                    'Invalid image (JPG, PNG, WEBP - max 2MB).';
                                errorElement.style.display = 'block';
                                input.classList.add('is-invalid');
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush
