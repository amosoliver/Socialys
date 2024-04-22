@extends('layouts.app')

@section('main')
    <div class="container">
        <h2>Criar Recibo</h2>

        {!! Form::open(['route' => 'literaturas.store']) !!}

        <div class="form-group">
            {!! Form::label('id_congregacao', 'Congregação:') !!}
            {{ Form::select('id_congregacao', $congregacoes, null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ano', 'Ano:') !!}
            {!! Form::selectRange('ano', 2020, 2030, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('trimestre', 'Trimestre:') !!}
            {!! Form::select('trimestre', ['1' => '1º trimestre', '2' => '2º trimestre', '3' => '3º trimestre', '4' => '4º trimestre'], null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
@endsection
