<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verifikasi Kode</title>
  <link rel="stylesheet" href="{{ asset('style-admin/login.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #634832;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
    }
    .form-control {
      border-radius: 50px;
      border: 2px solid #38220F;
      box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
      font-size: 20px;
    }
    .btn-verify {
      background-color: #38220F;
      border-radius: 35px;
      color: #E5CDB9;
      font-size: 28px;
      padding: 10px 40px;
    }
  </style>
</head>
<body>
  <div class="position-relative" style="width: 1419px; height: 1005px; margin: 0 auto; background: #634832; overflow: hidden;">
    <div style="width: 1419px; height: 643px; position: absolute; top: 444px; background: #ECE0D1; border-radius: 50px;"></div>

    {{-- Help text --}}
    <div style="position: absolute; top: 32px; right: 70px; color: #ECE0D1; font-size: 32px;">Need some help?</div>

    {{-- Logo --}}
    <img src="{{ asset('asset-admin/logo.jpg') }}" class="position-absolute rounded-circle" style="width: 272px; height: 272px; top: 122px; left: 518px;" alt="logo">

    {{-- Judul --}}
    <div style="position: absolute; top: 470px; left: 69px;">
      <h1 style="color: #544949; font-size: 48px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">Verification</h1>
      <p style="color: #544949; font-size: 20px;">Enter the 6-digit code sent to your email</p>
    </div>

    {{-- Input OTP Code --}}
    <form action="{{ route('verifikasi.kode') }}" method="POST">
      @csrf
      <div class="position-absolute" style="top: 600px; left: 439px; width: 540px;">
        <input type="text" name="otp" maxlength="6" class="form-control text-center" placeholder="Enter 6-digit code" required>
        @error('otp')
          <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>

      {{-- Submit Button --}}
      <div class="position-absolute" style="top: 700px; left: 574px; width: 271px;">
        <button type="submit" class="btn btn-verify w-100">VERIFY</button>
      </div>
    </form>

    {{-- Retry / resend info --}}
    <div class="position-absolute text-center" style="top: 790px; left: 520px; width: 400px;">
      <p style="color: #544949;">Didn't receive the code? <a href="#" style="color: #38220F; text-decoration: underline;">Resend</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
