<?php

namespace App\Http\Controllers;

use App\MarcaSemiremolque;
use Illuminate\Http\Request;
use Response;

class MarcaSemiremolqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(MarcaSemiremolque::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MarcaSemiremolque  $marcaSemiremolque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca = MarcaSemiremolque::find($id);
        $marca->fill($request->all());
        $marca->save();
        
        return Response::json(array("msg" => "success"));
    }
}
