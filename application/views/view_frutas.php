<!DOCTYPE html>
<html lang="en">
<head>
        
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $title; ?> </title>
  <link href="<?= base_url();?>bootstrap/css/main.css" rel="stylesheet">
  
  <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="<?= base_url();?>bootstrap/js/jquery-1.11.1.min.js"></script>
  <script src="<?= base_url();?>bootstrap/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">
    function mostrar_modal(nombre,preciokilo){
        //El nodo recibido es SPAN
        //alert(nombre+preciokilo);
        $('#myModal').modal({
                show: true 
            });
        
       $('#myModalLabel').text(nombre)
       document.modal.precio_fruta.value = preciokilo;
       document.modal.nombre_fruta.value = nombre;

       document.modal.action = "<?php echo base_url();?>Site/modificar_frutas";

    };
    $(function(){

    });
    
    
</script>

<body>

<div id="container">
	<ul class="nav nav-tabs">
        <li> <a href="home">Home</a></li>
        <li><a href="insumos">Insumos</a></li>
        <li  class="active"><a href="frutas">Frutas</a></li>
        <li><a href="jugos">Jugos</a></li>
        <li><a href='<?php echo base_url() ."site/logout" ?>'>Cerrar Sesion</a></li>        
        </ul>
	
<form class="navbar-form pull-right">
  <input type="text" class="span2">
  <button type="submit" class="btn">Submit</button>
</form>
        

    <div class="container" style="padding-top: 1em;">
      <table class="table table-hover"">
          <thead>
                  <tr class="warning">
                              <th></th>
                              <th>Nombre</th>
                              <th>Precio kilo</th>

                  </tr>
          </thead>
          <tbody>
                  <?php
                  $x=1;
                              foreach($results as $row) { ?>
                                          <tr class="success">
                                                      <td align="center"> 
                                                          <?php if($x==1){ ?>
                                                          <img src="<?= base_url();?>images/mango.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==2){ ?>
                                                          <img src="<?= base_url();?>images/frutilla.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==3){ ?>
                                                          <img src="<?= base_url();?>images/naranja.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==4){ ?>
                                                          <img src="<?= base_url();?>images/pina.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==5){ ?>
                                                          <img src="<?= base_url();?>images/sandia.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==6){ ?>
                                                          <img src="<?= base_url();?>images/durazno.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==7){ ?>
                                                          <img src="<?= base_url();?>images/chirimoya.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==8){ ?>
                                                          <img src="<?= base_url();?>images/papaya.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==9){ ?>
                                                          <img src="<?= base_url();?>images/platano.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==10){ ?>
                                                          <img src="<?= base_url();?>images/maracuya.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==11){ ?>
                                                          <img src="<?= base_url();?>images/manzana.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==12){ ?>
                                                          <img src="<?= base_url();?>images/guanabana.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          <?php if($x==13){ ?>
                                                          <img src="<?= base_url();?>images/guayaba.png" class="img-rounded" alt="Rounded Image"> 
                                                          <?php }  ?>
                                                          
                                                          
                                                      </td>
                                                      <td><?php echo $row->nombre ?></td>
                                                      <td><?php echo $row->preciokilo ?></td>
                                                      <td><span type="button" onclick="mostrar_modal('<?php echo $row->nombre ?>', '<?php echo $row->preciokilo ?>');" class="btn btn-default">Modificar</span></td>
                                                      

                                          </tr>
                  <?php $x++; } ?>
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
        <div class="modal-body" name='precio_fruta'>
            <p>Precio:</p>
            
            <form action="" method="post" name="modal">
            <input type="hidden" name="nombre_fruta">
            <input id="precio_input" type = 'text' name='precio_fruta'>
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