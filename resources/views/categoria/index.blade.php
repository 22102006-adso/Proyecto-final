<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>

    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('productos.index') }}" class="route">Productos</a></li>
            <li><a href="{{ route('proveedores.index') }}" class="route">Proveedores</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Categorías</h2>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="route"><i class="fa-edit"></i></a>
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" onsubmit="return confirm('¿Quieres eliminar la categoría?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('categorias.create') }}" class="route">
            <button class="button">Agregar categoría</button>
        </a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
