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
                display: flex;
            }
            .left{
                width: 50%;
                height: 100%;
            }
            .right{
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
                <div class="pict"><a href="#"><img src="{{ asset('img/beans.png') }}" alt="beans"></a></div>
                <h1><a href="#" style="color: black;">Beans</a></h1>
            </div>
            <div class="right">
                <div class="pict"><a href="#"><img src="{{ asset('img/coffe.png') }}" alt="coffee"></a></div>
                <h1><a href="#" style="color: black;">Coffee</a></h1>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>