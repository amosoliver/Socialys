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

        $v['recibos'] = Recibo::orderBy('numero_recibo')
            ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
            ->get();

            $v['recibosSaida'] = ReciboSaida::orderBy('nfc')
            ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
            ->get();

        return view('relatorio', $v);
    }

}
