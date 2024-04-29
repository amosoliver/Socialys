@extends('layouts.app')

@section('main')
<div id="myModal" class="modal">
    <div class="modal-content">
        <!-- Formulário gerado pelo Laravel Collective -->
        {!! Form::open(['route' => 'literaturas.relatorio']) !!}
            <div class="form-group">
                {!! Form::label('campo1', 'Campo 1') !!}
                {!! Form::text('campo1', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('campo2', 'Campo 2') !!}
                {!! Form::text('campo2', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection
