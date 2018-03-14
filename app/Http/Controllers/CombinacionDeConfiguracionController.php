<?php

namespace App\Http\Controllers;

use App\CombinacionDeConfiguracion;
use Illuminate\Http\Request;
use Response;

class CombinacionDeConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(CombinacionDeConfiguracion::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CombinacionDeConfiguracion  $combinacionDeConfiguracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $combinacion = CombinacionDeConfiguracion::find($id);
        $combinacion->fill($request->all());
        $combinacion->save();
        
        return Response::json(array("msg" => "success"));
    }
}