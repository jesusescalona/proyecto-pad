<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorVehiculo extends Model
{
	protected $table = "colores_vehiculos";
	protected $fillable = ['id', 'cod_colorx', 'nom_colorx', 'ind_estado'];

	public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }

    public function remolques(){
        return $this->belongsTo('App\Remolques');
    }
}
