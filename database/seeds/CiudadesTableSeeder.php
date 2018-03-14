<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
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
			0 => array('cod_depart_id' => 1, 'cod_ciudad' => 1, 'nom_ciudad' => 'Ciudad1', 'abr_ciudad' => 'cd1', 'cod_latitu' => NULL, 'cod_longit' => NULL, 'nom_ubicax' => NULL, 'ind_danexx' => 1, 'val_icaxxx' => '12.12', 'cod_people' => NULL, 'ind_metrop' => 12, 'usr_creaci' => 'SYSTEM', 'usr_modifi' => NULL, 'ind_estado' => 1),
        );

		foreach (array_chunk($array_records, 1000) as $records) {
			\DB::table('ciudades')->insert($records);
		}
    }
}
