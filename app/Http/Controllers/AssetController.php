<?php

namespace InventarioCIP\Http\Controllers;

use InventarioCIP\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $assets = Asset::all();
            return response()->json($assets,200);
        }
        return view('assets.list');
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
            $asset = new Asset();
            $asset->nombre = $request->input('nombre');
            $provider->descripcion_general= $request->input('descripcion_general');

            $provider->save();

            return response()->json([ //respuesta http satisfactoria 
                "message"=>"Bien creado correctamente." 
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \InventarioCIP\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \InventarioCIP\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \InventarioCIP\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \InventarioCIP\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        //
    }
}
