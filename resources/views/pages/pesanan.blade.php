<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Hallo pesanan anda : <b>{{ $a }}</b>
    @if ($a == 'ayam goreng')
        <br>harga {{ $a }} Rp.15.000
    @elseif($a == 'Loobster')
        <br>harga {{ $a }} Rp.20.000
    @elseif($a == 'Pizza')
        <br>harga {{ $a }} Rp.20.000
    @elseif($a == 'Tiramisu')
        <br>harga {{ $a }} Rp.20.000
    @elseif($a == 'Tiramisu')
        <br>harga {{ $a }} Rp.20.000
    @elseif($a == 'Pasta')
        <br>harga {{ $a }} Rp.25.000
    @else
    @endif
</html>