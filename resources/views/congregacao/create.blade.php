@extends('layouts.app')

<br><br>
@section('main')

    <div class="container">
        <h1>Criar Congregação</h1>

        {!! Form::open(['route' => 'congregacaos.store', 'method' => 'post']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Name') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        {!! Form::close() !!}

    </div>
@endsection
