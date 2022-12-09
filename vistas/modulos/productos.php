<?php



?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar producto

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Código</th>
           <th>Descripción</th>
           <th>Categoría</th>
           <th>Stock</th>
           <th>Precio de compra</th>
           <th>Precio de venta</th>
           <th>Agregado</th>
           <th style="    width: 101px;">Acciones</th>
           
         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                  
                  <option value="">Selecionar categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                  }

                  ?>
  
                </select>
              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>

              </div>

            </div>
            <br>
             <!-- ENTRADA PARA STOCK -->

          
             <div class="form-group row">

                   <div class="col-xs-4">
                   <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                  <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>

                  </div>
                  </div>

   

             <!-- ENTRADA PARA StockMax -->

           
                <div class="col-xs-4">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background-color: #78e08f;"><i  class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoStockMax" name="nuevoStockMax" step="any" min="0" placeholder="Stock Max" required>

                  </div>

                </div>   

<!-- ENTRADA PARA StockMin -->



   <div class="col-xs-4">
   
     <div class="input-group">
     
       <span class="input-group-addon" style="background-color: #e55039;"><i class="fa fa-arrow-down"></i></span> 

       <input type="number" class="form-control input-lg" id="nuevoStockMin" name="nuevoStockMin" step="any" min="0" placeholder="Stock Min" required>

     </div>

   </div>
   </div>
             


             <!-- ENTRADA PARA PRECIO COMPRA -->

             <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="Precio de compra" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Precio de venta" required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

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

                <select class="form-control input-lg nproveedor1" >
                  
                  <option value="">Selecionar Proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);
                  foreach ($proveedores as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>
                <input type="hidden" id="nsproveedor1" name="nuevoProveedor1" value="">

              </div>

              </div>

              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio1" id="nsprecio1" min="0" placeholder="precio" >
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

                <select class="form-control input-lg nproveedor2" >
                  
                  <option value="">Selecionar Proveedor</option>
 
                  <?php

                  $item = null;
                  $valor = null;

                  $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);
                  foreach ($proveedores as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>
                <input type="hidden" id="nsproveedor2" name="nuevoProveedor2" value="">

              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio2" id="nsprecio2" min="0" placeholder="precio" >
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

                <select class="form-control input-lg nproveedor3"   >
                  
                  <option value="">Selecionar Proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);
                  foreach ($proveedores as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>
                <input type="hidden" id="nsproveedor3" name="nuevoProveedor3" value="">

              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio3"  id="nsprecio3" min="0" placeholder="precio" >
                </div>

              </div>
              </div>


     <!-- CERRAR AGREGAR PROVEEDOR -->


   <!--........................................................................................................................................... -->

     <!--........................................................................................................................................... -->

   <!--........................................................................................................................................... -->


     <button type="button" onclick="form3()" id="boton2" style="display: none ;" class="btn btn-primary" >Agregar Proveedor</button> 

                       <!-- ENTRADA PARA AGREGAR PROVEEDOR -->
        
                       <div class="form-group row " id="form4" style="display: none ;">
            <div class="col-xs-6">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg nproveedor4"   >
                  
                  <option value="">Selecionar Proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);
                  foreach ($proveedores as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>
                <input type="hidden" id="nsproveedor4" name="nuevoProveedor4" value="">

              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio4"  id="nsprecio4" min="0" placeholder="precio" >
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

                <select class="form-control input-lg nproveedor5"  >
                  
                  <option value="">Selecionar Proveedor</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);
                  foreach ($proveedores as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>
                <input type="hidden" id="nsproveedor5" name="nuevoProveedor5" value="">

              </div>

              </div>


              <div class="col-xs-6">
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-money"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoPrecio5" id="nsprecio5" min="0" placeholder="precio" >
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




     <button type="button" onclick="form5()" id="boton4" style="display: none ;" class="btn btn-primary" style="border-radius: 83%; align-content: center;" >Agregar Proveedor</button> 






          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

        <?php

          $crearProducto = new ControladorProductos();
          $crearProducto -> ctrCrearProducto();

        ?>  

    </div>

  </div>

</div>





<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg"  name="editarCategoria" readonly required>
                  
                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>

           
          
            <div class="form-group row">

<div class="col-xs-4">
<div class="input-group">

<span class="input-group-addon"><i class="fa fa-check"></i></span> 

<input type="number" class="form-control input-lg"  id="editarStock" name="editarStock" min="0" placeholder="Stock" required>

</div>

</div>



<!-- ENTRADA PARA StockMax -->


<div class="col-xs-4">

  <div class="input-group">
  
    <span class="input-group-addon" style="background-color: #78e08f;"><i  class="fa fa-arrow-up"></i></span> 

    <input type="number" class="form-control input-lg" id="editarStockMax" name="editarStockMax"  placeholder="Stock Max" required>

  </div>

</div>   

<!-- ENTRADA PARA StockMin -->


<div class="col-xs-4">

<div class="input-group">

<span class="input-group-addon" style="background-color: #e55039;"><i class="fa fa-arrow-down"></i></span> 

<input type="number" class="form-control input-lg" id="editarStockMin" name="editarStockMin" step="any" min="0" placeholder="Stock Min" required>

</div>

</div>
</div>

             <!-- ENTRADA PARA PRECIO COMPRA -->

             <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" required>

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO VENTA -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" readonly required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                      <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>
                  </div>

                  </div>

                  <hr>    <h3>Proveedores</h3> <hr>   <br>
 <!-- ENTRADA PARA nuevoProveedor1 -->
<div class="row">
  <div class="col-md-6">
  <div class="form-group">
  <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-check"></i></span> 

              <input type="text" class="form-control input-lg" id="editarProveedor1" name="editarProveedor1" min="0" placeholder="Agregar Proveedor" >

            </div>

          </div>
          </div>

  <div class="col-md-6">


  <div class="form-group">
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio1" name="editarPrecio1" min="0" placeholder="Agregar Precio" >

            
                </div>
                </div>

  </div>
  </div>







            <div class="row">
  <div class="col-md-6">

  
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" id="editarProveedor2" name="editarProveedor2" min="0" placeholder="Agregar Proveedor" >

              </div>

            </div>

  </div>
  <div class="col-md-6">
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio2" name="editarPrecio2" min="0" placeholder="Agregar Precio" >

              </div>

            </div>

  </div>
</div>





            <div class="row">
  <div class="col-md-6">

  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="text" class="form-control input-lg" id="editarProveedor3" name="editarProveedor3" min="0" placeholder="Agregar Proveedor" >

              </div>

            </div>


  </div>
  <div class="col-md-6">
  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio3" name="editarPrecio3" min="0" placeholder="Agregar Precio" >

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

                <input type="text" class="form-control input-lg" id="editarProveedor4" name="editarProveedor4" min="0" placeholder="Agregar Proveedor" >

              </div>

            </div>

  </div>
  <div class="col-md-6">

  <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="editarPrecio4" name="editarPrecio4" min="0" placeholder="Agregar Precio" >

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

                <input type="text" class="form-control input-lg" id="editarProveedor5" name="editarProveedor5" min="0" placeholder="Agregar Proveedor" >

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




             

         

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

        <?php

          $editarProducto = new ControladorProductos();
          $editarProducto -> ctrEditarProducto();

        ?>      

    </div>

  </div>

</div>








































<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProductos" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-dialog-centered modal-m ">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

  

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" >

          <div class="box-body">

          <center> <h2> <input style="background-color: transparent; border:transparent; text-align:center" enabled type="text" id="editarDescripcion1"></h2></center>
                  <hr style="border: 1px solid #eee;;">
          <img src="vistas/img/productos/default/anonymous.png"  style="    border-radius: 31px;
    padding: 24px;" class="img-thumbnail previsualizar" width="auto">

        <input type="hidden" name="imagenActual" id="imagenActual">

        <center>

 <br><hr style="    border-top: 4px solid #eee;"><h3 style="text-decoration:solid ;">Proveedores del producto</h3>  <hr  style="    border-top: 4px solid #eee;"><br>

 </center>
        
      <center><table class="table table-bordered ">
  <thead class="thead-dark">
    <tr>
   
      <th scope="col" >Proveedor</th>
      <th scope="col">Precio</th>

    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td style="width: 500%;"><input type="text" disabled style=" width:100%; background-color: transparent; border:transparent;" id="mostrarProveedor1"></td>
      <td><input type="text"disabled style="background-color: transparent; border:transparent" id="mostrarPrecio1"></td>
     
    </tr>
    <tr>
    
    <td><input type="text"disabled style="background-color: transparent; border:transparent"id="mostrarProveedor2"></td>
      <td><input type="text" disabled style="background-color: transparent; border:transparent" id="mostrarPrecio2"></td>
  
    </tr>
    <tr>
    
    <td><input type="text" disabled style="background-color: transparent; border:transparent"id="mostrarProveedor3"></td>
      <td><input type="text" disabled style="background-color: transparent; border:transparent" id="mostrarPrecio3"></td>
    </tr>
    <tr>
    
    <td><input type="text" disabled style="background-color: transparent; border:transparent" id="mostrarProveedor4"></td>
      <td><input type="text" disabled style="background-color: transparent; border:transparent" id="mostrarPrecio4"></td>

  </tr>
  <tr>
    
  <td><input type="text" disabled style="background-color: transparent; border:transparent" id="mostrarProveedor5"></td>
      <td><input type="text"  disabled style="background-color: transparent; border:transparent" id="mostrarPrecio5"></td>

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

          $editarProducto = new ControladorProductos();
          $editarProducto -> ctrEditarProducto();

        ?>      

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

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

$(".nproveedor1").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#nsproveedor1").val(texto);
});
</script>
<script>  
$(".nproveedor2").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#nsproveedor2").val(texto);
});
</script>
<script>  
$(".nproveedor3").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#nsproveedor3").val(texto);
});
</script>
<script>  
$(".nproveedor4").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#nsproveedor4").val(texto);
});
</script>
<script>  
$(".nproveedor5").change(function() {

  var texto = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado

  $("#nsproveedor5").val(texto);
});

</script>