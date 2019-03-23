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
            $table->string('nombre');
            $table->string('descripcion_general');
            $table->string('imagen');
            $table->enum('categoria',array('equipamiento','mobiliario','software','inmueble','automovil','texto'));
            $table->enum('comprobante',array('factura','boleta','nota de venta','documento','otro'));
            $table->string('nro_comprobante');
            $table->string('nro_serie');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->string('material');
            $table->string('tipo_equipo');
            $table->string('memoria_ram');
            $table->string('procesador');
            $table->string('disco_duro');
            $table->string('velocidad');
            $table->string('placa');
            $table->string('nro_motor');
            $table->string('kilometraje');
            $table->string('cilindros');
            $table->string('tipo');
            $table->string('clase');
            $table->string('nro_escritura');
            $table->string('nombre_propietario');
            $table->string('direccion');
            $table->string('valor_libros');
            $table->enum('arrendado',array('si','no'));
            $table->string('contrato_arrendadamiento');
            $table->string('valor_arrendamiento');
            $table->string('valorizacion');
            $table->string('depreciacion');
            $table->string('nro_matricula_inmobiliaria');
            $table->string('avaluo_catastral');
            $table->string('nombre_programa');
            $table->string('fecha_instalacion');
            $table->string('tipo_software');
            $table->string('tipo_licencia');
            $table->string('version');
            $table->string('fabricante');
            $table->string('total_instaladas');
            $table->string('modalidad');
            $table->string('total_adquisiciones');
            $table->string('vida_util');
            $table->enum('garantia',array('si','no'));
            $table->string('tipo_garantia');
            $table->string('cantidad');
            $table->string('observaciones');
            $table->string('tipo_adquisicion');
            $table->string('nro_doc_adquisicion');
            $table->string('fecha_adquisicion');
            $table->string('precio_adquisicion');
            $table->enum('asegurado',array('si','no'));
            $table->string('forma_adquisicion');
            $table->string('autor');
            $table->string('titulo');
            $table->enum('tipo_libro',array('revista','tesis','libro','otro'));
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
