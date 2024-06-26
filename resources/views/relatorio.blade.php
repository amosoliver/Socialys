<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relatorio</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        margin: 4rem 2rem;
    }

    body>.conteudo {
        min-width: 800px;
        max-width: 800px;
    }

    @media print {
        .no-print {
            display: none;
        }
    }

    .page-break {
        page-break-before: always;
    }

    header {
        display: flex;
        gap: 3rem;
        justify-content: space-between;
        min-width: 800px !important;
    }

    .assinaturas {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .assinatura {
        flex-grow: 1;
        text-align: center;
    }

    .linha {
        border-top: 1px solid black;
        margin-bottom: 5px;
    }

    .assinatura-inferior {
        margin-top: 80px;
        /* Ajuste a margem conforme necessário */
    }


    header>section>h3,
    header>section>p {
        display: flex;
        justify-content: center;
        padding: 2px 0;
    }

    .identificacao {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 110%;
        font-size: 25px;
        /* Adjust the font size as needed */
    }

    thead {
        background-color: #ff0000;
        /* Código de cor vermelha */
    }


    p {
        display: inline;
    }

    h3 {
        display: inline;
        /* Isso faz com que o h3 se comporte como um elemento inline e fique na mesma linha */
    }

    section {
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #000;
        /* Cor e largura da borda externa da tabela */
    }

    th,
    td {
        border: 1px solid #000;
        /* Cor e largura da borda interna das células */
        padding: 8px;
        /* Espaçamento interno das células */
        text-align: center;
        /* Alinhamento do texto */
    }

    th {
        background-color: #7a7171;
        /* Cor de fundo do cabeçalho da tabela */
        color: #000000;
        /* Cor do texto (branco) */
        font-size: 18px;
        /* Tamanho da fonte desejado, ajuste conforme necessário */
    }
</style>
@php

    $recibosTipo1Total = 0;
    $recibosTipo2Total = 0;
    $recibosSaidaTotal = 0;

    foreach ($recibosTipo1 as $recibo1) {
        $recibosTipo1Total += $recibo1['valor'];
    }
    foreach ($recibosTipo2 as $recibo2) {
        $recibosTipo2Total += $recibo2['valor'];
    }
    foreach ($recibosSaida as $reciboSaida) {
        $recibosSaidaTotal += $reciboSaida['valor'];
    }

@endphp

<body>
    <div class="conteudo">
        <header>
            <section>
                <img width="116" height="104"
                    src="data:image/jpg;base64,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" />
            </section>

            <section>
                <h3 style="padding-top: 4pt; text-align: center;">
                    IGREJA EVANGÉLICA ASSEMBLÉIA DE DEUS
                </h3>
                <p>Rua Pastor Messias Barbosa, nº 3200, Tiradentes - CEP: 76.824-568</p>
                <p>Porto Velho - RO / CNPJ: 04.416.467/0001-78</p>
                <p>Fone: (69) 3221-0013</p>
                <p>
                    <a href="mailto:iead-pvh@hotmail.com" class="a" target="_blank">
                        www.ieadpvh.com
                    </a>
                    /
                    <a href="mailto:iead-pvh@hotmail.com" target="_blank">
                        iead-pvh@hotmail.com
                    </a>
                </p>
            </section>

            <section>
                <img width="131" height="103"
                    src="data:image/jpg;base64,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" />
                <section>
        </header>
        <br>
        <section class="identificacao">
            <div>
                <h3>Setor: </h3>
                <p>15,</p> &nbsp
                <h3>Congregação: </h3>
                <p>Gamaliel</p> &nbsp
            </div>
            <div>
                <h3>Período </h3>
                <p>{{ $dt_ini }} à {{ $dt_fim }}</p>
            </div>

        </section>
        <section class="entrada">
            <table>
                <thead class="cinza-escuro">
                    <tr>
                        <th colspan="5">Total de Entradas (Dizimos e Ofertas)</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th width="100">N° do recibo</th>
                        <th width="100">Descrição</th>
                        <th width="100">Data</th>
                        <th>Nome</th>
                        <th width="100">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recibosTipo1 as $recibo1)
                        <tr>
                            <td>{{ $recibo1->numero_recibo }}</td>
                            <td>{{ $recibo1->descricao }}</td>
                            <td>{{ $recibo1->data }}</td>
                            <td>{{ $recibo1->nome }}</td>
                            <td>{{ number_format($recibo1->valor, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>


        <section>
            <table style="width: 50%; margin-left: auto; margin-right: 0;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Total (Dizimos e Oferta)</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosTipo1Total, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
        @php
            $trintaPorcento = $recibosTipo1Total * 0.3;
            $saldoTrintaPorcento = $trintaPorcento - $recibosSaidaTotal;
        @endphp

        <section>
            <table style="width: 50%; margin-left: auto; margin-right: 0;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">SALDO DOS 30%</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosTipo1Total * 0.3, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="page-break">
            <table>
                <thead style="background-color: #555;">
                    <tr>
                        <th colspan="5">Total de Entradas (Missão, Literaturas e Votos)</th>
                    </tr>
                </thead>
                <thead>

                    <tr>
                        <th width="100">N° do recibo</th>
                        <th width="100">Descrição</th>
                        <th width="100">Data</th>
                        <th>Nome</th>
                        <th width="100">Valor</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($recibosTipo2 as $recibo2)
                        <tr>
                            <td>{{ $recibo2->numero_recibo }}</td>
                            <td>{{ $recibo2->descricao }}</td>
                            <td>{{ $recibo2->data }}</td>
                            <td>{{ $recibo2->nome }}</td>
                            <td>{{ number_format($recibo2->valor, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section>
            <table style="width: 50%; margin-left: auto; margin-right: 0;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Total (Missão, Literatura e Votos)</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosTipo2Total, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <table>
                <tbody>
                    <tr>
                        <th style="text-align: left;">TOTAL DE ENTRADAS</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format(abs($recibosTipo1Total + $recibosTipo2Total), 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="saida">
            <table>
                <thead>
                    <tr>
                        <th colspan="5">SAÍDAS</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th>N° do recibo</th>
                        <th>Data</th>
                        <th>Nome</th>
                        <th width="100">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recibosSaida as $reciboSaida)
                        <tr>
                            <td width="100">{{ $reciboSaida->nfc }}</td>
                            <td width="100">{{ $reciboSaida->data }}</td>
                            <td>{{ $reciboSaida->nome }}</td>
                            <td>{{ number_format($reciboSaida->valor, 2, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section>
            <table style="width: 50%; margin-left: auto; margin-right: 0;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Total de Saidas</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosSaidaTotal, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <table style="width: 50%; margin-left: auto; margin-right: 0;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">SALDO FINAL DOS 30%</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($saldoTrintaPorcento, 2, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>


        <section>
            <table style="width: 50%; margin-left: auto; margin-right: 0;">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Total de Entradas</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosTipo1Total + $recibosTipo2Total, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th style="text-align: left;">Total de Saídas</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosSaidaTotal, 2, ',', '.') }}</td>
                    </tr>

                </tbody>
            </table>
        </section>

        <section>
            <table>
                <tbody>
                    <tr>
                        <th style="text-align: left;">Total Geral (Entradas - Saídas)</th>
                        <td width="100" style="text-align: right;">
                            {{ number_format($recibosTipo1Total + $recibosTipo2Total - $recibosSaidaTotal, 2, ',', '.') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <br> <br> <br>
        <div class="assinaturas">
            <!-- Primeira assinatura -->
            <div class="assinatura">
                <div class="linha"></div> <!-- Linha -->
                <div class="nome">Arrecadador</div> <!-- Nome -->
            </div>
            <!-- Segunda assinatura -->
            <div class="assinatura assinatura-inferior">
                <div class="linha"></div> <!-- Linha -->
                <div class="nome">Supervisor</div> <!-- Nome -->
            </div>
            <!-- Terceira assinatura -->
            <div class="assinatura">
                <div class="linha"></div> <!-- Linha -->
                <div class="nome">Dirigente</div> <!-- Nome -->
            </div>
        </div>

    </div>

    <button id="save-pdf" class="no-print">Salvar como PDF</button>

    <script>
        document.getElementById('save-pdf').addEventListener('click', function () {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.html(document.querySelector('.conteudo'), {
                callback: function (doc) {
                    doc.save('relatorio.pdf');
                },
                x: 10,
                y: 10
            });
        });
    </script>

</body>

</html>
