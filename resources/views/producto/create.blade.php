<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('producto.index') }}">Volver a lista</a>
    <h1>crear un producto</h1>
        <form action="{{route('producto.store')}}" method="POST">
         @csrf
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div>
                <label for="price">Precio:</label>
                <input type="number" id="precio" name="precio">
            </div>
            <div>
                <label for="description">Stock:</label>
                <input id="stock" name="stock">
            </div>
            <div>
                <label for="id_categoria">Categoría:</label>
                <select id="id_categoria" name="id_categoria">
                    @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="id_proveedor">Proveedor:</label>
                <select id="id_proveedor" name="id_proveedor">
                    @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit">Crear</button>
            </div>
        </form>
</body>
</html>