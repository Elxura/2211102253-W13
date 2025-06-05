<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Password</title>
  <link rel="stylesheet" href="{{ asset('style-admin/login.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #634832;
      min-height: 100vh;
    }
    .bottom-container {
      background-color: #ECE0D1;
      border-radius: 50px;
      padding-top: 100px;
      padding-bottom: 150px;
    }
    .form-control {
      border-radius: 50px;
      border: 2px solid #38220F;
      box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .btn-send {
      background-color: #38220F;
      border-radius: 35px;
      color: #E5CDB9;
      font-size: 32px;
      font-style: italic;
      padding: 10px 40px;
    }
    .help-text {
      color: #ECE0D1;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .title-text {
      color: #38220F;
      text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
  </style>
</head>
<body>
  <div class="container-fluid p-0 position-relative">
    <div class="position-absolute top-0 end-0 m-4">
      <p class="fs-4 help-text">Need some help?</p>
    </div>

    <div class="d-flex justify-content-center mt-5">
      <img src="{{ asset('asset-admin/logo.jpg') }}" class="rounded-circle" alt="avatar" width="200px">
    </div>

    <div class="bottom-container text-center mt-5">
      <div class="mb-4">
        <h1 class="title-text">Email Pemulihan Password</h1>
        <p class="title-text fs-5">akan dikirimkan ke inbox anda</p>
      </div>

      @if (session('status'))
        <div class="alert alert-success w-75 mx-auto">
          {{ session('status') }}
        </div>
      @endif

      <div class="container" style="max-width: 700px;">
        <form action="{{ route('password.email') }}" method="POST">
          @csrf

          <div class="mb-4 position-relative">
            <input type="email" name="email" class="form-control ps-5" placeholder="Email or Username" value="{{ old('email') }}" required autofocus>
            <img src="https://placehold.co/49x49" class="position-absolute top-50 translate-middle-y" style="left: 15px;" alt="icon">
            @error('email')
              <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-send mt-3">Send Email</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
