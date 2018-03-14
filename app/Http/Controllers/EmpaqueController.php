<?php

namespace App\Http\Controllers;

use App\Empaque;
use Illuminate\Http\Request;
use Response;

class EmpaqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Empaque::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empaque  $empaque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empaque = Empaque::find($id);
        $empaque->fill($request->all());
        $empaque->save();
        
        return Response::json(array("msg" => "success"));
    }
}
