@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2>Literatura</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>CONGREGAÇÃO</th>
                                <th>VALOR TOTAL</th>
                                <th>VALOR PAGO</th>
                                <th>VALOR A PAGAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($congregacoes as $cong)
                                <tr>
                                    <td>{{ $cong->nome }}</td>
                                    <td>{{ $cong->valor_total }}</td>
                                    <td>{{ $cong->valor_pago }}</td>
                                    <td class="{{ $cong->valor_pago / $cong->valor_total >= 0.99 ? 'bg-success' : ($cong->valor_pago / $cong->valor_total > 0.5 ? 'bg-warning' : 'bg-danger') }}" >
                                        @if ($cong->valor_pagar <= 0)
                                            PAGO
                                        @else
                                            {{ $cong->valor_pagar }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
