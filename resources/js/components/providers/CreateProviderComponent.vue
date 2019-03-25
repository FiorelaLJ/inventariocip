<template>
    <div class="modal fade" id="addProvider" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Razon Social</label>
                            <input type="text" class="form-control" placeholder="Ingrese la razon social del proveedor">
                        </div>
                        <div class="form-group">
                            <label>RUC</label>
                            <input type="text" class="form-control" placeholder="Ingrese el RUC del proveedor">
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" placeholder="Ingrese la direccion del proveedor">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" placeholder="Ingrese el telefono del proveedor">
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" class="form-control" placeholder="Ingrese el correo del proveedor">
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
