<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMercanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_merc')->nullable();
            $table->string('tipo', 100);
            $table->string('desc_merc', 250);
            $table->string('partida', 150);
            $table->string('renombre_pad', 250);
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
        Schema::dropIfExists('mercancia');
    }
}
