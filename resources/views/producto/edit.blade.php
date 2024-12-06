<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('producto.index') }}" >Volver a lista</a>
        <div class="container">
            <h1>Editar producto</h1>

        <form method="POST" action="{{ route('producto.update', $categorias->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $productos) }}" required>
            </div> 
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" {{ old('precio', $productos) }}>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" {{ old('stock', $productos) }}>
            </div>
            <div class="form-group">
                <label for ="id_categoria">Categoria</label>
                <select class="form-control" id="id_categoria" name="id_categoria" required>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}" @if ($producto->id_categoria == $categoria->id) selected>{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
</body>
</html>