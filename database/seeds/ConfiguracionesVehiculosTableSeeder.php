<?php

use Illuminate\Database\Seeder;

class ConfiguracionesVehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		\DB::table('configuraciones_vehiculos')->insert(array (
			0 => array('cod_conf'  => 85, 'nom_conf' => 'B5', 'desc_conf' => 'Remolque Balanceado de más de 4 ejes', 'tipo_conf' => 'Remolque Balanceado', 'ind_estado' => 1),
			1 => array('cod_conf'  => 84, 'nom_conf' => 'B4', 'desc_conf' => 'Remolque Balanceado de 4 ejes', 'tipo_conf' => 'Remolque Balanceado', 'ind_estado' => 1),
			2 => array('cod_conf'  => 74, 'nom_conf' => 'R5', 'desc_conf' => 'Remolque de más de 4 ejes', 'tipo_conf' => 'Remolque', 'ind_estado' => 1),
			3 => array('cod_conf'  => 54, 'nom_conf' => '3S', 'desc_conf' => 'Tractocamión de 3 ejes', 'tipo_conf' => 'Cabezote', 'ind_estado' => 1),
			4 => array('cod_conf'  => 53, 'nom_conf' => '2S', 'desc_conf' => 'Tractocamión de 2 ejes', 'tipo_conf' => 'Cabezote', 'ind_estado' => 1),
			5 => array('cod_conf'  => 56, 'nom_conf' => '5', 'desc_conf' => 'Camión Rígido de más de 4 ejes', 'tipo_conf' => 'Rígido', 'ind_estado' => 1),
			6 => array('cod_conf'  => 55, 'nom_conf' => '4S', 'desc_conf' => 'Tractocamión de más de 3 ejes', 'tipo_conf' => 'Cabezote', 'ind_estado' => 1),
			7 => array('cod_conf'  => 64, 'nom_conf' => 'S4', 'desc_conf' => 'Semiremolque de más de 3 ejes', 'tipo_conf' => 'Semiremolque', 'ind_estado' => 1),
			8 => array('cod_conf'  => 83, 'nom_conf' => 'B3', 'desc_conf' => 'Remolque Balanceado de 3 ejes', 'tipo_conf' => 'Remolque Balanceado', 'ind_estado' => 1),
			9 => array('cod_conf'  => 63, 'nom_conf' => 'S3', 'desc_conf' => 'Semiremolque de 3 ejes', 'tipo_conf' => 'Semiremolque', 'ind_estado' => 1),
			10 => array('cod_conf'  => 52, 'nom_conf' => '4', 'desc_conf' => 'Camión Rígido de 4 ejes', 'tipo_conf' => 'Rígido', 'ind_estado' => 1),
			11 => array('cod_conf'  => 73, 'nom_conf' => 'R4', 'desc_conf' => 'Remolque de 4 ejes', 'tipo_conf' => 'Remolque', 'ind_estado' => 1),
			12 => array('cod_conf'  => 72, 'nom_conf' => 'R3', 'desc_conf' => 'Remolque de 3 ejes', 'tipo_conf' => 'Remolque', 'ind_estado' => 1),
			13 => array('cod_conf'  => 82, 'nom_conf' => 'B2', 'desc_conf' => 'Remolque Balanceado de 2 ejes', 'tipo_conf' => 'Remolque Balanceado', 'ind_estado' => 1),
			14 => array('cod_conf'  => 81, 'nom_conf' => 'B1', 'desc_conf' => 'Remolque Balanceado de 1 eje', 'tipo_conf' => 'Remolque Balanceado', 'ind_estado' => 1),
			15 => array('cod_conf'  => 71, 'nom_conf' => 'R2', 'desc_conf' => 'Remolque de 2 ejes', 'tipo_conf' => 'Remolque', 'ind_estado' => 1),
			16 => array('cod_conf'  => 62, 'nom_conf' => 'S2', 'desc_conf' => 'Semiremolque de 2 ejes', 'tipo_conf' => 'Semiremolque', 'ind_estado' => 1),
			17 => array('cod_conf'  => 61, 'nom_conf' => 'S1', 'desc_conf' => 'Semiremolque de 1 eje', 'tipo_conf' => 'Semiremolque', 'ind_estado' => 1),
			18 => array('cod_conf'  => 51, 'nom_conf' => '3', 'desc_conf' => 'Camión Rígido de 3 ejes', 'tipo_conf' => 'Rígido', 'ind_estado' => 1),
			19 => array('cod_conf'  => 50, 'nom_conf' => '2', 'desc_conf' => 'Camión Rígido ', 'tipo_conf' => 'Rígido', 'ind_estado' => 1),
 		));
    }
}
