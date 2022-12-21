<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('conocidos.carros.update',[$conocido->id,$carro->id ])}}" method="post">
        @csrf
        @method('PUT')
        <label for='nombre'>marca</label>
        <input type='text' name='marca' id='marca' value="{{$carro->marca}}">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>