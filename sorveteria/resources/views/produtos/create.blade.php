<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Sabor - Sorveteria</title>
    @vite('resources/css/app.css')
</head>
<body>

        <form action="{{ route('produtos.store') }}" method="POST" class="space-y-4">
            @csrf

        <label>Tipo</label>
    <input type="text" name="tipo">

    <label>Nome</label>
    <input type="text" name="nome">

    <label>Sabor</label>
    <input type="text" name="sabor">

    <label>Preço</label>
    <input type="number" step="0.01" name="preco">

    <button type="submit">
        Salvar
    </button>

</form>

</body>
</html>