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
                    <div class="col-md-6">
                        {!! Form::open(['route' => 'relatorio', 'method' => 'get']) !!}
                        <div class="row align-items-end"> <!-- Use align-items-end para alinhar os itens na parte inferior -->
                            <div class="col-md-4 mb-3">
                                {!! Form::label('dt_ini', 'Data de Início:', ['class' => 'form-label']) !!}
                                {!! Form::date('dt_ini', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4 mb-3">
                                {!! Form::label('dt_fim', 'Data de Fim:', ['class' => 'form-label']) !!}
                                {!! Form::date('dt_fim', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-md-4 mb-3">
                                {!! Form::button('Gerar Relatório', ['class' => 'btn btn-success', 'type' => 'submit']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-12">
                <h2>Entradas</h2>
                <button class="btn btn-primary mb-2">
                    <a href="{{ route('recibos.create') }}" class="text-white text-decoration-none">ADICIONAR</a>
                </button>
                <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                    <table id="table_saidas" class="table table-bordered table-striped">

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

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table_saidas').DataTable({
                "scrollY": "400px", // Defina a altura desejada aqui
                "scrollCollapse": true,
                "paging": false // Desabilitar paginação para evitar scroll extra
            });
        });
    </script>
@endsection
