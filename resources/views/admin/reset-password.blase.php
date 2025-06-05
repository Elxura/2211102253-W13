<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Reset Password</title>
  <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}">
</head>
<body>
  <form action="{{ route('password.update') }}" method="POST">
    @csrf
    <!-- Jika pakai token reset dari email -->
    <input type="hidden" name="token" value="{{ $token ?? '' }}">

    <div style="width: 1440px; height: 1024px; position: relative; background: white; overflow: hidden;">
      <!-- Background -->
      <div style="width: 1440px; height: 1024.45px; left: 0; top: 0; position: absolute; background: #634832; border-radius: 30px;"></div>
      <div style="width: 1440px; height: 573.90px; left: 0; top: 532.10px; position: absolute; background: #ECE0D1; border-radius: 50px;"></div>

      <!-- Header -->
      <div style="width: 402.88px; height: 92.76px; left: 108.58px; top: 66.26px; position: absolute;">
        <span style="color: white; font-size: 48px; font-family: Poppins; font-weight: 400; text-shadow: 0 4px 4px rgba(0,0,0,0.25);">Reset your Password<br/></span>
        <span style="color: white; font-size: 20px; font-family: Poppins; font-style: italic; text-shadow: 0 4px 4px rgba(0,0,0,0.25);">Enter a new password below</span>
      </div>

      <!-- Bantuan -->
      <div style="width: 282.11px; height: 48.93px; left: 1125.41px; top: 41.79px; position: absolute; color: white; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0 4px 4px rgba(0,0,0,0.25);">Need some help?</div>

      <!-- Input Password -->
      <div style="width: 547.99px; height: 79.51px; left: 456.66px; top: 604.48px; position: absolute; background: #FFFEFE; border-radius: 50px;"></div>
      <input type="password" name="password" required placeholder="New Password"
        style="position: absolute; left: 540px; top: 628px; width: 350px; height: 35px; border: none; outline: none; font-size: 18px; background: transparent; color: #512C2C; font-family: Poppins;">

      <!-- Ulangi Password -->
      <div style="width: 547.99px; height: 79.51px; left: 455.64px; top: 710.49px; position: absolute; background: #FFFEFE; border-radius: 50px;"></div>
      <input type="password" name="password_confirmation" required placeholder="Repeat Password"
        style="position: absolute; left: 540px; top: 734px; width: 350px; height: 35px; border: none; outline: none; font-size: 18px; background: transparent; color: #512C2C; font-family: Poppins;">

      <!-- Ikon -->
      <img src="https://placehold.co/52x52" style="position: absolute; width: 51.75px; height: 51.99px; left: 480px; top: 619.77px;" />
      <img src="https://placehold.co/52x52" style="position: absolute; width: 51.75px; height: 51.99px; left: 480px; top: 724.76px;" />
      <img src="https://placehold.co/43x43" style="position: absolute; width: 42.62px; height: 42.81px; left: 948.84px; top: 622.83px;" />
      <img src="https://placehold.co/43x43" style="position: absolute; width: 42.62px; height: 42.81px; left: 947.82px; top: 728.84px;" />

      <!-- Button Reset -->
      <div style="width: 275.01px; height: 68.30px; left: 582.50px; top: 834.85px; position: absolute; background: #38220F; border-radius: 35px;"></div>
      <button type="submit"
        style="position: absolute; left: 582.50px; top: 834.85px; width: 275.01px; height: 68.30px; background: none; border: none; color: #E5CDB9; font-size: 32px; font-family: Montserrat; font-style: italic; font-weight: 400; cursor: pointer; text-shadow: 0px 4px 4px rgba(0,0,0,0.25);">Reset</button>

      <!-- Label -->
      <div style="width: 308.50px; height: 36.70px; left: 575.39px; top: 628.94px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-style: italic; text-shadow: 0 4px 4px rgba(0,0,0,0.25);">Input Your New Password</div>
      <div style="width: 332.85px; height: 36.70px; left: 574.38px; top: 734.95px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-style: italic; text-shadow: 0 4px 4px rgba(0,0,0,0.25);">Repeat Your New Password</div>

      <!-- Gambar -->
      <img src="https://placehold.co/265x266" style="position: absolute; width: 264.86px; height: 266.05px; left: 574.38px; top: 206.93px; border-radius: 9999px;" />
    </div>
  </form>
</body>
</html>
