<!DOCTYPE html>

<html lang="en">


    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/> 
    <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="<?= base_url();?>bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<title> <?php echo $title; ?> </title>

</head>
<body>

<div id="container">
	<a href="home">Home</a>
        <a href="insumos">Insumos</a>
        <a href="frutas">Frutas</a>
        <a href="jugos">Jugos</a>
        <a href='<?php echo base_url() ."site/logout" ?>'>Cerrar Sesion</a>
	<h2>Accediendo a Base de Datos de Jugos!</h2>
        

    <div class="container" style="padding-top: 1em;">
      <h1>Tabla de Ingredientes!</h1>
      <table class="table table-hover">
          <thead>
                  <tr>
                              <th>Nombre del Ingredientes</th>
                              <th>Precio</th>
                              <th></th>
                              

                  </tr>
          </thead>
          <tbody>
           <?php
                              foreach($results as $row) { ?>
                  <tr>
                       <td>Agua</td><td><?php echo $row->agua ?></td><td ><button type="button" class="btn btn-default" title="Add this item" data-id="1234" data-toggle="modal" data-target="#myModal">Modificar</button></td>                               
                  </tr>
                  <tr>
  
                       <td>Azucar</td><td><?php echo $row->azucar ?></td><td>Moficar</td>  
                  </tr>
                  <tr>

                        <td>Leche</td><td><?php echo $row->leche ?></td><td>Moficar</td>  
                  </tr>
                                          
            <?php } ?>                              
                  
          </tbody>
      </table>

      <h1>Tabla de Gastos!</h1>
      <table class="table table-hover">
          <thead>
                  <tr>
                              <th>Nombre del Gasto</th>
                              <th>Valor</th>
                              <th></th>
                              

                  </tr>
          </thead>
          <tbody>
           <?php
                              foreach($results as $row) { ?>
                  <tr>
                       <td>Gastos Comunes</td><td><?php echo $row->gastoscomunes ?></td><td>Moficar</td>                               
                  </tr>
                  <tr>
  
                       <td>Mano de Obra</td><td><?php echo $row->manodeobra ?></td><td>Moficar</td>  
                  </tr>

                                          
            <?php } ?>                              
                  
          </tbody>
      </table>
      
</div>
        
</div>

</body>
</html>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar Agua</h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <p>Precio:</p>
            <?php $agua = $row->agua; ?>
            
            <form action="<?php echo base_url();?>Site/insert" method="post">
            <input type = 'text' name='f1' value="<?=$row->agua?>"<br>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type='submit' class="btn btn-primary">Guardar Cambios</button>
            </div>
            </form>
            
        </div>
      </div>
      
        
    </div>
  </div>
</div>

<!--hacer modals para cada modificar-->