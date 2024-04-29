<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Literatura;
use App\Models\Congregacao;
use Illuminate\Support\Facades\DB;


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
    ->leftJoin('recibos', function ($join) use ($trimestre) {
        $join->on('congregacaos.id', '=', 'recibos.id_congregacao')
             ->where('recibos.descricao', '=', 'Literatura')
             ->whereRaw('(CASE
                             WHEN MONTH(recibos.data) BETWEEN 1 AND 3 THEN 1
                             WHEN MONTH(recibos.data) BETWEEN 4 AND 6 THEN 2
                             WHEN MONTH(recibos.data) BETWEEN 7 AND 9 THEN 3
                             WHEN MONTH(recibos.data) BETWEEN 10 AND 12 THEN 4
                         END) = ?', [$trimestre]);
    })
    ->where('literaturas.trimestre', '=', $trimestre)
    ->where('literaturas.ano', '=', $ano)
    ->groupBy('congregacaos.id', 'congregacaos.nome', 'literaturas.valor')
    ->get();

        return view('literatura.relatorio', compact('congregacoes'));
    }

    public function filtro(Request $request) {
        if ($request->filled('ano') && $request->filled('trimestre')) {
            return $this->relatorio($request);
        }
        return $this->relatorio($request);
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
