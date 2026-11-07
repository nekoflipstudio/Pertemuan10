@extends('admin.template')

@section('title', 'Tambah Project')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="mb-3">Tambah Project</h4>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.projects._form')

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
