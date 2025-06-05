<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-dark" style="background-color: #634832">
        <div class="container">
            <a class="navbar-brand fw-bold fs-2 " href="#">OpakCoffee</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item home1">
                        <a class="nav-link active mx-3" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-3" aria-current="page" href="#about">Cart</a>
                    </li>

            </div>
        </div>
    </nav>
    <!-- Navbar -->



  {{-- resources/views/warehouse.blade.php --}}
  <!-- <div style="width: 1543px; height: 1005px; position: relative; background: white; overflow: hidden">
    <img
      style="width: 1624px; height: 1026px; left: -63px; top: -21px; position: absolute; background: linear-gradient(0deg, #DBC1AC 0%, #DBC1AC 100%)"
      src="https://placehold.co/1624x1026" alt="Background Image" />

    <div
      style="width: 1546px; height: 90px; left: -3px; top: 262px; position: absolute; background: #967259; box-shadow: 4px 4px 4px; outline: 1px black solid; filter: blur(2px)">
    </div>

    {{-- Judul --}}
    <div
      style="width: 191px; height: 54px; left: 1291px; top: 52px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 200; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Warehouse</div>

    {{-- Logo --}}
    <img style="width: 125px; height: 125px; left: 59px; top: 23px; position: absolute; border-radius: 9999px"
      src="https://placehold.co/125x125" alt="Logo" />

    {{-- Header Tabel --}}
    <div
      style="left: 63px; top: 290px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Id</div>
    <div
      style="left: 139px; top: 290px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Gambar</div>
    <div
      style="left: 357px; top: 292px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Nama Produk</div>
    <div
      style="width: 135px; height: 47px; left: 686px; top: 289px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Kategori</div>
    <div
      style="left: 971px; top: 288px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Harga</div>
    <div
      style="left: 1197px; top: 289px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Stok</div>
    <div
      style="left: 1381px; top: 287px; position: absolute; color: #171616; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      Aksi</div>

    {{-- Contoh data produk looping --}}
    @foreach ($products as $product)
    <div
      style="left: 70px; top: {{ 410 + ($loop->index * 160) }}px; position: absolute; color: #1F1C1C; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      {{ $product->id }}</div>

    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
      style="width: 105px; height: 90px; left: 150px; top: {{ 395 + ($loop->index * 160) }}px; position: absolute; border-radius: 20px; border: 1px black solid" />

    <div
      style="left: 379px; top: {{ 410 + ($loop->index * 160) }}px; position: absolute; color: #1F1C1C; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      {{ $product->name }}</div>

    <div
      style="width: 152px; height: 47px; left: 681px; top: {{ 437 + ($loop->index * 160) }}px; position: absolute; color: #1F1C1C; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      {{ $product->category }}</div>

    <div
      style="left: 970px; top: {{ 410 + ($loop->index * 160) }}px; position: absolute; color: #1F1C1C; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      {{ number_format($product->price, 0, ',', '.') }}</div>

    <div
      style="left: 1197px; top: {{ 410 + ($loop->index * 160) }}px; position: absolute; color: #1F1C1C; font-size: 32px; font-family: Poppins; font-weight: 400; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">
      {{ $product->stock }}</div>

    {{-- Tombol Aksi --}}
    <a href="{{ route('products.edit', $product->id) }}"
      style="width: 44px; height: 44px; left: 1348px; top: {{ 411 + ($loop->index * 160) }}px; position: absolute; background: #2C9100; display: block; border-radius: 6px; text-align: center; line-height: 44px; color: white; font-weight: bold; text-decoration: none;">
      Edit
    </a>

    <form method="POST" action="{{ route('products.destroy', $product->id) }}"
      style="width: 48px; height: 53px; left: 1450px; top: {{ 407 + ($loop->index * 160) }}px; position: absolute;">
      @csrf
      @method('DELETE')
      <button type="submit"
      style="width: 48px; height: 53px; background: #F00505; border: none; color: white; font-weight: bold; cursor: pointer;">
      Del
      </button>
    </form>
  @endforeach
  </div> -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>