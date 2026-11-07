
@extends('layouts.app')

@section('title', 'Profile Mahasiswa')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-sm">

            <div class="card-header bg-white text-center py-4">
                <img
                    src="{{ asset('Gunawan.png') }}"
                    alt="Foto Mahasiswa"
                    class="rounded-circle img-thumbnail shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;"
                >
            </div>

            <div class="card-body">

                <p><strong>Nama :</strong> {{ $mahasiswa['nama'] }}</p>

                <p><strong>NIM :</strong> {{ $mahasiswa['nim'] }}</p>

                <p><strong>Prodi :</strong> {{ $mahasiswa['prodi'] }}</p>

                <p><strong>Email :</strong> {{ $mahasiswa['email'] }}</p>

                <p><strong>Kampus :</strong> {{ $mahasiswa['kampus'] }}</p>

                <p><strong>Status :</strong> {{ $mahasiswa['status'] }}</p>

            </div>

        </div>

    </div>
</div>

@endsection
