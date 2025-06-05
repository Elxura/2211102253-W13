<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ALAM</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <style>
    body {
      background-color: #634832;
      min-height: 100vh;
    }
    .logo img {
      object-fit: cover;
    }
    .bottom-container {
      background-color: #ECE0D1;
      border-radius: 20px;
      padding-top: 30px;
      padding-bottom: 150px;
    }
    .bottom-container .text-atas {
      display: flex;
      justify-content: space-between;
      padding-inline: 20px;
      color: #38220F;
    }
    .form-control {
      border-radius: 50px;
      border: 2px solid #38220F;
      box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .btn-signin {
      background-color: #38220F;
      border-radius: 35px;
      color: #E5CDB9;
      font-size: 15px;
      padding: 5px 40px;
    }
    .btn-signin:hover {
      border: 2px solid #38220F;
      color: #38220F;
      background-color: transparent;
    }
    .help-text {
      color: #ECE0D1;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .title-text {
      color: #544949;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    h1.title-text {
      font-size: 1.3rem;
    }
    .help-text {
      font-size: 0.8rem;
      margin-right: 20px;
    }
    .forgot a {
      text-decoration: none;
    }
    .invalid-feedback {
      font-size: 0.875em;
      color: #dc3545;
      margin-top: 0.25rem;
      margin-left: 60px;
    }
  </style>
</head>
<body>
  <div class="container-fluid p-0 position-relative">
    <div class="position-absolute top-0 end-0">
      <p class="help-text">Need some help?</p>
    </div>

    {{-- Logo --}}
    <div class="logo d-flex justify-content-center mt-5">
      <img src="{{ asset('asset-admin/logo.jpg') }}" class="rounded-circle" alt="avatar" width="70px" height="70px">
    </div>

    <div class="bottom-container mt-5">
      <div class="mb-4 text-atas">
        <div class="text">
          <h1 class="title-text">M MASYUD ALAM</h1>
          <p class="title-text fs-6">2211102253</p>
        </div>
        <div class="forgot">
          <a href="#"><p>Forgot Your Password?</p></a>
        </div>
      </div>

      <div class="container" style="max-width: 600px;">
        {{-- Jika ada error global (misalnya credential salah) --}}
        @if($errors->has('email'))
          <div class="alert alert-danger text-center">
            {{ $errors->first('email') }}
          </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
          @csrf

          {{-- Email --}}
          <div class="mb-4 position-relative">
            <input
              type="email"
              name="email"
              class="form-control ps-5 @error('email') is-invalid @enderror"
              placeholder="Email"
              value="{{ old('email') }}"
              required
            >
            <i class="bi bi-envelope position-absolute translate-middle-y" style="top: 50%; left: 15px;"></i>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          {{-- Password --}}
          <div class="mb-4 position-relative">
            <input
              type="password"
              name="password"
              class="form-control ps-5 @error('password') is-invalid @enderror"
              placeholder="Password"
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

          {{-- Link ke Register --}}
          <div class="sign-up mb-3 text-center">
            <p>Belum punya akun? <a href="{{ route('register.form') }}">Sign up!</a></p>
          </div>

          {{-- Tombol Sign In --}}
          <div class="btn-sign text-center">
            <button type="submit" class="btn btn-signin mt-4">SIGN IN</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  {{-- Script toggle visibility password --}}
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
