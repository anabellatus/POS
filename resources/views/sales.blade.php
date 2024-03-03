<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sales POS Page</title>
    </head>
    <body>
        <h2>Halaman Transaksi</h2>

        <table>
            <tr>
                <th>No.</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
            @foreach ($transaksi as $sales)
                <tr>
                    <td>{{ $sales['id'] }}</td>
                    <td>{{ $sales['product'] }}</td>
                    <td align="center">{{ $sales['qty'] }}</td>
                    <td>{{ $sales['price'] }}</td>
                    <td>{{ $sales['total'] }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
