<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
	protected $table = "vehiculos";
	protected $fillable = ['id', 'pais_id', 'departamento_id', 'ciudad_id', 'marca_id', 'linea_id', 'carroceria_id', 'configuracion_id', 'aseguradora_id', 'color_id', 'placa', 'modelo', 'nro_de_motor', 'nro_de_chasis', 'nro_de_serie', 'poseedor', 'conductor', 'propietario', 'tipo_de_vinculacion', 'peso_vacio_tn', 'capacidad_carga_tn', 'remolque', 'nro_de_tarjeta_de_op', 'poliza_responsabilidad_civil', 'fecha_de_vencimiento', 'nro_cert_gases', 'nro_SOAT', 'foto'];

	public function pais(){
		return $this->hasOne('App\Pais');
	}

	public function departamento(){
		return $this->hasOne('App\Departamento');
	}

	public function ciudad(){
		return $this->hasOne('App\Ciudad');
	}

	public function marca(){
		return $this->hasOne('App\MarcaVehiculo');
	}

	public function linea(){
		return $this->hasOne('App\LineaVehiculo');
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