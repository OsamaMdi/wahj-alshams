@extends('layouts.admin')
@section('title', 'Teamwork Members')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Teamwork Members</h5>
            <a href="{{ route('admin.teamwork.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Add New
            </a>
        </div>

        <div class="card-body">
            <form method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                        placeholder="Search by name or ID">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($teamworks as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->name }}</td>
                                <td>
                                    @if ($member->image_path)
                                        <img src="{{ asset('storage/' . $member->image_path) }}" alt="Image"
                                            style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ Str::limit($member->description, 50) }}</td>
                                <td>
                                    <a href="{{ route('admin.teamwork.edit', $member->id) }}"
                                        class="btn btn-sm btn-warning me-1" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.teamwork.destroy', $member->id) }}" method="POST"
                                        class="d-inline btn-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $teamworks->withQueryString()->links() }}
        </div>
    </div>
@endsection
