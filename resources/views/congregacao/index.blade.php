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
    <div class="row mt-4">
        <div class="col-12">
            <h2>Entradas</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>NOME</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($congregacoes as $congregacao)
                            <tr>
                                <td>{{ $congregacao->nome }}</td>

                                <td>
                                    <button class="btn btn-outline-danger"><a class="btn-outline-danger"
                                            href="{{ route('congregacaos.destroy', ['id' => $congregacao->id]) }}">EXCLUIR</a></button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
