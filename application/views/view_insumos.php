<!DOCTYPE html>

<html lang="en">

  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/> 
    <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="<?= base_url();?>bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<title> <?php echo $title; ?> </title>

</head>

<script type="text/javascript">
    $(function(){
        $('#btn_agua').on('click', function(){
            $('#myModal').modal({
                show: true 
            }) 
            $('#myModalLabel').text("Modificar Agua")
            document.modal.f1.value = "<?php echo $results[0]->agua; ?>";
            document.modal.action = "<?php echo base_url();?>Site/modificar_agua";
            
        });        
        $('#btn_azucar').on('click', function(){
            $('#myModal').modal({
                show: true 
            }) 
            $('#myModalLabel').text("Modificar Azucar")
            document.modal.f1.value = "<?php echo $results[0]->azucar; ?>";
            document.modal.action = "<?php echo base_url();?>Site/modificar_azucar";
        });
        $('#btn_leche').on('click', function(){
            $('#myModal').modal({
                show: true 
            }) 
            $('#myModalLabel').text("Modificar Leche")
            document.modal.f1.value = "<?php echo $results[0]->leche; ?>";
            document.modal.action = "<?php echo base_url();?>Site/modificar_leche";
        });
        $('#btn_gastoscomunes').on('click', function(){
            $('#myModal').modal({
                show: true 
            }) 
            $('#myModalLabel').text("Modificar Gastos Comunes")
            document.modal.f1.value = "<?php echo $results[0]->gastoscomunes; ?>";
            document.modal.action = "<?php echo base_url();?>Site/gastos_comunes";
        });
        $('#btn_manodeobra').on('click', function(){
            $('#myModal').modal({
                show: true 
            }) 
            $('#myModalLabel').text("Modificar Mano de Obra")
            document.modal.f1.value = "<?php echo $results[0]->manodeobra; ?>";
            document.modal.action = "<?php echo base_url();?>Site/mano_obra";
        });       
    });
    
</script>

<body>
    
<div id="container">
	<ul class="nav nav-tabs">
        <li> <a href="home">Home</a></li>
        <li class="active"><a href="insumos">Insumos</a></li>
        <li><a href="frutas">Frutas</a></li>
        <li><a href="jugos">Jugos</a></li>
        <li><a href='<?php echo base_url() ."site/logout" ?>'>Cerrar Sesion</a></li>        
        </ul>
    
    <div class="container" style="padding-top: 1em;">
      <h1>Ingredientes!</h1>
      <table class="table table-hover">
          <thead>
                  <tr class="warning">
                            <th></th>  
                            <th>Nombre del Ingredientes</th>
                              <th>Precio</th>
                              <th></th>
                  </tr>
          </thead>
          <tbody>
           <?php
                              foreach($results as $row) { ?>
                  <tr>
                       <td align="center" class="success"><img src="<?= base_url();?>images/agua.png" class="img-rounded" alt="Rounded Image"></td><td class="success">Agua</td><td class="success"><?php echo $row->agua ?></td><td class="success"><button type="button" id="btn_agua" class="btn btn-default" >Modificar</button></td>
                  </tr>
                  <tr>
  
                       <td align="center" class="active"><img src="<?= base_url();?>images/azucar.png" class="img-rounded" alt="Rounded Image"></td><td class="active">Azucar</td><td class="active"><?php echo $row->azucar ?></td><td class="active"><button type="button" id="btn_azucar" class="btn btn-default" >Modificar</button></td>  
                  </tr>
                  <tr>

                        <td align="center" class="danger"><img src="<?= base_url();?>images/milk.png" class="img-rounded" alt="Rounded Image"></td><td class="danger">Leche</td><td class="danger"><?php echo $row->leche ?></td><td class="danger"><button type="button" id="btn_leche" class="btn btn-default" >Modificar</button></td>  
                  </tr>
                                          
            <?php } ?>                              
                  
          </tbody>
      </table>

      <h1>Gastos!</h1>
      <table class="table table-hover">
          <thead>
                  <tr class="warning">
                              <th></th>
                              <th>Nombre del Gasto</th>
                              <th>Valor</th>
                              <th></th>
                  </tr>
          </thead>
          <tbody>
           <?php
                              foreach($results as $row) { ?>
                  <tr>
                       <td align="center" class="success"><img src="<?= base_url();?>images/light.png" class="img-rounded" alt="Rounded Image"></td><td class="success">Gastos Comunes</td><td class="success"><?php echo $row->gastoscomunes ?></td><td class="success"><button type="button" id="btn_gastoscomunes" class="btn btn-default" >Modificar</button></td>                               
                  </tr>
                  <tr>
  
                       <td align="center"  class="active"><img src="<?= base_url();?>images/empleados.png" class="img-rounded" alt="Rounded Image"></td><td class="active">Mano de Obra</td><td class="active"><?php echo $row->manodeobra ?></td><td class="active"><button type="button" id="btn_manodeobra" class="btn btn-default" >Modificar</button></td>  
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
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="modal-body">
            <p>Precio:</p>
            
            <form action="" method="post" name="modal">
            <input id="precio_input" type = 'text' name='f1'>
            <br>   
            <br>  
            <br>  
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type='submit' class="btn btn-primary" name="guardar">Guardar Cambios</button>
            </div>
            </form>
            
        </div>
      </div>
      
        
    </div>
  </div>
</div>


