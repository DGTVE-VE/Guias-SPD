<?php
session_start();
require 'include_dao.php';

abstract class PROCESOS {

  const INGRESO = 'INGRESO';
  const PROMOCION = 'PROMOCIÓN';

}

$module = filter_input(INPUT_GET, 'm');
if ($module === NULL || $module === false) {
  $module = 'home';
}

$modulos = [
    "home" => "home.php",
    "filtro" => "filtro.php",
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
    "uploadPerfiles" => "uploadPerfilesForm.php",
    "estrategias" => "estrategias.html",
    "preguntas_frecuentes" => "preguntas_frecuentes.html"
];

//Modulo por default
$modulo = "home.php";
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
    <div class='row'>
      <div class="col-md-1"></div>
      <div class="col-md-10">           
        <div><img src="imgs/logo.png" width="70%" class="center-block"></div>
        <div class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse">
              <?php if (!isset($_SESSION['usuario'])) { ?>  
                <li class="dropdown nav pull-right" id="menuLogin"> 
                  <br>
                  <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Ingreso</a>
                  <div class="dropdown-menu" style="padding:37px;">                                                 
                    <form method="POST" action="login.php" class="navbar-form navbar-right">
                      <div class="form-group">
                        <label></label>
                        <input type="text" name="email" placeholder="Email" class="form-control">
                      </div>
                      <div class="form-group">
                        <label></label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <label></label>
                      </div>

                      <button type="submit" class="btn btn-success">Inicia sesión</button>                            
                    </form>
                  <?php } ?>
                </div>
              </li>
              <?php if (isset($_SESSION['usuario'])) { ?>
                <li class="dropdown nav pull-right" id="menuLogin"><a href="cierraSesion.php"><br>Cerrar sesión</a></li>
              <?php } ?>
              <ul class="nav navbar-nav">
                <li><a class="navbar-header" href="index.php">Inicio</a></li>                                
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingreso<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-level">
                    <li class="dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Educación Básica</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=showGuias&proceso=INGRESO&funcion=DOCENTE">
                            Docentes</a></li>
                        <li><a href="filtro.php?pag=showGuias&proceso=INGRESO&funcion=TECNICO_DOCENTE">
                            Técnicos Docentes</a></li>
                      </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a href="filtro.php?pag=showGuiasMS&proceso=INGRESO&funcion=DOCENTE">Educación Media Superior</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Promoción<b class="caret"></b></a>
                  <ul class="dropdown-menu multi-level">
                    <li class="dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Educación Básica</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=showGuias&proceso=PROMOCION&funcion=TECNICO_DOCENTE">
                            Docentes</a></li>
                        <li><a href="filtro.php?pag=showGuias&proceso=PROMOCION&funcion=TECNICO_DOCENTE">
                            Técnicos Docentes</a></li>
                      </ul>
                    </li>
                    <li class="divider"></li>
                    <li><a href="filtro.php?pag=showGuiasMS&proceso=PROMOCION&funcion=DOCENTE">
                        Educación Media Superior</a></li>
                  </ul>
                </li>
                <li><a href="#" class="dropdown-toggle">Reconocimiento</a></li>
                <li><a href="#" class="dropdown-toggle">Permanencia</a></li>
                <li><a href="?m=repositorio" class="dropdown-toggle">Repositorio</a></li>

              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
      <div class="container theme-showcase" role="main">                
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
              <li><a href="?m=preguntas_frecuentes">Preguntas frecuentes</a></li>
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
              <li><img class="col-md-1 logofoot3" src="imgs/logo-tve-solo-esfera.png"></li>
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
