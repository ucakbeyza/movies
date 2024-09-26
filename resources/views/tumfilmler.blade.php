<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($tmfilm as $ozellik)
        <h1>{{$ozellik->ad}}</h1>
        <h4>{{$ozellik->puan}}</h4>
        <a href="duzenlemesayfasi/{{$ozellik->id}}">Düzenle</a>
        <a href="{{route('silkaydet',$ozellik->id)}}">Silme</a>
        @endforeach
        
    </div>
</body>
</html>