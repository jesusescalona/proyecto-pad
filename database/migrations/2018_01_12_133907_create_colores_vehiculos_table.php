<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColoresVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colores_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_colorx')->nullable()->index('index_cod_colorx')->comment('Codigo Estandar');
            $table->string('nom_colorx', 255)->comment('Color');
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
        Schema::dropIfExists('colores_vehiculos');
    }
}
