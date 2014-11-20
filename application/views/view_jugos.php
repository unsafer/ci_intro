<!DOCTYPE html>
<html lang="en">
<head>
        
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $title; ?> </title>
  <link href="<?= base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>bootstrap/css/main.css" rel="stylesheet">
  
  <link href="<?= base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div id="container">
	<a href="home">Home</a>
        <a href="insumos">Insumos</a>
        <a href="frutas">Frutas</a>
        <a href="jugos">Jugos</a>
        <a href='<?php echo base_url() ."site/logout" ?>'>Cerrar Sesion</a>
        
        
        <?php
        /*
        foreach($results as $row){
            echo $row->id;
            echo " ";
            echo $row->name;
            echo "<br />";
        }
        */
        ?>
        
    <div class="container" style="padding-top: 1em;">
      <table class="table table-hover" align="center">
          <thead>
                  <tr>
                              <th>#</th>
                              <th>Nombre del Jugo</th>
                              <th>Cantidad de Agua (ml)</th>
                              <th>Azucar (gr)</th>
                              <th>Leche (ml)</th>
                              <th>Frutas</th>
                              <th>Precio Base</th>
                              <th>Precio Venta</th>
                              
                  </tr>
          </thead>
          <tbody>
                  <?php
                              foreach($jugos as $row) { ?>
                                          <tr>
                                                      <td><?php echo $row->id ?> </td>
                                                      <td><?php echo $row->nombre ?></td>
                                                      <td><?php echo $row->agua ?></td>
                                                      <td><?php echo $row->azucar ?></td>
                                                      <td><?php echo $row->leche ?></td>
                                                      <td><?php      $query = mysql_query("select fru.nombre from frutas fru join jugos_has_frutas jhf on fru.id = jhf.frutas_id where jhf.jugos_id = '".$row->id."' order by fru.nombre") or die(mysql_error());
                                                                        while($elemento= mysql_fetch_array($query)){
                                                                        echo $elemento['nombre'].' ';

                                                                        }
                                                                        ?> </td>
                                                      <td><?php echo $row->base ?></td>
                                                      <td><?php echo $row->venta ?></td>

                                                      
                                          </tr>
                              <?php }
                  ?>
          </tbody>
      </table>
    </div>
        
</div>

</body>
</html>