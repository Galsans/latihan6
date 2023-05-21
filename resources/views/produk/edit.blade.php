<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        <div class="column">
            <strong>Nama Produk :</strong>
            <input type="text" name="namaProduk" value="{{ $produk->namaProduk }}">
        </div>
        <div class="column">
            <strong>Harga :</strong>
            <input type="number" value="{{ $produk->harga }}" name="harga" placeholder="harga">
        </div>
        <div class="column">
            <strong>Total :</strong>
            <input type="number" value="{{ $produk->qty }}" name="qty" placeholder="qty">
        </div>
        <button type="submit">SEND</button>
    </form>
</body>

</html>
