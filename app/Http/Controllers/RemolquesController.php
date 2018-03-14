<?php

namespace App\Http\Controllers;

use App\Remolques;
use App\Pais;
use App\MarcaSemiremolque;
use App\ConfiguracionVehiculo;
use App\EmpresaAseguradora;
use App\ColorVehiculo;
use Illuminate\Http\Request;

class RemolquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Remolques::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Response::json(Pais::get());
        $marcas_rem = Response::json(MarcaSemiremolque::get());
        $carrocerias = Response::json(TipoCarroceria::get());
        $configuraciones = Response::json(ConfiguracionVehiculo::get());
        $aseguradoras = Response::json(EmpresaAseguradora::get());
        $colores = Response::json(ColorVehiculo::get());
        
        return array('paises' => $paises, 'marcas_rem' => $marcas_rem, 'carrocerias' => $carrocerias, 'configuraciones' => $configuraciones, 'aseguradoras' => $aseguradoras, 'colores' => $colores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $remolque = new Remolques($request->all());
        $remolque->save();
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
        $remolque = Remolques::find($id);
        $remolque->fill($request->all());
        $remolque->save();
        
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
        if($remolque = Remolques::find($id)){
            $remolque->delete();
            $msg = "Success";
        }else{
            $msg = "Fail";
        }
        return response()->json(["msg" => $msg]);
    }
}
