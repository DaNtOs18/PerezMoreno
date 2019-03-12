@include('layouts.app')
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        .cabecera {
            text-align: center;
            font-size: x-large;
            font-family: Tahoma;
            margin-bottom: 100px;
            color: #343a40;
        }

        .contenido{
            text-align: center;
        }
        .contenido form, table {
            width: 500px;
            margin: 0 auto;
        }

        .pie {
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 15px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="cabecera">
    @yield("cabecera")

</div>

<div class="contenido">
    @yield("contenido")
</div>

<div class="pie">
    @yield("pie")
    Grupo Pérez Moreno
</div>

</body>
</html>
