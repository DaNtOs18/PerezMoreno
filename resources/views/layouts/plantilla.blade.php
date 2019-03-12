@include('layouts.app')
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
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
