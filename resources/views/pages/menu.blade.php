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
        <legend>Menu</legend>
        @foreach ($menu as $menupilihan)
       <li>{{$menupilihan['menu1']}}</li>
       <li>{{$menupilihan['menu2']}}</li>

       @foreach ($menu as $menupilihan)
          <ul type="square">
            <li>{{$menupilihan['menu4']}}</li>
          </ul>

          @foreach ($menupilihan['jenisor'] as $olahraga )
          <ul>
            <ul><li>{{$olahraga}}</ul></li>
          </ul>

          @endforeach
       @endforeach

       @foreach ($menupilihan['menu5'] as $menu5)
          <ul type="square">
            <li>{{$menu5}}</li>
          </ul>

          @endforeach
          <li>{{$menupilihan['menu3']}}</li>
        @endforeach
        
    </fieldset>
</body>
</html>