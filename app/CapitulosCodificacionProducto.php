<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapitulosCodificacionProducto extends Model
{
	protected $table = "capitulos_codificacion_productos";
	protected $fillable = ['id', 'naturaleza', 'cod', 'descripcion', 'carga_extrapesada', 'carga_extradimensionada', 'ind_estado'];


}
