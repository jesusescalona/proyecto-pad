<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombinacionDeConfiguracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combinacion_configuraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod');
            $table->integer('cod_semir')->nullable(true);
            $table->string('desc', 150)->nullable(true);
            $table->string('desc_semir', 150)->nullable(true);
            $table->string('nom_corto_conf', 100);
            $table->integer('peso_max');
            $table->integer('peso_min');
            $table->integer('gal_min');
            $table->integer('gal_max');
            $table->integer('cod_semir2')->nullable(true);
            $table->string('nom_semir2', 150)->nullable(true);
            $table->string('desc_semir2', 150)->nullable(true);
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
        Schema::dropIfExists('combinacion_configuraciones');
    }
}
