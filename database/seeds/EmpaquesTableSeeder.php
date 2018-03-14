<?php

use Illuminate\Database\Seeder;

class EmpaquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('empaques')->insert(array (
			0 => array('cod_emp' => 19, 'desc_emp' => 'Carga Estibada', 'desc_emp_completa' => 'Carga Estibada', 'def_emp' => 'Aplica cuando se transportan mercancías estibadas en grandes bultos sobre plataformas, con soportes y barandas para acondicionarlas y protegerlas mejor, facilitando la manipulación de la carga.', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			1 => array('cod_emp' => 18, 'desc_emp' => 'N.A.', 'desc_emp_completa' => 'No Aplica', 'def_emp' => 'Se utiliza cuando el producto a transportar sean automóviles, animales o maquinaria', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			2 => array('cod_emp' => 17, 'desc_emp' => 'Varios', 'desc_emp_completa' => 'Varios', 'def_emp' => 'Aplica cuando en un mismo viaje van varios tipos de productos con diferentes empaques.', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			3 => array('cod_emp' => 15, 'desc_emp' => 'Granel Sólido', 'desc_emp_completa' => 'Granel Sólido', 'def_emp' => 'Es toda carga sólida, transportada en forma masiva, homogénea, sin empaque, cuya manipulación usual no deba realizarse por unidades.', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			4 => array('cod_emp' => 12, 'desc_emp' => 'Cilindros', 'desc_emp_completa' => 'Cilindros', 'def_emp' => 'Recipiente utilizado para almacenar y transportar gases, con capacidad entre 5 y 46 kilogramos (kg) puede ser metálico o de construcción compuesta.', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			5 => array('cod_emp' => 4, 'desc_emp' => 'Bulto', 'desc_emp_completa' => 'Bulto', 'def_emp' => 'Es toda unidad de embalaje independiente y no agrupada de mercancía acondicionada para el transporte, como bidón, saco, tonel bolsa, guacales.', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			6 => array('cod_emp' => 6, 'desc_emp' => 'Granel Líquido', 'desc_emp_completa' => 'Granel Líquido', 'def_emp' => 'Es toda carga líquida, transportada en forma masiva, homogénea, sin empaque, cuya manipulación usual no deba realizarse por unidades.', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
			7 => array('cod_emp' => 9, 'desc_emp' => '1 C 40 pies (Contenedor)', 'desc_emp_completa' => 'Un contenedor de 40 pies', 'def_emp' => 'Recipiente de carga resistente para permitir su reiterada reutilización, concebido especialmente para facilitar el transporte de las mercancías mediante uno o varios modos de transporte, posee una dimensión normalizada de 40 pies (12m.)', 'peso_vacio_min' => 2200, 'peso_vacio_max' => 6500, 'ind_estado' => 1),
			8 => array('cod_emp' => 8, 'desc_emp' => '2 C 20 pies (Contenedor)', 'desc_emp_completa' => 'Dos contenedores de 20 pies', 'def_emp' => 'Es un recipiente de carga resistente para permitir su reiterada reutilización, concebido especialmente para facilitar el transporte de las mercancías mediante uno o varios modos de transporte, posee una dimensión normalizada de 20 pies (6m.).', 'peso_vacio_min' => 3600, 'peso_vacio_max' => 8000, 'ind_estado' => 1),
			9 => array('cod_emp' => 7, 'desc_emp' => '1 C 20 pies (Contenedor)', 'desc_emp_completa' => 'Un contenedor de 20 pies', 'def_emp' => 'Es un recipiente de carga resistente para permitir su reiterada reutilización, concebido especialmente para facilitar el transporte de las mercancías mediante uno o varios modos de transporte, posee una dimensión normalizada de 20 pies (6m)', 'peso_vacio_min' => 1800, 'peso_vacio_max' => 4000, 'ind_estado' => 1),
			10 => array('cod_emp' => 0, 'desc_emp' => 'Paquetes', 'desc_emp_completa' => 'Paquetes', 'def_emp' => 'Carga separada en bultos y el peso de cada bulto debe ser mayor a', 'peso_vacio_min' => 0, 'peso_vacio_max' => 0, 'ind_estado' => 1),
		));
    }
}
