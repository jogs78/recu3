<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTADO DE CONOCIDOS</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($conocido->carros as $carro)
            <tr>
                <td>{{$carro->marca}}</td>
                <td> 
                    <a href="{{route('conocidos.carros.edit', [$conocido->id, $carro->id])}}">editar </a>




                    <form action="{{route('conocidos.carros.destroy',[$conocido->id, $carro->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="borrar">
                    </form>
                </td>
            </tr>
        @endforeach
</tbody>
</table>
    <a href="{{route('conocidos.index')}}">Regresar al conocido</a>
    <a href="{{route('conocidos.carros.create',$conocido->id)}}">Crear un nuevo</a>

<hr>
    <a href="{{route('salir')}}">salir</a>


</body>
</html>