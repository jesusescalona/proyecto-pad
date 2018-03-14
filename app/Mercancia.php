<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
	protected $table = "mercancia";
	protected $fillable = ['id', 'cod_merc', 'tipo', 'desc_merc', 'partida', 'renombre_pad', 'ind_estado'];
}
