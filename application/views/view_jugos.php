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
	<ul class="nav nav-tabs">
        <li> <a href="home">Home</a></li>
        <li><a href="insumos">Insumos</a></li>
        <li><a href="frutas">Frutas</a></li>
        <li class="active"><a href="jugos">Jugos</a></li>
        <li><a href='<?php echo base_url() ."site/logout" ?>'>Cerrar Sesion</a></li> 
        </ul>
        
        
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
                  <tr class="warning">
                              <th>Id</th>
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
                  <?php foreach($jugos as $row) { ?>
                            <tr class="success">
                                    <td><?php echo $row->id ?> </td>
                                    <td><?php echo $row->nombre ?></td>
                                    <td><?php echo $row->agua ?></td>
                                    <td><?php echo $row->azucar ?></td>
                                    <td><?php echo $row->leche ?></td>
                                    <td><?php echo $row->frutas ?></td>
                                    <td><?php echo $row->precio_base ?></td>
                                    <td><?php echo $row->precio_venta ?></td>

                            </tr>
                     <?php } ?>
          </tbody>
      </table>
    </div>
        
</div>

</body>
</html>