<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
	protected $table = "perfil";
	protected $fillable = ['id', 'desc_perfil', 'ind_estado'];

	public function permisos(){
		$this->hasMany('App\Permiso');
	}

	public function usuario(){
		$this->hasMany('App\Usuario');
	}
}
