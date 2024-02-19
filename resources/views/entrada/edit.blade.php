
@extends('layouts.app')
@section('main')

<br><br>


    <div class="container justify-content-end">
        <h2>Editar Recibo</h2>

        {!! Form::model($recibo,['method' => 'post','route' =>[ 'recibos.update','id' => request('id')]]) !!}
        @csrf

        <div class="mb-3">
            {!! Form::label('numero_recibo', 'Número do Recibo', ['class' => 'form-label']) !!}
            {!! Form::text('numero_recibo', $recibo->numero_recibo, ['class' => 'form-control', 'required']) !!}
            <div class="invalid-feedback">
                Por favor, insira o número do recibo.
            </div>
        </div>
        <div class="mb-3">
            {!! Form::label('descricao', 'Descrição', ['class' => 'form-label']) !!}

            {!! Form::select(
                'descricao',
                [
                    'Dízimo' => 'Dízimo',
                    'Literatura' => 'Literatura',
                    'Oferta' => 'Oferta',
                    'Voto' => 'Voto',
                ],
                $recibo->descricao,
                ['class' => 'form-control', 'placeholder' => 'Selecione uma opção', 'required']
            ) !!}


            <div class="invalid-feedback">
                Por favor, selecione uma opção.
            </div>
        </div>

        <div class="mb-3">
            {!! Form::label('data', 'Data', ['class' => 'form-label']) !!}
            {!! Form::date('data', $recibo->data, ['class' => 'form-control', 'required']) !!}
            <div class="invalid-feedback">
                Por favor, insira a data.
            </div>
        </div>

        <div class="mb-3">
            {!! Form::label('nome', 'Nome', ['class' => 'form-label']) !!}
            {!! Form::text('nome', $recibo->nome, ['class' => 'form-control', 'required']) !!}
            <div class="invalid-feedback">
                Por favor, insira o nome.
            </div>
        </div>

        <div class="mb-3">
            {!! Form::label('valor', 'Valor', ['class' => 'form-label']) !!}
            {!! Form::text('valor', $recibo->valor, ['class' => 'form-control', 'required', 'id' => 'valor']) !!}
            <div class="invalid-feedback">
                Por favor, insira o valor.
            </div>
        </div>


        <div class="mb-3">
            {!! Form::submit('Salvar alterações', ['class' => 'btn btn-primary']) !!}
        </div>
{!! Form::close() !!}
@endsection

