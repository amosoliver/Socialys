<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Congregacao;

class CongregacaoController extends Controller
{
    public function index()
    {
        $congregacoes = Congregacao::all();
        return view('congregacao.index', compact('congregacoes'));
    }

    public function create()
    {
        $congregacoes = Congregacao::all();

        return view('congregacao.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        $cong = new Congregacao;
        $cong->nome = $request->nome;
        if ($cong->save()) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('congregacaos.index')->with('success', 'congregacao criado com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->route('congregacaos.index')->with('error', 'Erro ao criar o congregacao. Por favor, tente novamente.');
        }        return redirect()->route('congregacaos.index');
    }

    public function destroy($id)
    {
        $congregacao = Congregacao::find($id);

        if ($congregacao->destroy($id)) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('recibos.index')->with('success', 'Recibo excluido com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir o recibo. Por favor, tente novamente.');
        }
        return redirect()->route('congregacaos.index');
    }
}
