<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @section('content')
        <form action="{{ route('produk.update') }}" method="POST">
            <div class="column">
                <strong>Nama Produk :</strong>
                <input type="text" value="{{ $produk->namaProduk }}" placeholder="namaProduk">
            </div>
            <div class="column">
                <strong>Harga :</strong>
                <input type="number" value="{{ $produk->harga }}" placeholder="harga">
            </div>
            <div class="column">
                <strong>Total :</strong>
                <input type="number" value="{{ $produk->qty }}" placeholder="qty">
            </div>
            <button type="submit">SEND</button>
        </form>
    @endsection
</body>

</html>
