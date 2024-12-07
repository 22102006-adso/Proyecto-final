<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    
    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
</head>
<body>
    <div class="container">
        <a href="{{ route('categorias.index') }}" class="route">Volver a lista</a>
        
        <h1>Editar Categoría</h1>

        <form method="POST" action="{{ route('categorias.update', $categorias->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $categorias->nombre) }}" required>
            </div> 

            <div class="form-group">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $categorias->descripcion) }}</textarea>
            </div>

            <button type="submit" class="button">Actualizar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>    
</html>
