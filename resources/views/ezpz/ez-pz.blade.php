<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\ezpz.css') }}">
    <title>Ez Pz</title>
</head>
<body>
    <div class="ez-pz">
        <div class="nav">
            <div class="navright">
                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                        <img src="{{ asset('img/BurgerMenu.png') }}" alt="BM">
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
                <div class="keranjang">
                    <a class="btn" href="/payment">
                        <img src="{{ asset('img/keranjang.png') }}" alt="keranjang">
                    </a>
                </div>
                <div class="subsection">
                    <h1>EZ PZ KOPI</h1>
                </div>
            </div>
            <div class="navleft">
                <div class="filter">
                    <a class="jenis-kopi active">
                        <p>ALL</p>
                    </a>
                    <a href="/ez-pz-coffee/indonesian" class="jenis-kopi">
                        <p>Indonesia Coffe</p>
                    </a>
                    <a href="international-coffe.html" class="jenis-kopi">
                        <p>International Coffe</p>
                    </a>
                    <a href="robusta-speciality.html" class="jenis-kopi">
                        <p>Robusta Speciality Coffe</p>
                    </a>
                    <a href="arabica-speciality.html" class="jenis-kopi">
                        <p>Arabica Speciality Coffe</p>
                    </a> 
                </div>
            </div>
        </div>
        <div class="listmenu" id="menusection">
            @foreach ($menus as $menu)
            <div class="kopi">
                <a href="/ez-pz-coffee/{{ $menu->coffee_id }}">
                    <img src="{{ $menu->coffee_url }}" alt="kopi1">
                </a>
                
                <h2>{{ $menu->coffee_nama }}</h2>
                <p>Rp {{ $menu->coffee_harga }}</p>
            </div>
            @endforeach
            <!-- <div class="kopi">
                <img src="./img/kopi1.png" alt="kopi1">
                <h2>Kopi Gula Aren</h2>
                <p>Rp18.000</p>
            </div>
            <div class="kopi">
                <img src="./img/kopi2.png" alt="kopi2">
                <h2>Kopi Gula Aren</h2>
                <p>Rp18.000</p>
            </div>
            <div class="kopi">
                <img src="./img/kopi1.png" alt="kopi3">
                <h2>Kopi Gula Aren</h2>
                <p>Rp18.000</p>
            </div>
            <div class="kopi">
                <img src="./img/kopi2.png" alt="kopi2">
                <h2>Kopi Gula Aren</h2>
                <p>Rp18.000</p>
            </div> -->
        </div>
    <script src="{{ asset('js\ezpz.js') }}"></script>
</body>
</html>