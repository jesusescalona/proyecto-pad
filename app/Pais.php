<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
	protected $table = "paises";
	protected $fillable = ['id', 'cod_paisxx', 'nom_paisxx', 'abr_paisxx', 'usr_creaci', 'usr_modifi', 'ind_estado'];

	public function departamentos()
    {
        return $this->hasMany('App\Departamentos');
    }

    public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }

    public function remolques(){
        return $this->belongsTo('App\Remolques');
    }
}
