<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendas = Venda::all();
        dd($vendas);
        return view('vendas.index', ['cliente_id' => $cliente_id, 'produto_id' => $produto_id]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $venda = Venda::create([
            'cliente_id' => $request->cliente_id,
            'produto_id' => $request->produto_id,
        ]);

        $cliente = Cliente::find($request->cliente_id); // pega o registro que tem esse id

        $totalCompras = $cliente->vendas->count();

        if ($totalCompras % 10 === 0) {
            return response()->json(['mensagem' => "Venda registrada! entre em contato com {$cliente->nome} e dê os PARABÉNS 🎉 ele(a) ganhou um brinde!"]);
        }

        return response()->json(['mensagem' => "Venda registrada com sucesso! Total de compras do cliente: {$totalCompras}"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
