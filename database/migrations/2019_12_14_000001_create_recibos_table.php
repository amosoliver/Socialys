<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_recibo');
            $table->text('descricao');
            $table->date('data');
            $table->string('nome');
            $table->decimal('valor', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recibos');
    }
}
