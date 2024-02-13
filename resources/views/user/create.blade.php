@extends('layouts.app')

@section('main')
    <div class="container">
        {{ Form::open([
            'class' => 'form-horizontal',
            'method' => 'POST',
            'route' => 'user.store',
            'enctype' => 'multipart/form-data',
        ]) }}
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('username', 'Nome', ['class' => 'control-label col-md-3 col-lg-2']) }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}
                @if ($errors->has('username'))
                    <div class="alert alert-warning">
                        {!! $errors->first('name') !!}
                    </div>
                @endif

            </div>

            <div class="form-group">
                {!! Form::label('password', 'Senha') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirme a senha') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="box-footer mb-2 text-end">
            <br>
            <button type="submit" class="btn btn-primary btn-submit ">CADASTRAR</button>
        </div>
        {{ Form::close() }}
    </div>
    </div>
@endsection
