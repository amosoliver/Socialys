<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiteraturaTable extends Migration
{
    public function up()
    {
        Schema::create('literaturas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 10, 2);
            $table->unsignedBigInteger('id_congregacao');
            $table->foreign('id_congregacao')->references('id')->on('congregacaos');

            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::dropIfExists('literaturas');
    }
}

