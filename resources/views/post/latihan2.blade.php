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
            Pengunjung
            <table border="1">
                <tr>
                <td>id_pengunjung</td>
                <td>nm_pengunjung</td>
                <td>alamat</td>
                <td>jk</td>
                <td>no_tlp

</tr>
<?php $no=1 ?>
@foreach ($siswa as $latihansiswa)
 <tr>
    <td>{{$no++}}</td>
    <td>{{$latihansiswa->nama}}</td>


</body>
</html>