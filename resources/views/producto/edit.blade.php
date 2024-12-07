<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
</head>

<body>
    <a href="{{ route('productos.index') }}" class="route">Volver a lista</a>

    <div class="container">
        <h1>Editar Producto</h1>

        <form method="POST" action="{{ route('productos.update', $producto->id) }}">
            @csrf
            @method('PUT')

        
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
                @error('nombre')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio', $producto->precio) }}" min="0">
                @error('precio')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" min="0">
                @error('stock')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_categoria">Categoría</label>
                <select class="form-control" id="id_categoria" name="id_categoria" required>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" 
                            {{ old('id_categoria', $producto->id_categoria) == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('id_categoria')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="button">Actualizar</button>
        </form>
    </div>
</body>

</html>
