<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empaque extends Model
{
	protected $table = "empaques";
	protected $fillable = ['id', 'cod_emp', 'desc_emp', 'desc_emp_completa', 'def_emp', 'peso_vacio_min', 'peso_vacio_max', 'ind_estado'];
}
