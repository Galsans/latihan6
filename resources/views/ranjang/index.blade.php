<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>

    <table>
        <thead>
            <td>
                <tr>No</tr>
                <tr>Nama Barang</tr>
                <tr>Sub Total</tr>
                <tr>QTY</tr>
                <tr>OPSI</tr>
            </td>
        </thead>
        <tbody>
            @foreach ($ranjang as $produks)
                <td>
                    <tr>{{ $loop->iteration }}</tr>
                    <tr>{{ $produks->nama_barang }}</tr>
                    <tr>{{ $produks->sub_total }}</tr>
                    <tr>{{ $produks->qty }}</tr>

                </td>
            @endforeach
            <td>

            </td>
        </tbody>
    </table>

</body>

</html>
