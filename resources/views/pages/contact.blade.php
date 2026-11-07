@extends('layouts.app')

@section('title', 'Contact | MyProfile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <h2 class="fw-bold mb-4 text-center">Contact</h2>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
