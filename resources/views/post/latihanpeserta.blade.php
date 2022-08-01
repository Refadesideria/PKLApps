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
        TABEL PESERTA
</legend>
<br>
<table border="1">
    <tr>
        <td>NoSiswa</td>
        <td>Kode_MP</td>
        
</tr>
<?php $no=1 ?>
@foreach ($post as $latihanpeserta)
 <tr>
    <td>{{$no++}}</td>
    
    <td>{{$latihanpeserta->kode_MP}}</td>
  
   
    
</tr>
@endforeach
</table>
</fieldset>
</body>
</html>