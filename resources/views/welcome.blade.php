<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (($nimp)%4 == 0)
        <h1>4 * {{$nimp}} = {{4*$nimp}}</h1>
    @elseif (($nimp)%4 == 1)
        <h1>Erreur Nombre impaire</h1>
    @else
        <h1>?</h1>
    @endif
</body>
</html>