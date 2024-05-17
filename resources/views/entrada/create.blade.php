@extends('layouts.app')

@section('main')

<div class="container">
    <h2>Criar Recibo</h2>

    <button class="btn btn-secondary mb-2">
        <a href="{{ route('recibos.index') }}" class="text-white text-decoration-none">INICIO</a>
    </button>

    {!! Form::open(['route' => 'recibos.store', 'method' => 'post']) !!}
    @csrf

    <div class="mb-3">
        {!! Form::label('numero_recibo', 'Número do Recibo', ['class' => 'form-label']) !!}
        {!! Form::text('numero_recibo', null, ['class' => 'form-control', 'required']) !!}
        <div class="invalid-feedback">
            Por favor, insira o número do recibo.
        </div>
    </div>
    <div class="mb-3">
        {!! Form::label('descricao', 'Descrição', ['class' => 'form-label']) !!}

        {!! Form::select('descricao',
            [
                'Dízimo' => 'Dízimo',
                'Literatura' => 'Literatura',
                'Oferta' => 'Oferta',
                'Voto' => 'Voto',
                'Missão' => 'Missão',
            ],
            null,
            ['class' => 'form-control', 'id' => 'descricao_select', 'placeholder' => 'Selecione uma opção', 'required']
        ) !!}

        <div class="invalid-feedback">
            Por favor, selecione uma opção.
        </div>
    </div>

    {{ Form::hidden('id_congregacao', 1) }}

    <div class="form-group">
        {!! Form::label('id_congregacao', 'Congregação:') !!}
        {{ Form::select('id_congregacao', $congregacoes, 1, ['class' => 'form-control']) }}
    </div>


    <div class="mb-3">
        {!! Form::label('data', 'Data', ['class' => 'form-label']) !!}
        {!! Form::date('data', null, ['class' => 'form-control', 'required']) !!}
        <div class="invalid-feedback">
            Por favor, insira a data.
        </div>
    </div>

    <div class="mb-3">
        {!! Form::label('nome', 'Nome', ['class' => 'form-label']) !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
        <div class="invalid-feedback">
            Por favor, insira o nome.
        </div>
    </div>

    <div class="mb-3">
        {!! Form::label('valor', 'Valor', ['class' => 'form-label']) !!}
        {!! Form::text('valor', null, ['class' => 'form-control', 'required', 'id' => 'valor']) !!}
        <div class="invalid-feedback">
            Por favor, insira o valor.
        </div>
    </div>

    <div class="mb-3">
        {!! Form::submit('Salvar Recibo', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
