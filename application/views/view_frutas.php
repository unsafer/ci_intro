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
	<h2>Accediendo a Base de Datos de Jugos!</h2>
        

    <div class="container" style="padding-top: 1em;">
      <table class="table table-hover"">
          <thead>
                  <tr>
                              <th>#</th>
                              <th>Nombre</th>
                              <th>Precio kilo</th>

                  </tr>
          </thead>
          <tbody>
                  <?php
                              foreach($results as $row) { ?>
                                          <tr>
                                                      <td><?php echo $row->id ?> </td>
                                                      <td><?php echo $row->nombre ?></td>
                                                      <td><?php echo $row->preciokilo ?></td>
                                                      

                                          </tr>
                  <?php } ?>
          </tbody>
      </table>
    </div>
        
</div>

</body>
</html>