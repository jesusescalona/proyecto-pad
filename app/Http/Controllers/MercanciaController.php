<?php

namespace App\Http\Controllers;

use App\Mercancia;
use Illuminate\Http\Request;
use Response;

class MercanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Mercancia::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mercancia  $mercancia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mercancia = Mercancia::find($id);
        $mercancia->fill($request->all());
        $mercancia->save();
        
        return Response::json(array("msg" => "success"));
    }
}
