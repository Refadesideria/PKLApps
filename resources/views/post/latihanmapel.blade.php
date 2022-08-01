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
<?php $no=1 ?>
@foreach ($post as $latihanmapel)
 <tr>
    <td>{{$no++}}</td>
    <td>{{$latihanmapel->kodeMP}}</td>
    <td>{{$latihanmapel->nama_MP}}</td>
    <td>{{$latihanmapel->SKS}}</td>
    <td>{{$latihanmapel->semester}}</td>
  
   
    
</tr>
@endforeach
</table>
</fieldset>
</body>
</html>