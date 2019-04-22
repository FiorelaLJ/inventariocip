<template>
        <section class="data">
        <spinner v-show="loading"></spinner>
            <h1 class="text-center">Ubicaciones</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr v-for="location in locations" :key="location.id">
                        <td>{{location.id}}</td>
                        <td>{{location.nombre}}</td>
                        <td>{{location.direccion_local}}</td>
                        <td>{{location.descripcion}}</td>
                        <modal-btn-edit-location></modal-btn-edit-location>
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Editar</button> -->
                    </tr>
                </tbody>
            </table>
        </section>
</template>

<script> //parte de logica
    export default {
        data(){
            return{
                locations:[],
                nombre: '',
                direccion_local: '',
                descripcion: '',
                loading: true
            }
        },
        mounted(){          
            axios.get('').then((res) => {   //para cargar e,e 
                this.locations = res.data
                this.loading = false
            })
        }
    }
</script>
