<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ol>
        @foreach ($foglalasok as $foglalas)
            <li>{{$foglalas->nev}}</li>
            <ul>
                <li>{{$foglalas->datum}}</li>
                <li>{{$foglalas->ido}}</li>
            </ul>
        @endforeach
    </ol>
</body>

</html>