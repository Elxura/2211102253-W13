<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css-style/Landing-style.css">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Landing Page Opak Coffee</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-dark"
    style="background-color: rgba(29, 21, 16, 0.7)">
    <div class="container">
      <a class="navbar-brand fw-bold fs-2 " href="#">OpakCoffee</a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item home1">
            <a class="nav-link active mx-3" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-3" aria-current="page" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-3" aria-current="page" href="#contact">Contact</a>
          </li>

      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Hero  -->
  <div class="hero d-flex align-items-center" id="home" style="background-image: url(Asset/background/hero.jpg);">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="fw-bold typo1">Enjoy Your</h1>
          <h1 class="fw-bold typo2">Coffe</h1>
          <a href="login"><button class="btn btn-lg rounded-1 me-2 btn-1">Login</button></a>
          <a href="#about"><button class="btn btn-outline-light btn-lg rounded-1 btn-2">About</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero  -->


  <!-- About -->
   
  <div class="about" id="about" >
    <header>
      <h1 class="text-center">About Us</h1>
      <p>Selamat datang di OpakCoffee, tempat di mana setiap cangkir memiliki cerita.</p>
    </header>
    <div class="content-section container">
      <h2 class="section-title">Cerita Kami</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="Asset/background/about-hero.webp" alt="Cerita Kami" class="img-fluid rounded">
        </div>
        <div class="deskripsi col-md-6">
          <p>
            Di <strong>OpakCoffee</strong>, kami percaya bahwa kopi bukan hanya sebuah minuman, tapi juga seni untuk menciptakan momen spesial.
            Sejak membuka pintu kami pada tahun <strong>2024</strong>, kami telah menjadi tempat di mana cinta terhadap kopi bertemu dengan kreativitas dan kebersamaan.
            Berlokasi di pusat <strong>Purwokerto</strong>, café kami dirancang untuk menjadi pelarian nyaman dari hiruk-pikuk kehidupan sehari-hari.
          </p>
          <p>
            Apakah Anda singgah untuk espresso cepat atau ingin menghabiskan sore bersama teman, 
            <strong>OpakCoffee</strong> selalu siap membuat kunjungan Anda menjadi istimewa.
          </p>
        </div>
      </div>
    </div>
    <div class="offer">
      <div class="container py-5">
      <h2 class="offer-title"> Apa Yang Kami Tawarkan</h2>
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="offer-card">
            <img src="Asset/about/kopi1.jpg" alt="Kopi Premium">
            <h5>Kopi Premium</h5>
            <p>Nikmati kopi dari biji berkualitas terbaik yang dipilih dengan hati-hati.</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="offer-card">
            <img src="Asset/about/kopi2.jpg" alt="Kopi Spesial Harian">
            <h5>Kopi Spesial Harian</h5>
            <p>Cicipi racikan kopi unik yang berubah setiap hari. Cocok untuk Anda yang suka mencoba hal baru.</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="offer-card">
            <img src="Asset/about/roti.jpg" alt="Roti">
            <h5>Roti dan Kudapan Fresh</h5>
            <p>Nikmati roti panggang hangat dan kudapan ringan yang disiapkan setiap pagi untuk melengkapi kopi Anda.</p>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="offer-card">
            <img src="Asset/about/minuman.jpg" alt="minuman">
            <h5>Minuman Menyegarkan</h5>
            <p>Nikmati berbagai teh, jus, dan minuman lain untuk menghilangkan dahaga Anda.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- End About -->

  <!-- Contact -->
   <div id="contact">
  <main>
    <div class="container ">
        <div class="image-wrapper">
            <img src="./Asset/icon/BARISTA.jpg" alt="..." width="300px">
        </div>
        <div class="about-info">
            <h2>
                Jejaring Kontak
            </h2>
            <p>Anda dapat berkomunikasi lebih jauh dengan kami melalui jejaring media berikut :</p>
            <div class="sosial-media">
                <a href="" style="text-decoration: none;">
                    <div class="media 1">
                        <div class="icon">
                            <i class="bi bi-instagram text-light"></i>
                        </div>
                        <div class="icon-info">
                            <p style="color: white;">Instagram</p>
                            <p class="name-sosmed">@OPAK_KOPI</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sosial-media">
                <a href="" style="text-decoration: none;">
                    <div class="media 2">
                        <div class="icon">
                            <i class="bi bi-facebook text-light"></i>
                        </div>
                        <div class="icon-info">
                            <p style="color: white;">Facebook</p>
                            <p class="name-sosmed">OPAK_KOPI</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sosial-media">
                <a href="" style="text-decoration: none;">
                    <div class="media 1">
                        <div class="icon">
                            <i class="bi bi-whatsapp text-light"></i>
                        </div>
                        <div class="icon-info">
                            <p style="color: white;">Whatsapp</p>
                            <p class="name-sosmed">08891234534</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sosial-media">
                <a href="" style="text-decoration: none;">
                    <div class="media 1">
                        <div class="icon">
                            <i class="bi bi-envelope text-light"></i>
                        </div>
                        <div class="icon-info">
                            <p style="color: white;">Email</p>
                            <p class="name-sosmed">opakcoffee@gmail.com</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
</div>
<!-- End Contact -->

  <footer>
    <p>&copy; 2023 OpakCoffee. Hak Cipta Dilindungi.</p>
  </footer>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>