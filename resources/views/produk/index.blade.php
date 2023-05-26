<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!} ">
</head>

<body>
    <div class="container">
        <h1>Halaman Utama</h1>
        <a href="{{ route('cart.index') }}">Klik Ranjang</a>
        <a href="{{ route('trx.index') }}">Grid</a>

    </div>
    <header>
        <div class="header-content">
            <h2>Masukkan Data</h2>
            <a href="{{ route('produk.create') }}"><button>Masukkan Data Produk</button></a>
        </div>
    </header>

    <table class="fixed_headers">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Total</th>
                <th class="act">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $produks)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $produks->namaProduk }}</strong></td>
                    <td><strong>{{ $produks->harga }}</strong></td>
                    <td><strong>{{ $produks->qty }}</strong></td>
                    <td>
                        <form action="{{ route('produk.destroy', $produks->id) }}" method="POST">
                            <a href="{{ route('produk.edit', $produks->id) }}" class="btn_16">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn_15">REMOVE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
