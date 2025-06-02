@extends('layouts.admin')
@section('title', 'Masrahiyat List')

@section('content')


    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Masrahiyat</h5>
            <a href="{{ route('admin.masrahiyat.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i> Add New
            </a>
        </div>
        <div class="card-body">
            <form method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                        placeholder="Search by title">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Type</th>
                            <th>Participants</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($masrahiyat as $play)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $play->title }}</td>
                                <td>{{ $play->author }}</td>
                                <td>{{ $play->play_type }}</td>
                                <td>{{ $play->number_participants }}</td>
                                <td>
                                    <a href="{{ route('admin.masrahiyat.show', $play->id) }}"
                                        class="btn btn-sm btn-info me-1" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                   <a href="{{ route('admin.masrahiyat.edit', ['masrahiyat' => $play->id]) }}"
   class="btn btn-sm btn-warning me-1" title="Edit">
   <i class="fas fa-edit"></i>
</a>


                                    <form method="POST" action="{{ route('admin.masrahiyat.destroy', $play->id) }}"
                                        style="display:inline;" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $masrahiyat->withQueryString()->links() }}
        </div>
    </div>
@endsection
