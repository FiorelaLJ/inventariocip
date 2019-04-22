<template>
    <div class="modal fade" id="editProvider" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalProviders">Editar Proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="saveEditProvider">
                        <div class="form-group">
                            <label>Razon Social</label>
                            <input type="text" class="form-control" placeholder="Ingrese la razon social del proveedor" v-model="razon_social">
                        </div>
                        <div class="form-group">
                            <label>RUC</label>
                            <input type="text" class="form-control" placeholder="Ingrese el RUC del proveedor" v-model="ruc">
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" placeholder="Ingrese la direccion del proveedor" v-model="direccion">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" placeholder="Ingrese el telefono del proveedor" v-model="telefono">
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control" placeholder="Ingrese el correo del proveedor" v-model="email">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // import { bus } from '../event-bus';

    export default {
        data(){ //atributos
            return{
                razon_social: null,
                ruc: null,
                direccion: null,
                telefono: null,
                email: null
            }
        },
        methods: {
            saveEditProvider: function(){
                axios.put('/providers',{
                    razon_social: this.razon_social,
                    ruc: this.ruc,
                    direccion: this.direccion,
                    telefono: this.telefono,
                    email: this.email
                })
                .then(function(res){
                    console.log(res)
                    $('#addProvider').modal('hide')
                    console.log(res.data.provider)
                    // EventBus.$emit('provider-added', res.data.provider)
                })
                .catch(function(err){
                    console.log(err) //error
                });
            }
        }
    }
</script>

<style>

</style>
