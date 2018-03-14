<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('base');
});

Route::group(['prefix' => 'admin'], function () {

	Route::resource('perfiles', 'PerfilController');
	    
    Route::resource('usuarios', 'UsuarioController');
    
    Route::resource('modulos', 'ModuloController');

	Route::resource('permisos', 'PermisoController');

	Route::resource('vehiculos', 'VehiculosController');

	Route::resource('remolques', 'RemolquesController');
		
	Route::group(['prefix' => 'rndc'], function () {

		Route::get('colores-vehiculos',array('as' => 'colores-vehiculos.index','uses' => 'ColorVehiculoController@index'));
	    Route::put('colores-vehiculos/{colores_vehiculo}',array('as' => 'colores-vehiculos.update','uses' => 'ColorVehiculoController@update'));

	    Route::get('marcas-vehiculos',array('as' => 'marcas-vehiculos.index','uses' => 'MarcaVehiculoController@index'));
	    Route::put('marcas-vehiculos/{marcas_vehiculo}',array('as' => 'marcas-vehiculos.update','uses' => 'MarcaVehiculoController@update'));

	    Route::get('lineas-vehiculos',array('as' => 'lineas-vehiculos.index','uses' => 'LineaVehiculoController@index'));
	    Route::put('lineas-vehiculos/{lineas_vehiculo}',array('as' => 'lineas-vehiculos.update','uses' => 'LineaVehiculoController@update'));

	    Route::get('configuraciones-vehiculos',array('as' => 'configuraciones-vehiculos.index','uses' => 'ConfiguracionVehiculoController@index'));
	    Route::put('configuraciones-vehiculos/{configuraciones_vehiculo}',array('as' => 'configuraciones-vehiculos.update','uses' => 'ConfiguracionVehiculoController@update'));

	    Route::get('marcas-semiremolques',array('as' => 'marcas-semiremolques.index','uses' => 'MarcaSemiremolqueController@index'));
	    Route::put('marcas-semiremolques/{marcas_semiremolque}',array('as' => 'marcas-semiremolques.update','uses' => 'MarcaSemiremolqueController@update'));

	    Route::get('empaques',array('as' => 'empaques.index','uses' => 'EmpaqueController@index'));
	    Route::put('empaques/{empaque}',array('as' => 'empaques.update','uses' => 'EmpaqueController@update'));

	    Route::get('combinacion-configuraciones',array('as' => 'combinacion-configuraciones.index','uses' => 'CombinacionDeConfiguracionController@index'));
	    Route::put('combinacion-configuraciones/{combinacion}',array('as' => 'combinacion-configuraciones.update','uses' => 'CombinacionDeConfiguracionController@update'));

	    Route::get('codificacion-productos',array('as' => 'codificacion-productos.index','uses' => 'CodificacionDeProductoController@index'));
	    Route::put('codificacion-productos/{codificacion}',array('as' => 'codificacion-productos.update','uses' => 'CodificacionDeProductoController@update'));

	    Route::get('capitulos-codificacion-productos',array('as' => 'capitulos-codificacion-productos.index','uses' => 'CapitulosCodificacionProductoController@index'));
	    Route::put('capitulos-codificacion-productos/{capitulo}',array('as' => 'capitulos-codificacion-productos.update','uses' => 'CapitulosCodificacionProductoController@update'));

	    Route::get('empresas-aseguradoras',array('as' => 'empresas-aseguradoras.index','uses' => 'EmpresaAseguradoraController@index'));
	    Route::put('empresas-aseguradoras/{aseguradora}',array('as' => 'empresas-aseguradoras.update','uses' => 'EmpresaAseguradoraController@update'));

	    Route::get('tipos-carrocerias',array('as' => 'tipos-carrocerias.index','uses' => 'TipoCarroceriaController@index'));
	    Route::put('tipos-carrocerias/{tipo}',array('as' => 'tipos-carrocerias.update','uses' => 'TipoCarroceriaController@update'));

	    Route::get('diccionario-errores',array('as' => 'diccionario-errores.index','uses' => 'DiccionarioDeErroresController@index'));
	    Route::put('diccionario-errores/{error}',array('as' => 'diccionario-errores.update','uses' => 'DiccionarioDeErroresController@update'));
	    
	    Route::group(['prefix' => 'division-politica'], function () {
	    	
	    	Route::get('paises',array('as' => 'paises.index','uses' => 'PaisController@index'));
	    	Route::put('paises/{id}',array('as' => 'paises.update','uses' => 'PaisController@update'));

			Route::get('departamentos',array('as' => 'departamentos.index','uses' => 'DepartamentoController@index'));
	    	Route::put('departamentos/{id}',array('as' => 'departamentos.update','uses' => 'DepartamentoController@update'));

	    	Route::get('ciudades',array('as' => 'ciudades.index','uses' => 'CiudadController@index'));
	    	Route::put('ciudades/{id}',array('as' => 'ciudades.update','uses' => 'CiudadController@update'));	    	
	    });

	    Route::get('unidad-de-medida',array('as' => 'unidad-de-medida.index','uses' => 'UnidadDeMedidaController@index'));
	    Route::put('unidad-de-medida/{id}',array('as' => 'unidad-de-medida.update','uses' => 'UnidadDeMedidaController@update'));

	    Route::get('mercancia',array('as' => 'mercancia.index','uses' => 'MercanciaController@index'));
	    Route::put('mercancia/{id}',array('as' => 'mercancia.update','uses' => 'MercanciaController@update'));
	});
});