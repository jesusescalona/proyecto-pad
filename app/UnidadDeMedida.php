<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadDeMedida extends Model
{
	protected $table = "unidad_medida";
	protected $fillable = ['id', 'desc_uni', 'ind_estado'];
}
