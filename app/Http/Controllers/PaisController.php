<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Departamento;
use App\Ciudad;
use Illuminate\Http\Request;
use Response;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Pais::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pais  $Pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pais = Pais::find($id);
        $pais->fill($request->all());
        
        $departamentos = Departamento::where('cod_paisxx_id', $pais->cod_paisxx)->get();

        foreach ($departamentos as $key => $value) {
            $dpto = Departamento::find($value->id);
            $dpto->ind_estado = $request->ind_estado;

            $ciudades = Ciudad::where('cod_depart_id', $dpto->cod_depart)->get();

            foreach ($ciudades as $key2 => $value2) {
                $cd = Ciudad::find($value2->id);
                $cd->ind_estado = $request->ind_estado;
                $cd->save();
            }

            $dpto->save();
        }

        $pais->save();

        return Response::json(array("msg" => "success"));
    }
}
