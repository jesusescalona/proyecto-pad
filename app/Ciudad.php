<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
	protected $table = "ciudades";
	protected $fillable = ['id', 'cod_depart_id', 'cod_ciudad', 'nom_ciudad', 'abr_ciudad', 'cod_latitu',  'cod_longit',  'nom_ubicax',  'ind_danexx',  'val_icaxxx',  'cod_people',  'ind_metrop',  'usr_creaci', 'usr_modifi', 'ind_estado'];

	public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }
}
