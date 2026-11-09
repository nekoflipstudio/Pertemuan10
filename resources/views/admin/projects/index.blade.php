
@extends('admin.template')

@section('title', 'Data Project')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Data Project</h3>

        <header class="d-flex justify-content-end gap-2">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                Tambah Project
            </a>

            <a href="{{ route('admin.projects.pdf') }}" class="btn btn-danger" target="_blank">
                Cetak PDF
            </a>
        </header>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Technology</th>
                            <th>Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration + ($projects->currentPage() - 1) * $projects->perPage() }}</td>

                                <td>{{ $project->title }}</td>

                                <td>{{ $project->description }}</td>

                                <td>{{ $project->technology }}</td>

                                <td>{{ $project->status }}</td>

                                <td>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                          method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus project ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">
                                    Belum ada data project.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            {{ $projects->links('pagination::bootstrap-5') }}

        </div>
    </div>

</div>

@endsection
