<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisas</title>
</head>
<body>
    <h1 align="center">Listado de camisas</h1>
    <br><br>
    @if($camisas->count()==0)
        <h2 align="center">No hay camisas para mostrar</h2>
        <h3 align="center">Para agregar una haga click en la opcion "Agregar Camisa"</h3>
    @else
        <table border="1" style="margin: 0 auto;" >
            <tr  >
                <th>ID &nbsp&nbsp&nbsp</th>
                <th>Talla &nbsp&nbsp&nbsp</th>
                <th>Marca &nbsp&nbsp&nbsp</th>
                <th>Precio &nbsp&nbsp&nbsp</th>
                <th>Unidades disponibles &nbsp&nbsp&nbsp</th>
                <th></th>
                <th>Acciones &nbsp&nbsp&nbsp</th>
                <th></th>
            </tr>
        @foreach($camisas as $camisa)
            <tr>
                <td>{{   $camisa->id   }} &nbsp&nbsp&nbsp</td>
                <td>{{   $camisa->talla   }} &nbsp&nbsp&nbsp</td>
                <td>{{   $camisa->marca   }} &nbsp&nbsp&nbsp</td>
                <td>{{   $camisa->precio   }} &nbsp&nbsp&nbsp</td>
                <td>{{   $camisa->no_unidades   }} &nbsp&nbsp&nbsp</td>
                <td>
                    <a href="/camisa/{{$camisa->id}}">&nbsp&nbsp&nbsp Ver Detalle</a>   
                </td>
                <td><a href="/camisa/{{$camisa->id}}/edit">&nbsp&nbsp&nbsp Editar</a></td>
                <td>
                    <form action="/camisa/{{$camisa->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
        </table>
    @endif
    <br><br>
</body>
</html>