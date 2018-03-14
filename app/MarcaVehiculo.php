<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaVehiculo extends Model
{
	protected $table = "marcas_vehiculos";
	protected $fillable = ['id', 'cod_marcax', 'nom_marcax', 'ind_estado'];

	public function lineasvehiculos()
    {
        return $this->hasMany('App\LineaVehiculo', 'cod_marcax_id');
    }

    public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }
}
