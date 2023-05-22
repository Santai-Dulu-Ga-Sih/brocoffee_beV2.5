<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\dashboard.css') }}">
    <title>orders</title>

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
        
        <div class="right" id="menusection">
            <div class="dash-menu">
                <ul class="text-start">
                    <li><a class="dash-menu-item" href="/welcome">DASHBOARD</a></li>
                    <li><a class="dash-menu-item active" href="#">ORDERS</a></li>
                    <li><a class="dash-menu-item" href="addresses.html">ADDRESSES</a></li>
                    <li><a class="dash-menu-item" href="payment-methods.html">PAYMENT METHODS</a></li>
                    <li><a class="dash-menu-item" href="account-details.html">ACCOUNT DETAILS</a></li>
                    <li><a class="dash-menu-item" href="FAQ.html">FAQ</a></li>
                    <li><a class="dash-menu-item" href="/logout">LOGOUT</a></li>
                  </ul>
            </div>
            <div class="dash-content">
                <div class="dash-content-title">
                    <h1>Orders</h1>
                </div>
                <div class="dash-content-order-wrap">
                    <table>
                        <thead>
                          <tr>
                            <th class="thorder">Nama</th>
                            <th class="thorder">Tanggal</th>
                            <th class="thorder">Order</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($history as $history)
                          <tr>
                            <td class="tdorder">{{ $coffee_nama[$history->coffee_id] }}</td>
                            <td class="tdorder">{{ $history->created_at }}</td>
                            <td class="button"><button>Order Lagi</button></td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>                      
                </div>
        </div>
    </div>
<script src="./js/script.js"></script>
</body>
</html>
