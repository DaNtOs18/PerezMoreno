@extends("../layouts.plantilla")
<title>Inicio</title>
@section("cabecera")
<h1>INICIO</h1>
@endsection

@section("contenido")
    <form action="{{route('equipos.index')}}">
        <input type="submit" value="Equipos" />
    </form>
@endsection

@section("pie")

@endsection
