<?php

namespace App\Http\Controllers;

use App\MarcaVehiculo;
use App\LineaVehiculo;
use Illuminate\Http\Request;
use Response;

class MarcaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(MarcaVehiculo::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MarcaVehiculo  $marcaVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca = MarcaVehiculo::find($id);
        $marca->fill($request->all());
        $lineas = LineaVehiculo::where('cod_marcax_id', $marca->cod_marcax)->get();

        foreach ($lineas as $key => $value) {
            $linea = LineaVehiculo::find($value->id);
            $linea->ind_estado = $request->ind_estado;
            $linea->save();
        }

        $marca->save();
        
        return Response::json(array("msg" => "success"));
    }
}
