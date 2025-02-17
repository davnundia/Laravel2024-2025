

<form action="{{ route('store') }}" method="post">
    @csrf
    <label for="">Titulo</label>
    <input type="text" name="titulo">
    <label for="">Paginas</label>
    <input type="text" name="paginas">
    <label for="">Editorial</label>
    <input type="text" name="editorial">
    <label for="">Autor</label>
    <input type="text" name="autor">

    <input type="submit" value="Enviar">
</form>