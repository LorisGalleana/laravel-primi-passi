<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>{{ $title}} </h1>

        @if($zoo)
            <h3>Elenco animali:</h3>
            <ul>
                @foreach ($animals as $animal)
                    <li>{{ $animal }} </li>
                @endforeach
            </ul>
        @else
            <h3>Gli animali sono fuggiti</h3>
        @endif
    </div>
</body>
</html>