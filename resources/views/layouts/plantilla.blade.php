@include('layouts.app')
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">@yield("h1")</h1>
    <br>
    @yield("body")
</div>
</body>
</html>
