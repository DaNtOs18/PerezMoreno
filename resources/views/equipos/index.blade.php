@extends("../layouts.plantilla")
<title>Equipos</title>
@section("cabecera")
    <h1>Equipos Informáticos</h1>
@endsection

@section("contenido")
    <table border="1">
        <tr>
            <th>Editar</th>
            <th>Id</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Límite de la Garantía</th>
            <th>Especificaciones</th>
        </tr>
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
    </table>
    <br>
    <form action="{{route('equipos.create')}}">
        <input type="submit" value="Dar de alta nuevo equipo" />
    </form>
    <br>
    <form action="/">
        <input type="submit" value="Volver"/>
    </form>
@endsection

@section("pie")

@endsection
