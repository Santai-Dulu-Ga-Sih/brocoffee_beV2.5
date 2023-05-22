<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\ezpz.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Add To Chart</title>
</head>

<script>
    $(document).ready(function() {
        // Get the quantity input field
        var quantityInput = $('.quantity-input');
    
        // Handle the plus button click
        $('.btn-plus').click(function() {
        var currentQuantity = parseInt(quantityInput.val());
        var newQuantity = currentQuantity + 1;
        quantityInput.val(newQuantity);
        });
    
        // Handle the minus button click
        $('.btn-minus').click(function() {
        var currentQuantity = parseInt(quantityInput.val());
        var newQuantity = currentQuantity - 1;
        if (newQuantity < 1) {
            newQuantity = 1;
        }
        quantityInput.val(newQuantity);
        });
    });
</script>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="add-to-chart">
        <div class="nav">
            <div class="navright">
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
                <div class="keranjang">
                    <a class="btn">
                        <img src="{{ asset('img/keranjang.png') }}" alt="keranjang">
                    </a>
                </div>
                <a href="/ez-pz-coffee" class="subsection">
                    <h1>EZ PZ KOPI</h1>
                </a>
                <div class="arrow">
                    <img src="{{ asset('img/arrow.png') }}" alt="arrow">
                </div>
                <div class="subsubsection">{{ $menu->coffee_nama }}</div>
            </div>
        </div>
        <div class="choose-menu">
            <div class="choose-menu-right">
                <div class="foto-menu">
                    <img src="{{ $menu->coffee_url }}" alt="">
                </div>
            </div>
            <div class="choose-menu-left">
                <div class="menu">
                    <h2>{{ $menu->coffee_nama }}</h2>
                    <h3>Rp {{ $menu->coffee_harga }}</h3>
                    <p>{{ $menu->coffee_deskripsi}}</p>
                    <form action="/cart/{{$menu->coffee_id}}" method="post">
                        @csrf
                        <div class="sesuaikan-kopi">
                            <h2>Sesuaikan Kopimu</h2>
                            <div class="box">
                                <h2>Beans</h2>
                            </div>
                            <div class="beans-checkbox">
                                <div class="checkbox-left">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="beans" id="robusta" value="robusta">
                                        <label class="form-check-label" for="robusta">Robusta</label>
                                    </div>
                                </div>
                                <div class="checkbox-right">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="beans" id="arabica" value="arabica">
                                        <label class="form-check-label" for="arabica">Arabica</label>
                                    </div>
                                </div>  
                            </div>
                            <div class="box">
                                <h2>Cups</h2>
                            </div>
                            <div class="beans-checkbox">
                                <div class="checkbox-left">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="cups" id="regular" value="regular">
                                        <label class="form-check-label" for="regular">Reguler</label>
                                    </div>
                                </div>
                                <div class="checkbox-right">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="cups" id="large" value="large">
                                        <label class="form-check-label" for="large">Large</label>
                                    </div>
                                </div>  
                            </div>
                        </div>


                        <div class="bottomchart">
                            <div class="quantity">
                                <div class="judul">
                                    <h2>Quantity</h2>
                                </div>
                                <div class="input-group quantity">
                                    <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary btn-minus" type="button">-</button>
                                    </div>
                                    <input type="text" class="form-control" value="1">
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                    </div>
                                </div> 
                                <div class="add-to-cart-button">
                                    <button class="button-add-to">Add to Cart</button>
                                </div>   
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>