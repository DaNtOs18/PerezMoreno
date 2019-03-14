@extends("../layouts.plantilla")
<title>Alta Nuevo Equipo</title>
@section("body")

@section("h1") Alta Nuevo Equipo @endsection

    <form method="post" action="/equipos">
        <table class="table">
            <tr class="table-secondary">
                <th scope="col">Tipo:</th>
                <td>
                    {{--<input type="text" name="tipo">--}}
                    <select name="tipo">
                        <option value="Sobremesa">Sobremesa</option>
                        <option value="Portátil">Portátil</option>
                        <option value="Impresora">Impresora</option>
                        <option value="Pantalla">Pantalla</option>
                    </select>
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <th scope="col">Marca:</th>
                <td>
                    <input type="text" name="marca">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr class="table-secondary">
                <th scope="col">Modelo:</th>
                <td>
                    <input type="text" name="modelo">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <th scope="col">Garantía:</th>
                <td>
                    <input type="text" name="garantia">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr class="table-secondary">
                <th scope="col">Usuario:</th>
                <td>
                    {{--<input type="text" name="user_id">--}}
                    <select name="user_id">
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-outline-secondary" name="enviar" value="Enviar">
                </td>
                <td>
                    <input type="reset" class="btn btn-outline-secondary" name="borrar" value="Limpiar Campos">
                </td>
            </tr>
        </table>
    </form>

    <form action="{{route('equipos.index')}}" class="text-center">
        <input type="submit" class="btn btn-outline-secondary" value="Volver"/>
    </form>
@endsection

