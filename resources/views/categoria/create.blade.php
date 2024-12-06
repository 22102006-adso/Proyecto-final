<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Categoría</title>

    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
</head>
<body>
    <div class="container">
        <a href="{{ route('categorias.index') }}" class="route">Volver a lista</a>

        <h2>Crear Categoría</h2>

       
        <div class="alert-success">
            {{ session('success') }}
        </div>
        @endif

       @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
            </div>

            <button type="submit" class="button">Crear</button>
        </form>
    </div>
</body>
</html>
