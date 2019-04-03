<template>
    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for= "provider in providers" :key="provider.id">
            <div class="card text-center" style="width: 18rem; margin-top: 70px; margin-left: 70px">
            
            <div class="card-body">
                <h4 class="card-title">{{provider.razon_social}}</h4>
                <p class="card-text">
                    <p>{{provider.ruc}}</p>
                    <p>{{provider.direccion}}</p>
                    <p>{{provider.telefono}}</p>
                    <p>{{provider.email}}</p>
                </p>
                <!-- <a href="/providers/" class="btn btn-primary">Ver más</a> -->
            </div>
            </div>
        </div>
    </div>
</template>

<script> //parte de logica
    export default {
        data(){
            return{
                providers:[],
                loading: true
            }
        },
        mounted (){
            // console.log('Component mounted.') //sin usar axios
            //usando axios:
            // axios.get('').then(response => (this.providers = response.data))
            axios.get('').then((res) => {   //para cargar e,e 
                this.providers = res.data
                this.loading = false
            })
        }
    }
</script>
