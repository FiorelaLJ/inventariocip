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
                        <td>{{provider.razon_social}}</td>
                        <td>{{provider.ruc}}</td>
                        <td>{{provider.direccion}}</td>
                        <td>{{provider.telefono}}</td>
                        <td>{{provider.email}}</td>
                        <button type="button" class="btn btn-primary" data-toggle="modal">Editar</button>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- <div class="col-sm" v-for= "provider in providers" :key="provider.id">
            <div class="card text-center" style="width: 18rem; margin-top: 70px; margin-left: 70px">
            
            <div class="card-body">
                <h4 class="card-title">{{provider.razon_social}}</h4>
                <p class="card-body"> -->
                    <!-- <p>{{provider.ruc}}</p>
                    <p>{{provider.direccion}}</p>
                    <p>{{provider.telefono}}</p>
                    <p>{{provider.email}}</p> -->
                <!-- </p> -->
                <!-- <a href="/providers/edit" class="btn btn-primary">Editar</a> -->
            <!-- </div>
            </div>
        </div> -->
    <!-- </div> -->
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

