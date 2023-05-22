<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\dashboard.css') }}">
    <title>dashboard</title>

</head>
<body>
    <div class="dashboard">
        <div class="left">
             <!--- Start of Hamburger Menu -->
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <img src="{{ asset('img/BurgerMenu.png') }}" alt="BM">
                </label>
                <ul class="menu__box" style="text-align: center;">
                  <li><a class="menu__item" text-center="/about">TENTANG KAMI</a></li>
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
            <div class="dash-menu">
                <ul class="text-start">
                    <li><a class="dash-menu-item active" href="#">DASHBOARD</a></li>
                    <li><a class="dash-menu-item" href="/my/{{ $login_user->customer_username }}/orders">ORDERS</a></li>
                    <li><a class="dash-menu-item" href="#">ADDRESSES</a></li>
                    <li><a class="dash-menu-item" href="#">PAYMENT METHODS</a></li>
                    <li><a class="dash-menu-item" href="#">ACCOUNT DETAILS</a></li>
                    <li><a class="dash-menu-item" href="#">FAQ</a></li>
                    <li><a class="dash-menu-item" href="/logout">LOGOUT</a></li>
                  </ul>
            </div>
            <div class="dash-content">
                <div class="dash-content-title">
                    @if (Session::has('customer'))
                        <h1>Hello, {{ $login_user->customer_username }}</h1>
                    @else 
                        <h1>No user found with username <h1>
                    @endif
                </div>
                <div class="dash-content-par">
                    <p>Dari dasbor akun, Anda dapat melihat pesanan terbaru, mengelola alamat pengiriman dan penagihan, serta mengedit kata sandi dan detail akun.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>