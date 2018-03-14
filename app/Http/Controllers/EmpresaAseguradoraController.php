<?php

namespace App\Http\Controllers;

use App\EmpresaAseguradora;
use Illuminate\Http\Request;
use Response;

class EmpresaAseguradoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(EmpresaAseguradora::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmpresaAseguradora  $empresaAseguradora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aseguradora = EmpresaAseguradora::find($id);
        $aseguradora->fill($request->all());
        $aseguradora->save();
        
        return Response::json(array("msg" => "success"));
    }
}
