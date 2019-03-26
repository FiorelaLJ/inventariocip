<template>
    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class="col-sm" v-for= "asset in assets" :key="asset.id">
            <div class="card text-center" style="width: 18rem; margin-top: 70px; margin-left: 70px">
            <!-- <img style="height: 100px; width: 100px; background-color: #efefef; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" src="images/" alt=""> -->
            <div class="card-body">
                <h5 class="card-title">{{asset.name}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/assets/" class="btn btn-primary">Ver más</a>
            </div>
            </div>
        </div>
    </div>
</template>

<script> //parte de logica
    export default {
        data(){
            return{
                assets:[],
                loading: true
            }
        },
        mounted (){
          
            axios.get('').then((res) => {   //para cargar e,e 
                this.assets = res.data
                this.loading = false
            })
        }
    }
</script>
