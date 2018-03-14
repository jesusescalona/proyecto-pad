<?php

use Illuminate\Database\Seeder;

class TiposCarroceriasTableSeeder extends Seeder
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
			0 => array('cod_carroceria' => 29, 'desc_carroceria' => 'BOMBA', 'ind_estado' => 1),
			1 => array('cod_carroceria' => 813, 'desc_carroceria' => 'PLATAFORMA', 'ind_estado' => 1),
			2 => array('cod_carroceria' => 484, 'desc_carroceria' => 'CARROTALLER', 'ind_estado' => 1),
			3 => array('cod_carroceria' => 512, 'desc_carroceria' => 'CAMPAMENTO', 'ind_estado' => 1),
			4 => array('cod_carroceria' => 33, 'desc_carroceria' => 'Panel', 'ind_estado' => 1),
			5 => array('cod_carroceria' => 69, 'desc_carroceria' => 'CAMABAJA', 'ind_estado' => 1),
			6 => array('cod_carroceria' => 217, 'desc_carroceria' => 'PLANCHON', 'ind_estado' => 1),
			7 => array('cod_carroceria' => 18, 'desc_carroceria' => 'NIÑERA', 'ind_estado' => 1),
			8 => array('cod_carroceria' => 16, 'desc_carroceria' => 'GRÚA', 'ind_estado' => 1),
			9 => array('cod_carroceria' => 14, 'desc_carroceria' => 'HORMIGONERO', 'ind_estado' => 1),
			10 => array('cod_carroceria' => 10, 'desc_carroceria' => 'ESTIBAS', 'ind_estado' => 1),
			11 => array('cod_carroceria' => 231, 'desc_carroceria' => 'PORTACONTENEDORES', 'ind_estado' => 1),
			12 => array('cod_carroceria' => 218, 'desc_carroceria' => 'REPARTO', 'ind_estado' => 1),
			13 => array('cod_carroceria' => 6, 'desc_carroceria' => 'PLATON', 'ind_estado' => 1),
			14 => array('cod_carroceria' => 5, 'desc_carroceria' => 'TOLVA', 'ind_estado' => 1),
			15 => array('cod_carroceria' => 4, 'desc_carroceria' => 'VOLCO', 'ind_estado' => 1),
			16 => array('cod_carroceria' => 3, 'desc_carroceria' => 'TANQUE', 'ind_estado' => 1),
			17 => array('cod_carroceria' => 2, 'desc_carroceria' => 'FURGÓN', 'ind_estado' => 1),
			18 => array('cod_carroceria' => 1, 'desc_carroceria' => 'ESTACAS', 'ind_estado' => 1),
			19 => array('cod_carroceria' => 0, 'desc_carroceria' => 'S.R.S', 'ind_estado' => 1),

		);

		foreach (array_chunk($array_records, 1000) as $records) {
			\DB::table('tipos_carrocerias')->insert($records);
		}
    }
}
