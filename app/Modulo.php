<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
	protected $table = "modulos";
	protected $fillable = ['id', 'desc_modulo', 'id_padre', 'ind_estado'];

	public function permisos(){
		$this->hasMany('App\Permiso');
	}
}