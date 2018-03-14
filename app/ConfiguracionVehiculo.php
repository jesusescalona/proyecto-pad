<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionVehiculo extends Model
{
    protected $table = "configuraciones_vehiculos";
	protected $fillable = ['id', 'cod_conf', 'nom_conf', 'desc_conf', 'tipo_conf', 'ind_estado'];

	public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }

    public function remolques(){
        return $this->belongsTo('App\Remolques');
    }
}
