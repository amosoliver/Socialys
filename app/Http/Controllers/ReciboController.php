<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recibo;
use App\Models\Congregacao;

use App\Models\ReciboSaida;


class ReciboController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $v['recibos'] = Recibo::latest()->get();
        return view('entrada.index', $v);
    }

    public function create()
    {
        $v['congregacoes'] = Congregacao::selectList();


        return view('entrada.create', $v);
    }

    public function store(Request $request)
    {

        $recibo = new Recibo;
        $recibo->numero_recibo = $request->input('numero_recibo');
        $recibo->descricao = $request->input('descricao');
        $recibo->data = $request->input('data');
        $recibo->nome = $request->input('nome');
        $recibo->id_congregacao = $request->input('id_congregacao');
        $recibo->valor = $request->input('valor');

        // Verificar se o recibo foi criado com sucesso
        if ($recibo->save()) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->back()->with('success', 'Recibo criado com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao criar o recibo. Por favor, tente novamente.');
        }
    }

    public function edit($id)
    {
        $v['recibo'] = Recibo::find($id);
        return view('entrada.edit', $v);
    }

    public function update(Request $request,$id)
    {

        $recibo = Recibo::find($id);
        $recibo->numero_recibo = $request->input('numero_recibo');
        $recibo->descricao = $request->input('descricao');
        $recibo->data = $request->input('data');
        $recibo->nome = $request->input('nome');
        $recibo->valor = $request->input('valor');

        // Verificar se o recibo foi criado com sucesso
        if ($recibo->save()) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('recibos.index')->with('success', 'Recibo editado com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->route('recibos.index')->with('error', 'Erro ao editar o recibo. Por favor, tente novamente.');
        }
    }

    public function destroy($id)
    {
        $recibo = Recibo::find($id);

        if ($recibo->destroy($id)) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('recibos.index')->with('success', 'Recibo excluido com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir o recibo. Por favor, tente novamente.');
        }
    }

}
