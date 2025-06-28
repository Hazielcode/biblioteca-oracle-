<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Préstamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="text-center mb-4">Biblioteca - Préstamos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID Préstamo</th>
                <th>ID Libro</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prestamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->id_prestamo }}</td>
                    <td>{{ $prestamo->id_libro }}</td>
                    <td>{{ $prestamo->fecha_prestamo }}</td>
                    <td>{{ $prestamo->fecha_devolucion }}</td>
                    <td>{{ $prestamo->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card mt-5 mx-auto" style="max-width: 400px;">
        <div class="card-header bg-primary text-white">
            Registrar Nuevo Préstamo
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('prestamos.store') }}">
                @csrf
                <div class="mb-3">
                    <input type="number" name="id_libro" class="form-control" placeholder="ID Libro" required>
                </div>
                <!-- tu procedure solo pide id_libro, así que no pedimos fechas ni estado -->
                <button type="submit" class="btn btn-success w-100">Registrar</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
