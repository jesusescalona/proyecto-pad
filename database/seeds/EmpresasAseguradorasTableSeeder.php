<?php

use Illuminate\Database\Seeder;

class EmpresasAseguradorasTableSeeder extends Seeder
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
			0 => array('nit_aseguradora' => 8000000921, 'nombre_aseguradora' => 'SEGUROS BETA S.A. CORREDORES DE SEGUROS', 'ind_estado' => 1),
			1 => array('nit_aseguradora' => 9008149161, 'nombre_aseguradora' => 'BERKLEY INTERNATIONAL SEGUROS COLOMBIA S.A.', 'ind_estado' => 1),
			2 => array('nit_aseguradora' => 860026182, 'nombre_aseguradora' => 'ALLIANZ S.A.', 'ind_estado' => 1),
			3 => array('nit_aseguradora' => 8600377079, 'nombre_aseguradora' => 'CHARTIS SEGUROS COLOMBIA S.A', 'ind_estado' => 1),
			4 => array('nit_aseguradora' => 8600274041, 'nombre_aseguradora' => 'COMPAÑIA CENTRAL DE SEGUROS', 'ind_estado' => 1),
			5 => array('nit_aseguradora' => 9002004353, 'nombre_aseguradora' => 'CARDIF COLOMBIA SEGUROS GENERALES S.A.', 'ind_estado' => 1),
			6 => array('nit_aseguradora' => 9002004353, 'nombre_aseguradora' => 'CARDIF COLOMBIA SEGUROS GENERALES', 'ind_estado' => 1),
			7 => array('nit_aseguradora' => 8917000379, 'nombre_aseguradora' => 'MAPFRE SEGUROS GENERALES DE COLOMBIA S. A.', 'ind_estado' => 1),
			8 => array('nit_aseguradora' => 8909034079, 'nombre_aseguradora' => 'COMPAÑÍA SURAMERICANA DE SEGUROS S. A.', 'ind_estado' => 1),
			9 => array('nit_aseguradora' => 8903004658, 'nombre_aseguradora' => 'CONDOR S. A. COMPAÑÍA DE SEGUROS GENERALES', 'ind_estado' => 1),
			10 => array('nit_aseguradora' => 8903003832, 'nombre_aseguradora' => 'GRUPO COLMENA CAPITALIZADORA COLMENA S. A.', 'ind_estado' => 1),
			11 => array('nit_aseguradora' => 8605246546, 'nombre_aseguradora' => 'ASEGURADORA SOLIDARIA DE COLOMBIA', 'ind_estado' => 1),
			12 => array('nit_aseguradora' => 8600703349, 'nombre_aseguradora' => 'COMPAÑÍA ASEGURADORA DE FIANZAS S. A. CONFIANZA', 'ind_estado' => 1),
			13 => array('nit_aseguradora' => 8600399880, 'nombre_aseguradora' => 'LIBERTY SEGUROS S. A.', 'ind_estado' => 1),
			14 => array('nit_aseguradora' => 8600382991, 'nombre_aseguradora' => 'PAN AMERICAN DE COLOMBIA COMPAÑÍA DE SEGUROS DE VIDA', 'ind_estado' => 1),
			15 => array('nit_aseguradora' => 8600377079, 'nombre_aseguradora' => 'AIG SEGUROS GENERALES S. A.', 'ind_estado' => 1),
			16 => array('nit_aseguradora' => 8600370136, 'nombre_aseguradora' => 'COMPAÑÍA MUNDIAL DE SEGUROS', 'ind_estado' => 1),
			17 => array('nit_aseguradora' => 8600345205, 'nombre_aseguradora' => 'CHUBB DE COLOMBIA COMPAÑIA DE SEGUROS S.A.', 'ind_estado' => 1),
			18 => array('nit_aseguradora' => 8600319798, 'nombre_aseguradora' => 'SEGUROS DE VIDA ALFA S. A. SEGUROS GENERALES', 'ind_estado' => 1),
			19 => array('nit_aseguradora' => 8600284155, 'nombre_aseguradora' => 'LA EQUIDAD SEGUROS GENERALES ORGANISMO COOPERATIVO', 'ind_estado' => 1),
			20 => array('nit_aseguradora' => 8600265186, 'nombre_aseguradora' => 'ACE SEGUROS S.A.', 'ind_estado' => 1),
			21 => array('nit_aseguradora' => 8600261825, 'nombre_aseguradora' => 'ALLIANZ SEGUROS S.A.', 'ind_estado' => 1),
			22 => array('nit_aseguradora' => 8600221375, 'nombre_aseguradora' => 'COMPAÑÍA DE SEGUROS DE VIDA AURORA S. A.', 'ind_estado' => 1),
			23 => array('nit_aseguradora' => 8600111536, 'nombre_aseguradora' => 'POSITIVA COMPAÑÍA DE SEGUROS (ANTIGUA PREVISORA)', 'ind_estado' => 1),
			24 => array('nit_aseguradora' => 8600095786, 'nombre_aseguradora' => 'SEGUROS DEL ESTADO S.A. SEGUROS GENERALES', 'ind_estado' => 1),
			25 => array('nit_aseguradora' => 8600091959, 'nombre_aseguradora' => 'SEGUREXPO DE COLOMBIA S. A. ASEGURADORA DE CREDITO', 'ind_estado' => 1),
			26 => array('nit_aseguradora' => 8600048756, 'nombre_aseguradora' => 'GENERALI COLOMBIA SEGUROS GENERALES S.A.', 'ind_estado' => 1),
			27 => array('nit_aseguradora' => 8600025340, 'nombre_aseguradora' => 'QBE SEGUROS S.A', 'ind_estado' => 1),
			28 => array('nit_aseguradora' => 8600025279, 'nombre_aseguradora' => 'AGRICOLA DE SEGUROS S. A.', 'ind_estado' => 1),
			29 => array('nit_aseguradora' => 8600025057, 'nombre_aseguradora' => 'ROYAL Y SUN ALLIANCE SEGUROS (COLOMBIA) S. A.', 'ind_estado' => 1),
			30 => array('nit_aseguradora' => 8600024002, 'nombre_aseguradora' => 'LA PREVISORA S. A. COMPAÑÍA DE SEGUROS', 'ind_estado' => 1),
			31 => array('nit_aseguradora' => 8600023985, 'nombre_aseguradora' => 'AIG COLOMBIA SEGUROS DE VIDA S. A.', 'ind_estado' => 1),
			32 => array('nit_aseguradora' => 8600021846, 'nombre_aseguradora' => 'SEGUROS COLPATRIA S.A.', 'ind_estado' => 1),
			33 => array('nit_aseguradora' => 8600021807, 'nombre_aseguradora' => 'SEGUROS COMERCIALES BOLÍVAR S.A.', 'ind_estado' => 1),
			34 => array('nit_aseguradora' => 8110191907, 'nombre_aseguradora' => 'MAPFRE CREDISEGURO S. A.', 'ind_estado' => 1),
			35 => array('nit_aseguradora' => 8002261753, 'nombre_aseguradora' => 'COLMENA RIESGOS PROFESIONALES COLMENA', 'ind_estado' => 1),
			36 => array('nit_aseguradora' => 8002260984, 'nombre_aseguradora' => 'BBVA SEGUROS COLOMBIA S. A. S', 'ind_estado' => 1),

		);

		foreach (array_chunk($array_records, 100) as $records) {
			\DB::table('empresas_aseguradoras')->insert($records);
		}
    }
}
