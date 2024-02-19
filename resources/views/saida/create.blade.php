@extends('layouts.app')
@section('main')


<div class="container">
    <h2>Criar Recibo de Saida</h2>

    {!! Form::open(['route' => 'recibos.saida.store', 'method' => 'post', 'class' => 'needs-validation', 'novalidate']) !!}

    <div class="mb-3">
        {!! Form::label('nfc', 'NFC', ['class' => 'form-label']) !!}
        {!! Form::text('nfc', null, ['class' => 'form-control', 'required']) !!}
        <div class="invalid-feedback">
            Por favor, insira o NFC.
        </div>
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
        {!! Form::text('valor', null, ['class' => 'form-control', 'required']) !!}
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
