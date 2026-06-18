<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Sabor - Sorveteria</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-8">

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">🍦 Novo Sabor de Sorvete</h1>

        <form action="/produtos/salvar" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nome" class="block text-sm font-medium text-gray-700 mb-1">Nome do Sabor:</label>
                <input type="text" id="nome" name="nome" required 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="preco" class="block text-sm font-medium text-gray-700 mb-1">Preço (R$):</label>
                <input type="number" id="preco" name="preco" step="0.01" required 
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-md transition">
                Salvar Sabor
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="/produtos" class="text-sm text-gray-500 hover:underline">Cancelar e Voltar</a>
        </div>
    </div>

</body>
</html>