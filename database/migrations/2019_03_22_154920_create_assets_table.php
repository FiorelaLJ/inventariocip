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

            $table->string('imagen')->nullable();
            $table->enum('categoria',array('equipamiento','mobiliario','software','inmueble','automovil','texto'));
            $table->string('num_serie')->nullable();
            $table->string('material')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('color')->nullable();
            $table->string('procesador')->nullable();
            $table->string('disco_duro')->nullable();
            $table->string('ram')->nullable();
            $table->string('product_key')->nullable();
            $table->string('fabricante_software')->nullable();
            $table->string('licencia_software')->nullable();
            $table->string('clase_automovil')->nullable();
            $table->string('placa_automovil')->nullable();
            $table->string('tipo_texto')->nullable();
            $table->string('titulo_texto')->nullable();
            $table->string('autor_texto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('nro_matricula_inmobiliaria')->nullable();
            $table->string('propietario_escritura')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('descripcion_general')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('tipo_adquisicion')->nullable();
            $table->string('nro_doc_adquisicion')->nullable();
            $table->string('fecha_adquisicion')->nullable();
            $table->string('precio_adquisicion')->nullable();
            $table->string('tipo_comprobante')->nullable();
            $table->string('num_comprobante')->nullable();
            $table->string('tipo_seguridad')->nullable();
            $table->string('descripcion_seguridad')->nullable();
            // $table->string('')->nullable();
            // $table->string('')->nullable();
            // $table->string('')->nullable();
            // $table->string('descripcion_general');
            // $table->date('fecha_adquisicion')->nullable();
            // $table->enum('tipo_adquisicion',array('compra','donacion','traspaso','otro'));
            // $table->string('total_adquisiciones')->nullable();
            
            //si es compra:
            // $table->enum('comprobante',array('factura','boleta','nota de venta','documento','otro'))->nullable();
            // $table->string('nro_comprobante')->nullable();
            // $table->string('precio_adquisicion')->nullable();

            //si es donacion o traspaso
            // $table->string('nro_doc_adquisicion')->nullable();
            
            //Equipos
            // $table->string('marca')->nullable(); //para automoviles 
            // $table->string('modelo')->nullable();
            // $table->string('nro_serie')->nullable(); //para automoviles y software tambien
            // $table->enum('tipo_equipo',array('pc_fija','otro'))->nullable();
            // $table->string('vida_util')->nullable();
            //si es 'otro'
            // $table->string('otro_equipo')->nullable();
            // $table->string('detalles_equipo')->nullable();

            //si es computadora
            // $table->string('memoria_ram')->nullable();
            // $table->string('procesador')->nullable();
            // $table->string('disco_duro')->nullable();
            // $table->string('velocidad')->nullable();

            //otras caracteristicas para equipo, mueble y automovil
            // $table->string('color')->nullable();
            // $table->string('material')->nullable();
            
            
            //Automoviles
            // $table->string('placa')->nullable();
            // $table->string('tipo')->nullable();
            // $table->string('cilindros')->nullable();
            // $table->string('nro_motor')->nullable();
            // $table->string('kilometraje')->nullable();

            // $table->string('clase')->nullable();
            // $table->enum('asegurado',array('si','no'))->nullable();

            //Software
            // $table->string('nombre_programa')->nullable();
            // $table->date('fecha_instalacion')->nullable();
            // $table->string('tipo_software')->nullable();
            // $table->string('tipo_licencia')->nullable();
            // $table->string('total_instaladas')->nullable();
            // $table->string('version')->nullable();
            // $table->string('product_key')->nullable();

            //Inmuebles
            // $table->string('nro_escritura')->nullable();
            // $table->string('nombre_propietario')->nullable();

            // $table->string('valor_libros')->nullable();
            // $table->string('avaluo_catastral')->nullable();
            // $table->string('depreciacion')->nullable();
            // $table->string('valorizacion')->nullable();
            // $table->enum('arrendado',array('si','no'))->nullable();
            // $table->enum('contrato_arrendadamiento',array('si','no'))->nullable();
            // $table->string('valor_arrendamiento')->nullable();

            // $table->string('nro_matricula_inmobiliaria')->nullable();
            // $table->string('direccion')->nullable();

            //Mueble
            // $table->string('tipo_mobiliario')->nullable();

            //Libros
            // $table->enum('tipo_libro',array('revista','tesis','libro','otro'))->nullable();
            // $table->string('autor')->nullable();
            // $table->string('titulo')->nullable();
            
            //para muebles,inmuebles,equipos,automoviles,software,textos
            // $table->enum('condicion',array('nuevo','malogrado','mantenimiento'))->nullable();
            // $table->enum('estado',array('en_uso','desuso','prestamo','almacenado','vencido','venta','ocupado_por_terceros'))->nullable();
            // $table->string('observaciones')->nullable();
            // $table->enum('garantia',array('si','no'))->nullable();
            // $table->string('tipo_garantia')->nullable(); //excepto textos

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
