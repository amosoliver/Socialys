@extends('layouts.app')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<br><br>

    <div class="container">
        <h1>Create Congregation</h1>

        {!! Form::open(['route' => 'congregacaos.store', 'method' => 'post']) !!}
            <div class="form-group">
                {!! Form::label('nome', 'Name') !!}
                {!! Form::text('nome', null, ['class' => 'form-control']) !!}
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        {!! Form::close() !!}

    </div>
