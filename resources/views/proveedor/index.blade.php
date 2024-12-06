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
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Contacto</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->email }}</td>
                    <td>{{ $proveedor->contacto}}</td>
                    <td>{{ $proveedor->descripcion }}</td>
                        <a href="{{ route('proveedor.edit', $proveedor->id) }}"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('proveedor.destroy', $proveedor->id) }}" method="POST" onsubmit="return confirm('¿Quieres eliminar a este proveedor?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('seguro que quieres eliminar a este proveedor?')">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('producto.create') }}"><button class="btn btn-primary">Ingresar un nuevo proveedor</button></a>
    </div>
</body>
</html>