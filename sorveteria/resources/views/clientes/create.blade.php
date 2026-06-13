<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add cliente</title>
</head>
<body>
    <form action="/clientes/salvar" method="post">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <br><br>

        <button type="submit">Salvar Cliente</button>
    </form>
</body>
</html>