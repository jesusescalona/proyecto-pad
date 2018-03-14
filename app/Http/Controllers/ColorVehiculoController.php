<?php

namespace App\Http\Controllers;

use App\ColorVehiculo;
use Illuminate\Http\Request;
use Response;

class ColorVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(ColorVehiculo::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColorVehiculo  $colorVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $color = ColorVehiculo::find($id);
        $color->fill($request->all());
        $color->save();
        
        return Response::json(array("msg" => "success"));
    }
}
