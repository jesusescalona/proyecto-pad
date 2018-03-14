<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('perfil_id')->unsigned();
            $table->integer('modulos_id')->unsigned();
            $table->integer('acceder')->default(1);
            $table->integer('crear')->default(1);
            $table->integer('editar')->default(1);
            $table->integer('borrar')->default(1);
            $table->timestamps();

            $table->foreign('perfil_id', 'fk_permisos_perfil')->references('id')->on('perfil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('modulos_id', 'fk_permisos_modulos')->references('id')->on('modulos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos');
    }
}
