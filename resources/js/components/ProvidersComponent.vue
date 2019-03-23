<template>
    <div class="row">
        <div class="col-sm" v-for= "provider in providers" :key="provider.id">
            <div class="card text-center" style="width: 18rem; margin-top: 70px; margin-left: 70px">
            <img style="height: 100px; width: 100px; background-color: #efefef; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" src="images/" alt="">
            <div class="card-body">
                <h5 class="card-title">{{provider.name}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/providers/" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>
</template>

<script> //parte de logica
    export default {
        data(){
            return{
                providers:[
                    {id: 1, name: "asdasd"},
                     {id: 5, name: "fiorela"},
                    {id: 2, name: "holid"},
                    {id: 3, name: "xdxdsd"}
                ]
            }
        },
        mounted (){
            console.log('Component mounted.')
        }
    }
</script>
