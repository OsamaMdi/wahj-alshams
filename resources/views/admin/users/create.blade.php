@extends('layouts.admin')
@section('title', 'Add New Admin User')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Add New Admin User</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST" id="createForm">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                        <small class="text-danger js-error" data-field="name" style="display:none;"></small>
                    </div>

                    <div class="col-md-6">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                        <small class="text-danger js-error" data-field="email" style="display:none;"></small>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Password *</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="passwordInput">
                        <button class="btn btn-outline-secondary toggle-password" type="button" id="togglePassword">
                            <i class="fas fa-eye" id="togglePasswordIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                    <small class="text-danger js-error" data-field="password" style="display:none;"></small>
                </div>


                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-1"></i> Save User
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fields = {
                name: val => val.trim() === '' ? 'Name is required.' : '',
                email: val => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val) ? '' : 'Valid email required.',
                password: val => {
                    if (!val) return 'Password is required.';
                    if (val.length < 8) return 'Minimum 8 characters.';
                    if (!/[a-z]/.test(val)) return 'Must include a lowercase letter.';
                    if (!/[A-Z]/.test(val)) return 'Must include an uppercase letter.';
                    if (!/[0-9]/.test(val)) return 'Must include a number.';
                    return '';
                }
            };

            Object.keys(fields).forEach(field => {
                const input = document.querySelector(`[name="${field}"]`);
                const errorBox = document.querySelector(`[data-field="${field}"]`);

                if (input && errorBox) {
                    input.addEventListener('input', () => {
                        const errorMsg = fields[field](input.value);
                        errorBox.textContent = errorMsg;
                        errorBox.style.display = errorMsg ? 'block' : 'none';
                    });
                }
            });
        });
    </script>
           {{--  show password --}} 
    <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const input = document.getElementById('passwordInput');
        const icon = document.getElementById('togglePasswordIcon');

        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    });
</script>
@endpush
