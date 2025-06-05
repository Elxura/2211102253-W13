<div style="width: 1419px; height: 1005px; position: relative; background: #DBC1AC; overflow: hidden; border-radius: 20px">
  <div style="width: 1419px; height: 167px; left: 0px; top: 0px; position: absolute; background: #634832; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border: 1px black solid"></div>
  <div style="width: 1326px; height: 529px; left: 47px; top: 219px; position: absolute; background: rgba(99, 72, 50, 0.59); border-radius: 50px"></div>
  <div style="width: 282px; height: 54px; left: 95px; top: 245px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 200; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">No Antrian : {{ $order->queue_number }}</div>
  <div style="left: 120px; top: 308px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">{{ $order->customer_name }}</div>
  <div style="left: 157px; top: 457px; position: absolute">
    <span style="color: white; font-size: 32px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">{{ $order->product_name }}<br/></span>
    <span style="color: white; font-size: 32px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">{{ $order->sugar_level }}<br/>{{ $order->ice_level }}</span>
  </div>
  <div style="width: 320px; left: 127px; top: 409px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">Pesanan : </div>
  <div style="width: 320px; left: 120px; top: 356px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">No Meja : {{ $order->table_number }}</div>
  <div style="width: 555px; left: 120px; top: 640px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">Metode pembayaran : {{ $order->payment_method }}</div>
  <div style="width: 555px; left: 120px; top: 601px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">{{ $order->order_type }}</div>
  <div style="width: 144px; height: 90px; left: 1165px; top: 259px; position: absolute; background: #FDFCEA; border-radius: 30px"></div>
  <img style="width: 120px; height: 120px; left: 1183px; top: 243px; position: absolute" src="{{ asset('path/to/your/image.png') }}" />
  <img style="width: 125px; height: 125px; left: 47px; top: 23px; position: absolute; border-radius: 9999px" src="{{ asset('path/to/your/logo.png') }}" />
  <div style="width: 178px; height: 86px; left: 1154px; top: 640px; position: absolute; background: #00AB47; border-radius: 100px"></div>
  <div style="left: 1188px; top: 665px; position: absolute; color: black; font-size: 32px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">{{ $order->status }}</div>
  <div style="width: 304px; height: 54px; left: 916px; top: 85px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 200; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">Pesanan Masuk</div>
  <div style="width: 152px; height: 54px; left: 1221px; top: 85px; position: absolute; color: white; font-size: 32px; font-family: Montserrat; font-weight: 200; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">History</div>
  <div style="width: 132px; height: 6px; left: 970px; top: 133px; position: absolute; background: #D9D9D9"></div>
</div>