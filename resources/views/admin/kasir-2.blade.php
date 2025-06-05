<div style="width: 1419px; height: 1005px; position: relative; background: #38220F; overflow: hidden">
  <div style="width: 1419px; height: 1005px; left: 0px; top: 0px; position: absolute; background: #634832; border-radius: 30px"></div>
  <div style="width: 1419px; height: 575px; left: 0px; top: 465px; position: absolute; background: #ECE0D1; border-radius: 30px"></div>
  
  <!-- Logo/Image -->
  <div style="width: 187px; height: 187px; left: 610px; top: 105px; position: absolute; background: white"></div>
  
  <!-- Transaction Details -->
  <div style="left: 559px; top: 533px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">IDR</div>
  <div style="left: 113px; top: 578px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 700; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">Detail Transaction</div>
  
  <!-- Transaction Info Labels -->
  <div style="left: 114px; top: 690px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">Date</div>
  <div style="left: 114px; top: 726px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">No. Resi</div>
  <div style="left: 114px; top: 757px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">No. Ref Biller</div>
  <div style="left: 114px; top: 654px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">Type Payment</div>
  <div style="left: 114px; top: 618px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">Nama Pelanggan</div>
  
  <!-- Dynamic Transaction Data -->
  <div style="left: 1270px; top: 672px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ $transaction->payment_type }}</div>
  <div style="left: 1270px; top: 628px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ $transaction->customer_name }}</div>
  <div style="left: 1153px; top: 775px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ $transaction->receipt_number }}</div>
  <div style="left: 1159px; top: 744px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ $transaction->biller_reference }}</div>
  <div style="left: 1066px; top: 708px; position: absolute; color: #512C2C; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ $transaction->created_at->format('d-M-Y H:i:s') }}</div>
  
  <!-- Status and Total -->
  <div style="left: 559px; top: 351px; position: absolute; color: white; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ $transaction->status }}</div>
  <div style="left: 559px; top: 488px; position: absolute; color: #512C2C; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">Total Transaction</div>
  <div style="left: 610px; top: 542px; position: absolute; color: #512C2C; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)">{{ number_format($transaction->total_amount, 0, ',', '.') }}</div>
  
  <!-- Action Buttons -->
  <div style="width: 566.63px; height: 87.53px; left: 444px; top: 870px; position: absolute; background: #38220F; border-radius: 30px"></div>
  <a href="{{ route('orders.incoming') }}" style="width: 561.20px; height: 82.93px; left: 473px; top: 887px; position: absolute; color: #DBC1AC; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); text-decoration: none;">Kembali ke pesanan masuk</a>
  
  <div style="width: 276px; height: 90px; left: 1066px; top: 60px; position: absolute; background: #FDFCEA; border-radius: 50px"></div>
  <button onclick="window.print()" style="left: 1104px; top: 78px; position: absolute; color: black; font-size: 36px; font-family: Poppins; font-weight: 700; word-wrap: break-word; background: none; border: none; cursor: pointer;">Cetak</button>
  
  <!-- Company Logo -->
  <img style="width: 125px; height: 125px; left: 61px; top: 25px; position: absolute; border-radius: 9999px" src="{{ asset('storage/'.$company->logo) }}" alt="Company Logo"/>
</div>