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
@section('main')
    <div class="container mt-3">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title text-center">Filtrar Relatórios</h5>
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6">
                        {!! Form::open(['route' => 'relatorio', 'method' => 'get']) !!}
                        <div class="mb-3">
                            {!! Form::label('dt_ini', 'Data de Início:', ['class' => 'form-label']) !!}
                            {!! Form::date('dt_ini', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label('dt_fim', 'Data de Fim:', ['class' => 'form-label']) !!}
                            {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="text-center">
                            {!! Form::button('Gerar Relatório', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <h2>Saídas</h2>
                <button class="btn btn-primary mb-2">
                    <a href="{{ route('recibos.saida.create') }}" class="text-white text-decoration-none">ADICIONAR</a>
                </button>
                <div class="table-responsive">
                    <table id="table_saidas" class="table table-bordered table-striped">
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
                                        href="{{ route('recibos.saida.edit', ['id' => $reciboSaida->id]) }}">EDITAR</a></button>
                                        <button class="btn btn-outline-secondary">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_saidas').DataTable();
        });
    </script>
@endsection
