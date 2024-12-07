<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proveedor</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css') }}">
   
</head>
<body>
    <div class="container">
        <a href="{{ route('proveedores.index') }}" class="route">Volver a la lista</a>
        <h1>Editar Proveedor</h1>
        <form method="POST" action="{{ route('proveedores.update', $proveedor->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $proveedor->nombre) }}" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $proveedor->direccion) }}" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $proveedor->telefono) }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $proveedor->email) }}" required>
            </div>

            <div class="form-group">
                <label for="contacto">Contacto:</label>
                <input type="text" class="form-control" id="contacto" name="contacto" value="{{ old('contacto', $proveedor->contacto) }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $proveedor->descripcion) }}</textarea>
            </div>

            <button type="submit" class="button">Actualizar</button>
        </form>
    </div>
</body>
</html>
