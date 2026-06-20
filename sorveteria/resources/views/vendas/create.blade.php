<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Venda</title>
    @vite('resources/css/app.css')
</head>
<body>

    <h1>Nova Venda</h1>

    <form action="{{ route('vendas.store') }}" method="POST">

        @csrf

        <div>
            <label>Cliente</label>

            <select name="cliente_id">

                <option value="">Sem cadastro</option>

                @foreach($clientes as $cliente)

                    <option value="{{ $cliente->id }}">{{ $cliente->nome }} - {{ $cliente->telefone }}</option>

                @endforeach

            </select>
        </div>

        <br>

        <div>
            <label>Produto</label>

            <select name="produto_id">

                @foreach($produtos as $produto)

                    <option value="{{ $produto->id }}">
                        {{ $produto->nome }}
                    </option>

                @endforeach

            </select>
        </div>

        <br>

        <div>
            <label>Quantidade</label>

            <input
                type="number"
                name="quantidade"
                min="1"
                required
            >
        </div>

        <br>

        <button type="submit">
            Registrar Venda
        </button>

    </form>

</body>
</html>