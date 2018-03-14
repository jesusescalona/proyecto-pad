<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposCarroceriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_carrocerias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_carroceria');
            $table->string('desc_carroceria', 250);
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
        Schema::dropIfExists('tipos_carrocerias');
    }
}
