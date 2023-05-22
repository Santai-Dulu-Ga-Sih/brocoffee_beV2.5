<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\update-coffee-admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Brocoffee-admin</title>
</head>
<body>
    <div class="container-fluid m-xl-5 p-2" style="width: 1000px;">
        <h1>UpdateCoffee</h1>
        <form action="/admin/coffee/{{ $product->coffee_id }}/update" method="post">
            @csrf
            <div class="wrap">
                <label for="nama_coffee">
                    <h3>Nama</h3>
                </label>
                <input required="" type="text" class="input" name="nama_coffee" value="{{ $product->coffee_nama }}">
            </div>

            <div class="wrap">
                <label for="deskripsi_coffee">
                    <h3>Deskripsi</h3>
                </label>
                <input required="" type="text" class="input" name="deskripsi_coffee" value="{{ $product->coffee_deskripsi }}">
            </div>

            <div class="wrap">
                <label for="harga_coffee">
                    <h3>Harga</h3>
                </label>
                <input required="" type="text" class="input" name="harga_coffee" value="{{ $product->coffee_harga }}">
            </div>

            <div class="wrap">
                <label for="jenis_coffee">
                    <h3>Jenis</h3>
                </label>
                <input required="" type="text" class="input" name="jenis_coffee" value="{{ $product->coffee_jenis }}">
            </div>

            <div class="wrap">
                <label for="picture_coffee">
                    <h3>Link Picture</h3>
                </label>
                <input required="" type="text" class="input" name="picture_coffee" value="{{ $product->coffee_url }}">
            </div>
            <button role="button" class="tambah-btn">Update</button>
        </form>
    </div>

</body>
</html>