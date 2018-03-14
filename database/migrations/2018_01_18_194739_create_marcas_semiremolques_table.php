<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasSemiremolquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas_semiremolques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_semir')->nullable()->comment('Codigo Estandar');
            $table->string('desc_semir', 150)->comment('Descripcion de la marca de semiremolque');
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
        Schema::dropIfExists('marcas_semiremolques');
    }
}
