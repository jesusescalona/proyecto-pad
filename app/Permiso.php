<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
	protected $table = "permisos";
	protected $fillable = ['id', 'perfil_id', 'modulos_id', 'acceder', 'crear', 'editar', 'borrar'];

	public function modulos(){
		$this->belongsTo('App\Modulo');
	}

	public function perfil(){
		$this->belongsToMany('App\Perfil');
	}
}
