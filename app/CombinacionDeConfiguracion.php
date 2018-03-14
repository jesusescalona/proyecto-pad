<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CombinacionDeConfiguracion extends Model
{
	protected $table = "combinacion_configuraciones";
	protected $fillable = ['id', 'cod', 'cod_semir', 'desc', 'desc_semir', 'nom_corto_conf', 'peso_max', 'peso_min', 'gal_min', 'gal_max', 'cod_semir2', 'nom_semir2', 'desc_semir2', 'ind_estado'];
}
