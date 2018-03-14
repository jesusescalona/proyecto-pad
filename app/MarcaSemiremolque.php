<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaSemiremolque extends Model
{
	protected $table = "marcas_semiremolques";
	protected $fillable = ['id', 'cod_semir', 'desc_semir', 'ind_estado'];

	public function remolques(){
        return $this->belongsTo('App\Remolques');
    }
}
