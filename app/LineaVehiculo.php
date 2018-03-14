<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaVehiculo extends Model
{
	protected $table = "lineas_vehiculos";
	protected $fillable = ['id', 'cod_marcax_id', 'nom_marcax', 'cod_lineax', 'nom_lineax', 'peso_bruto', 'ind_estado'];

	public function marcavehiculo()
    {
        return $this->belongsTo('App\MarcaVehiculo');
    }

    public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }
}
