<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_paisxx_id')->unsigned();
            $table->integer('cod_depart')->unsigned()->nullable()->index('index_cod_dpto')->unique();
            $table->string('nom_depart', 50);
            $table->string('abr_depart', 15);
            $table->string('usr_creaci', 25)->nullable(true);
            $table->string('usr_modifi', 25)->nullable(true);
            $table->integer('ind_estado')->default(1)->comment('0 Inactivo; 1 Activo');
            $table->timestamps();

            $table->foreign('cod_paisxx_id', 'fk_pais')->references('cod_paisxx')->on('paises')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
