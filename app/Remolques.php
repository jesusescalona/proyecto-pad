<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remolques extends Model
{
	protected $table = "remolques";
	protected $fillable = ['id', 'pais_id', 'carroceria_id', 'configuracion_id', 'aseguradora_id', 'color_id', 'marca_id', 'placa', 'modelo', 'nro_de_chasis', 'nro_de_ejes', 'propietario', 'peso_vacio_tn', 'capacidad_carga_tn', 'ancho', 'alto', 'volumen', 'nro_de_tarjeta_de_op', 'poliza_responsabilidad_civil', 'foto'];

	public function pais(){
		return $this->hasOne('App\Pais');
	}

	public function marca(){
		return $this->hasOne('App\MarcaSemiremolque');
	}

	public function carroceria(){
		return $this->hasOne('App\TipoCarroceria');
	}

	public function configuracion(){
		return $this->hasOne('App\ConfiguracionVehiculo');
	}

	public function aseguradora(){
		return $this->hasOne('App\EmpresaAseguradora');
	}

	public function color(){
		return $this->hasOne('App\ColorVehiculo');
	}
}