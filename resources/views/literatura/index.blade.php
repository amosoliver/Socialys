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
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2>Literatura</h2>
                <button class="btn btn-secondary mb-2">
                    <a href="{{ route('literaturas.relatorio') }}" class="text-white text-decoration-none">RELATÓRIO</a>
                </button>
                <button class="btn btn-primary mb-2">
                    <a href="{{ route('literaturas.create') }}" class="text-white text-decoration-none">ADICIONAR</a>
                </button>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>CONGREGAÇÃO</th>
                                <th>VALOR</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($literaturas as $literatura)
                                <tr>
                                    <td>{{ $literatura->congregacao->nome }}</td>
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
@endsection
