<?php

namespace App\Http\Controllers;

use App\Vehiculos;
use App\Pais;
use App\Departamento;
use App\Ciudad;
use App\MarcaVehiculo;
use App\LineaVehiculo;
use App\TipoCarroceria;
use App\ConfiguracionVehiculo;
use App\EmpresaAseguradora;
use App\ColorVehiculo;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Vehiculos::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Response::json(Pais::get());
        $deptos = Response::json(Departamento::get());
        $ciudades = Response::json(Ciudad::get());
        $marcas_veh = Response::json(MarcaVehiculo::get());
        $lineas_veh = Response::json(LineaVehiculo::get());
        $carrocerias = Response::json(TipoCarroceria::get());
        $configuraciones = Response::json(ConfiguracionVehiculo::get());
        $aseguradoras = Response::json(EmpresaAseguradora::get());
        $colores = Response::json(ColorVehiculo::get());

        return array('paises' => $paises, 'departamentos' => $deptos, 'ciudades' => $ciudades, 'marcas_veh' => $marcas_veh, 'lineas_veh' => $lineas_veh, 'carrocerias' => $carrocerias, 'configuraciones' => $configuraciones, 'aseguradoras' => $aseguradoras, 'colores' => $colores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculos($request->all());
        $vehiculo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculos::find($id);
        $vehiculo->fill($request->all());
        $vehiculo->save();
        
        return Response::json(array("msg" => "success"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($vehiculos = Vehiculos::find($id)){
            $vehiculos->delete();
            $msg = "Success";
        }else{
            $msg = "Fail";
        }
        return response()->json(["msg" => $msg]);
    }
}
