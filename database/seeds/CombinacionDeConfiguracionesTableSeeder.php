<?php

use Illuminate\Database\Seeder;

class CombinacionDeConfiguracionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('combinacion_configuraciones')->insert(array (
			0 => array('cod' => 52, 'cod_semir' => NULL, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => NULL, 'nom_corto_conf' => '4', 'peso_max' => 36900, 'peso_min' => 40, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			1 => array('cod' => 51, 'cod_semir' => NULL, 'desc' => 'Camión Rígido de 3 ejes', 'desc_semir' => NULL, 'nom_corto_conf' => '3', 'peso_max' => 28700, 'peso_min' => 30, 'gal_min' => 4000, 'gal_max' => 8000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			2 => array('cod' => 50, 'cod_semir' => NULL, 'desc' => 'Camión Rígido de 2 ejes', 'desc_semir' => NULL, 'nom_corto_conf' => '2', 'peso_max' => 17425, 'peso_min' => 15, 'gal_min' => 300, 'gal_max' => 4000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			3 => array('cod' => 52, 'cod_semir' => 83, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => 'Remolque Balanceado de 3 ejes', 'nom_corto_conf' => '4B3', 'peso_max' => 52275, 'peso_min' => 70, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			4 => array('cod' => 52, 'cod_semir' => 82, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => 'Remolque Balanceado de 2 ejes', 'nom_corto_conf' => '4B2', 'peso_max' => 52275, 'peso_min' => 60, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			5 => array('cod' => 52, 'cod_semir' => 81, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => 'Remolque Balanceado de 1 eje', 'nom_corto_conf' => '4B1', 'peso_max' => 45100, 'peso_min' => 50, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			6 => array('cod' => 50, 'cod_semir' => 82, 'desc' => 'Camión Rígido de 2 ejes', 'desc_semir' => 'Remolque Balanceado de 2 ejes', 'nom_corto_conf' => '2B2', 'peso_max' => 32800, 'peso_min' => 40, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			7 => array('cod' => 50, 'cod_semir' => 81, 'desc' => 'Camión Rígido de 2 ejes', 'desc_semir' => 'Remolque Balanceado de 1 eje', 'nom_corto_conf' => '2B1', 'peso_max' => 25625, 'peso_min' => 30, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			8 => array('cod' => 51, 'cod_semir' => 72, 'desc' => 'Camión Rígido de 3 ejes', 'desc_semir' => 'Remolque de 3 ejes', 'nom_corto_conf' => '3R3', 'peso_max' => 49300, 'peso_min' => 60, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			9 => array('cod' => 51, 'cod_semir' => 71, 'desc' => 'Camión Rígido de 3 ejes', 'desc_semir' => 'Remolque de 2 ejes', 'nom_corto_conf' => '3R2', 'peso_max' => 45100, 'peso_min' => 50, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			10 => array('cod' => 50, 'cod_semir' => 72, 'desc' => 'Camión Rígido de 2 ejes', 'desc_semir' => 'Remolque de 3 ejes', 'nom_corto_conf' => '2R3', 'peso_max' => 48175, 'peso_min' => 40, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			11 => array('cod' => 50, 'cod_semir' => 71, 'desc' => 'Camión Rígido de 2 ejes', 'desc_semir' => 'Remolque de 2 ejes', 'nom_corto_conf' => '2R2', 'peso_max' => 31775, 'peso_min' => 40, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			12 => array('cod' => 51, 'cod_semir' => 83, 'desc' => 'Camión Rígido de 3 ejes', 'desc_semir' => 'Remolque Balanceado de 3 ejes', 'nom_corto_conf' => '3B3', 'peso_max' => 49200, 'peso_min' => 60, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			13 => array('cod' => 51, 'cod_semir' => 82, 'desc' => 'Camión Rígido de 3 ejes', 'desc_semir' => 'Remolque Balanceado de 2 ejes', 'nom_corto_conf' => '3B2', 'peso_max' => 41000, 'peso_min' => 50, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			14 => array('cod' => 51, 'cod_semir' => 81, 'desc' => 'Camión Rígido de 3 ejes', 'desc_semir' => 'Remolque Balanceado de 1 eje', 'nom_corto_conf' => '3B1', 'peso_max' => 33825, 'peso_min' => 40, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			15 => array('cod' => 50, 'cod_semir' => 83, 'desc' => 'Camión Rígido de 2 ejes', 'desc_semir' => 'Remolque Balanceado de 3 ejes', 'nom_corto_conf' => '2B3', 'peso_max' => 32800, 'peso_min' => 40, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			16 => array('cod' => 52, 'cod_semir' => 73, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => 'Remolque de 4 ejes', 'nom_corto_conf' => '4R4', 'peso_max' => 49300, 'peso_min' => 80, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			17 => array('cod' => 52, 'cod_semir' => 72, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => 'Remolque de 3 ejes', 'nom_corto_conf' => '4R3', 'peso_max' => 49300, 'peso_min' => 70, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			18 => array('cod' => 52, 'cod_semir' => 71, 'desc' => 'Camión Rígido de 4 ejes', 'desc_semir' => 'Remolque de 2 ejes', 'nom_corto_conf' => '4R2', 'peso_max' => 49300, 'peso_min' => 60, 'gal_min' => 0, 'gal_max' => 0, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			19 => array('cod' => 54, 'cod_semir' => 63, 'desc' => 'Tractocamión de 3 ejes', 'desc_semir' => 'Semiremolque de 3 Ejes', 'nom_corto_conf' => '3S3', 'peso_max' => 53300, 'peso_min' => 60, 'gal_min' => 11000, 'gal_max' => 13000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			20 => array('cod' => 54, 'cod_semir' => 62, 'desc' => 'Tractocamión de 3 ejes', 'desc_semir' => 'Semiremolque de 2 Ejes', 'nom_corto_conf' => '3S2', 'peso_max' => 49200, 'peso_min' => 50, 'gal_min' => 11000, 'gal_max' => 13000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			21 => array('cod' => 54, 'cod_semir' => 61, 'desc' => 'Tractocamión de 3 ejes', 'desc_semir' => 'Semiremolque de 1 Eje', 'nom_corto_conf' => '3S1', 'peso_max' => 29725, 'peso_min' => 40, 'gal_min' => 11000, 'gal_max' => 13000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			22 => array('cod' => 53, 'cod_semir' => 63, 'desc' => 'Tractocamión de 2 ejes', 'desc_semir' => 'Semiremolque de 3 Ejes', 'nom_corto_conf' => '2S3', 'peso_max' => 41513, 'peso_min' => 50, 'gal_min' => 7000, 'gal_max' => 11000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			23 => array('cod' => 53, 'cod_semir' => 62, 'desc' => 'Tractocamión de 2 ejes', 'desc_semir' => 'Semiremolque de 2 Ejes', 'nom_corto_conf' => '2S2', 'peso_max' => 32800, 'peso_min' => 40, 'gal_min' => 7000, 'gal_max' => 11000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			24 => array('cod' => 53, 'cod_semir' => 61, 'desc' => 'Tractocamión de 2 ejes', 'desc_semir' => 'Semiremolque de 1 Eje', 'nom_corto_conf' => '2S1', 'peso_max' => 27765, 'peso_min' => 30, 'gal_min' => 7000, 'gal_max' => 11000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
			25 => array('cod' => 54, 'cod_semir' => 64, 'desc' => 'Tractocamión de 3 ejes', 'desc_semir' => 'Semiremolque de más de 4 ejes', 'nom_corto_conf' => '3S4', 'peso_max' => 54000, 'peso_min' => 70, 'gal_min' => 11000, 'gal_max' => 13000, 'cod_semir2' => NULL, 'nom_semir2' => NULL, 'desc_semir2' => NULL, 'ind_estado' => 1),
        ));
    }
}
