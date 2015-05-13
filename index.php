<?php
session_start();
require 'include_dao.php';

abstract class PROCESOS {

    const INGRESO = 'INGRESO';
    const PROMOCION = 'PROMOCIÓN';

}

$module = filter_input(INPUT_GET, 'm');
if ($module === NULL || $module === false) {
    $module = 'showGuias';
}

$modulos = [
    "uploadGuia" => "uploadGuidesForm.php",
    "showGuias" => "showGuias.php",
    "showGuia" => "showGuia.php",
    "downloadRecurso" => "downloadRecurso.php",
    "downloadGuia" => "downloadGuia.php",
    "mensaje" => "mensaje.php",
    "uploadMateriales" => "uploadMaterialForm.php",
    "repositorio" => "repositorio.php",
    "showGuiasMS" => "showGuiasMS.php",
    "showGuiaMS" => "showGuiaMS.php",
    "uploadGuiaMS" => "uploadGuidesMSForm.php",
    "uploadMaterialesMS" => "uploadMaterialMSForm.php",
    "showPerfiles" => "showPerfiles.php",
    "uploadPerfiles" => "uploadPerfilesForm.php"
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
        <link href="css/estilo.css" type="text/css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>        

        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar.js"></script>

        <script src="js/spd.js"></script>
        <title>Guías Servicio Profesional Docente</title>
    </head>
    <body>
        <div class="col-md-1"></div>
        <div class="col-md-10">           
            <div><img src="imgs/logo.png" width="70%" class="center-block"></div>
            <nav role="navigation" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Menú</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--                <a href="#" class="navbar-brand">Logotipo</a>-->
                </div>

                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="dropdown deeper parent">
                            <a data-toggle="dropdown" class="dropdown-toggle">Ingreso<b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu">
                                <li class="dropdown dropdown-submenu">
                                    <a data-toggle="dropdown" class="dropdown-toggle">Educación Básica<b class="caret"></b></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="?m=showPerfiles">Docentes</a></li>
                                        <li><a href="?m=showPerfiles">Técnicos Docentes</a></li>
                                    </ul>                            
                                </li>
                                <li><a href="?m=showPerfiles">Media Superior</a></li>
                            </ul>                            
                        </li>  
                        <li><a href="?m=filtro&filtro=ingreso">Ingreso</a></li>
                        <li><a href="?m=filtro&filtro=ingreso">Promoción</a></li>                        
                    </ul>
                    <?php if (!isset($_SESSION['usuario'])) { ?>                
                        <form method="POST" action="login.php" class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Inicia sesión</button>                            
                        </form>
                    <?php } ?>
                    <?php if (isset($_SESSION['usuario'])) { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="cierraSesion.php">Cerrar sesión</a></li>
                        </ul>
                    <?php } ?>
                </div>
            </nav>

            <div class="container-fluid theme-showcase" role="main">                
                <div class="row"> 
                    <div class="col-md-2 sidebar">
                        <ul class="nav nav-sidebar">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle">Nivel Modalidad y Asignatura <b class="caret"></b></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="?m=showGuias">Básica</a></li>
                                    <li><a href="?m=showGuiasMS">Media Superior</a></li>
                                </ul>
                            </li>   
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle">Perfiles parámetros e indicadores<b class="caret"></b></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="?m=showPerfiles">Básica</a></li>
                                    <li><a href="?m=showPerfiles">Media Superior</a></li>
                                </ul>                            
                            </li>    
                            <li><a href="?m=showGuias">Guias de estudio</a></li>
                            <li><a href="?m=repositorio">Repositorio de materiales de consulta</a></li>
                            <li><a href="?m=estrategias">Estrategias de estudio</a></li>
                            <li><a href="?m=simulador">Simulador de examen</a></li>
                            <li><a href="?m=faq">Preguntas frecuentes</a></li>
                            <li><a href="?m=contacto">Contacto</a></li>

                            <?php if (isset($_SESSION['usuario'])) { ?>
                                <h3>Administración</h3>
                                <li class="dropdown nav nav-sidebar">
                                    <a data-toggle="dropdown" class="dropdown-toggle"> Subir Documentos <b class="caret"></b></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="?m=uploadGuia">Guias Básica</a></li>
                                        <li><a href="?m=uploadGuiaMS">Guias Media Superior</a></li>
                                        <li><a href="?m=uploadMateriales">Materiales Básica</a></li>
                                        <li><a href="?m=uploadMaterialesMS">Materiales Media Superior</a></li>
                                        <li><a href="?m=uploadPerfiles">Perfiles Educación Básica</a></li>
                                    </ul>
                                </li>  
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <?php require $modulo; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <footer id="footer" class="col-md-12">
        <div class="footer-bottom">
            <div class="container">
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                            <li><img class="col-md-1 logofoot2" src="imgs/sep.png"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/seb.jpg"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/imgres.jpg"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/inee.png"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/logo-tve-solo-esfera.png"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/log_ilce.png"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/logounadm.png"></li>
                        <li><img class="col-md-1 logofoot" src="imgs/normateca.png"></li>
                    </ul> <br>
                    <hr>
                    <p class="pull-left">© 2015 DGTVE Desarrollado por Ventana Educativa  </p>
                </div>
            </div>
        </div>
        </footer>
    </body>
</html>
