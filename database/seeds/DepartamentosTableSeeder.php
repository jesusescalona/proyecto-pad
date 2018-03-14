<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
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
			0 => array('cod_paisxx_id' => 1, 'cod_depart' => 1, 'nom_depart' => 'Departamento1', 'abr_depart' => 'dp1', 'usr_creaci' => 'SYSTEM', 'usr_modifi' => NULL, 'ind_estado' => 1),
        );

		foreach (array_chunk($array_records, 1000) as $records) {
			\DB::table('departamentos')->insert($records);
		}
    }
}
