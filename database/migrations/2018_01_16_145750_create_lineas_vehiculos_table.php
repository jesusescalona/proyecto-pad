<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_marcax_id')->unsigned();
            $table->string('marca', 100)->comment('Marca');
            $table->integer('cod_lineax')->nullable()->index('index_cod_lineax')->comment('Codigo Estandar');
            $table->string('nom_lineax', 100)->comment('Linea');
            $table->integer('peso_bruto')->nullable();
            $table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
            $table->timestamps();

            $table->foreign('cod_marcax_id', 'fk_marca_lineas')->references('cod_marcax')->on('marcas_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lineas_vehiculos', function(Blueprint $table)
        {
            $table->dropForeign('fk_marca_lineas');
        });
        
        Schema::dropIfExists('lineas_vehiculos');
    }
}
