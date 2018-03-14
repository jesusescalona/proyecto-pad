<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitulosCodificacionProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitulos_codificacion_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naturaleza', 10);
            $table->string('cod', 100);
            $table->string('descripcion', 250);
            $table->string('carga_extrapesada', 2);
            $table->string('carga_extradimensionada', 2);
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
        Schema::dropIfExists('capitulos_codificacion_productos');
    }
}
