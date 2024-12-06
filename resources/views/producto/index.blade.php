<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('proveedor.index') }}">Proveedores</a></li>
            <li><a href="{{ route('categoria.index') }}">Categorias</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Productos</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class= "table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoria</th>
                    <th>Proveedor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->categoria ->nombre }}</td>
                    <td>{{ $producto->proveedor -> nombre }}</td>
                        <a href="{{ route('producto.edit', $producto->id) }}"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Quieres eliminar este producto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('seguro que quieres eliminar este producto?')">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('producto.create') }}"><button class="btn btn-primary">Agregar un producto</button></a>
    </div>
</body>
</html>