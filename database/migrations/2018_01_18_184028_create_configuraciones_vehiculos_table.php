<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracionesVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones_vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_conf')->unique();
            $table->string('nom_conf', 100)->comment('Configuracion');
            $table->string('desc_conf', 250)->comment('Descripcion de la configuracion');
            $table->string('tipo_conf', 150)->comment('Tipo de configuracion');
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
        Schema::dropIfExists('configuraciones_vehiculos');
    }
}
