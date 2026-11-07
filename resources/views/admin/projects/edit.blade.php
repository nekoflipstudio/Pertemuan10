@extends('admin.template')

@section('title', 'Edit Project')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Edit Project</h4>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.projects._form')

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
