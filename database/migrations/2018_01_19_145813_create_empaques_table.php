<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpaquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empaques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_emp')->nullable()->comment('Codigo Estandar');
            $table->string('desc_emp', 100)->comment('Descripcion del empaque');
            $table->string('desc_emp_completa', 200)->comment('Descripcion completa del empaque');
            $table->string('def_emp', 250)->comment('Definicion de empaque');
            $table->integer('peso_vacio_min')->default(0)->comment('Peso minimo');
            $table->integer('peso_vacio_max')->default(0)->comment('Peso maximo');
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
        Schema::dropIfExists('empaques');
    }
}
