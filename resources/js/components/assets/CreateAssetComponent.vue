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
                    <form>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del bien">
                        </div>
                        <div class="form-group">
                            <label>Descripcion General</label>
                            <input type="text" class="form-control" placeholder="Describa el producto">
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
        
    }
</script>

<style>

</style>