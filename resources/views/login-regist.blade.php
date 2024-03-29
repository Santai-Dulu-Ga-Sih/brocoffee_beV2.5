<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css\login-regist.css') }}">
    <script src="{{ asset('js\login-regist.js') }}"></script>
    <title>Login - Regist</title>
</head>
<body>
    <div class="preloader">
        <div id="loader" class="loader-screen">
            <div class="loader">
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            <div class="loader-square"></div>
            </div>
        </div>
    </div>

    <div class="hamburger-menu">
        <input type="checkbox" id="burger">
        <label class="burger" for="burger">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <div class="sidebar-menu">
            <ul>
                <a href="/about"><h4>TENTANG KAMI</h4></a>
                <a href="/kopipedia"><h4>KOPIPEDIA</h4></a>
                <a href="/ez-pz-coffee"><h4>EZ PZ KOPI</h4></a>
                <a href=""><h4>KONTAK</h4></a>
                <a href="/payment"><h4>KERANJANG</h4></a>
                <a href="/welcome"><h4>AKUN SAYA</h4></a>
            </ul>
        </div>
    </div>

    

    <div class="content">
        <div id="content" class="row">
            <div class="col-6 justify-content-center d-flex" style="margin-top: 320px;">
                <div class="wrap-login">
                    <h1>Login</h1>
                    <form action="/login" method="get">
                        <div class="wave-group">
                            <input required="" type="text" class="input" id="username" name="username">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">U</span>
                                <span class="label-char" style="--index: 1">s</span>
                                <span class="label-char" style="--index: 2">e</span>
                                <span class="label-char" style="--index: 3">r</span>
                                <span class="label-char" style="--index: 4">n</span>
                                <span class="label-char" style="--index: 5">a</span>
                                <span class="label-char" style="--index: 6">m</span>
                                <span class="label-char" style="--index: 7">e</span>
                            </label>
                        </div>

                        <div class="wave-group">
                            <input required="" type="password" class="input" id="password" name="password">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">P</span>
                                <span class="label-char" style="--index: 1">a</span>
                                <span class="label-char" style="--index: 2">s</span>
                                <span class="label-char" style="--index: 3">s</span>
                                <span class="label-char" style="--index: 4">w</span>
                                <span class="label-char" style="--index: 5">o</span>
                                <span class="label-char" style="--index: 6">r</span>
                                <span class="label-char" style="--index: 7">d</span>
                            </label>
                        </div>

                        <div class="wrap-remember-me">
                            <div class="row">
                                <div class="col-2">
                                    <label class="container">
                                        <input checked="checked" type="checkbox">
                                        <div class="checkmark"></div>
                                    </label>
                                </div>
                                <div class="col-5 align-items-center d-flex">
                                    <p>Remember me</p>
                                </div>
                                <div class="col-5">
                                    <a href=""><p>Forgot your password?</p></a>
                                </div>
                            </div>
                            <button class="btn"> Login</button>
                        </div>
                        </div>
                    </form>
                </div>
                

                
                
            <div class="col-6 justify-content-center d-flex"style="margin-top: 325px;">
                <div class="wrap-login">
                    <h1>Register</h1>
                    <form action="/registrasi" method="post">
                        @csrf
                        <div class="wave-group">
                            <input required="" type="text" class="input" id="username" name="username">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">U</span>
                                <span class="label-char" style="--index: 1">s</span>
                                <span class="label-char" style="--index: 2">e</span>
                                <span class="label-char" style="--index: 3">r</span>
                                <span class="label-char" style="--index: 4">n</span>
                                <span class="label-char" style="--index: 5">a</span>
                                <span class="label-char" style="--index: 6">m</span>
                                <span class="label-char" style="--index: 7">e</span>
                            </label>
                        </div>

                        <div class="wave-group">
                            <input required="" type="password" class="input" id="password" name="password">
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">P</span>
                                <span class="label-char" style="--index: 1">a</span>
                                <span class="label-char" style="--index: 2">s</span>
                                <span class="label-char" style="--index: 3">s</span>
                                <span class="label-char" style="--index: 4">w</span>
                                <span class="label-char" style="--index: 5">o</span>
                                <span class="label-char" style="--index: 6">r</span>
                                <span class="label-char" style="--index: 7">d</span>
                            </label>
                        </div>
                        <p style="padding: 10px 10px 10px 10px;">Data pribadi Anda akan digunakan untuk mendukung pengalaman Anda di seluruh situs web ini, untuk mengelola akses ke akun Anda, dan untuk tujuan lain yang dijelaskan dalam kebijakan privasi kami.</p>
                        <button class="btn" type="submit">Register</button>
                    </form>
                </div>
                
                
            </div>
        </div>
    </div>
    
    <script src="script.js"></script>
    

</body>
</html>