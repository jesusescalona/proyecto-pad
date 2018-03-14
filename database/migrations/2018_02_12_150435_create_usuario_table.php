<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('perfil_id')->unsigned();
            $table->string('username', 15)->comment('Usuario Aplicacion');
            $table->string('username_canonical', 15);
            $table->string('email');
            $table->string('email_canonical');
            $table->boolean('enabled');
            $table->string('salt');
            $table->string('password');
            $table->boolean('locked');
            $table->boolean('expired');
            $table->string('pas_oldusu', 50)->comment('Contraseña Anterior');
            $table->dateTime('expires_at')->nullable();
            $table->string('confirmation_token')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('password_requested_at')->nullable();
            $table->boolean('credentials_expired');
            $table->dateTime('credentials_expire_at')->nullable();
            $table->dateTime('fec_caduca')->nullable()->comment('Fecha caduca Contraseña');
            $table->dateTime('fec_cambio')->nullable()->comment('Fecha se realizo cambio Contraseña');
            $table->integer('num_diasxx')->nullable()->comment('No Dias para cambiar contraseña');
            $table->integer('usr_creaci')->nullable();
            $table->integer('usr_modifi')->nullable();
            $table->timestamps();

            $table->foreign('perfil_id', 'fk_usuario_perfil')->references('id')->on('perfil')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
