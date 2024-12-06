<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('categoria.index') }}">Volver a lista</a>

    <div class="container">
        <h2>Crear Categoria</h2>

        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif

        <form action="{{route('categoria.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class ="container">
                <form action="{{ route('categoria.store') }}" method="post">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>

        </div>
</body>
</html>