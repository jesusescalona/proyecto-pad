<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaAseguradora extends Model
{
	protected $table = "empresas_aseguradoras";
	protected $fillable = ['id', 'nit_aseguradora', 'nombre_aseguradora', 'ind_estado'];

	public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }

    public function remolques(){
        return $this->belongsTo('App\Remolques');
    }
}
