<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('proveedor.index') }}">Volver a lista</a>
    <h1>Ingresar a un proveedor</h1>
        <form action="{{route('proveedor.store')}}" method="POST">
         @csrf
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div>
                <label for="direccion">Direccion:</label>
                <input type="date" id="direccion" name="direccion">
            </div>
            <div>
                <label for="telefono">Telefono:</label>
                <input type="number" id="stock" name="stock">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type ="email" id="email" name="email">
            </div>
            <div>
                <label for="contacto">Contacto:</label>
                <input type="text" id="contacto" name="contacto">
            </div>
            <div>
                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit">Crear</button>
            </div>
        </form>
</body>
</html>
</body>
</html>