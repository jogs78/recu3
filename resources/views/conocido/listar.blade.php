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
                <th>Nombre</th>
                <th>Carros</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($conocidos as $conocido)
            <tr>
                <td>{{$conocido->nombre}}</td>
                <td>
                    @foreach ($conocido->carros as $carro)
                        {{$carro->marca}} <br>
                    @endforeach
                </td>
                <td> 
                    <a href="{{route('conocidos.show',$conocido->id)}}">mostrar </a>
                    <a href="{{route('conocidos.edit',$conocido->id)}}">editar </a>
                    <form action="{{route('conocidos.destroy',$conocido->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="borrar">
                    </form>
                    <a href="{{route('conocidos.carros.index',$conocido->id)}}">CARROS</a>

                </td>
            </tr>
        @endforeach
</tbody>
</table>
    <a href="{{route('conocidos.create')}}">CREAR UNO NUEVO</a>

<hr>
    <a href="{{route('salir')}}">salir</a>


</body>
</html>