<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>kopipedia</title>
        <style>
            .kopipedia{
                background: linear-gradient(0deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url("./img/bg.jpg") no-repeat center center fixed;
                background-size: cover;
                position: relative;
                width: 100%;
                height: 100%;
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
                display: flex;
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
            .left1{
                width: 50%;
                height: 100%;
            }
            .right1{
                width: 50%;
                height: 100%;
            }
            h1{
                text-align: center;
                color: black;
                font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
                font-weight: bold;
                font-size: 48px;
            }
            .pict{
                margin-top: 100px;
                margin-left: auto;
                margin-right: auto;
                width: 359px;
                height: 359px
            }
        </style>
    </head>
    <body>
        <div class="kopipedia">
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
                <div class="left1">
                    <div class="pict"><a href="/kopipedia/arabica"><img src="./img/beans.png" alt="beans"></a></div>
                    <h1><a href="/kopipedia/arabica" style="color: black;">Beans</a></h1>
                </div>
                <div class="right1">
                    <div class="pict"><a href="#"><img src="./img/coffe.png" alt="coffee"></a></div>
                    <h1><a href="#" style="color: black;">Coffee</a></h1>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>