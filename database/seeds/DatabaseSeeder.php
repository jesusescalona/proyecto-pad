<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(ColoresVehiculosTableSeeder::class);
        $this->call(MarcasVehiculosTableSeeder::class);
        $this->call(LineasVehiculosTableSeeder::class);
        $this->call(ConfiguracionesVehiculosTableSeeder::class);
        $this->call(MarcasSemiRemolquesTableSeeder::class);
        $this->call(EmpaquesTableSeeder::class);
        $this->call(CombinacionDeConfiguracionesTableSeeder::class);
        $this->call(CodificacionProductosTableSeeder::class);
        $this->call(CapitulosCodificacionProductosTableSeeder::class);
        $this->call(EmpresasAseguradorasTableSeeder::class);
        $this->call(TiposCarroceriasTableSeeder::class);
        $this->call(DiccionarioDeErroresTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(UnidadDeMedidaTableSeeder::class);
        $this->call(MercanciaTableSeeder::class);
        $this->call(ModulosTableSeeder::class);
    }
}
