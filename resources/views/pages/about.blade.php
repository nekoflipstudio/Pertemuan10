
@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="container">

    <div class="row justify-content-center py-5">

        <div class="col-md-10">

            <div class="card shadow-sm border-0">

                <div class="card-body p-5">

                    <h2 class="fw-bold text-primary mb-4">
                        Tentang Aplikasi
                    </h2>

                    <p class="fs-5 text-muted">
                        Aplikasi ini dikembangkan sebagai bagian dari
                        kegiatan praktikum mata kuliah Rekayasa Web
                        Program Studi Sistem Informasi Universitas
                        Pamulang.
                    </p>

                    <p class="fs-5 text-muted">
                        Website ini dibuat menggunakan framework Laravel
                        dan Bootstrap untuk mempelajari dasar pengembangan
                        aplikasi web, pengelolaan halaman, routing,
                        controller, serta penggunaan template Blade.
                    </p>

                    <hr class="my-4">

                    <h5 class="fw-bold">Informasi Aplikasi</h5>

                    <p class="mb-2">
                        <strong>Framework:</strong> Laravel
                    </p>

                    <p class="mb-2">
                        <strong>CSS Framework:</strong> Bootstrap 5
                    </p>

                    <p class="mb-0">
                        <strong>Program Studi:</strong> Sistem Informasi UNPAM
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
