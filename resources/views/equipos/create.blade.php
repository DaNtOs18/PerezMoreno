@extends("../layouts.plantilla")
<title>Equipos</title>
@section("cabecera")
    <h1>Equipos Informáticos</h1>
@endsection

@section("contenido")
    <form method="post" action="/equipos">
        <table>
            <tr>
                <td>Tipo:</td>
                <td>
                    <input type="text" name="tipo">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td>
                    <input type="text" name="marca">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Modelo:</td>
                <td>
                    <input type="text" name="modelo">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Garantía:</td>
                <td>
                    <input type="text" name="garantia">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enviar" value="Enviar">
                </td>
                <td>
                    <input type="reset" name="borrar" value="Limpiar Campos">
                </td>
            </tr>
        </table>
    </form>

    <form action="{{route('equipos.index')}}">
        <input type="submit" value="Volver"/>
    </form>
@endsection

@section("pie")

@endsection
