<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center mb-4">Biblioteca - Libros</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->categoria }}</td>
                    <td>{{ $libro->stock }}</td>
                    <td>
                        <form action="{{ route('libros.destroy', $libro->id_libro) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este libro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card mt-5 mx-auto" style="max-width: 400px;">
        <div class="card-header bg-primary text-white">
            Registrar Nuevo Libro
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('libros.store') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="titulo" class="form-control" placeholder="Título" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="autor" class="form-control" placeholder="Autor" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="categoria" class="form-control" placeholder="Categoría" required>
                </div>
                <div class="mb-3">
                    <input type="number" name="stock" class="form-control" placeholder="Stock" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Guardar</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
