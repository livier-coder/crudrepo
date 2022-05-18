<?php
use App\Http\Controllers\CamisaController; ?>

<x-layout>
    <x-slot:title>
        Stick and Dress
    </x-slot>
    <body>
    <h1 align="center">Mostrar Camisa</h1>
    <br><br>
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
        </table>
        <br><br>
    </body>
</x-layout>