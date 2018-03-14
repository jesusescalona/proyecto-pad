<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_depart_id')->unsigned();
            $table->integer('cod_ciudad')->unsigned()->nullable()->index('index_cod_ciudad')->unique();
            $table->string('nom_ciudad', 50);
            $table->string('abr_ciudad', 15);
            $table->double('cod_latitu', 10, 2)->nullable(true);
            $table->double('cod_longit', 10, 2)->nullable(true);
            $table->string('nom_ubicax', 255)->nullable(true);
            $table->char('ind_danexx', 1)->default(1);
            $table->float('val_icaxxx');
            $table->string('cod_people', 5)->nullable(true);
            $table->tinyInteger('ind_metrop');
            $table->string('usr_creaci', 25)->nullable(true);
            $table->string('usr_modifi', 25)->nullable(true);
            $table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
            $table->timestamps();
            
            $table->foreign('cod_depart_id', 'fk_dpto')->references('cod_depart')->on('departamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudades');
    }
}
