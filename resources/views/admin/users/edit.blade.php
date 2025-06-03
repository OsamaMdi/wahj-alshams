@extends('layouts.admin')

@section('title', 'Edit Admin User')

@section('content')
<div class="card shadow-sm">
    <div class="card-header"><h5 class="mb-0">Edit Admin User</h5></div>

    <div class="card-body">
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" id="editForm">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Name *</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                    @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="name" style="display:none;"></small>
                </div>

                <div class="col-md-6">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                    @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                    <small class="text-danger js-error" data-field="email" style="display:none;"></small>
                </div>
            </div>

            <div class="mb-3">
                <label>New Password <small class="text-muted">(leave blank to keep current)</small></label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="password" style="display:none;"></small>
            </div>

            <div class="mt-4 text-end">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save me-1"></i> Update User
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const fields = {
            name: val => val.trim() === '' ? 'Name is required.' : '',
            email: val => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val) ? '' : 'Valid email required.',
            password: val => {
                if (!val) return ''; // password is optional in edit
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
@endpush
