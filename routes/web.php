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
Route::get('user/create' , [\App\Http\Controllers\AuthController::class, 'create'])
    ->name('user.create');
Route::post('user/store' , [\App\Http\Controllers\AuthController::class, 'store'])
    ->name('user.store');
Route::get('user/login' , [\App\Http\Controllers\AuthController::class, 'login'])
    ->name('user.login');
Route::post('user/autenticar' , [\App\Http\Controllers\AuthController::class, 'autenticar'])
    ->name('user.autenticar');
    Route::get('user/logout' , [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('user.logout');

    Route::get('trocar-senha/{id}', [\App\Http\Controllers\AuthController::class, 'trocarSenhaForm'])->name('user.trocar.senha.get');

    Route::post('/trocar-senha/{id}', [\App\Http\Controllers\AuthController::class,'trocarSenha'])->name('user.trocar.senha.post');

    Route::get('enviar-email', [\App\Http\Controllers\AuthController::class,'enviarEmailForm'])->name('user.enviar_email');

    Route::post('enviar-email', [\App\Http\Controllers\AuthController::class, 'enviarEmail'])->name('user.store_email');




