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

          <td>'.$value["telefono"].' <br>'.$value["telefono2"].'<br>'.$value["telefono3"].'</td>

      

            <td>

          
              <div class="btn-group">

                <button class="btn btn-warning btnEditarProveedor"  data-toggle="modal" data-target="#modalEditarProveedor" title="editar"  idProveedor="'.$value["id"].'" ><i class="fa fa-pencil"></i></button>
                <button class="btn btn-primary btnMostrarProducto"  data-toggle="modal" data-target="#modalMostrarProd" title="ver"  idProveedor="'.$value["id"].'" ><i class="fa fa-list"></i></button>

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

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono2" placeholder="Ingresar otro teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask >

              </div>

            </div>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono3" placeholder="Ingresar otro teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask >

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

                <select class="form-control input-lg proveedor1" id="producto1"  >
                  
                  <option value="">Selecionar Productos</option>

                  <?php

                  $item = null;
                  $valor = null;
                  $orden = "id";
                  $productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
                  foreach ($productos as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["descripcion"].'  '.$value["stock"].'</option>';
                  }

                  ?>
  
                </select>

                <input type="hidden" name="producto1" id="proveedor1" value="">
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

                <select class="form-control input-lg proveedor2" id="producto2" >
                  
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
                <input type="hidden" name="producto2" id="proveedor2" value="">

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

                <select class="form-control input-lg proveedor3" id="producto3"  >
                  
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
                <input type="hidden"  name="producto3" id="proveedor3" value="">
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

                <select class="form-control input-lg proveedor4" id="producto4"  >
                  
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
                <input type="hidden" name="producto4" id="proveedor4" value="">

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

                <select class="form-control input-lg proveedor5" id="producto5">
                  
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
                <input type="hidden" name="producto5"  id="proveedor5" value="">
              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="precio5" id="precio5" min="0" placeholder="precio" >
                </div>

              </div>
              </div>

             <button type="button" onclick="form4()" id="boton3" style="display: none ;" class="btn btn-primary" style="border-radius: 83%; align-content: center;" >Agregar Proveedor</button> 

             <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
             <div class="form-group row " id="form5" style="display: none ;">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg proveedor5" id="producto5">
                  
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
                <input type="hidden" name="producto5"  id="proveedor5" value="">
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
  <!-- ENTRADA PARA EL TELÉFONO2 -->
            
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono2" id="editarTelefono2" data-inputmask="'mask':'(999) 999-9999'" data-mask >

              </div>

            </div>
  <!-- ENTRADA PARA EL TELÉFONO3 -->
            
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTelefono3" id="editarTelefono3" data-inputmask="'mask':'(999) 999-9999'" data-mask >

              </div>

            </div>





            <hr>    <h3>Proveedores</h3> <hr>   <br>
 <!-- ENTRADA PARA editarProducto1 -->
<div class="row">
  <div class="col-md-6">
  <div class="form-group">
  <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-check"></i></span> 

              <input type="text" class="form-control input-lg" id="editarProducto1" name="editarProducto1" placeholder="Producto" >

            </div>

          </div>
          </div>

  <div class="col-md-6">


  <div class="form-group">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio1" name="editarPrecio1"placeholder="Agregar Precio" >

            
                </div>
                </div>

  </div>
  </div>







            <div class="row">
  <div class="col-md-6">

  
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" id="editarProducto2" name="editarProducto2" placeholder="Producto" >

              </div>

            </div>

  </div>
  <div class="col-md-6">
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio2" name="editarPrecio2" placeholder="Agregar Precio" >

              </div>

            </div>

  </div>
</div>





            <div class="row">
  <div class="col-md-6">

  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" id="editarProducto3" name="editarProducto3"  placeholder="Producto" >

              </div>

            </div>


  </div>
  <div class="col-md-6">
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio3" name="editarPrecio3"  placeholder="Agregar Precio" >

              </div>

            </div>

  </div>
</div>
   <!-- ENTRADA PARA nuevoProveedor3 -->

   


            <div class="row">
  <div class="col-md-6">

  
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" id="editarProducto4" name="editarProducto4" placeholder="Producto" >

              </div>

            </div>

  </div>
  <div class="col-md-6">

  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio4" name="editarPrecio4"  placeholder="Agregar Precio" >

              </div>

            </div>

  </div>
</div>
            
   <!-- ENTRADA PARA nuevoProveedor4 -->


            



            <div class="row">
  <div class="col-md-6">

  
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" id="editarProducto5" name="editarProducto5" min="0" placeholder="Producto" >

              </div>

            </div>


  </div>
  <div class="col-md-6">


  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio5" name="editarPrecio5" min="0" placeholder="Agregar Precio" >

              </div>

            </div>

  </div>
</div>
   <!-- ENTRADA PARA nuevoProveedor5 -->




<!-- ENTRADA PARA nuevoPrecio1 -->




<!-- ENTRADA PARA nuevoPrecio2 -->



            
<!-- ENTRADA PARA nuevoPrecio3 -->



        
<!-- ENTRADA PARA nuevoPrecio4 -->




        
<!-- ENTRADA PARA nuevoPrecio5 -->


















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





























































<!--=====================================
MODAL EDITAR PROVEEDOR
======================================-->

<div id="modalMostrarProd" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Productos que vende el proveedor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">



        
            <center><table class="table table-bordered ">
  <thead class="thead-dark">
    <tr>
   
      <th scope="col" >Proveedor</th>
      <th scope="col">Precio</th>

    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td><input type="text" style="background-color: transparent; border:transparent;" id="mostrarProducto1"></td>
      <td><input type="text" style="background-color: transparent; border:transparent" id="mostrarPrecio1"></td>
     
    </tr>
    <tr>
    
    <td><input type="text" style="background-color: transparent; border:transparent"id="mostrarProducto2"></td>
      <td><input type="text" style="background-color: transparent; border:transparent" id="mostrarPrecio2"></td>
  
    </tr>
    <tr>
    
    <td><input type="text"  style="background-color: transparent; border:transparent"id="mostrarProducto3"></td>
      <td><input type="text" style="background-color: transparent; border:transparent" id="mostrarPrecio3"></td>
    </tr>
    <tr>
    
    <td><input type="text" style="background-color: transparent; border:transparent" id="mostrarProducto4"></td>
      <td><input type="text" style="background-color: transparent; border:transparent" id="mostrarPrecio4"></td>

  </tr>
  <tr>
    
  <td><input type="text" style="background-color: transparent; border:transparent" id="mostrarProducto5"></td>
      <td><input type="text"  style="background-color: transparent; border:transparent" id="mostrarPrecio5"></td>

  </tr>
  </tbody>
</table>

</center> 
















            </div>
 
          </div>
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Salir</button>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<script>  
$(".proveedor1").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#proveedor1").val(texto);
});
</script>
<script>  
$(".proveedor2").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#proveedor2").val(texto);
});
</script>
<script>  
$(".proveedor3").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#proveedor3").val(texto);
});
</script>
<script>  
$(".proveedor4").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#proveedor4").val(texto);
});
</script>
<script>  
$(".proveedor5").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#proveedor5").val(texto);
});
</script>