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
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del bien" v-model="name">
                        </div>
                        <div class="form-group">
                            <label>Descripcion General</label>
                            <input type="text" class="form-control" placeholder="Describa el producto" v-model="descripcion">
                        </div>
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
                                <input type="Radio" name="categoria" value="equipamiento" v-on:click="mos_equipamiento" required >Equipo 
                                <input type="Radio" name="categoria" value="mobiliario" v-on:click="mos_mobiliario" required>Mobiliario
                                <input type="Radio" name="categoria" value="software" v-on:click="mos_software" required>Software
                                <input type="Radio" name="categoria" value="inmueble" v-on:click="mos_inmueble" required>Inmueble 
                                <input type="Radio" name="categoria" value="automovil" v-on:click="mos_automovil" required>Automovil
                                <input type="Radio" name="categoria" value="texto" v-on:click="mos_texto" required>Texto

                        </div>
                        
                        <div v-if="mostrar_eq">
                            <div class="form-group">
                                <label>Marca</label> 
                                <input type="text" class="form-control" placeholder="Marca del equipo" v-model="marca">
                            </div>
                            <div class="form-group">
                                <label>Modelo</label> 
                                <input type="text" class="form-control" placeholder="Modelo del equipo" v-model="modelo">
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
                muestra:null,
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