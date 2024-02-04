<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosSaidasTable extends Migration
{
    public function up()
    {
        Schema::create('recibo_saidas', function (Blueprint $table) {
            $table->id();
            $table->string('nfc');
            $table->date('data');
            $table->string('nome');
            $table->decimal('valor', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recibo_saidas');
    }
}
