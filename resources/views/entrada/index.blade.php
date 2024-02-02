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

<div class="container mt-3">

    <div class="row">
        <div class="col-12 col-md-6">
            {!! Form::open(['route' => 'relatorio', 'method' => 'get']) !!}
            <div class="mb-3">
                {!! Form::label('dt_ini', 'Data de Início:') !!}
                {!! Form::date('dt_ini', null, ['class' => 'form-control']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('dt_fim', 'Data de Fim:') !!}
                {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::button('Gerar Relatório', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <h2>Entradas</h2>
            <button class="btn btn-primary mb-2">
                <a href="{{ route('recibos.create') }}" class="text-white text-decoration-none">ADICIONAR</a>
            </button>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
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
                                    <button class="btn btn-outline-secondary"><a
                                            href="{{ route('recibos.edit', ['id' => $recibo->id]) }}">EDITAR</a></button>
                                </td>
                                <td>
                                    <button class="btn btn-outline-danger"><a class="btn-outline-danger"
                                            href="{{ route('recibos.destroy', ['id' => $recibo->id]) }}">EXCLUIR</a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <h2>Saídas</h2>
            <button class="btn btn-primary mb-2">
                <a href="{{ route('recibos.create') }}" class="text-white text-decoration-none">ADICIONAR</a>
            </button>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
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
                                    <button class="btn btn-outline-secondary"><a
                                            href="{{ route('recibos.saida.edit', ['id' => $reciboSaida->id]) }}">EDITAR</a></button>
                                </td>
                                <td>
                                    <button class="btn btn-outline-danger"><a class="btn-outline-danger"
                                            href="{{ route('recibos.saida.destroy', ['id' => $reciboSaida->id]) }}">EXCLUIR</a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('.table').DataTable();
    });
</script>

</body>
</html>