<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
	protected $table = "departamentos";
	protected $fillable = ['id', 'cod_paisxx_id', 'cod_depart', 'nom_depart', 'abr_depart', 'usr_creaci', 'usr_modifi', 'ind_estado'];

	public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function ciudades()
    {
        return $this->hasMany('App\Ciudades');
    }

    public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }
}
