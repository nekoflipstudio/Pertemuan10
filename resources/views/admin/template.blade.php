<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Web Profile')</title>
    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            color: #212529;
            font-family: Arial, Helvetica, sans-serif;
        }

        .sidebar {
            width: 200px;
            position: fixed;
            top: 61px; /* tinggi navbar */
            bottom: 0;
            background-color: #343a40;
        }
        .sidebar h5 { padding: 12px 0; margin: 0; }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
        }
        .sidebar a:hover,
        .sidebar a.active { background-color: #495057; }

        .content {
            margin-top: 70px;
            margin-left: 250px; /* lebar sidebar + jarak */
            padding: 20px;
        }

        .card { border: 0; border-radius: 10px; }
        .thumb { width: 70px; height: 50px; object-fit: cover; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top shadow-sm px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('bootstrap-5.3.8-dist/images/logo.png') }}" alt="Logo" height="45">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li class="dropdown-item-text text-muted">
                            <small>{{ Auth::user()->email }}</small>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar shadow-sm">
    <h5 class="text-center text-white">Admin Menu</h5>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
    <a href="{{ route('admin.projects.index') }}" class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">Data Project</a>
</div>

<!-- Konten -->
<div class="content">
    @yield('content')

    <footer class="text-center text-muted border-top py-3 mt-5">
        <small>&copy; {{ date('Y') }} Universitas Pamulang. All rights reserved.</small>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
