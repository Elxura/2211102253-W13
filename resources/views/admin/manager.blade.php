<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background: #DBC1AC;
      overflow: hidden;
      border-radius: 20px;
    }
    .container {
      position: relative;
      width: 1419px;
      height: 1005px;
      margin: 20px auto;
      background: #DBC1AC;
      border-radius: 20px;
      overflow: hidden;
    }
    .overlay-box {
      position: absolute;
      width: 1326px;
      height: 370px;
      left: 47px;
      top: 191px;
      background: rgba(99, 72, 50, 0.59);
      border-radius: 50px;
    }
    .queue-number {
      position: absolute;
      left: 95px;
      top: 226px;
      color: white;
      font-size: 32px;
      font-weight: 200;
      text-shadow: 0 4px 4px rgba(0,0,0,0.25);
      word-wrap: break-word;
      width: 282px;
      height: 54px;
    }
    .name {
      position: absolute;
      left: 120px;
      top: 289px;
      color: white;
      font-size: 32px;
      font-weight: 600;
      word-wrap: break-word;
    }
    .order-label {
      position: absolute;
      left: 120px;
      top: 337px;
      color: white;
      font-size: 32px;
      font-weight: 600;
      word-wrap: break-word;
      width: 320px;
    }
    .order-detail {
      position: absolute;
      left: 153px;
      top: 399px;
      color: white;
      font-size: 32px;
      font-weight: 400;
      word-wrap: break-word;
      line-height: 1.2;
    }
    .payment-method {
      position: absolute;
      left: 840px;
      top: 489px;
      color: white;
      font-size: 32px;
      font-weight: 600;
      word-wrap: break-word;
      width: 506px;
    }
    .payment-box {
      position: absolute;
      width: 144px;
      height: 90px;
      left: 1167px;
      top: 230px;
      background: #FDFCEA;
      border-radius: 30px;
    }
    .payment-img {
      position: absolute;
      width: 77px;
      height: 90px;
      left: 1200px;
      top: 230px;
    }
    .header-bg {
      position: absolute;
      width: 1419px;
      height: 167px;
      left: 0;
      top: 1px;
      background: #634832;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
      border: 1px solid black;
    }
    .profile-img {
      position: absolute;
      width: 125px;
      height: 125px;
      left: 47px;
      top: 24px;
      border-radius: 9999px;
      object-fit: cover;
    }
    .menu-item {
      position: absolute;
      color: white;
      font-size: 32px;
      font-weight: 200;
      text-shadow: 0 4px 4px rgba(0,0,0,0.25);
      word-wrap: break-word;
      cursor: pointer;
      user-select: none;
    }
    .history {
      left: 1221px;
      top: 59px;
      width: 152px;
      height: 54px;
    }
    .data-penjualan {
      left: 949px;
      top: 58px;
      width: 251px;
      height: 54px;
    }
    .warehouse {
      left: 749px;
      top: 58px;
      width: 251px;
      height: 54px;
    }
    .underline {
      position: absolute;
      width: 132px;
      height: 6px;
      left: 1214px;
      top: 110px;
      background: #D9D9D9;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="overlay-box"></div>

    <div class="queue-number">No Antrian : 3</div>
    <div class="name">Rian</div>
    <div class="order-label">Pesanan :</div>
    <div class="order-detail">
      Coffee Latte<br/>
      Less Sugar<br/>
      Normal Ice
    </div>
    <div class="payment-method">Metode pembayaran : CASH</div>

    <div class="payment-box"></div>
    <img src="https://placehold.co/77x90" alt="Payment Icon" class="payment-img" />

    <div class="header-bg"></div>
    <img src="https://placehold.co/125x125" alt="Profile Picture" class="profile-img" />

    <div class="history menu-item">History</div>
    <div class="data-penjualan menu-item">Data Penjualan</div>
    <div class="warehouse menu-item">warehouse</div>

    <div class="underline"></div>
  </div>
</body>
</html>
