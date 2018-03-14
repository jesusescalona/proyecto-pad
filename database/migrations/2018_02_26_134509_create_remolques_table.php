<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemolquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remolques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pais_id')->unsigned();
            $table->integer('carroceria_id')->unsigned();
            $table->integer('configuracion_id')->unsigned();
            $table->integer('aseguradora_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->string('placa');
            $table->string('modelo');
            $table->string('nro_de_chasis');
            $table->string('nro_de_ejes');
            $table->string('propietario');
            $table->integer('peso_vacio_tn');
            $table->integer('capacidad_carga_tn');
            $table->integer('ancho');
            $table->integer('alto');
            $table->integer('volumen');
            $table->integer('nro_de_tarjeta_de_op')->nullable(true);
            $table->string('poliza_responsabilidad_civil');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('pais_id', 'fk_rem_pais')->references('id')->on('paises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('marca_id', 'fk_rem_marca')->references('id')->on('marcas_semiremolques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('carroceria_id', 'fk_rem_carr')->references('id')->on('tipos_carrocerias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('configuracion_id', 'fk_rem_conf')->references('id')->on('configuraciones_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('aseguradora_id', 'fk_rem_aseg')->references('id')->on('empresas_aseguradoras')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('color_id', 'fk_rem_color')->references('id')->on('colores_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remolques');
    }
}
