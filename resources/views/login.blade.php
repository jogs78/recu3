<html>
    <body>
    <form action="{{route('validar')}}" method="post">
        @csrf
        <label for="campo_usuario">
                Usuario:
        </label>
        <input type="text" name="usuario" id="campo_usuario">
            
        <label for="campo_clave">
            Clave:
        </label>
        <input type="text" name="clave" id="campo_clave">
            
        <input type="submit" value="Enviar">
        </form>
    </body>
</html>