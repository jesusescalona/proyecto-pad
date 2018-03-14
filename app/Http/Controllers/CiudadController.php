<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;
use Response;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Ciudad::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudad  $Ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ciudad = Ciudad::find($id);
        $ciudad->fill($request->all());
        $ciudad->save();
        
        return Response::json(array("msg" => "success"));
    }
}
