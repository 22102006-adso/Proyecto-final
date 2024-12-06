<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('proveedor.index') }}" >Volver a lista</a>
        <div class="container">
            <h1>Editar proveedor</h1>

        <form method="POST" action="{{ route('proveedor.update', $proveedores->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $proveedores) }}" required>
            </div> 
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="number" class="form-control" id="precio" name="precio" {{ old('direccion', $proveedores) }}>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="stock" name="stock" {{ old('telefono', $proveedores) }}>
            </div>
            <div class="form-group">
                <label for ="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" {{ old('email', $proveedores) }}>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto" {{ old('contacto', $proveedores) }}>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $proveedores) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
</body>
</html>