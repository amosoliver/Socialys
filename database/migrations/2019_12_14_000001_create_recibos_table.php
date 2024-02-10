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
            $table->unsignedBigInteger('id_congregacao')->nullable();
            $table->text('descricao');
            $table->date('data');
            $table->string('nome');
            $table->decimal('valor', 10, 2);
            $table->timestamps();
            $table->foreign('id_congregacao')->references('id')->on('congregacaos');

        });
    }

    public function down()
    {
        Schema::dropIfExists('recibos');
    }
}
