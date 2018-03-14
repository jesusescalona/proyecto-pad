<?php

use Illuminate\Database\Seeder;

class UnidadDeMedidaTableSeeder extends Seeder
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
			0 => array('desc_uni' => 'Cajas', 'ind_estado' => 1),
			1 => array('desc_uni' => 'Galones', 'ind_estado' => 1),
			2 => array('desc_uni' => 'Kilos', 'ind_estado' => 1),
			3 => array('desc_uni' => 'Libras', 'ind_estado' => 1),
			4 => array('desc_uni' => 'Toneladas', 'ind_estado' => 1),
			5 => array('desc_uni' => 'Viaje', 'ind_estado' => 1)
		);

		foreach (array_chunk($array_records, 1000) as $records) {
			\DB::table('unidad_medida')->insert($records);
		}
    }
}
