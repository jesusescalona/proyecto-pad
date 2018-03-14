<?php

namespace App\Http\Controllers;

use App\CodificacionDeProducto;
use Illuminate\Http\Request;
use Response;

class CodificacionDeProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(CodificacionDeProducto::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CodificacionDeProducto  $codificacionDeProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $codificacion = CodificacionDeProducto::find($id);
        $codificacion->fill($request->all());
        $codificacion->save();
        
        return Response::json(array("msg" => "success"));
    }
}
