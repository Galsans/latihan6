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
    <a href="{{ route('produk.index') }}">Kembali</a>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam saepe pariatur similique. Consectetur
        doloremque at vero autem inventore, dolore illum vel necessitatibus numquam quaerat debitis saepe ut,
        reprehenderit, error atque blanditiis a similique? Totam, repellat voluptas quos, dolorum fugiat aut minus,
        corrupti harum ratione porro eveniet eligendi asperiores. Possimus cumque fuga cum non repellat dolore ex
        consequuntur, in iusto velit expedita, obcaecati quos perferendis incidunt? Iusto molestias sapiente soluta esse
        expedita debitis nesciunt ut et ad repellat architecto unde, aperiam exercitationem optio dignissimos odio aut
        harum asperiores. Odit repudiandae quibusdam, sed fuga ea voluptas modi quia tenetur facere perspiciatis itaque.
    </p>
    <table>
        <thead>
            <td>
                <tr>NO</tr>
                <tr>Nama Barang</tr>
                <tr>Sub Total</tr>
                <tr>QTY</tr>
                <tr>OPSI</tr>
            </td>
        </thead>
        <tbody>
            @foreach ($ranjang as $ranjangs)
                <td>
                    <tr>{{ $loop->iteration }}</tr>
                    <tr>{{ $ranjangs->nama_barang }}</tr>
                    <tr>{{ $ranjangs->sub_total }}</tr>
                    <tr>{{ $ranjangs->qty }}</tr>
                    <tr>
                        <a href="{{ route('ranjang.edit', $ranjang->id) }}">Edit</a>
                    </tr>
                </td>
            @endforeach
            <td>

            </td>
        </tbody>
    </table>

</body>

</html>
