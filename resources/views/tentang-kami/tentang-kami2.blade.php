<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\tentang-kami.css') }}">
    <title>Tentang Kami</title>
</head>
<body>
    <div class="tentang-kami">
        <div class="left">
             <!--- Start of Hamburger Menu -->
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
            <!-- End of Hamburger Menu -->
        </div>
        <div class="right">
            <div class="numbering">
               <a href="/about" class="btn">
                    <img src="img/1 before.png" alt="1">
               </a>
               <a href="/about2" class="btn">
                    <img src="img/2 after.png" alt="2">
               </a>
               <a href="/about3" class="btn">
                    <img src="img/3 before.png" alt="3">
                </a>
                <a href="/about4" class="btn">
                    <img src="img/4 before.png" alt="4">
                </a>
                <a href="/about5" class="btn">
                    <img src="img/5 before.png" alt="5">
                </a>
                <a href="/about6" class="btn">
                    <img src="img/6 before.png" alt="6">
                </a>
            </div>
            <div class="content">
                <div class="logo">
                    <h1>Brocoffe</h1>
                </div>      
                <div class="biography">
                    <img src="img/Yunolva.png" alt="Yunolva">
                    <h1>Yunolva Anis Ramaziyah</h1>
                    <p>Mbak-mbak yang biasa dipanggil Olpa oleh teman-temannya. Anak Informatika di Telkom University asal Kudus. Disini bertugas sebagai Front End dari Brocoffe. Hati-hati moodnya agak aneh</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>