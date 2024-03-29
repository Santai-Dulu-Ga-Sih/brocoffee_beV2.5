<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\dashboard-coffee-admin.css') }}"">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Brocoffee-admin</title>
</head>
<body>
    <div class="container-fluid m-xl-5 p-2 bg-light-subtle" style="width: 1000px;">
        <div class="row">

            <div class="col-12 justify-content-center d-flex mb-4"><h2>Coffee admin</h2></div>

            <div class="col-3"><h2>Nama Kopi</h2></div>
            <div class="col-3"><h2>Jenis Kopi</h2></div>
            <div class="col-4"><h2>Last Update</h2></div>

            @foreach ($coffees as $coffee)
            <div class="col-3 mt-2">{{ $coffee->coffee_nama }}</div>
            <div class="col-3 mt-2">{{ $coffee->coffee_jenis }}</div>
            <div class="col-2 mt-2">{{ $coffee->updated_at }}</div>
            <div class="col-2 mt-2">
                <a href="/admin/coffee/{{ $coffee->coffee_id }}/delete">
                    <button class="noselect"><span class="text">Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                        </path></svg></span>
                    </button>
                </a>
            </div>
            <div class="col-2 mt-2">
                <a href="/admin/coffee/{{ $coffee->coffee_id }}/update">
                    <button class="noselect" style="background: #00FF0A;"><span class="text">Update</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z">
                        </path></svg></span>
                    </button>
                </a>
                
            </div>
            @endforeach
            <div class="col-10"></div>
            <div class="col-2 mt-5">
                <a href="/admin/coffee/tambah" style="text-decoration: none;"><button class="add-btn">Tambah</button></a>
            </div>
        </div>
    </div>
</body>
</html>