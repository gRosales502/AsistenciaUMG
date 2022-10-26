<?php
require 'encabezado.php';
?>

<div class="text-entry"><h3>Cliente | ElectoFerro</h3></div>
<hr>
<div class="container-fluid">
    <div class="row no-gutters">
        <div class="col-md-12">
            <!-- parte del encabezado-->
            <div class="row">
                <div class="col-md-12 mt-2 text-center text-sm-right">
                    <button type="button" class="btn btn-ferre ml-2" data-toggle="modal" data-target="#modalCliente">
                    <i class="fas fa-plus-circle"></i> Nuevo
                    </button>
                    <!-- <a href="#" class="btn btn-ceg"><i class="fas fa-print"></i> Reporte</a> -->
                </div>
            </div>         
            <!-- parte del encabezado-->

            <!-- Cuerpo de la página-->
            <?php
                $Cargar = new Cargar();
                $Cargar->cliente();
            ?>
            <!-- Cuerpo de la página-->
        </div>
    </div>
</div>



<!--Modal para registro-->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalScrollableTitle">Registro de Clientes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form enctype="multipart/form-data" id="form-cliente" class="text-center">
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>                  
                    <input type="text" name="nit" id="nit" class="form-control pl-5 mt-3" placeholder="Ingrese NIT" >                    
                </div>
                <div class="icono">
                <i class="fa-solid fa-user"></i>               
                    <input type="text" name="nombrecliente" id="nombrecliente" class="form-control pl-5 mt-3" placeholder="Ingrese el nombre del cliente" >                    
                </div>
                <div class="icono">
                <i class="fa-solid fa-phone"></i>                 
                    <input type="text" name="telefono" id="telefono" class="form-control pl-5 mt-3" placeholder="Ingrese número de teléfono" >                    
                </div>
                <div class="icono">
                <i class="fa-solid fa-map-location-dot"></i>                  
                    <input type="text" name="direccion" id="direccion" class="form-control pl-5 mt-3" placeholder="Ingrese dirección" >                    
                </div>     
                
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" onclick="enviar_cliente();" class="btn btn-ferre">Guardar Cliente</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
        </div>
      </div>
    </div>
  </div>
<!--Modal para registro-->




<!--Modal para actualizar-->
<div class="modal fade" id="actualizarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalScrollableTitle">Actualizar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form enctype="multipart/form-data" id="form_clienteA" name="form_clienteA">
                <input type="hidden" name="id_cliente">
                <div class="icono">
                <i class="fa-sharp fa-solid fa-clipboard"></i>               
                    <input type="text" name="nit" id="nit" class="form-control pl-5 mt-3" placeholder="Ingrese NIT" >                    
                </div>
                <div class="icono">
                <i class="fa-solid fa-user"></i>             
                    <input type="text" name="nombrecliente" id="nombrecliente" class="form-control pl-5 mt-3" placeholder="Ingrese el nombre del cliente" >                    
                </div>
                <div class="icono">
                <i class="fa-solid fa-phone"></i>               
                    <input type="text" name="telefono" id="telefono" class="form-control pl-5 mt-3" placeholder="Ingrese número de teléfono" >                    
                </div>
                <div class="icono">
                <i class="fa-solid fa-map-location-dot"></i>               
                    <input type="text" name="direccion" id="direccion" class="form-control pl-5 mt-3" placeholder="Ingrese dirección" >                    
                </div>  
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" onclick="actualizar_cliente();" class="btn btn-ferre">Actualizar Cliente</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button> 
        </div>
      </div>
    </div>
  </div>
<!--Modal para actualizar-->

<?php
require 'pie.php'
?>
<script src="../assets/js/Cliente.js"></script>