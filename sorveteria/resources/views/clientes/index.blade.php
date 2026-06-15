<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>

    @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>
                <a href="/clientes/editar/{{ $cliente->id }}">Editar</a> {{-- como é so para abrir a pagina pode usar a --}}
                
                <form action="/clientes/deletar/{{ $cliente->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                </form>

            </td>
        </tr>
    @endforeach

    </table>
</body>
</html>