<form action="{{ route('update', $libro->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="{{ $libro->titulo }}" required>

    <label for="paginas">Páginas:</label>
    <input type="number" name="paginas" value="{{ $libro->paginas }}" required>

    <label for="editorial">Editorial:</label>
    <input type="text" name="editorial" value="{{ $libro->editorial }}" required>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" value="{{ $libro->autor }}" required>

    <button type="submit">Actualizar</button>
</form>
