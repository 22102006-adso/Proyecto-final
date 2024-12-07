<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
</head>

<body>
    <a href="{{ route('productos.index') }}" class="route">Volver a lista</a>
    <h1>Crear un producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}" min="0">
            @error('precio')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" min="0">
            @error('stock')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_categoria">Categoría:</label>
            <select id="id_categoria" name="id_categoria">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ old('id_categoria') == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
            @error('id_categoria')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_proveedor">Proveedor:</label>
            <select id="id_proveedor" name="id_proveedor">
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}" {{ old('id_proveedor') == $proveedor->id ? 'selected' : '' }}>
                        {{ $proveedor->nombre }}
                    </option>
                @endforeach
            </select>
            @error('id_proveedor')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" class="button">Crear</button>
        </div>
    </form>
</body>

</html>
