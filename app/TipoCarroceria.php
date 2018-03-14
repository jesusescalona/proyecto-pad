<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCarroceria extends Model
{
	protected $table = "tipos_carrocerias";
	protected $fillable = ['id', 'cod_carroceria', 'desc_carroceria', 'ind_estado'];

	public function vehiculos(){
        return $this->belongsTo('App\Vehiculos');
    }

    public function remolques(){
        return $this->belongsTo('App\Remolques');
    }
}
