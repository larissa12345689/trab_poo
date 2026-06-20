<h1>Clientes</h1>

<a href="{{ route('clientes.create') }}">
    Novo Cliente
</a>

<table border="1">

    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Compras</th>
        <th>Ações</th>
    </tr>

    @foreach($clientes as $cliente)

        <tr>

            <td>{{ $cliente->nome }}</td>

            <td>{{ $cliente->telefone }}</td>

            <td>{{ $cliente->compras_realizadas }}</td>

            <td>

                <a href="{{ route('clientes.edit', $cliente->id) }}">
                    Editar
                </a>

                <form
                    action="{{ route('clientes.destroy', $cliente->id) }}"
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