<template>
    <!-- <div class="container">
        <spinner v-show="loading"></spinner> -->
        <section class="data">
        <spinner v-show="loading"></spinner>
            <h1 class="text-center">Proveedores</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Razon Social</th>
                        <th scope="col">RUC</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr v-for="provider in providers" :key="provider.id">
                        <th>{{provider.id}}</th>
                        <td>{{provider.razon_social}}</td>
                        <td>{{provider.ruc}}</td>
                        <td>{{provider.direccion}}</td>
                        <td>{{provider.telefono}}</td>
                        <td>{{provider.email}}</td>
                        <modal-btn-edit-provider></modal-btn-edit-provider>
                        <!-- <button type="button" class="btn btn-primary" h-ref="/providers/editar" data-toggle="modal">Editar</button> -->
                    </tr>
                </tbody>
            </table>
        </section>
       
</template>

<script> //parte de logica
    export default {
        data(){
            return{
                razon_social: '',
                ruc: '',
                direccion: '',
                telefono: '',
                email: '',
                providers:[],
                loading: true
            }
        },
        mounted(){
            axios.get('').then((res) => {   //para cargar e,e 
                this.providers = res.data
                this.loading = false
            })
        
        }
    }
</script>
<style>

</style>

