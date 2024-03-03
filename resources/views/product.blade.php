<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Product POS Page</title>

    </head>
    <body>
        <h2>Product List {{ $category }}</h2> 
        <table>
            <tr>
                <th>Id</th>
                <th>Nama Produk</th>
                <th>Harga</th>
            </tr>
            @foreach($product as $produk)
            <tr>
                <td>{{ $produk['id'] }}</td>
                <td>{{ $produk['name'] }}</td>
                <td>{{ $produk['price'] }}</td>
            </tr>
            @endforeach
    </body>
</html>
