<template>
    <div class="modal fade" id="addAsset" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalAssets">Agregar Bien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="saveAsset">
                        <div class="form-group">
                            <label for="">Categoria del Bien</label>
                                <input type="Radio" name="categoria" value="equipamiento" v-on:click="mos_equipamiento" required >Equipo 
                                <input type="Radio" name="categoria" value="mobiliario" v-on:click="mos_mobiliario" required>Mobiliario
                                <input type="Radio" name="categoria" value="software" v-on:click="mos_software" required>Software
                                <input type="Radio" name="categoria" value="inmueble" v-on:click="mos_inmueble" required>Inmueble 
                                <input type="Radio" name="categoria" value="automovil" v-on:click="mos_automovil" required>Automovil
                                <input type="Radio" name="categoria" value="texto" v-on:click="mos_texto" required>Texto
                        </div>
                        <div class="form-group">
                            <label>Descripcion General</label>
                            <input type="text" class="form-control" placeholder="Describa el producto" v-model="descripcion_general">
                        </div>
                        <!-- <div class="form-group">
                            <label>Fecha de Adquisicion</label>
                            <input type="text" class="form-control" data-provide="datepicker"  v-model="fecha_adquision">
                        </div> -->
                        <div class="form-group">
                            <label for="">Tipo de Adquisicion </label>
                            <input type="Radio" name="tipo_adquisicion" value="compra" v-on:click="mos_compra" required>Compra
                            <input type="Radio" name="tipo_adquisicion" value="donacion" v-on:click="mos_donacion" required>Donacion
                            <input type="Radio" name="tipo_adquisicion" value="traspaso" v-on:click="mos_donacion"  required>Traspaso 
                            <input type="Radio" name="tipo_adquisicion" value="otro" v-on:click="mos_donacion"  required>Otro
                        </div>
                        <div v-if="mostrar_com">
                            <div class="form-group">
                                <label for="">Tipo de Comprobante </label>
                                <input type="Radio" name="comprobante" value="factura" required>Factura
                                <input type="Radio" name="comprobante" value="boleta" required>Boleta
                                <input type="Radio" name="comprobante" value="nota de venta" required>Nota de Venta 
                                <input type="Radio" name="comprobante" value="documento" required>Documento
                                <input type="Radio" name="comprobante" value="otro" required>Otro
                            </div>                            
                            <div class="form-group">
                                    <label>Numero de Comprobante</label> 
                                    <input type="text" class="form-control" placeholder="Digite el numero de comprobante" v-model="nro_comprobante">
                            </div>
                            <div class="form-group">
                                    <label>Precio de Adquisicion</label> 
                                    <input type="text" class="form-control" placeholder="Digite el precio de adquisicion" v-model="precio_adquisicion">
                            </div>
                        </div>

                        <div v-if="mostrar_don">
                            <div class="form-group">
                                <label>Numero de documento de Adquisicion</label>
                                <input type="text" class="form-control" placeholder="Ingrese el numero del documento de adquisicion" v-model="nro_doc_adquisicion">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Cantidad de Adquisiciones</label>
                            <input type="text" class="form-control" placeholder="Ingrese el total de adquisiciones" v-model="total_adquisiciones">
                        </div>

                        
                        <div class="form-group" v-if="mostrar_eq||mostrar_aut">
                            <label>Marca</label> 
                            <input type="text" class="form-control" placeholder="Marca del bien" v-model="marca">
                        </div>
                        <div class="form-group" v-if="mostrar_eq||mostrar_aut">
                            <label>Modelo</label> 
                            <input type="text" class="form-control" placeholder="Modelo del bien" v-model="modelo">
                        </div>
                        <div class="form-group" v-if="mostrar_eq||mostrar_aut||mostrar_soft">
                            <label>Numero de Serie</label> 
                            <input type="text" class="form-control" placeholder="Numero de Serie del bien" v-model="nro_serie">
                        </div>

                        <!-- EQUIPOS -->
                        
                        <div v-if="mostrar_eq">
                            <div class="form-group">
                                <label>Vida Util</label> 
                                <input type="text" class="form-control" placeholder="Vida Util del equipo" v-model="vida_util">
                            </div>
                            
                            <div class="form-group">
                                <input type="Radio" name="tipo_equipo" value="pc_fija" v-on:click="mos_pc" required>PC-fija
                                <input type="Radio" name="tipo_equipo" value="otro" v-on:click="mos_otro_equipo"  required>Otro
                            </div>
                            <div v-if="mostrar_pc">
                                <div class="form-group">
                                    <label>Memoria RAM</label>
                                    <input type="text" class="form-control" placeholder="Ingrese la cantidad de memoria RAM" v-model="memoria_ram">
                                </div>
                                <div class="form-group">
                                    <label>Procesador</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el procesasor" v-model="procesador">
                                </div>
                                <div class="form-group">
                                    <label>Disco Duro</label>
                                    <input type="text" class="form-control" placeholder="Ingrese la cantidad de disco duro y su tipo" v-model="disco_duro">
                                </div>
                                <div class="form-group">
                                    <label>Velocidad</label>
                                    <input type="text" class="form-control" placeholder="Ingrese la velocidad" v-model="velocidad">
                                </div>
                            </div>
                            <!-- OTRO EQUIPO -->
                            <div v-if="mostrar_otro_equipo">
                                <div class="form-group">
                                    <label>Nombre del Equipo</label>
                                    <input type="text" class="form-control" placeholder="Ingrese el tipo de equipo" v-model="otro_equipo">
                                </div>
                                <div class="form-group">
                                    <label>Detalles de Equipo</label>
                                    <input type="text" class="form-control" placeholder="Ingrese mas detalles sobre el Equipo" v-model="detalles_equipo">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" v-if="mostrar_eq||mostrar_aut||mostrar_mob">
                            <label>Color</label> 
                            <input type="text" class="form-control" placeholder="Color del bien" v-model="color">
                        </div>
                        <div class="form-group" v-if="mostrar_eq||mostrar_aut||mostrar_mob">
                            <label>Material</label> 
                            <input type="text" class="form-control" placeholder="Material del bien" v-model="material">
                        </div>

                        <!-- MUEBLES -->
                        <div v-if="mostrar_mob">
                            <div class="form-group">
                                <label>Tipo de Mobiliario</label> 
                                <input type="text" class="form-control" placeholder="Tipo de mobiliario" v-model="tipo_mobiliario">
                            </div>
                        </div>

                        <!-- SOFTWARE -->
                        <div v-if="mostrar_soft">
                            <div class="form-group">
                                <label>Nombre del Programa</label> 
                                <input type="text" class="form-control" placeholder="Nombre del Programa" v-model="nombre_programa">
                            </div>
                            <!-- <div class="form-group">
                                <label>Fecha de Instalacion</label> 
                                <input type="text" class="form-control" placeholder="Modelo del equipo" v-model="fecha_instalacion">
                            </div> -->
                            <div class="form-group">
                                <label>Tipo de Software</label> 
                                <input type="text" class="form-control" placeholder="Tipo de Software" v-model="tipo_software">
                            </div>
                            <div class="form-group">
                                <label>Tipo de Licencia</label> 
                                <input type="text" class="form-control" placeholder="Tipo de Licencia" v-model="tipo_licencia">
                            </div>
                            <div class="form-group">
                                <label>Total de Instalaciones</label> 
                                <input type="text" class="form-control" placeholder="Ingrese la cantidad de instalaciones del software" v-model="total_instaladas">
                            </div>
                            <div class="form-group">
                                <label>Version</label> 
                                <input type="text" class="form-control" placeholder="Version del Software" v-model="version">
                            </div>
                            <div class="form-group">
                                <label>Product Key</label> 
                                <input type="text" class="form-control" placeholder="Product Key del Software" v-model="product_key">
                            </div>
                        </div>

                        <!-- INMUEBLES -->
                        <div v-if="mostrar_inm">
                            
                            <div class="form-group">
                                <label>Numero de Escritura</label> 
                                <input type="text" class="form-control" placeholder="Numero de Escritura" v-model="nro_escritura">
                            </div>
                            <div class="form-group">
                                <label>Nombre del Propietario segun Escritura</label> 
                                <input type="text" class="form-control" placeholder="Nombre del Propietario segun Escritura" v-model="nombre_propietario">
                            </div>                         
                            <div class="form-group">
                                <label>Valor en Libros</label> 
                                <input type="text" class="form-control" placeholder="Valor en Libros" v-model="valor_libros">
                            </div> 
                            <div class="form-group">
                                <label>Avaluo Catastral</label> 
                                <input type="text" class="form-control" placeholder="Avaluo Catastral" v-model="avaluo_catastral">
                            </div>                          
                            <div class="form-group">
                                <label>Depreciación</label> 
                                <input type="text" class="form-control" placeholder="Depreciacion" v-model="depreciacion">
                            </div>                          
                            <div class="form-group">
                                <label>Valorizacion</label> 
                                <input type="text" class="form-control" placeholder="Valorizacion" v-model="valorizacion">
                            </div>
                            <div class="form-group">
                                <label for="">Arrendado</label>
                                <input type="Radio" name="arrendado" value="si" v-on:click="mos_arrendamiento" required>SI
                                <input type="Radio" name="arrendado" value="no" v-on:click="mos_arrendamiento_x"  required>NO
                            </div>
                            <div v-if="mostrar_arr">
                                <div class="form-group">
                                    <label for="">¿Cuenta con contrato de arrendamiento?</label>
                                    <input type="Radio" name="contrato_arrendamiento" value="si" required>SI
                                    <input type="Radio" name="contrato_arrendamiento" value="no"  required>NO
                                </div>
                                <div class="form-group">
                                    <label>Valor de Arrendamiento</label> 
                                    <input type="text" class="form-control" placeholder="Direccion del Inmueble" v-model="direccion">
                                </div>    
                            </div>
                            <div class="form-group">
                                <label>Numero de Matricula Inmobiliaria</label> 
                                <input type="text" class="form-control" placeholder="" v-model="nro_matricula_inmobiliaria">
                            </div>    
                            <div class="form-group">
                                <label>Dirección</label> 
                                <input type="text" class="form-control" placeholder="Direccion del Inmueble" v-model="direccion">
                            </div>    
                        </div>

                        <!-- AUTOMOVILES -->
                        <div v-if="mostrar_aut">
                            <div class="form-group">
                                <label>Placa</label> 
                                <input type="text" class="form-control" placeholder="Placa del Auto" v-model="placa">
                            </div>
                            <div class="form-group">
                                <label>Tipo</label> 
                                <input type="text" class="form-control" placeholder="Tipo del auto" v-model="tipo">
                            </div>
                            <div class="form-group">
                                <label>Cilindros</label> 
                                <input type="text" class="form-control" placeholder="Cantidad de cilindros del Auto" v-model="cilindros">
                            </div>
                            <div class="form-group">
                                <label>Numero de Motor</label> 
                                <input type="text" class="form-control" placeholder="Numero de Motor" v-model="nro_motor">
                            </div>
                            <div class="form-group">
                                <label>Kilometraje</label> 
                                <input type="text" class="form-control" placeholder="Kilometraje del Auto" v-model="kilometraje">
                            </div>
                            <div class="form-group">
                                <label>Clase</label> 
                                <input type="text" class="form-control" placeholder="Clase de Auto" v-model="clase">
                            </div>
                            <div class="form-group">
                                <label for="">¿El auto está asegurado?</label>
                                <input type="Radio" name="asegurado" value="si" required >SI 
                                <input type="Radio" name="asegurado" value="no" required>NO
                            </div>
                        </div>
                        
                        <!-- TEXTOS -->
                        <div v-if="mostrar_tex">                            
                            <div class="form-group">
                                <label for="">Tipo de Texto: </label>
                                <input type="Radio" name="tipo_libro" value="revista" required >Revista 
                                <input type="Radio" name="tipo_libro" value="tesis" required>Tesis
                                <input type="Radio" name="tipo_libro" value="libro" required>Libro
                                <input type="Radio" name="tipo_libro" value="otro" required>Otro
                            </div>
                            <div class="form-group">
                                <label>Autor</label> 
                                <input type="text" class="form-control" placeholder="Autor del texto" v-model="autor">
                            </div>
                            <div class="form-group">
                                <label>Titulo</label> 
                                <input type="text" class="form-control" placeholder="Titulo del Texto" v-model="titulo">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Condicion</label>
                            <input type="Radio" name="condicion" value="nuevo" required>Nuevo
                            <input type="Radio" name="condicion" value="malogrado" required>Malogrado
                            <input type="Radio" name="condicion" value="mantenimiento"  required>Mantenimiento
                        </div>
                        <div class="form-group">
                            <label for="">Estado</label>
                            <input type="Radio" name="estado" value="en_uso" required>En Uso
                            <input type="Radio" name="estado" value="desuso" required>Desuso
                            <input type="Radio" name="estado" value="prestamo"  required>Prestamo
                            <input type="Radio" name="estado" value="almacenado" required>Almacenado
                            <div v-if="mostrar_soft"><input type="Radio" name="estado" value="vencido" >Vencido</div>
                            <div  v-if="mostrar_inm"><input type="Radio" name="estado" value="ocupado_por_terceros" >Ocupado por Terceros </div>
                            <input type="Radio" name="estado" value="venta" required>Venta
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <input type="text" class="form-control" placeholder="Observaciones" v-model="observaciones">
                        </div>
                        <div class="form-group" v-if="mostrar_aut||mostrar_soft||mostrar_mob||mostrar_eq">
                            <label>Observaciones</label>
                            <input type="text" class="form-control" placeholder="Observaciones" v-model="observaciones">
                        </div>
                        <div class="form-group">
                            <label for="">¿Cuenta con Garantia?</label>
                            <input type="Radio" name="garantia" value="si" v-on:click="mos_garantia" required>SI
                            <input type="Radio" name="garantia" value="no" v-on:click="mos_garantia_x" required>NO
                        </div>
                        <div v-if="mostrar_gar">
                            <div class="form-group">
                                <label>Tipo de Garantia</label>
                                <input type="text" class="form-control" placeholder="" v-model="tipo_garantia">
                            </div>
                        </div>

                        <!-- añadir proveedor -->

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                // caracteristicas
                imagen: null,
                categoria: null,
                descripcion_general: null,
                fecha_adquisicion: null,
                tipo_adquisicion: null,
                total_adquisiciones: null,
                comprobante: null,
                nro_comprobante: null,
                precio_adquisicion: null,
                nro_doc_adquisicion: null,
                marca: null,
                modelo: null,
                nro_serie: null,
                tipo_equipo: null,
                vida_util: null,
                otro_equipo: null,
                detalles_equipo: null,
                memoria_ram: null,
                procesador: null,
                disco_duro: null,
                velocidad: null,
                color: null,
                material: null,
                placa: null,
                tipo: null,
                cilindros: null,
                kilometraje: null,
                clase: null,
                asegurado: null,
                nombre_programa: null,
                fecha_instalacion: null,
                tipo_software: null,
                tipo_licencia: null,
                total_instaladas: null,
                version: null,
                product_key: null,
                nro_escritura: null,
                nombre_propietario: null,
                valor_libros: null,
                avaluo_catastral: null,
                depreciacion: null,
                valorizacion: null,
                arrendado: null,
                contrato_arrendadamiento: null,
                valor_arrendamiento: null,
                nro_matricula_inmobiliaria: null,
                direccion: null,
                tipo_mobiliario: null,
                tipo_libro: null,
                autor: null,
                titulo: null,
                condicion: null,
                observaciones: null,
                garantia: null,
                tipo_garantia: null,
                proveedor_id: null,

                // otros
                mostrar_com: false,
                mostrar_don:false,

                mostrar_pc: false,
                mostrar_otro_equipo:false,

                mostrar_arr: false,

                mostrar_gar:false,

                mostrar_eq: false,
                mostrar_mob: false,
                mostrar_soft: false,
                mostrar_inm: false,
                mostrar_aut:false,
                mostrar_tex:false
            }
        },
        methods: {
            saveAsset: function(){
                axios.post('/assets',{
                    imagen: this.imagen,
                    categoria: this.categoria,
                    descripcion_general: this.descripcion_general,
                    fecha_adquisicion: this.fecha_adquisicion,
                    tipo_adquisicion: this.tipo_adquisicion,
                    total_adquisiciones: this.total_adquisiciones,
                    comprobante: this.comprobante,
                    nro_comprobante: this.nro_comprobante,
                    precio_adquisicion: this.precio_adquisicion,
                    nro_doc_adquisicion: this.nro_doc_adquisicion,
                    marca: this.marca,
                    modelo: this.modelo,
                    nro_serie: this.nro_serie,
                    tipo_equipo: this.tipo_equipo,
                    vida_util: this.vida_util,
                    otro_equipo: this.otro_equipo,
                    detalles_equipo: this.detalles_equipo,
                    memoria_ram: this.memoria_ram,
                    procesador: this.procesador,
                    disco_duro: this.disco_duro,
                    velocidad: this.velocidad,
                    color: this.color,
                    material: this.material,
                    placa: this.placa,
                    tipo: this.tipo,
                    cilindros: this.cilindros,
                    nro_motor: this.nro_motor,
                    kilometraje: this.kilometraje,
                    clase: this.clase,
                    asegurado: this.asegurado,
                    nombre_programa: this.nombre_programa,
                    fecha_instalacion: this.fecha_instalacion,
                    tipo_software: this.tipo_software,
                    tipo_licencia: this.tipo_licencia,
                    total_instaladas: this.total_instaladas,
                    product_key: this.product_key,
                    nro_escritura: this.nro_escritura,
                    nombre_propietario: this.nombre_propietario,
                    valor_libros: this.valor_libros,
                    avaluo_catastral: this.avaluo_catastral,
                    depreciacion: this.depreciacion,
                    valorizacion: this.valorizacion,
                    arrendado: this.arrendado,
                    contrato_arrendadamiento: this.contrato_arrendadamiento,
                    valor_arrendamiento: this.valor_arrendamiento,
                    nro_matricula_inmobiliaria: this.nro_matricula_inmobiliaria,
                    direccion: this.direccion,
                    tipo_mobiliario: this.tipo_mobiliario,
                    tipo_libro: this.tipo_libro,
                    autor: this.autor,
                    titulo: this.titulo,
                    condicion: this.condicion,
                    estado: this.estado,
                    observaciones: this.observaciones,
                    garantia: this.garantia,
                    tipo_garantia: this.tipo_garantia,
                    proveedor_id: this.proveedor_id
                })
                .then(function(res){
                    console.log(res)
                    $('#addAsset').modal('hide')
                    console.log(res.data.asset)
                })
                .catch(function(err){
                    console.log(err) //error
                });
            },
            mos_garantia(){
                this.mostrar_gar=true;
            },
            mos_arrendamiento(){
                this.mostrar_arr=true;
            },
            mos_garantia_x(){
                this.mostrar_gar=false;
            },
            mos_arrendamiento_x(){
                this.mostrar_arr=false;
            },
            mos_compra(){
                this.mostrar_com=true;
                this.mostrar_don= false;
            },
            mos_donacion(){
                this.mostrar_com=false;
                this.mostrar_don= true;
            },
            mos_pc(){
                this.mostrar_pc=true;
                this.mostrar_otro_equipo= false;
            },
            mos_otro_equipo(){
                this.mostrar_pc=false;
                this.mostrar_otro_equipo= true;
            },
            mos_equipamiento(){
                this.mostrar_eq=true;
                this.mostrar_mob= false;
                this.mostrar_soft= false;
                this.mostrar_inm= false;
                this.mostrar_aut= false;
                this.mostrar_tex=false;
            },
            mos_mobiliario(){
                this.mostrar_mob=true;
                this.mostrar_eq= false;
                this.mostrar_soft= false;
                this.mostrar_inm= false;
                this.mostrar_aut= false;
                this.mostrar_tex=false;
            },
            mos_software(){
                this.mostrar_soft=true;
                this.mostrar_mob= false;
                this.mostrar_eq= false;
                this.mostrar_inm= false;
                this.mostrar_aut= false;
                this.mostrar_tex=false;
            },
            mos_inmueble(){
                this.mostrar_inm=true;
                this.mostrar_mob= false;
                this.mostrar_soft= false;
                this.mostrar_eq= false;
                this.mostrar_aut= false;
                this.mostrar_tex=false;
            },
            mos_automovil(){
                this.mostrar_aut=true;
                this.mostrar_mob= false;
                this.mostrar_soft= false;
                this.mostrar_inm= false;
                this.mostrar_eq= false;
                this.mostrar_tex=false;
            },
            mos_texto(){
                this.mostrar_tex=true;
                this.mostrar_mob= false;
                this.mostrar_soft= false;
                this.mostrar_inm= false;
                this.mostrar_aut= false;
                this.mostrar_eq=false;
            }

        }
    }
</script>

<style>

</style>