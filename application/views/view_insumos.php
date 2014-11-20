<!DOCTYPE html>


<script type="text/javascript"> 

$(document).on("click", ".open-Modal", function () {
var myDNI = $(this).data('id');
$(".modal-body #DNI").val( myDNI );
});

</script> 



    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/> 
    <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="<?= base_url();?>bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<title> <?php echo $title; ?> </title>

</head>
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
      <h2>Ingredientes</h2>
      <table class="table table-hover">
          <thead>
                  <tr class="active">
                              <th></th>
                              <th>Ingrediente</th>
                              <th>Precio</th>
                              
                              

                  </tr>
          </thead>
          <tbody>
           <?php
                              foreach($results as $row) { ?>
                  <tr>
                       <td class="success" align="center"> <img src="<?= base_url();?>images/agua.png" class="img-rounded" alt="Rounded Image"> </td> <td class="success">Agua</td><td class="success"><?php echo $row->agua ?></td><td class="success" align="center"><button type="button" class="btn btn-default" data-id="$row->id" data-toggle="modal" data-target="#myModal">Modificar</button></td>                               
                  </tr>
                  <tr>
  
                       <td class="warning" align="center"> <img src="<?= base_url();?>images/azucar.png" class="img-rounded" alt="Rounded Image"> </td> <td  class="warning">Azucar</td><td  class="warning"><?php echo $row->azucar ?></td><td  class="warning">Moficar</td>  
                  </tr>
                  <tr>

                        <td class="danger" align="center"> <img src="<?= base_url();?>images/milk.png" class="img-rounded" alt="Rounded Image"> </td> <td class="danger">Leche</td><td class="danger"><?php echo $row->leche ?></td><td class="danger">Moficar</td>  
                  </tr>
                                          
            <?php } ?>                              
                  
          </tbody>
      </table>

      <h2>Gastos</h2>
      <table class="table table-hover">
          <thead>
                  <tr class="active">
                              <th></th>
                              <th>Gasto</th>
                              <th>Valor</th>
                              <th></th>
                              

                  </tr>
          </thead>
          <tbody>
           <?php
                              foreach($results as $row) { ?>
                  <tr>
                       <td class="success" align="center"> <img src="<?= base_url();?>images/light.png" class="img-rounded" alt="Rounded Image"> </td> <td class="success">Gastos Comunes</td> <td class="success"><?php echo $row->gastoscomunes ?></td> <td class="success">Moficar</td>                               
                  </tr>
                  <tr>
  
                       <td class="warning" align="center"> <img src="<?= base_url();?>images/empleados.png" class="img-rounded" alt="Rounded Image"> </td> <td class="warning">Mano de Obra</td> <td class="warning"><?php echo $row->manodeobra ?></td> <td class="warning">Moficar</td>  
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
<p>some content</p>
<input type="text" name="DNI" id="DNI" value=""/>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>