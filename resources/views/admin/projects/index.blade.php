@extends('admin.template')

@section('title', 'Data Projects')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Data Projects</h3>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Tambah Project</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Teknologi</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($project->image)
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="thumb img-thumbnail">
                                @endif
                            </td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->technology }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->status }}</td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada data project.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
