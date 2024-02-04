<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recibo;
use App\Models\ReciboSaida;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;




class RelatorioController extends Controller
{
    public function index() {
        $params = [
            'dt_ini' => request('dt_ini'),
            'dt_fim' => request('dt_fim')
           ];
           $dt_ini =    Carbon::createFromFormat('Y-m-d', $params['dt_ini'])->format('d/m/Y');
$dt_fim = Carbon::createFromFormat('Y-m-d', $params['dt_fim'])->format('d/m/Y');

$v['dt_ini'] = $dt_ini;
$v['dt_fim'] = $dt_fim;
        $v['recibosTipo1'] = Recibo::select('numero_recibo', 'descricao','nome', 'valor', DB::raw('DATE_FORMAT(data, "%d/%m/%Y") as data'))
        ->orderBy('numero_recibo')
        ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
        ->where(function ($query) {
            $query->where('descricao', 'Dizimo')
                ->orWhere('descricao', 'Oferta');
        })
        ->get();


    $v['recibosTipo2'] = Recibo::select('numero_recibo', 'descricao','nome', 'valor', DB::raw('DATE_FORMAT(data, "%d/%m/%Y") as data'))
        ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
        ->where(function ($query) {
            $query->where('descricao', 'Missão')
                ->orWhere('descricao', 'Literatura');
        })
        ->get();



        $v['recibosSaida'] = ReciboSaida::select('nfc','nome', 'valor', DB::raw('DATE_FORMAT(data, "%d/%m/%Y") as data'))
        ->orderBy('nfc')
        ->whereBetween('data', [$params['dt_ini'], $params['dt_fim']])
        ->get();

        $v['recibosTipo1Total'] = $v['recibosTipo1']->sum('valor');
        $v['recibosTipo2Total'] = $v['recibosTipo2']->sum('valor');
        $v['recibosSaidaTotal'] = $v['recibosSaida']->sum('valor');


        return view('relatorio', $v);
    }

}
