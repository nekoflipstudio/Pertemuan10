
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
    <div class="container">

        <a href="{{ url('/') }}" class="navbar-brand fw-bold">
            MyProfile
        </a>

        <div class="ms-auto">
            <ul class="navbar-nav flex-row gap-4">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link text-white">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/projects') }}" class="nav-link text-white">
                        Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link text-white">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/#contact') }}" class="nav-link text-white">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
