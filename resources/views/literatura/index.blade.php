@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2>Literatura</h2>
                <button class="btn btn-secondary mb-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" class="text-white text-decoration-none">RELATÓRIO</a>
                </button>
                <button class="btn btn-primary mb-2">
                    <a href="{{ route('literaturas.create') }}" class="text-white text-decoration-none">ADICIONAR</a>
                </button>
                <div class="table-responsive">
                    <table id= "datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>CONGREGAÇÃO</th>
                                <th>TRIMESTRE</th>
                                <th>ANO</th>
                                <th>VALOR</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($literaturas as $literatura)
                                <tr>
                                    <td>{{ $literatura->congregacao->nome }}</td>
                                    <td>{{ $literatura->trimestre }}</td>
                                    <td>{{ $literatura->ano }}</td>
                                    <td>{{ $literatura->valor }}</td>
                                    <td>
                                        <button class="btn btn-outline-danger"><a class="btn-outline-danger"
                                         href="{{ route('literaturas.destroy', ['id' => $literatura->id]) }}">EXCLUIR</a></button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Meu Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <!-- Corpo do modal -->
                <div class="modal-body">
                    <!-- Formulário -->
                    {!! Form::open(['route' => 'literaturas.filtro']) !!}
                        <div class="mb-3">
                            {!! Form::label('ano', 'Ano', ['class' => 'form-label']) !!}
                            {!! Form::selectRange('ano', date('Y'), date('Y') + 10, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            {!! Form::label('trimestre', 'Trimestre', ['class' => 'form-label']) !!}
                            {!! Form::select('trimestre', ['1' => '1º Trimestre', '2' => '2º Trimestre', '3' => '3º Trimestre', '4' => '4º Trimestre'], null, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endsection
