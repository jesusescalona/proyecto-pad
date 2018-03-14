<?php

namespace App\Http\Controllers;

use App\UnidadDeMedida;
use Illuminate\Http\Request;
use Response;

class UnidadDeMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(UnidadDeMedida::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadDeMedida  $unidadDeMedida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unidad = UnidadDeMedida::find($id);
        $unidad->fill($request->all());
        $unidad->save();
        
        return Response::json(array("msg" => "success"));
    }
}
