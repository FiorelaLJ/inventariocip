<?php

namespace InventarioCIP\Http\Controllers;

use InventarioCIP\Provider;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $providers = Provider::all(); //Informacion almacenada de los proveedores
            return response()->json($providers, 200);
        }
        return view('providers.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){ //almacenando un proveedor
            $provider = new Provider();
            $provider->razon_social = $request->input('razon_social');
            $provider->ruc= $request->input('ruc');
            $provider->direccion=$request->input('direccion');
            $provider->telefono=$request->input('telefono');
            $provider->email=$request->input('email');

            $provider->save();

            return response()->json([ //respuesta http satisfactoria 
                "message"=>"Proveedor creado correctamente.",
                "provider" => $provider //key para decir lo que se almaceno  
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \InventarioCIP\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \InventarioCIP\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \InventarioCIP\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \InventarioCIP\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        //
    }
}
