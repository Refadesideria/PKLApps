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
            <h2>Acara Televisi</h2>
       </legend>

      @foreach($stasiuntv as $tv)
      Stasiun Televisi : {{$tv['stasiun']}} <br>
      Acara : {{$tv['siaran']}} <br>
      Jam : {{$tv['jam']}} <br>
      Tanggal Tayang : {{$tv['tgl']}} <br>
      <hr>
      @endforeach
</body>
</html>