@extends('layouts.admin')
@section('title', 'Edit Statistics')

@section('content')
<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Update Site Statistics</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.statistics.update', $statistics->id) }}" method="POST" id="statisticsForm">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Number of Plays *</label>
                <input type="number" name="number_of_plays" class="form-control @error('number_of_plays') is-invalid @enderror"
                    value="{{ old('number_of_plays', $statistics->number_of_plays) }}" required min="0">
                @error('number_of_plays')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="number_of_plays" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>Number of Awards *</label>
                <input type="number" name="number_of_awards" class="form-control @error('number_of_awards') is-invalid @enderror"
                    value="{{ old('number_of_awards', $statistics->number_of_awards) }}" required min="0">
                @error('number_of_awards')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="number_of_awards" style="display:none;"></small>
            </div>

            <div class="mb-3">
                <label>Number of Volunteers *</label>
                <input type="number" name="number_of_volunteers" class="form-control @error('number_of_volunteers') is-invalid @enderror"
                    value="{{ old('number_of_volunteers', $statistics->number_of_volunteers) }}" required min="0">
                @error('number_of_volunteers')<div class="text-danger small">{{ $message }}</div>@enderror
                <small class="text-danger js-error" data-field="number_of_volunteers" style="display:none;"></small>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save me-1"></i> Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('statisticsForm').addEventListener('submit', function (e) {
        let hasError = false;
        document.querySelectorAll('.js-error').forEach(el => el.style.display = 'none');

        const fields = ['number_of_plays', 'number_of_awards', 'number_of_volunteers'];
        fields.forEach(function (field) {
            const input = document.querySelector(`[name="${field}"]`);
            const value = input.value.trim();
            const errorEl = document.querySelector(`.js-error[data-field="${field}"]`);

            if (value === '' || isNaN(value) || parseInt(value) < 0) {
                hasError = true;
                errorEl.textContent = 'Please enter a valid non-negative number.';
                errorEl.style.display = 'block';
            }
        });

        if (hasError) {
            e.preventDefault();
        }
    });
</script>
@endpush
