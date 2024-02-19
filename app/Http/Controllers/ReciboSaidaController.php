<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReciboSaida; // Certifique-se de usar o namespace

class ReciboSaidaController extends Controller
{

    public function create()
    {

        return view('saida.create');
    }

    public function store(Request $request)
    {

        $recibo = new ReciboSaida;
        $recibo->nfc = $request->input('nfc');
        $recibo->data = $request->input('data');
        $recibo->nome = $request->input('nome');
        $recibo->valor = $request->input('valor');

        // Verificar se o recibo foi criado com sucesso
        if ($recibo->save()) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('recibos.index')->with('success', 'Recibo criado com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->route('recibos.index')->with('error', 'Erro ao criar o recibo. Por favor, tente novamente.');
        }
    }

    public function edit($id)
    {
        $v['recibo'] = ReciboSaida::find($id);
        return view('saida.edit', $v);
    }

    public function update(Request $request,$id)
    {

        $recibo = ReciboSaida::find($id);
        $recibo->nfc = $request->input('nfc');
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
        $recibo = ReciboSaida::find($id);

        if ($recibo->destroy($id)) {
            // Se sim, adicionar uma mensagem de sucesso
            return redirect()->route('recibos.index')->with('success', 'Recibo excluido com sucesso!');
        } else {
            // Se não, adicionar uma mensagem de erro
            return redirect()->back()->with('error', 'Erro ao excluir o recibo. Por favor, tente novamente.');
        }
    }

}
