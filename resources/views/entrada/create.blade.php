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
        <h2>Criar Recibo</h2>

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
                ['class' => 'form-control', 'placeholder' => 'Selecione uma opção', 'required']
            ) !!}

            <div class="invalid-feedback">
                Por favor, selecione uma opção.
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
            {!! Form::text('valor', null, ['class' => 'form-control', 'required', 'id' => 'valor']) !!}
            <div class="invalid-feedback">
                Por favor, insira o valor.
            </div>
        </div>


        <div class="mb-3">
            {!! Form::submit('Salvar Recibo', ['class' => 'btn btn-primary']) !!}
        </div>
{!! Form::close() !!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

<script>
    $(document).ready(function(){
        // Inicialize o Inputmask para o campo de valor
        $('#valor').inputmask('currency', {
            alias: 'numeric',
            rightAlign: false,
            radixPoint: '.',
            groupSeparator: ',',
            autoGroup: true,
            digits: 2,
            digitsOptional: false,
            prefix: '', // Pode ser alterado conforme necessário
            placeholder: '0'
        });
    });
</script>

