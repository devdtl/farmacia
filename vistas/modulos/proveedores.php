<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar proveedores
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar proveedores</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProveedor">
          
          Agregar proveedor

        </button>

      </div>

      <div class="box-body">
      
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Email</th>
           <th>Teléfono</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>
           
        
        <?php

      

        $item = null;
        $valor = null;

        $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);





       foreach ($proveedores as $key => $value){


          
		  
          echo '
          <tr>
          <td>'.($key+1).'</td>

          <td>'.$value["nombre"].'</td>

          <td>'.$value["email"].'</td>

          <td>'.$value["telefono"].'</td>

      

            <td>

          
              <div class="btn-group">

                <button class="btn btn-warning btnEditarProveedor"  data-toggle="modal" data-target="#modalEditarProveedor" title="editar"  idProveedor="'.$value["id"].'" ><i class="fa fa-pencil"></i></button>
                <button class="btn btn-primary btnMostrarProducto"  data-toggle="modal" data-target="#modalMostrarProveedor" title="ver"  idProveedor="'.$value["id"].'" ><i class="fa fa-product-hunt"></i></button>

                <button class="btn btn-danger btnEliminarProveedor" title="eliminar" idProveedor="'.$value["id"].' "><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>

          
        </tbody>
        
       ' ; }?> 
        
       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PROVEEDOR
======================================-->

<div id="modalAgregarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar proveedor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoProveedor" placeholder="Ingresar nombre" required>

              </div>

            </div>
            

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->


   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->


   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->

            
            <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
            <div class="form-group row ">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" id="producto1" name="producto1" >
                  
                  <option value="">Selecionar Productos</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";
                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
                  foreach ($productos as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

              </div>

              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="precio1" id="precio1" min="0" placeholder="precio" >
                </div>

              </div>
              </div>

            
   
            <!-- cERRAR AGREGAR PROVEEDOR -->

   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->


                       <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
            <div class="form-group row " id="form1" style="display: none ;">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" id="producto2" name="producto2" >
                  
                  <option value="">Selecionar Productos</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";
                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
                  foreach ($productos as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["descripcion"].' </option>';

          
                  } 

                  ?>
  
                </select>
              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="precio2" id="precio2" min="0" placeholder="precio" >
                </div>

              </div>
              </div>


     <!-- cERRAR AGREGAR PROVEEDOR -->


     <button type="button" onclick="funcform1()" id="boton1" class="btn btn-primary" >Agregar Proveedor</button> 



   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->

                       <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
            <div class="form-group row " id="form3" style="display: none ;">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" id="producto3" name="producto3" >
                  
                  <option value="">Selecionar Productos</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";
                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
                  foreach ($productos as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="precio3"  id="precio3" min="0" placeholder="precio" >
                </div>

              </div>
              </div>


     <!-- cERRAR AGREGAR PROVEEDOR -->


   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->


     <button type="button" onclick="form3()" id="boton2" style="display: none ;" class="btn btn-primary" >Agregar Proveedor</button> 

                       <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
                       <div class="form-group row " id="form4" style="display: none ;">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" id="producto4" name="producto4" >
                  
                  <option value="">Selecionar Productos</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";
                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
                  foreach ($productos as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';
                  }

                  ?>
  
                </select>
              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="precio4"  id="precio4" min="0" placeholder="precio" >
                </div>

              </div>
              </div>


     <!-- cERRAR AGREGAR PROVEEDOR -->


   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->


     <button type="button" onclick="form4()" id="boton3" style="display: none ;" class="btn btn-primary" style="border-radius: 83%; align-content: center;" >Agregar Proveedor</button> 

             <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
             <div class="form-group row " id="form5" style="display: none ;">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" id="producto5" name="producto5" >
                  
                  <option value="">Selecionar Productos</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";
                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
                  foreach ($productos as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["descripcion"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="precio5" id="precio5" min="0" placeholder="precio" >
                </div>

              </div>
              </div>

                  
     <!-- cERRAR AGREGAR PROVEEDOR -->


   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->
   
   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->







       
            </div>

</div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar proveedor</button>

        </div>

      </form>
          <?php
          $crearProveedor = new ControladorProveedores();
          $crearProveedor -> ctrCrearProveedor();
          ?>
    </div>

  </div>

</div>


<!--=====================================
MODAL MOSTRAR PRODUCTOS 
======================================-->

<div id="modalMostrarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Productos del proveedor </h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

        <ul class="list-group">
  <li class="list-group-item"> <input type="text" name="nuevoProducto1" id="nuevoProducto1"></li>
  <li class="list-group-item"> <input type="text" name="mostrarProducto2" id="nuevoProducto2"></li>
  <li class="list-group-item"> <input type="text" name="nuevoProducto3" id="nuevoProducto3"></li>
  <li class="list-group-item"> <input type="text" name="mostrarProducto4" id="nuevoProducto4"></li>
  <li class="list-group-item"> <input type="text" name="mostrarProducto5" id="nuevoProducto5"></li>

  <li class="list-group-item"> <input type="text" name="mostrarPrecio1" id="nuevoPrecio1"></li>
  <li class="list-group-item"> <input type="text" name="mostrarPrecio1" id="nuevoPrecio2"></li>
  <li class="list-group-item"> <input type="text" name="mostrarPrecio1" id="nuevoPrecio3"></li>
  <li class="list-group-item"> <input type="text" name="mostrarPrecio1" id="nuevoPrecio4"></li>
  <li class="list-group-item"> <input type="text" name="mostrarPrecio1" id="nuevoPrecio5"></li>

</ul>


            </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar provprod</button>

        </div>

      </form>
    
   
    </div>

  </div>

</div>




<!--=====================================
MODAL EDITAR PROVEEDOR
======================================-->

<div id="modalEditarProveedor" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar proveedor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarProveedor" id="editarProveedor"  required>
                <input type="hidden"  name="idProveedor" id="idProveedor" required>

              </div>

            </div>
        

            <!-- ENTRADA PARA EL CORREO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail"  required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono"  data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>
            </div>
 
          </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar proveedor</button>

        </div>

      </form>
      <?php
          $editarProveedor = new ControladorProveedores();
          $editarProveedor -> ctrEditarProveedor();
          ?>
   
    </div>

  </div>
        
</div>

<?php
          $eliminarProveedor = new ControladorProveedores();
          $eliminarProveedor -> ctrEliminarProveedor();
          ?>


<script>
function funcform1() {

  document.getElementById("form1").style.display = "block";
  document.getElementById("boton1").style.display = "none";
  document.getElementById("boton2").style.display = "block";

}


function form3() {


  document.getElementById("form3").style.display = "block";
  document.getElementById("boton2").style.display = "none";
  document.getElementById("boton3").style.display = "block";

}


function form4() {


document.getElementById("form4").style.display = "block";
document.getElementById("boton3").style.display = "none";
document.getElementById("boton4").style.display = "block";

}
function form5() {


document.getElementById("form5").style.display = "block";
document.getElementById("boton4").style.display = "none";
document.getElementById("boton5").style.display = "block";

}


</script>

