<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>bootstrap/css/global.css" rel="stylesheet" type="text/css">
       
    <title> Login Page </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link href="<?php echo base_url(); ?>assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/supersized.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
 
<div id="container">
    <h1><br>Sistema de Administracion!</h1><br><br>
    
    
    
    <?php echo form_open('site/login_validation'); 
    
     echo validation_errors(); 
            $opts = 'placeholder="Ingrese su Email"';
                
            echo form_input( 'email', '', $opts);   
            echo form_password('password', 'password'); 
            echo form_submit( 'login_validation', 'Iniciar Sesion' ); 
        

     echo form_close(); 
    
    ?>
    

        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>
</body>
</html>