<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALAM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #634832;
        }
        .logo {
            margin-block: 40px;
        }
        form {
            width: 300px;
            background-color: #dbc1ac;
            padding: 20px;
            border-radius: 8px;
        }
        .form-container {
            background-color: #dbc1ac;
        }
        h1.title-text {
            font-size: 1.3rem;
        }
        p.title-text {
            font-size: 0.8rem;
        }
        .text-first {
            color: #38220F;
            margin-left: 20px;
            padding-top: 20px;
        }
        .position-relative i {
            /* agar ikon muncul di dalam input */
        }
    </style>
</head>
<body>
    <div class="logo text-center">
        <img src="{{ asset('asset-admin/logo.jpg') }}" alt="Logo" width="70px" height="70px" style="object-fit:cover; border-radius:50%">
    </div>

    <div class="form-container d-flex justify-content-center">
        <div class="content">
            <div class="text-first text-center mb-3">
                <h1 class="title-text">Getting started</h1>
                <p class="title-text">Sign in or create an account to continue</p>
            </div>

            {{-- Jika ada pesan sukses (setelah registrasi) --}}
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('register.submit') }}" method="POST" class="m-auto">
                @csrf

                {{-- Email --}}
                <div class="mb-3 position-relative">
                    <input 
                        type="email" 
                        name="email"
                        class="form-control ps-5 @error('email') is-invalid @enderror" 
                        id="email" 
                        placeholder="Your Email"
                        value="{{ old('email') }}"
                        required
                    >
                    <i class="bi bi-envelope position-absolute translate-middle-y" style="top: 50%; left: 15px;"></i>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                {{-- Password --}}
                <div class="mb-3 position-relative">
                    <input 
                        type="password" 
                        name="password"
                        class="form-control ps-5 @error('password') is-invalid @enderror" 
                        id="password" 
                        placeholder="Create Your Password"
                        required
                    >
                    <i class="bi bi-lock-fill position-absolute translate-middle-y" style="top: 50%; left: 15px;"></i>
                    <i class="bi bi-eye-slash position-absolute translate-middle-y toggle-password" style="top: 50%; right: 15px; cursor: pointer;"></i>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-3 position-relative">
                    <input 
                        type="password" 
                        name="password_confirmation"
                        class="form-control ps-5 @error('password_confirmation') is-invalid @enderror" 
                        id="password_confirmation" 
                        placeholder="Enter your password again"
                        required
                    >
                    <i class="bi bi-lock-fill position-absolute translate-middle-y" style="top: 50%; left: 15px;"></i>
                    <i class="bi bi-eye-slash position-absolute translate-middle-y toggle-password" style="top: 50%; right: 15px; cursor: pointer;"></i>
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
                <p class="mt-2 text-center">
                    Sudah punya akun? <a href="{{ route('login.form') }}">Login di sini</a>
                </p>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    {{-- Optional: Script untuk toggle visibility password --}}
    <script>
        document.querySelectorAll('.toggle-password').forEach(function(icon) {
            icon.addEventListener('click', function() {
                const input = this.closest('.position-relative').querySelector('input');
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.remove('bi-eye-slash');
                    this.classList.add('bi-eye');
                } else {
                    input.type = 'password';
                    this.classList.remove('bi-eye');
                    this.classList.add('bi-eye-slash');
                }
            });
        });
    </script>
</body>
</html>
