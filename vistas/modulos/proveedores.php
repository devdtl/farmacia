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
                <button class="btn btn-primary btnMostrarProducto"  data-toggle="modal" data-target="#modalMostrarProveedor" title="ver"  idProveedor="'.$value["id"].'" ><i class="fa fa-list"></i></button>

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

          <div class="box-body">
  <h1>Productos que vende el proveedor</h1>
  <table class="table table-bordered table-striped dt-responsive tablas">
         
         <thead>
          
          <tr>
            
            <th style="width:10px">#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
 
          </tr> 
 
         </thead>
 
         <tbody>
            
         
         <?php
 
         $item = null;
         $valor = null;
 
         $prodprovs = ControladorProveedores::ctrMostrarProducto($item, $valor);
 
        foreach ($prodprovs as $key => $value){
          
           echo '
           <tr>
           <td>'.($key+1).'</td>
 
           <td>'.$value["nombre"].'</td>
 
           <td>'.$value["tipo"].'</td>
 
           <td>'.$value["cantidad"].'</td>
           
           <td>'.$value["precio"].'</td>
 
       
 
             <td>
 
           
               <div class="btn-group">
 
                 <button class="btn btn-warning btnEditarProveedor"  data-toggle="modal" data-target="#modalEditarProdprov" title="editar"  idProdprov="'.$value["id"].'" ><i class="fa fa-pencil"></i></button>
                 <button class="btn btn-danger modalEliminarProdprov" title="eliminar" idProdprov="'.$value["id"].' "><i class="fa fa-times"></i></button>
 
               </div>  
 
             </td>
 
           </tr>
 
           
         </tbody>
         
        ' ; }?> 
         
        </table>
 
            </div>

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