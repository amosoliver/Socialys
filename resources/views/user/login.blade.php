@extends('layouts.app')

@section('main')
    <div class="container border col-5 col-xs-4 col-sm-4 col-lg-3 col-md-4 mt-5 bg-dark text-light">
        <div class="box mt-2">

        {{ Form::open([
            'class' => 'form-horizontal',
            'method' => 'POST',
            'route' => 'user.autenticar',
            'enctype' => 'multipart/form-data',
        ]) }}

        <div class="box-body">
            <div class="form-group">
                {{ Form::label('username', 'Username', ['class' => 'control-label col-md-3 col-lg-2']) }}
                {{ Form::text('username', null, ['class' => 'form-control', 'rows' => 4]) }}
                @if ($errors->has('username'))
                    <div class="alert alert-danger">
                        {!! $errors->first('username') !!}
                    </div>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('senha', 'Senha') !!}
                {!! Form::password('senha', ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="box-footer mb-2 text-end">
            <br>
            <button type="submit" class="btn btn-primary btn-submit">ENTRAR</button>
        </div>

        {{ Form::close() }}
    </div>
@endsection
