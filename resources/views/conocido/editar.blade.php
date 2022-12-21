<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('conocidos.update',$conocido->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for='nombre'>nombre</label>
        <input type='text' name='nombre' id='nombre' value="{{$conocido->nombre}}">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>