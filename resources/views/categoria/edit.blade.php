<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('categoria.index') }}" >Volver a lista</a>
    <div class="container">
        <h1>Editar categoria</h1>

        <form method="POST" action="{{ route('categoria.update', $categorias->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $categorias) }}">
            </div> 
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion', $categorias) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
 </body>    
</html>