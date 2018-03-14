<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiccionarioErroresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diccionario_errores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proceso_id');
            $table->string('codigo_error', 30);
            $table->string('mensaje_error', 350);
            $table->string('variable', 50);
            $table->string('tipo_error', 50);
            $table->string('proceso', 250);
            $table->string('solucion', 500);
            $table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diccionario_errores');
    }
}
