@extends("../layouts.plantilla")
<title>Equipos</title>
@section("body")

@section("h1") Equipos Informáticos @endsection

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Editar</th>
            <th scope="col">Id</th>
            <th scope="col">Tipo</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Límite de la Garantía</th>
            <th scope="col">Especificaciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            <tr>
                <td><a href="{{route('equipos.edit', $equipo->id)}}">Click</a></td>
                <td>{{$equipo->id}}</td>
                <td>{{$equipo->tipo}}</td>
                <td>{{$equipo->marca}}</td>
                <td>{{$equipo->modelo}}</td>
                <td>{{$equipo->garantia}}</td>
                <td><a href="{{route('equipos.show', $equipo->id)}}">Mostrar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <form action="{{route('equipos.create')}}" class="text-center">
        <input type="submit" class="btn btn-outline-secondary" value="Dar de alta nuevo equipo" />
    </form>
    <br>
    <form action="/" class="text-center">
        <input type="submit" class="btn btn-outline-secondary" value="Volver"/>
    </form>
@endsection

