<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodificacionDeProducto extends Model
{
	protected $table = "codificacion_productos";
	protected $fillable = ['id', 'tipo', 'cod', 'capitulo', 'partida', 'ind_estado'];
}
