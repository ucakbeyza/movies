<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Film Ekleme Sayfası</h1>
    <form action="eklemeyap" method="GET">
        @csrf 
       <div><input type="text" placeholder="Film Adı" name="filmadi"></div>
       <div><input type="number" placeholder="PUAN" name="filmpuani"></div>
       <div><button type="submit">KAYDET</button></div>
    
    </form>

</body>
</html>