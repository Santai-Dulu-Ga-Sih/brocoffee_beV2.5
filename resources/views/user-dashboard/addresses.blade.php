<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\dashboard.css') }}">
    <title>addresses</title>

</head>
<body>
    <div class="dashboard">
        <div class="left">
             <!--- Start of Hamburger Menu -->
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <img src="./img/BurgerMenu.png" alt="BM">
                </label>
                <ul class="menu__box" style="text-align: center;">
                  <li><a class="menu__item" text-center="#">TENTANG KAMI</a></li>
                  <li><a class="menu__item" href="#">KOPIPEDIA</a></li>
                  <li><a class="menu__item" href="#">EZ PZ KOPI</a></li>
                  <li><a class="menu__item" href="#">KONTAK</a></li>
                  <li><a class="menu__item" href="#">KERANJANG</a></li>
                  <li><a class="menu__item" href="#">AKUN SAYA</a></li>
                </ul>
            </div>
            <!-- End of Hamburger Menu -->
        </div>
        
        <div class="right" id="menusection">
            <div class="dash-menu">
                <ul class="text-start">
                    <li><a class="dash-menu-item" href="/welcome">DASHBOARD</a></li>
                    <li><a class="dash-menu-item" href="/my/{{ $login_user->customer_username }}/orders">ORDERS</a></li>
                    <li><a class="dash-menu-item active" href="addresses.html">ADDRESSES</a></li>
                    <li><a class="dash-menu-item" href="payment-methods.html">PAYMENT METHODS</a></li>
                    <li><a class="dash-menu-item" href="account-details.html">ACCOUNT DETAILS</a></li>
                    <li><a class="dash-menu-item" href="FAQ.html">FAQ</a></li>
                    <li><a class="dash-menu-item" href="#">LOGOUT</a></li>
                  </ul>
            </div>
            <div class="dash-content">
                <div class="dash-content-title">
                    <h1>ADDRESSES</h1>
                </div>
                <div class="form-wrapper">
                    <form>
                      <div class="form-group">
                        <label for="nama">NAMA LENGKAP</label>
                        <input type="text" id="nama" name="nama" class="form-input" readonly>
                      </div>
                      <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" id="alamat" name="alamat" class="form-input" readonly>
                      </div>
                      <div class="form-group">
                        <label for="provinsi">PROVINSI</label>
                        <input type="text" id="provinsi" name="provinsi" class="form-input" readonly>
                      </div>
                      <div class="form-group">
                        <label for="kabupaten">KABUPATEN</label>
                        <input type="text" id="kabupaten" name="kabupaten" class="form-input" readonly>
                      </div>
                      <div class="form-group">
                        <label for="kecamatan">KECAMATAN</label>
                        <input type="text" id="kecamatan" name="kecamatan" class="form-input" readonly>
                      </div>
                      <div class="form-group">
                        <label for="kodepos">KODE POS</label>
                        <input type="text" id="kodepos" name="kodepos" class="form-input" readonly>
                      </div>
                      <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" class="form-input" readonly>
                      </div>
                    </form>
                    <button id="edit-btn">Edit</button>
                </div>                  
        </div>
    </div>
<script src="./js/script.js"></script>
</body>
</html>
