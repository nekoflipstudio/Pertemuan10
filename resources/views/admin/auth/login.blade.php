<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('bootstrap-5.3.8-dist/images/unpam.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #343a40; /* cadangan kalau gambar tidak ketemu */
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        /* Overlay gelap di atas background */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.45);
            z-index: 0;
        }

        .page-wrap {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px;
        }

        .login-box {
            width: 100%;
            max-width: 350px;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        }

        .login-header {
            background: #ffc107;
            text-align: center;
            padding: 14px 0;
            font-size: 1.35rem;
            color: #212529;
        }

        .login-body {
            padding: 18px 20px 16px;
        }

        .login-body .form-label {
            font-size: 0.9rem;
            margin-bottom: 6px;
        }

        .login-body .form-control {
            background: #f8f9fa;
            padding: 8px 12px;
        }

        .btn-login {
            background: #ffc107;
            border-color: #ffc107;
            color: #212529;
            font-weight: 700;
            padding: 8px 0;
        }

        .btn-login:hover {
            background: #e0a800;
            border-color: #e0a800;
            color: #212529;
        }

        .demo-text {
            font-size: 0.8rem;
            color: #6c757d;
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="page-wrap">
    <div class="login-box">

        <!-- Header -->
        <div class="login-header">Admin Login</div>

        <!-- Form -->
        <div class="login-body">

            @if ($errors->any())
                <div class="alert alert-danger py-2 small">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" id="email"
                           class="form-control" value="{{ old('email') }}" autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-login w-100">Login</button>
            </form>

            <hr class="mt-4 mb-3">

            <p class="demo-text">Demo Login : admin@example.com / password</p>
        </div>

    </div>
</div>

</body>
</html>