
@extends('layouts.app')

@section('title', 'MyProfile | Home')

@section('content')

<style>
    .profile-home {
        text-align: center;
        padding: 42px 20px 25px;
        max-width: 100%;
        margin: 0 auto;
    }

    .profile-home h1 {
        font-size: 46px;
        font-weight: 300;
        line-height: 1.2;
        margin-bottom: 18px;
        color: #292929;
    }

    .profile-home .profile-image {
        width: 185px;
        height: 210px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        display: block;
        margin: 0 auto 22px;
    }

    .profile-home .tagline {
        font-size: 16px;
        font-weight: 300;
        color: #666;
        margin-bottom: 19px;
    }

    .profile-home hr {
        max-width: 720px;
        margin: 0 auto 20px;
        border: 0;
        border-top: 1px solid #ddd;
        opacity: 1;
    }

    .profile-home .description {
        max-width: 720px;
        margin: 0 auto;
        font-size: 14px;
        line-height: 1.6;
        color: #333;
    }

    .profile-home .btn-project {
        margin-top: 10px;
        padding: 9px 16px;
        font-size: 16px;
        border-radius: 7px;
    }

    @media (max-width: 576px) {
        .profile-home h1 {
            font-size: 34px;
        }

        .profile-home .profile-image {
            width: 165px;
            height: 185px;
        }
    }
</style>

<div class="profile-home">

    <h1>Halo, Saya Gunawan Ardiansyah</h1>

    <img
        src="{{ asset('Gunawan.png') }}"
        alt="Foto Profil Gunawan"
        class="profile-image"
    >

    <p class="tagline">
        Saya seorang Web Developer yang passionate dalam membuat aplikasi web modern.
    </p>

    <hr>

    <p class="description">
        Selamat datang di portfolio website saya. Saya memiliki pengalaman
        dalam Laravel, Bootstrap, dan berbagai teknologi web lainnya.
    </p>

    <a href="{{ url('/projects') }}"
       class="btn btn-primary btn-project">
        Lihat Projects
    </a>

</div>

@endsection
