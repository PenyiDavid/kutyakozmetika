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
                @if(auth()->check() && auth()->user()->role == 'admin')
                    <form action="{{ route('foglalasok.show', $foglalas->id) }}" method="GET">
                        @csrf
                        <button type="submit">Megnézem</button>
                    </form>

                @endif

            </ul>
        @endforeach
    </ol>
</body>

</html>