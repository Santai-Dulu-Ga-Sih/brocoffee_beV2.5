<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>keranjang</title>
    <style>
        h1 {
            text-align: left;
            color: black;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            font-weight: normal;
            font-size: 30px;
            margin-top: 30px;
            margin-left: 30px;
        }
        h2 {
            color: #4F4F4D;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            font-size: 16pt;
        }
        h3 {
            color: black;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            font-size: 16pt;
            font-weight: bold;
        }
        h4 {
            text-align: left;
            color: black;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            font-weight: normal;
            font-size: 14px;
        }
        h5 {
            color: black;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            font-size: 16pt;
        }
        .keranjang{
            background: linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url("./img/bg.jpg") no-repeat center center fixed;
            background-size: cover;
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
        }
        .left{
            width: 19%;
            height: 100%;
        }

        .right{
            width: 81%;
            height: 100%;
            background-color: white;
        }

        #menu__toggle {
            opacity: 0;
        }
        
        #menu__toggle:checked ~ .menu__box {
            left: 0 !important;
        }

        
        .menu__btn {
            position: fixed;
            top: 60px;
            left: 102px;
            width: 26px;
            height: 26px;
            cursor: pointer;
            z-index: 1;
        }
        .menu__btn > span {
            display: block;
            position: absolute;
            width: 50%;
            
            height: 2px;
            background-color: #616161;
            transition-duration: .25s;
        }
        
        .menu__btn > span::before {
            content: '';
            top: -8px;
            right: -4px;
            width: 150%;
            display: block;
            position: absolute;
            height: 2px;
            background-color: #616161;
            transition-duration: .25s;
        }
        
        .menu__btn > span::after {
            content: '';
            top: 8px;
            width: 150%;
            right: -5px;
            display: block;
            position: absolute;
            height: 2px;
            background-color: #616161;
            transition-duration: .25s;
        }
        
        .menu__box {
            position: fixed;
            top: 0;
            left: -100%;
            width: 250px;
            height: 100%;
            margin: 0;
            padding: 80px 0;
            list-style: none;
            background-color: #FFFF;
            transition-duration: .25s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .menu__box.show{
            display: block;
        }

        .menu__item {
            display: block;
            padding: 12px 24px;
            color: #000000;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
            font-size: 25px;
            font-weight: 500;
            text-decoration: none;
            transition-duration: .25s;
        }
        
        .menu__item:hover {
            background-color: #FFFF;
        }

        @font-face {
            font-family: 'Gill Sans Bold';
            src: url(font/GillSans/Gill\ Sans\ Bold.otf);
        }

        .content{
            width: 100%;
            position:fixed;
            display: flex;
        }

        .brief-tentang-kami{
            font-family: 'Gill Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 29px;
            color: #4F4F4D;
            max-width: 800px;
            position: fixed;
            top: 36%;
            left: 52%;
        }
        .product{
            width: 81%;
            height: 25%;
        }
        .table1{
            width: 250px;
        }
        .table0{
            margin-top:25px;
            margin-left:30px;
        }
    </style>
  </head>
  <body>
    <div class="keranjang">
        <div class="left">
            <!--- Start of Hamburger Menu -->
           <div class="hamburger-menu">
               <input id="menu__toggle" type="checkbox" />
               <label class="menu__btn" for="menu__toggle">
                   <img src="./img/BurgerMenu.png" alt="BM">
               </label>
               <ul class="menu__box" style="text-align: center;">
                 <li><a class="menu__item" href="/about">TENTANG KAMI</a></li>
                 <li><a class="menu__item" href="/kopipedia">KOPIPEDIA</a></li>
                 <li><a class="menu__item" href="/ez-pz-coffee">EZ PZ KOPI</a></li>
                 <li><a class="menu__item" href="#">KONTAK</a></li>
                 <li><a class="menu__item" href="/payment">KERANJANG</a></li>
                 <li><a class="menu__item" href="/welcome">AKUN SAYA</a></li>
               </ul>
           </div>
           <!-- End of Hamburger Menu -->
       </div>
       <div class="right">
           <h1>Keranjang</h1>
           @php
                $total_harga = 0
           @endphp
           @foreach ($carts as $cart)
           
           <table class=table0>
                <tr>
                    <td class=table1><h2>PRODUK</h2></td>
                    <td class=table1><h2>HARGA</h2></td>
                    <td class=table1><h2>QTY</h2></td>
                    <td class=table1><h2>TOTAL</h2></td>
                </tr>
                <tr>
                    <td>
                        <h3>{{ $cart->coffee->coffee_nama }}</h3>
                        <h4>+ {{ $cart->beans }}</h4>
                        <h4>+ {{ $cart->cups }}</h4>
                    </td>
                    <td><h3>{{ $cart->coffee->coffee_harga }}</h3></td>
                    <td style="display:flex; margin-top:25px">
                        <button type="button" class="btn btn-light"><h3>-</h3></button>
                        <h3>1</h3>
                        <button type="button" class="btn btn-light"><h3>+</h3></button>
                    </td>
                    <td><h3>{{ $cart->total_harga }}</h3></td>
                    @php
                        $total_harga += $cart->total_harga
                    @endphp
                </tr>
            </table>
            <div class="col-auto" style="margin-left: 750px;">
                <input type="kode" id="inputKode" class="form-control" placeholder="Kode Kupon">
            </div>
           <hr style="height:1px; border-width:1.5px; width: 94%; border-color: black">
           <table style="margin-top:25px; margin-left:30px">
                <tr>
                    <td style="width:750px"><h5>SUBTOTAL</h5></td>
                    <td style="width:200px"><h3>{{ $cart->total_harga }}</h3></td>
                </tr>
           </table>
           @endforeach
           <hr style="height:1px; border-width:1.5px; width: 94%; border-color: black">
           <h5 style="margin-left:28px">ALAMAT</h5>
           <h5 style="margin-left:28px">GG. PANDEGA MANA YA KOK LUPA NO.66, SLEMAN, BATUNUNGGAL, DEPOK, DIY</h5>
           <hr style="height:1px; border-width:1.5px; width: 94%; border-color: black">
           <table style="margin-top:25px; margin-left:30px">
                <tr>
                    <td style="width:750px"><h5>TOTAL</h5></td>
                    <td style="width:200px"><h3>Rp. {{$total_harga
                        
                        
                        
                        
                        }}</h3></td>
                </tr>
            </table>
            <button style="margin-left:775px; margin-top:25px" type="button" class="btn btn-warning"><a href="/payment/success/{{$cart->customer_id}}"><h5>SHOPEE PAY</h5></a></button>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>