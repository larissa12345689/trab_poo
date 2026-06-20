<h1>produtos</h1>

<a href="{{ route('produtos.create') }}">
    Novo produto
</a>

<table border="1">

    <th>Tipo</th>
    <th>Nome</th>
    <th>Sabor</th>
    <th>Preço</th>
    <th>Ações</th>

    @foreach($produtos as $produto)

        <tr>
            <td>{{ $produto->tipo }}</td>
            
            <td>{{ $produto->nome }}</td>

            <td>{{$produto->sabor }}</td>

            <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>

            <td>

                <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>

                <form
                    action="{{ route('produtos.destroy', $produto->id) }}"
                    method="POST"
                    style="display:inline"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

    @endforeach

</table>