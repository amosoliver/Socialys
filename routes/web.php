<?php

use App\Http\Controllers\ReciboController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\LiteraturaController;
use App\Http\Controllers\CongregacaoController;
use App\Http\Controllers\ReciboSaidaController;

Route::get('/', [ReciboController::class, 'home'])->name('recibos.home');


Route::get('recibo/create', [ReciboController::class, 'create'])->name('recibos.create');
Route::post('recibo/store', [ReciboController::class, 'store'])->name('recibos.store');
Route::get('recibo/index', [ReciboController::class, 'index'])->name('recibos.index');
Route::get('recibo/edit/{id}', [ReciboController::class, 'edit'])->name('recibos.edit');
Route::post('recibo/update/{id}', [ReciboController::class, 'update'])->name('recibos.update');
Route::get('recibo/destroy/{id}', [ReciboController::class, 'destroy'])->name('recibos.destroy');

Route::get('literatura/create', [LiteraturaController::class, 'create'])->name('literaturas.create');
Route::post('literatura/store', [LiteraturaController::class, 'store'])->name('literaturas.store');
Route::get('literatura/index', [LiteraturaController::class, 'index'])->name('literaturas.index');
Route::get('literatura/relatorio', [LiteraturaController::class, 'relatorio'])->name('literaturas.relatorio');
Route::get('literatura/destroy/{id}', [LiteraturaController::class, 'destroy'])->name('literaturas.destroy');

Route::get('congregacao/create', [CongregacaoController::class, 'create'])->name('congregacaos.create');
Route::post('congregacao/store', [CongregacaoController::class, 'store'])->name('congregacaos.store');
Route::get('congregacao/index', [CongregacaoController::class, 'index'])->name('congregacaos.index');
Route::get('congregacao/destroy/{id}', [CongregacaoController::class, 'destroy'])->name('congregacaos.destroy');

Route::get('recibo/saida/create', [ReciboSaidaController::class, 'create'])->name('recibos.saida.create');
Route::post('recibo/saida/store', [ReciboSaidaController::class, 'store'])->name('recibos.saida.store');
Route::get('recibo/saida/edit/{id}', [ReciboSaidaController::class, 'edit'])->name('recibos.saida.edit');
Route::post('recibo/saida/update/{id}', [ReciboSaidaController::class, 'update'])->name('recibos.saida.update');
Route::get('recibo/saida/destroy/{id}', [ReciboSaidaController::class, 'destroy'])->name('recibos.saida.destroy');

Route::get('relatorio', [RelatorioController::class, 'index'])->name('relatorio');



