
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba técnica</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #3498db; 
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #fff; 
        }

        .menu {
            background-color: #2c3e50;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .menu h3 {
            margin: 0;
            color: #fff; 
        }
    </style>
</head>
<body>

    <div class="menu">
        <h3>Prueba Tecnica</h3>
    </div>

    <div class="container">
        <h1>Nombre: {{ $aplicante['nombre'] }}</h1>
        @if ($aplicante['aprobado'])
            <h2>APROBADO</h2>
        @else
            <h2>REPROBADO</h2>
        @endif
    </div>

</body>
</html>
