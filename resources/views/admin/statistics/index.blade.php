@extends('layouts.admin')
@section('title', 'Statistics')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Site Statistics</h5>
        <a href="{{ route('admin.statistics.edit', $statistics->id) }}" class="btn btn-sm btn-primary">
            <i class="fas fa-edit me-1"></i> Edit
        </a>
    </div>

    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="border rounded p-3 text-center">
                    <h6>Number of Plays</h6>
                    <h4 class="text-success">{{ $statistics->number_of_plays }}</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border rounded p-3 text-center">
                    <h6>Number of Awards</h6>
                    <h4 class="text-success">{{ $statistics->number_of_awards }}</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border rounded p-3 text-center">
                    <h6>Number of Volunteers</h6>
                    <h4 class="text-success">{{ $statistics->number_of_volunteers }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
