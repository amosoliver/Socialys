<?php

use App\Http\Controllers\ReciboController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\ReciboSaidaController;


Route::get('recibo/create', [ReciboController::class, 'create'])->name('recibos.create');
Route::post('recibo/store', [ReciboController::class, 'store'])->name('recibos.store');
Route::get('recibo/index', [ReciboController::class, 'index'])->name('recibos.index');
Route::get('recibo/edit/{id}', [ReciboController::class, 'edit'])->name('recibos.edit');
Route::post('recibo/update/{id}', [ReciboController::class, 'update'])->name('recibos.update');
Route::get('recibo/destroy/{id}', [ReciboController::class, 'destroy'])->name('recibos.destroy');

Route::get('recibo/saida/create', [ReciboSaidaController::class, 'create'])->name('recibos.saida.create');
Route::post('recibo/saida/store', [ReciboSaidaController::class, 'store'])->name('recibos.saida.store');
Route::get('recibo/saida/edit/{id}', [ReciboSaidaController::class, 'edit'])->name('recibos.saida.edit');
Route::post('recibo/saida/update/{id}', [ReciboSaidaController::class, 'update'])->name('recibos.saida.update');
Route::get('recibo/saida/destroy/{id}', [ReciboSaidaController::class, 'destroy'])->name('recibos.saida.destroy');

Route::get('relatorio', [RelatorioController::class, 'index'])->name('relatorio');



