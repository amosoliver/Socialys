@extends('layouts.app')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<br>
<div class="container col-lg-3">
    {!! Form::open(['route' => 'relatorio', 'method' => 'get']) !!}
        <div class="date-filter">
            <!-- Adicione seus filtros de data aqui -->
            {!! Form::label('dt_ini', 'Data de Início:') !!}
            {!! Form::date('dt_ini', null, ['class' => 'form-control']) !!}

            {!! Form::label('dt_fim', 'Data de Fim:') !!}
            {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
        </div>
        <br>
        {!! Form::button('Gerar Relatório', ['class' => 'justify-center btn btn-success', 'type' => 'submit']) !!}
    {!! Form::close() !!}
</div>


  </div><br>
<h2>Entradas</h2>
<td><button>
        <a href="{{ route('recibos.create') }}">ADICIONAR</a></button>
</td>
<br> <br>

<div class="table-responsive">
    <div class="table-container">
        <table class="datatable table table-bordered table-striped ps-2">
            <thead>
                <tr>
                    <th>N° DO RECIBO</th>
                    <th>DESCRIÇÃO</th>
                    <th>DATA</th>
                    <th>NOME</th>
                    <th>VALOR</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recibos as $recibo)
                    <tr>
                        <td>{{ $recibo->numero_recibo }}</td>
                        <td>{{ $recibo->descricao }}</td>
                        <td>{{ $recibo->data }}</td>
                        <td>{{ $recibo->nome }}</td>
                        <td>{{ $recibo->valor }}</td>
                        <td>
                            <button class="btn btn-outline-secondary"><a href="{{ route('recibos.edit', ['id' => $recibo->id]) }}">EDITAR</a></button>
                        </td>
                        <td>
                            <button class="btn btn-outline-danger"><a class=" btn-outline-danger" href="{{ route('recibos.destroy', ['id' => $recibo->id]) }}">EXCLUIR</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<br><br>
<h1>Saidas</h1>
<td><button>
        <a href="{{ route('recibos.create') }}">ADICIONAR</a></button>
</td>
<br><br>


<div class="table-responsive">
    <div class="table-container">
        <table class="datatable table table-bordered table-striped ps-2">
            <thead>
                <tr>
                    <th>NFC</th>
                    <th>DATA</th>
                    <th>NOME</th>
                    <th>VALOR</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recibosSaida as $reciboSaida)
                    <tr>
                        <td>{{ $reciboSaida->nfc }}</td>
                        <td>{{ $reciboSaida->data }}</td>
                        <td>{{ $reciboSaida->nome }}</td>
                        <td>{{ $reciboSaida->valor }}</td>
                        <td>
                            <button class="btn btn-outline-secondary"><a href="{{ route('recibos.saida.edit', ['id' => $reciboSaida->id]) }}">EDITAR</a></button>
                        </td>
                        <td>
                            <button class="btn btn-outline-danger"><a class=" btn-outline-danger" href="{{ route('recibos.saida.destroy', ['id' => $reciboSaida->id]) }}">EXCLUIR</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<style>
   .table-container {
    max-height: 200px; /* Adjust this value as needed */
    overflow-y: auto;
}

/* Optional styling for the sticky header */
.sticky-top {
        position: sticky;
    top: 0;
    background-color: #fff; /* Adjust the background color as needed */
    z-index: 1000;
}
</style>
</div>
<script>
    function validarFormulario() {
        var dt_ini = document.getElementById('dt_ini').value;
        var dt_fim = document.getElementById('dt_fim').value;

        console.log('Data de Início:', dt_ini);
        console.log('Data de Fim:', dt_fim);

        // Outras verificações ou lógica, se necessário

        return true; // Ou false se necessário
    }
</script>
