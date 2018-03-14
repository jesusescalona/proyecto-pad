<?php

namespace App\Http\Controllers;

use App\DiccionarioDeErrores;
use Illuminate\Http\Request;
use Response;

class DiccionarioDeErroresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(DiccionarioDeErrores::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiccionarioDeErrores  $diccionarioDeErrores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $error = DiccionarioDeErrores::find($id);
        $error->fill($request->all());
        $error->save();
        
        return Response::json(array("msg" => "success"));
    }
}
