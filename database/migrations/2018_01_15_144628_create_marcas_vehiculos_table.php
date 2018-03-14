<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_marcax')->unsigned()->nullable()->index('index_cod_marcax')->comment('Codigo Estandar')->unique();
            $table->string('nom_marcax', 100)->comment('Marca');
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
        Schema::dropIfExists('marcas_vehiculos');
    }
}
