@extends("../layouts.plantilla")
<title>Inicio</title>
@section("h1") INICIO @endsection
@section("body")

    <form action="{{route('equipos.index')}}" class="text-center">
        <input type="submit" class="btn btn-outline-secondary" value="Equipos" />
    </form>

@endsection
