<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('conocidos.store')}}" method="post">
        @csrf
        <label for='nombre'>nombre</label>
        <input type='text' name='nombre' id='nombre'>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>