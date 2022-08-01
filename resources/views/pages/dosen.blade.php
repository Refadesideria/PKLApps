<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            <b><U>DATA MAHASISWA</u></b>
</legend>
@foreach ($dosen as $dosen)
<ul>
 Nama : {{$dosen['namadosen']}} <br>
 Mata Kuliah : {{$dosen['matkul']}}
 <?php $nilai_b = 0 ?>
 @foreach ($dosen['mahasiswa'] as  $mahasiswa)
   <li>Nama Mahasiswa  : {{$mahasiswa['nama']}}</li>
    Nilai : {{$mahasiswa['nilai']}}<br>
    Grade : 
     @if ($mahasiswa['nilai'] >= 90)
    A
    @elseif($mahasiswa['nilai'] >= 80)
    B
    @elseif($mahasiswa['nilai'] >= 70)
    C
    @elseif($mahasiswa['nilai'] >= 50)
    D
    @elseif($mahasiswa['nilai'] <= 50)
    E
    @else 
    Grade Tidak Ada
    @endif
    <?php $nilai_b += $mahasiswa['nilai'] ?>
    @endforeach
    <br>
    <b>Total Nilai Keseluruhan Mahasiswa =<i>{{$nilai_b}}</i></b>
<?php $ratarata = $nilai_b  / count($dosen['mahasiswa'])?><br>
<b>Rata Rata = <i>{{$ratarata}}</i></b>
<br>
<b>Grade dari Dosen : {{$dosen['namadosen']}}</b>
@if ($ratarata >= 90)
    A
    @elseif($ratarata >= 80)
    B
    @elseif($ratarata >= 70)
    C
    @elseif($ratarata >= 50)
    D
    @elseif($ratarata <= 50)
    E
    @else 
    Grade Tidak Ada
    @endif
     
     <hr>
</ul>
@endforeach

</fieldset>
</body>
</html>