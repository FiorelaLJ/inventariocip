<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('imagen');

            // $table->string('nombre');
            $table->enum('categoria',array('equipamiento','mobiliario','software','inmueble','automovil','texto'));
            $table->string('descripcion_general');
            $table->date('fecha_adquisicion');
            $table->enum('tipo_adquisicion',array('compra','donacion','traspaso','otro'));
            $table->string('total_adquisiciones');
            
            //si es compra:
            $table->enum('comprobante',array('factura','boleta','nota de venta','documento','otro'));
            $table->string('nro_comprobante');
            $table->string('precio_adquisicion');

            //si es donacion o traspaso
            $table->string('nro_doc_adquisicion');
            
            //Equipos
            $table->string('marca'); //para automoviles 
            $table->string('modelo');
            $table->string('nro_serie'); //para automoviles y software tambien
            $table->enum('tipo_equipo',array('pc_fija','otro'));
            $table->string('vida_util');
            //si es 'otro'
            $table->string('otro_equipo');
            $table->string('detalles_equipo');
            //si es computadora
            $table->string('memoria_ram');
            $table->string('procesador');
            $table->string('disco_duro');
            $table->string('velocidad');

            //otras caracteristicas para equipo, mueble y automovil
            $table->string('color');
            $table->string('material');
            
            
            //Automoviles
            $table->string('placa');
            $table->string('tipo');
            $table->string('cilindros');
            $table->string('nro_motor');
            $table->string('kilometraje');

            $table->string('clase');
            $table->enum('asegurado',array('si','no'));

            //Software
            $table->string('nombre_programa');
            $table->date('fecha_instalacion');
            $table->string('tipo_software');
            $table->string('tipo_licencia');
            $table->string('total_instaladas');
            $table->string('version');
            $table->string('product_key');

            //Inmuebles
            $table->string('nro_escritura');
            $table->string('nombre_propietario');

            $table->string('valor_libros');
            $table->string('avaluo_catastral');
            $table->string('depreciacion');
            $table->string('valorizacion');
            $table->enum('arrendado',array('si','no'));
            $table->enum('contrato_arrendadamiento',array('si','no'));
            $table->string('valor_arrendamiento');

            $table->string('nro_matricula_inmobiliaria');
            $table->string('direccion');

            //Mueble
            $table->string('tipo_mobiliario');

            //Libros
            $table->enum('tipo_libro',array('revista','tesis','libro','otro'));
            $table->string('autor');
            $table->string('titulo');
            
            //para muebles,inmuebles,equipos,automoviles,software,textos
            $table->enum('condicion',array('nuevo','malogrado','mantenimiento'));
            $table->enum('estado',array('en_uso','desuso','prestamo','almacenado','vencido','venta','ocupado_por_terceros'));
            $table->string('observaciones');
            $table->enum('garantia',array('si','no'));
            $table->string('tipo_garantia'); //excepto textos

            //proveedor foreing
            $table->bigInteger('proveedor_id')->unsigned();
            $table->timestamps();

           $table->foreign('proveedor_id')->references('id')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
