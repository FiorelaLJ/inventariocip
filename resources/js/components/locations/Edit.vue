<template>
    <div class="modal fade" id="editLocation" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLocation">Editar Ubicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="saveEditLocation">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre de la oficina" v-model="nombre">
                        </div>
                        <div class="form-group">
                            <label>Dirección o Piso</label>
                            <input type="text" class="form-control" placeholder="Ingrese la direccion o el piso en el que se encuentra la ubicacion " v-model="direccion_local">
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" class="form-control" placeholder="Ingrese una descripcion breve" v-model="descripcion">
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
        data(){ //atributos
            return{
                nombre: null,
                direccion_local: null,
                descripcion: null
            }
        },
        methods: {
            saveEditLocation: function(){
                // console.log(this.nombre)
                // console.log(this.direccion_local)
                // console.log(this.descripcion)
                axios.put('/locations',{//peticion http mediante promesas
                    nombre: this.nombre,
                    direccion_local: this.direccion_local,
                    descripcion: this.descripcion
                })
                .then(function(res){
                    console.log(res)
                    $('#addLocation').modal('hide')
                    console.log(res.data.location)
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
