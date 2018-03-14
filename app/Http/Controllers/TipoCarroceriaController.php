<?php

namespace App\Http\Controllers;

use App\TipoCarroceria;
use Illuminate\Http\Request;
use Response;

class TipoCarroceriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(TipoCarroceria::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoCarroceria  $tipoCarroceria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $carroceria = TipoCarroceria::find($id);
        $carroceria->fill($request->all());
        $carroceria->save();
        
        return Response::json(array("msg" => "success"));
    }
}
