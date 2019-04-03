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
        if($request->ajax()){ //almacenando un bien
            $asset = new Asset();
            $asset->imagen = $request->input('imagen');
            $asset->categoria= $request->input('categoria');
            $asset->descripcion_general = $request->input('descripcion_general');
            $asset->fecha_adquisicion= $request->input('fecha_adquisicion');
            $asset->tipo_adquisicion = $request->input('tipo_adquisicion');
            $asset->total_adquisiciones= $request->input('total_adquisiciones');
            $asset->comprobante = $request->input('comprobante');
            $asset->precio_adquisicion= $request->input('precio_adquisicion');
            $asset->nro_doc_adquisicion = $request->input('nro_doc_adquisicion');
            $asset->marca= $request->input('marca');
            $asset->modelo = $request->input('modelo');
            $asset->nro_serie= $request->input('nro_serie');
            $asset->tipo_equipo = $request->input('tipo_equipo');
            $asset->vida_util= $request->input('vida_util');
            $asset->otro_equipo = $request->input('otro_equipo');
            $asset->detalles_equipo= $request->input('detalles_equipo');
            $asset->memoria_ram = $request->input('memoria_ram');
            $asset->procesador= $request->input('procesador');
            $asset->disco_duro= $request->input('disco_duro');
            $asset->velocidad = $request->input('velocidad');
            $asset->color= $request->input('color');
            $asset->material = $request->input('material');
            $asset->placa= $request->input('placa');
            $asset->tipo = $request->input('tipo');
            $asset->cilindros= $request->input('cilindros');
            $asset->nro_motor = $request->input('nro_motor');
            $asset->kilometraje= $request->input('kilometraje');
            $asset->clase = $request->input('clase');
            $asset->asegurado= $request->input('asegurado');
            $asset->nombre_programa= $request->input('nombre_programa');
            $asset->fecha_instalacion = $request->input('fecha_instalacion');
            $asset->tipo_software= $request->input('tipo_software');
            $asset->tipo_licencia = $request->input('tipo_licencia');
            $asset->total_instaladas= $request->input('total_instaladas');
            $asset->product_key = $request->input('product_key');
            $asset->nro_escritura= $request->input('nro_escritura');
            $asset->nro_mnombre_propietariootor = $request->input('nombre_propietario');
            $asset->valor_libros= $request->input('valor_libros');
            $asset->avaluo_catastral = $request->input('avaluo_catastral');
            $asset->depreciacion= $request->input('depreciacion');
            $asset->valorizacion= $request->input('valorizacion');
            $asset->arrendado = $request->input('arrendado');
            $asset->contrato_arrendadamiento= $request->input('contrato_arrendadamiento');
            $asset->valor_arrendamiento = $request->input('valor_arrendamiento');
            $asset->nro_matricula_inmobiliaria= $request->input('nro_matricula_inmobiliaria');
            $asset->direccion = $request->input('direccion');
            $asset->tipo_mobiliario= $request->input('tipo_mobiliario');
            $asset->tipo_libro = $request->input('tipo_libro');
            $asset->autor= $request->input('autor');
            $asset->titulo = $request->input('titulo');
            $asset->condicion= $request->input('condicion');
            $asset->observaciones= $request->input('observaciones');
            $asset->garantia = $request->input('garantia');
            $asset->tipo_garantia= $request->input('tipo_garantia');
            $asset->proveedor_id = $request->input('proveedor_id');

            $asset->save();

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
