<?php

namespace InventarioCIP\Http\Controllers;

use InventarioCIP\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $providers = Location::all(); //Informacion almacenada de los proveedores
            return response()->json($locations, 200);
        }
        return view('locations.list');
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
            $location = new Location();
            $location->name = $request->input('name');
            $location->direccion_local = $request->input('direccion_local');
            $location->descripcion=$request->input('descripcion');
            $location->save();

            return response()->json([ //respuesta http satisfactoria 
                "message"=>"Ubicacion creada correctamente.",
                "location" => $location //key para decir lo que se almaceno  
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \InventarioCIP\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \InventarioCIP\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \InventarioCIP\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \InventarioCIP\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
