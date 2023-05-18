<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Ini Tempat Pengisian Produks</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, eligendi?</p>
        <a href="{{ route('produk.index') }}"><button>BACK</button></a>
    </div>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="contain">
            <strong>Nama Produk</strong>
            <input type="text" name="namaProduk" placeholder="masukkan data...">
        </div>
        <div class="contain">
            <strong>Harga Produk</strong>
            <input type="number" name="harga" placeholder="masukkan harga...">
        </div>
        <div class="contain">
            <strong>Total</strong>
            <input type="number" name="qty" placeholder="masukkan total...">
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>
