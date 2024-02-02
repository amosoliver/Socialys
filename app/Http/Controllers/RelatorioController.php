<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recibo;
use App\Models\ReciboSaida;


class RelatorioController extends Controller
{
    public function index() {
        $params = [
         'dt_ini' => request('dt_ini'),
         'dt_fim' => request('dt_fim')
        ];

        $v['recibosTipo1'] = Recibo::orderBy('numero_recibo')
        ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
        ->where(function ($query) {
            $query->where('descricao', 'Dizimo')
                ->orWhere('descricao', 'Oferta');
        })
        ->get();

    $v['recibosTipo2'] = Recibo::orderBy('numero_recibo')
        ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
        ->where(function ($query) {
            $query->where('descricao', 'Missão')
                ->orWhere('descricao', 'Literatura');
        })
        ->get();



        $v['recibosSaida'] = ReciboSaida::orderBy('nfc')
        ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
        ->get();

        $v['recibosTipo1Total'] = $v['recibosTipo1']->sum('valor');
        $v['recibosTipo2Total'] = $v['recibosTipo2']->sum('valor');

        $v['recibosSaidaTotal'] = $v['recibosSaida']->sum('valor');


        return view('relatorio', $v);
    }

}
