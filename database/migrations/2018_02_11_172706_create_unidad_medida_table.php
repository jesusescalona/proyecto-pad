<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadMedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_medida', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desc_uni', 50)->comment('Medida');
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
        Schema::dropIfExists('unidad_medida');
    }
}
