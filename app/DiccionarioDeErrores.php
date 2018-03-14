<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiccionarioDeErrores extends Model
{
	protected $table = "diccionario_errores";
	protected $fillable = ['id', 'proceso_id', 'codigo_error', 'mensaje_error', 'variable', 'tipo_error', 'proceso', 'solucion', 'ind_estado'];
}
