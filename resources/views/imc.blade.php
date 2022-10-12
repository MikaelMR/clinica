<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clínica</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"rel="stylesheet">
</head>
<body>
    <div>
        <h3 class="display-4">Calcule seu IMC</h3>

        <ul class="list-group">
            <li class="list-group-item">
            @if ($imcf >= 18.6 && $imcf<= 24.9)
                <div class="bg-success p-2 text-white">{{$resultado}}</div>
            @else
                <div class="bg-danger p-2 text-white">{{$resultado}}</div>
            @endif
            </li>
        </ul>
    </div>

</body>
</html>
