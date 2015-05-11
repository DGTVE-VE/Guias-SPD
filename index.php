<?php
session_start();
require 'include_dao.php';
$module = filter_input(INPUT_GET, 'm');
if ($module === NULL || $module === false) {
    $module = 'uploadGuia';
}

$modulos = [
    "uploadGuia" => "uploadGuidesForm.php",
    "showGuias" => "showGuias.php",
    "showGuia" => "showGuia.php",
    "downloadRecurso" => "downloadRecurso.php",
    "downloadGuia" => "downloadGuia.php",
    "mensaje" => "mensaje.php",
    "uploadMateriales" => "uploadMaterialForm.php"
];

//Modulo por default
$modulo = "showGuias.php";
if (array_key_exists($module, $modulos)) {
    $modulo = $modulos[$module];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>        
        <script src="js/spd.js"></script>
        <title>Guías Servicio Profesional Docente</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">                    
                    <a class="navbar-brand" href="#">GSPD</a>
                    
                </div>
                <div id="navbar" >
                    <ul class="nav navbar-nav">
                        <li><a href="?m=showGuias">Guías</a></li>
                        <li><a href="?m=uploadGuia">Subir</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
                <div class="navbar-collapse collapse">
                    
                <?php if (!isset($_SESSION['usuario'])){?>                
                    <form method="POST" action="login.php" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Inicia sesión</button>                            
                    </form>
                <?php } else {?>
                    <a href="cierraSesion.php"> Cierra Sesión </a>
                <?php }?>
                </div><!--/.navbar-collapse -->
                
            </div>
        </nav>
        <div class="container-fluid theme-showcase" role="main">
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Servicio profesional docente</h1>
                <p>Descarga la guía y los recursos asociados a esta para estudiar</p>
            </div>
            <div class="row"> 
                <div class="col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li> <a href="?m=showGuias">Guias</a></li>
                        <li> <a href="#">Materiales </a></li>
                        <li> <a href="#">Perfiles </a></li>
                        <li> <a href="#">Repositorio </a></li>                        
                    </ul>
                    <?php if (isset ($_SESSION['usuario'])){?>
                    <h3>Administración</h3>
                    <ul class="nav nav-sidebar">
                        <li> <a href="?m=uploadGuia">Sube Guias</a></li>
                        <li> <a href="?m=uploadMateriales">Sube Materiales</a></li>
                        <li> <a href="#">Modifica Guias</a></li>
                        <li> <a href="#">Modifica Materiales</a></li>                        
                    </ul>
                    <?php }?>
                </div>
                <div class="col-md-10">
                    <?php require $modulo; ?>
                </div>
            </div>
            
            <div class="row"> 
                <div class="col-md-12">
                    &copy; DGTVE 2015
                </div>
            </div>
        </div>


        
    </body>
</html>