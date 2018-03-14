<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodificacionProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codificacion_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', 10);
            $table->string('cod', 100);
            $table->string('capitulo', 250);
            $table->string('partida', 250);
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
        Schema::dropIfExists('codificacion_productos');
    }
}
