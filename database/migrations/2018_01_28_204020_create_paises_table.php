<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_paisxx')->unsigned()->nullable()->index('index_cod_pais')->unique();
            $table->string('nom_paisxx', 50);
            $table->string('abr_paisxx', 15);
            $table->string('usr_creaci', 25)->nullable(true);
            $table->string('usr_modifi', 25)->nullable(true);
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
        Schema::dropIfExists('paises');
    }
}
