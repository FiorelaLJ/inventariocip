<template>
    <div class="modal fade" id="addAsset" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Bien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="saveAsset">
                        <div class="form-group">
                                <input type="Radio" name="categoria" value="equipamiento" v-on:click="mos_equipamiento" required >Equipo 
                                <input type="Radio" name="categoria" value="mobiliario" v-on:click="mos_mobiliario" required>Mobiliario
                                <input type="Radio" name="categoria" value="software" v-on:click="mos_software" required>Software
                                <input type="Radio" name="categoria" value="inmueble" v-on:click="mos_inmueble" required>Inmueble 
                                <input type="Radio" name="categoria" value="automovil" v-on:click="mos_automovil" required>Automovil
                                <input type="Radio" name="categoria" value="texto" v-on:click="mos_texto" required>Texto
                        </div>
                        <div class="form-group">
                            <label>Descripcion General</label>
                            <input type="text" class="form-control" placeholder="Describa el producto" v-model="descripcion">
                        </div>
                        <!-- <div class="form-group">
                            <label>Fecha de Adquisicion</label>
                            <input type="text" class="form-control" data-provide="datepicker"  v-model="fecha_adquision">
                        </div> -->
                        <div class="form-group">
                            <input type="Radio" name="tipo_adquisicion" value="compra" v-on:click="mos_compra" required>Compra
                            <input type="Radio" name="tipo_adquisicion" value="donacion" v-on:click="mos_donacion" required>Donacion
                            <input type="Radio" name="tipo_adquisicion" value="traspaso" v-on:click="mos_donacion"  required>Traspaso 
                            <input type="Radio" name="tipo_adquisicion" value="otro" v-on:click="mos_donacion"  required>Otro
                        </div>
                        <div v-if="mostrar_com">
                            <div class="form-group">
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

                        <!-- EQUIPOS -->
                        
                        <div v-if="mostrar_eq">
                            <div class="form-group">
                                <label>Marca</label> 
                                <input type="text" class="form-control" placeholder="Marca del equipo" v-model="marca">
                            </div>
                            <div class="form-group">
                                <label>Modelo</label> 
                                <input type="text" class="form-control" placeholder="Modelo del equipo" v-model="modelo">
                            </div>
                            <div class="form-group">
                                <label>Numero de Serie</label> 
                                <input type="text" class="form-control" placeholder="Numero de Serie del equipo" v-model="nro_serie">
                            </div>
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
                                    <input type="text" class="form-control" placeholder="Ingrese la cantidad de disco duro y su tipo" v-model="disoc_duro">
                                </div>
                                <div class="form-group">
                                    <label>Velocidad</label>
                                    <input type="text" class="form-control" placeholder="Ingrese la velocidad" v-model="velocidad">
                                </div>
                            </div>
                            <!-- Continuar -->
                            <div class="form-group">
                                <label>Color</label> 
                                <input type="text" class="form-control" placeholder="Color del equipo" v-model="color">
                            </div>
                            <div class="form-group">
                                <label>Material</label> 
                                <input type="text" class="form-control" placeholder="Material del equipo" v-model="material">
                            </div>
                        </div>

                        <div v-if="mostrar_mob">
                            <div class="form-group">
                                <label>xD</label> 
                                <input type="text" class="form-control" placeholder="Marca del equipo" v-model="marca">
                            </div>
                            <div class="form-group">
                                <label>Modelo</label> 
                                <input type="text" class="form-control" placeholder="Modelo del equipo" v-model="modelo">
                            </div>
                        </div>

                        <div v-if="mostrar_soft">
                            <div class="form-group">
                                <label>Marca</label> 
                                <input type="text" class="form-control" placeholder="Marca del equipo" v-model="marca">
                            </div>
                            <div class="form-group">
                                <label>Modelo</label> 
                                <input type="text" class="form-control" placeholder="Modelo del equipo" v-model="modelo">
                            </div>
                        </div>

                        <div v-if="mostrar_inm">
                            <div class="form-group">
                                <label>Dirección</label> 
                                <input type="text" class="form-control" placeholder="Direccion del Inmueble" v-model="direccion">
                            </div>
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
                        </div>

                        <div v-if="mostrar_aut">
                            <div class="form-group">
                                <label>Marca</label> 
                                <input type="text" class="form-control" placeholder="Marca del equipo" v-model="marca">
                            </div>
                            <div class="form-group">
                                <label>Modelo</label> 
                                <input type="text" class="form-control" placeholder="Modelo del equipo" v-model="modelo">
                            </div>
                        </div>
                        
                        <div v-if="mostrar_tex">                            
                            <div class="form-group">
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
                name: null,
                descripcion: null,

                mostrar_com: false,
                mostrar_don:false,

                mostrar_pc: false,
                mostrar_otro_equipo:false,

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
                    name: this.name,
                    descripcion: this.descripcion,
                    muestra: this.muestra
                })
                .then(function(res){
                    console.log(res)
                    $('#addAsset').modal('hide')
                    console.log(res.data.asset)
                })
                .catch(function(err){
                    console.log(err) //error
                })
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