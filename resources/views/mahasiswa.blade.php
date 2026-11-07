
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Data Mahasiswa')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary shadow-sm mb-4">
        <div class="container">

            <a href="{{ url('/') }}" class="navbar-brand fw-bold">
                UNPAM - Profile Mahasiswa
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-white">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/profile') }}" class="nav-link text-white">
                            Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link text-white">
                            About
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN HALAMAN -->
    <main class="container flex-grow-1">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-white text-center py-3 mt-4 border-top">
        <small class="text-muted">
            © {{ date('Y') }} UNPAM - Profile Mahasiswa
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
