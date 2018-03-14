<?php

namespace App\Http\Controllers;

use App\ConfiguracionVehiculo;
use Illuminate\Http\Request;
use Response;

class ConfiguracionVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(ConfiguracionVehiculo::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConfiguracionVehiculo  $configuracionVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $configuracion = ConfiguracionVehiculo::find($id);
        $configuracion->fill($request->all());
        $configuracion->save();
        
        return Response::json(array("msg" => "success"));
    }
}
