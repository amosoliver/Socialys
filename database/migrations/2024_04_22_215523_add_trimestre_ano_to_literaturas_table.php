<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrimestreAnoToLiteraturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('literaturas', function (Blueprint $table) {
            $table->integer('trimestre')->nullable();
            $table->integer('ano')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('literaturas', function (Blueprint $table) {
            $table->dropColumn('trimestre');
            $table->dropColumn('ano');
        });
    }
}
