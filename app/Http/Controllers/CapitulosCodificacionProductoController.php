<?php

namespace App\Http\Controllers;

use App\CapitulosCodificacionProducto;
use Illuminate\Http\Request;
use Response;

class CapitulosCodificacionProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(CapitulosCodificacionProducto::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CapitulosCodificacionProducto  $capituloCodificacionDeProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $capitulo = CapitulosCodificacionProducto::find($id);
        $capitulo->fill($request->all());
        $capitulo->save();
        
        return Response::json(array("msg" => "success"));
    }
}
