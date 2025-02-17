<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Libreria</h1>
    <a href="{{ route('create') }}">Agregar libro</a>

    <table>
        <tr>
            <td>Titulo</td>
            <td>Paginas</td>
            <td>Editorial</td> 
            <td>Autor</td> 
            <td>Acciones</td>
        </tr>

        @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->paginas }}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->autor }}</td>
                <td> 
                    <form action="{{ route('delete', $libro->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                    <a href="{{ route('edit', $libro->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>