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
        <h1>Düzenleme Sayfası</h1>
        <form action="{{route('duzenlekaydet',$tekfilm->id)}}" method="GET">
            @csrf
            <h1>{{$tekfilm->ad}}</h1>
            <div><input type="text" value="{{$tekfilm->ad}}" name="adifilm"></div>
            <div><input type="number" value="{{$tekfilm->puan}}" name="puanifilm"></div>
            <div><button type="submit">DEĞİŞTİR</button></div>
        </form>
    </div>
</body>
</html>