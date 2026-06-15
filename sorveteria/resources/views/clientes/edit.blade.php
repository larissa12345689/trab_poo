<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add cliente</title>
</head>
<body>
    <form action="/clientes/atualizar/{{$cliente -> id}}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{$cliente -> nome }}" required>
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
        <br><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>