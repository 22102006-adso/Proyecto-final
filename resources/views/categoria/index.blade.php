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
            <li><a href="{{ route('producto.index') }}">Productos</a></li>
            <li><a href="{{ route('proveedor.index') }}">Proveedores</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Categorias</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class= "table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{ route('categoria.edit', $categoria->id) }}"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('¿Quieres eliminar la categoria?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('seguro que quieres eliminar la categoria?')">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('categoria.create') }}"><button class="btn btn-primary">Agregar categoria</button></a>
    </div>
</body>
</html>