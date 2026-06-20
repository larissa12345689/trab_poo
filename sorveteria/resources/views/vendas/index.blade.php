<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vendas</title>
    @vite('resources/css/app.css')
</head>
<body>

<h1>Lista de Vendas</h1>

<a href="{{ route('vendas.create') }}">Nova Venda</a>

<br><br>

<table border="1">

    <tr>
        <th>Cliente</th>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    @foreach($vendas as $venda)

        <tr>

            <td>{{ $venda->cliente?->nome ?? 'Não informado' }} - {{$venda->cliente->telefone}}</td>

            <td>{{ $venda->produto->nome }}</td>

            <td>{{ $venda->quantidade }}</td>

            <td><a href="{{ route('vendas.edit', $venda->id) }}">Editar</a>

                <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Excluir</button>

                </form>

            </td>

        </tr>

    @endforeach

</table>



</body>
</html>