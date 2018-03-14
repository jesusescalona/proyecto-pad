<?php

use Illuminate\Database\Seeder;

class ModulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	set_time_limit(0);

		$array_records = array (
			0 => array('desc_modulo' => 'Módulos', 'id_padre' => 0, 'ind_estado' => 1),
			1 => array('desc_modulo' => 'Perfiles', 'id_padre' => 0, 'ind_estado' => 1),
			2 => array('desc_modulo' => 'Usuarios', 'id_padre' => 0, 'ind_estado' => 1),
			3 => array('desc_modulo' => 'Permisos', 'id_padre' => 0, 'ind_estado' => 1),
			4 => array('desc_modulo' => 'Tablas Maestras', 'id_padre' => 0, 'ind_estado' => 1),
			5 => array('desc_modulo' => 'Capítulos de codificación de productos', 'id_padre' => 5, 'ind_estado' => 1),
			6 => array('desc_modulo' => 'Codificación de productos', 'id_padre' => 5, 'ind_estado' => 1),
			7 => array('desc_modulo' => 'Colores de vehículos', 'id_padre' => 5, 'ind_estado' => 1),
			8 => array('desc_modulo' => 'Combinación de configuraciones', 'id_padre' => 5, 'ind_estado' => 1),
			9 => array('desc_modulo' => 'Configuraciones de vehículos', 'id_padre' => 5, 'ind_estado' => 1),
			10 => array('desc_modulo' => 'División política', 'id_padre' => 5, 'ind_estado' => 1),
			11 => array('desc_modulo' => 'Empresas aseguradoras', 'id_padre' => 5, 'ind_estado' => 1),
			12 => array('desc_modulo' => 'Lineas de vehículos', 'id_padre' => 5, 'ind_estado' => 1),
			13 => array('desc_modulo' => 'Marcas de semiremolques', 'id_padre' => 5, 'ind_estado' => 1),
			14 => array('desc_modulo' => 'Marcas de vehículos', 'id_padre' => 5, 'ind_estado' => 1),
			15 => array('desc_modulo' => 'Mercancías', 'id_padre' => 5, 'ind_estado' => 1),
			16 => array('desc_modulo' => 'Tipos de carrocerías', 'id_padre' => 5, 'ind_estado' => 1),
			17 => array('desc_modulo' => 'Unidades de medida', 'id_padre' => 5, 'ind_estado' => 1),
			18 => array('desc_modulo' => 'Diccionario de errores', 'id_padre' => 5, 'ind_estado' => 1),
			19 => array('desc_modulo' => 'Países', 'id_padre' => 11, 'ind_estado' => 1),
			20 => array('desc_modulo' => 'Departamentos', 'id_padre' => 11, 'ind_estado' => 1),
			21 => array('desc_modulo' => 'Ciudades', 'id_padre' => 11, 'ind_estado' => 1),
		);

		foreach (array_chunk($array_records, 1000) as $records) {
			\DB::table('modulos')->insert($records);
		}
    }
}
