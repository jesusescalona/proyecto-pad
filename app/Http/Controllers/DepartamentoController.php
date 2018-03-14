<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Ciudad;
use Illuminate\Http\Request;
use Response;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Departamento::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dpto = Departamento::find($id);
        $dpto->fill($request->all());

        $ciudades = Ciudad::where('cod_depart_id', $dpto->cod_depart)->get();

        foreach ($ciudades as $key => $value) {
            $cd = Ciudad::find($value->id);
            $cd->ind_estado = $request->ind_estado;
            $cd->save();
        }

        $dpto->save();

        return Response::json(array("msg" => "success"));
    }
}
