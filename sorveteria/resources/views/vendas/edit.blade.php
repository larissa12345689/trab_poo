<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Venda</title>
    @vite('resources/css/app.css')
</head>
<body>

<h1>Editar Venda</h1>

<form action="{{ route('vendas.update', $venda->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div>

        <label>Cliente</label>

        <select name="cliente_id">

            @foreach($clientes as $cliente)

                <option
                    value="{{ $cliente->id }}"
                    {{ $cliente->id == $venda->cliente_id ? 'selected' : '' }}
                >
                    {{ $cliente->nome }}
                </option>

            @endforeach

        </select>

    </div>

    <br>

    <div>

        <label>Produto</label>

        <select name="produto_id">

            @foreach($produtos as $produto)

                <option value="{{ $produto->id }}" {{ $produto->id == $venda->produto_id ? 'selected' : '' }}> {{ $produto->nome }}</option>

            @endforeach

        </select>

    </div>

    <br>

    <div>

        <label>Quantidade</label>

        <input type="number" name="quantidade" value="{{ $venda->quantidade }}" min="1">

    </div>

    <br>

    <button type="submit">
        Atualizar
    </button>

</form>

</body>
</html>