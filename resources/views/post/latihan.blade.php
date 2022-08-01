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
       
</legend>
<br>
<center>
TABEL SISWA
<table border="1">
    <tr>
        <td>NoSiswa</td>
        <td>NAMA</td>
        <td>JK</td>
        <td>JURUSAN</td>

</tr>
<?php $no=1 ?>
@foreach ($siswa as $latihansiswa)
 <tr>
    <td>{{$no++}}</td>
    <td>{{$latihansiswa->nama}}</td>
    <td>{{$latihansiswa->jk}}</td>
    <td>{{$latihansiswa->jurusan}}</td>
   
    
</tr>
@endforeach
</table>
</fieldset>

<fieldset>
    <legend>
        TABEL PESERTA
</legend>
<br>
<table border="1">
    <tr>
        <td>NoSiswa</td>
        <td>kode_MP</td>
        
</tr>
@foreach ($peserta as $latihanpeserta)
 <tr>
    <td>{{$latihanpeserta->nosiswa}}</td>
    <td>{{$latihanpeserta['kode_MP']}}</td>
</tr>

@endforeach
</table>
</fieldset>

<fieldset>
    <legend>
        TABEL MATA PELAJARAN
</legend>
<br>
<table border="1">
    <tr>
        <td>Kode_MP</td>
        <td>Nama_MP</td>
        <td>SKS</td>
        <td>SEMESTER</td>

        
</tr>
@foreach ($mapel   as $latihanmapel)
 <tr>
    <td>{{$latihanmapel['kodeMP']}}</td>
    <td>{{$latihanmapel->nama_MP}}</td>
    <td>{{$latihanmapel->SKS}}</td>
    <td>{{$latihanmapel->Semester}}</td>
  
   
    
</tr>
@endforeach
</table>
</fieldset>
</body>
</html>