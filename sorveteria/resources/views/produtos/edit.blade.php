<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    @vite('resources/css/app.css')
</head>
<body>

<h1>Editar Produto</h1>

<form action="{{ route('produtos.update', $produto->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Tipo</label>
    <input
        type="text"
        name="tipo"
        value="{{ $produto->tipo }}"
    >

    <br><br>

    <label>Nome</label>
    <input
        type="text"
        name="nome"
        value="{{ $produto->nome }}"
    >

    <br><br>

    <label>Sabor</label>
    <input
        type="text"
        name="sabor"
        value="{{ $produto->sabor }}"
    >

    <br><br>

    <label>Preço</label>
    <input
        type="number"
        step="0.01"
        name="preco"
        value="{{ $produto->preco }}"
    >

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

</body>
</html>