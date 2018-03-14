<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pais_id')->unsigned();
            $table->integer('departamento_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->integer('linea_id')->unsigned();
            $table->integer('carroceria_id')->unsigned();
            $table->integer('configuracion_id')->unsigned();
            $table->integer('aseguradora_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->string('placa');
            $table->string('modelo');
            $table->string('nro_de_motor');
            $table->string('nro_de_chasis');
            $table->string('nro_de_serie');
            $table->string('poseedor');
            $table->string('conductor');
            $table->string('propietario');
            $table->string('tipo_de_vinculacion')->nullable(true);
            $table->integer('peso_vacio_tn');
            $table->integer('capacidad_carga_tn');
            $table->string('remolque');
            $table->integer('nro_de_tarjeta_de_op')->nullable(true);
            $table->string('poliza_responsabilidad_civil');
            $table->date('fecha_de_vencimiento');
            $table->string('nro_cert_gases')->nullable(true);
            $table->string('nro_SOAT');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('pais_id', 'fk_veh_pais')->references('id')->on('paises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('departamento_id', 'fk_veh_dpto')->references('id')->on('departamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('ciudad_id', 'fk_veh_cd')->references('id')->on('ciudades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('marca_id', 'fk_veh_marca')->references('id')->on('marcas_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('linea_id', 'fk_veh_linea')->references('id')->on('lineas_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('carroceria_id', 'fk_veh_carr')->references('id')->on('tipos_carrocerias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('configuracion_id', 'fk_veh_conf')->references('id')->on('configuraciones_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('aseguradora_id', 'fk_veh_aseg')->references('id')->on('empresas_aseguradoras')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('color_id', 'fk_veh_color')->references('id')->on('colores_vehiculos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
