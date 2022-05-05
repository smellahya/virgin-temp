<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>annonces</title>
</head>
<body>
    <h3>list ds annonces</h3>
    <a href="/annonces/create">add annonce</a>
    <br>
    @foreach ($annonces as $annonce)
        {{$annonce->titre}}
        <br>
    @endforeach

</body>
</html>
