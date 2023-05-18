<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        /* body {
            background-color: black;
        } */
    </style>
</head>

<body>
    @section('content')
        <header>
            <div class="header-content">
                <h2>Masukkan Data</h2>
                <a href="{{ route('produk.create') }}"><button>Masukkan Data Produk</button></a>
            </div>
        </header>

        <table>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($produk as $produks)
                <tr>
                    <td>{{ $produks->nama_produk }}</td>
                    <td>{{ $produks->harga }}</td>
                    <td>{{ $produks->total }}</td>
                    {{-- <td>
                        <form action="{{ route('produk.destroy') }}" method="POST">
                            <a href="{{ route('produk.edit') }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </table>
    @endsection
</body>

</html>
