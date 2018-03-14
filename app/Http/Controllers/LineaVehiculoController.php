<?php

namespace App\Http\Controllers;

use App\LineaVehiculo;
use Illuminate\Http\Request;
use Response;

class LineaVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(LineaVehiculo::get());
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
        $linea = LineaVehiculo::find($id);
        $linea->fill($request->all());
        $linea->save();
        
        return Response::json(array("msg" => "success"));
    }
}
