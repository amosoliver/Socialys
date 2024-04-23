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

    public function relatorio(Request $request)
    {
        $ano = $request->ano;
        $trimestre = $request->trimestre;

        $congregacoes = DB::table('congregacaos')
        ->select('congregacaos.nome',
                 DB::raw('literaturas.valor AS valor_total'),
                 DB::raw('COALESCE(SUM(recibos.valor), 0) AS valor_pago'),
                 DB::raw('(literaturas.valor - COALESCE(SUM(recibos.valor), 0)) AS valor_pagar'))
        ->leftJoin('literaturas', 'congregacaos.id', '=', 'literaturas.id_congregacao')
        ->leftJoin('recibos', function ($join) {
            $join->on('congregacaos.id', '=', 'recibos.id_congregacao')
                 ->where('recibos.descricao', '=', 'Literatura');
        })
        ->where('literaturas.trimestre', '=', $trimestre)
        ->where('literaturas.ano', '=', $ano)
        ->groupBy('congregacaos.id', 'congregacaos.nome', 'literaturas.valor')
        ->get();
        return view('literatura.relatorio', compact('congregacoes'));
    }

    public function store(Request $request)
    {
        $literatura = new Literatura;
        $literatura->id_congregacao = $request->id_congregacao;
        $literatura->ano = $request->ano;
        $literatura->trimestre = $request->trimestre;
        $literatura->valor = $request->valor;

        if ($literatura ->save()) {
            return redirect()->route('literaturas.index')->with('success', 'Literatura criada com sucesso!');
        } else {
            return redirect()->route('literaturas.index')->with('error', 'Erro ao criar a literatura. Por favor, tente novamente!');
        }

        return redirect()->route('literaturas.index');
    }

    public function destroy($id)
    {
        $literatura = Literatura::find($id);

        if ($literatura->destroy($id)) {
            return redirect()->route('recibos.index')->with('success', 'literatura excluida com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Erro ao excluir o literatura. Por favor, tente novamente.');
        }        return redirect()->route('literaturas.index');
    }
}
