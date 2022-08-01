<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <center>
<h2><u>Hallo Pesanan Anda</h2></u>
</center>
<br>

Pesanan ke 1: <b>{{ $a }}</b>
 @if ($a == 'ayam goreng')
   <br>Harga {{ $a }} Rp.15.000
     @elseif($a == 'Loobster')
   <br>Harga {{ $a }} Rp.20.000
     @elseif($a == 'Pizza')
   <br>harga {{ $a }} Rp.20.000
     @elseif($a == 'Tiramisu')
   <br>Harga {{ $a }} Rp.20.000
     @elseif($a == 'Pasta')
   <br>Harga {{ $a }} Rp.25.000
     @else
   <br>
    {{$c}}
     @endif

<hr>

Pesanan ke 2: <b>{{ $b }}</b>
@if ($b == 'ayam goreng')
   <br>Harga {{ $b }} Rp.15.000
     @elseif($b == 'Loobster')
   <br>Harga {{ $b }} Rp.20.000
     @elseif($b == 'Pizza')
   <br>Harga {{ $b }} Rp.20.000
     @elseif($b == 'Tiramisu')
   <br>Harga {{ $b }} Rp.20.000
     @elseif($b == 'Pasta')
   <br>Harga {{ $b }} Rp.25.000
     @else
    <br>
    {{$c}}
     @endif

</html>