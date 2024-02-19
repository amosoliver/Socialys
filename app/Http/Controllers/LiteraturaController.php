<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Literatura;
use App\Models\Congregacao;


class LiteraturaController extends Controller
{
    public function index()
    {
        $literaturas = Literatura::get();
        return view('literatura.index', compact('literaturas'));
    }

    public function create()
    {
        $congregacoes = Congregacao::selectList();

        return view('literatura.create', compact('congregacoes'));
    }

    public function relatorio()
    {
        $congregacoes = Congregacao::select('congregacaos.nome', 'literaturas.valor as valor_total')
            ->leftJoin('literaturas', 'congregacaos.id', '=', 'literaturas.id_congregacao')
            ->leftJoin(
                'recibos', function ($join) {
                    $join->on('congregacaos.id', '=', 'recibos.id_congregacao')
                        ->where('recibos.descricao', '=', 'Literatura');
                }
            )
        ->selectRaw('COALESCE(SUM(recibos.valor), 0) as valor_pago')
        ->selectRaw('(literaturas.valor - COALESCE(SUM(recibos.valor), 0)) as valor_pagar')
        ->groupBy('congregacaos.id', 'congregacaos.nome', 'literaturas.valor')
        ->get();
        return view('literatura.relatorio', compact('congregacoes'));
    }

    public function store(Request $request)
    {
        $literatura = new Literatura;
        $literatura->id_congregacao = $request->id_congregacao;
        $literatura->valor = $request->valor;

        if ($literatura ->save()) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('literaturas.index')->with('success', 'literatura .criado com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->route('literaturas.index')->with('error', 'Erro ao criar o literatura . Por favor, tente novamente.');
        }

        return redirect()->route('literaturas.index');
    }

    public function destroy($id)
    {
        $literatura = Literatura::find($id);

        if ($literatura->destroy($id)) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('recibos.index')->with('success', 'literatura excluido com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir o literatura. Por favor, tente novamente.');
        }        return redirect()->route('literaturas.index');
    }
}
