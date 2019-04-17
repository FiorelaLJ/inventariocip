<template>
        <section class="data">
        <spinner v-show="loading"></spinner>
            <h1 class="text-center">Ubicaciones</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr v-for="location in locations" :key="location.id">
                        <td>{{location.nombre}}</td>
                        <td>{{location.direccion_local}}</td>
                        <td>{{location.descripcion}}</td>
                        <button type="button" class="btn btn-primary" data-toggle="modal">Editar</button>
                    </tr>
                </tbody>
            </table>
        </section>
    <!-- <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for= "location in locations" :key="location.id">
            <div class="card text-center" style="width: 18rem; margin-top: 70px; margin-left: 70px"> -->
            <!-- <img style="height: 100px; width: 100px; background-color: #efefef; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" src="images/" alt=""> -->
            <!-- <div class="card-body">
                <h5 class="card-title">{{location.nombre}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <a href="/locations/" class="btn btn-primary">Ver más</a> -->
            <!-- </div>
            </div>
        </div>
    </div> -->
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
        mounted (){
          
            axios.get('').then((res) => {   //para cargar e,e 
                this.locations = res.data
                this.loading = false
            })
        }
    }
</script>
