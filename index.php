<?php
session_start();
require 'include_dao.php';

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
    "preguntas_frecuentes" => "preguntas_frecuentes.html",
    "contacto" => "contacto.php",
    "uploadPerfilesMS" => "uploadPerfilesMSForm.php",
    "showPerfilesMS" => "showPerfilesMS.php",
    "concurso" => "concurso.php",
    "show" => "show.php",
    "enconstruccion" => "enconstruccion.php"
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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar.js"></script>

    <script src="js/spd.js"></script>
    <title>Guías Servicio Profesional Docente</title>
  </head>
  <body><?php include_once("analyticstracking.php") ?>
    <div class='row'>
      <div class="col-md-1"></div>
      <div class="col-md-10">           
        <div><img src="imgs/logo1.png" width="70%" class="center-block"></div>
        <div class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" 
                      data-target=".navbar-collapse">
                <span class="sr-only">Menú</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a class="navbar-header" href="index.php">
                    Inicio
                  </a></li>                                
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Ingreso
                    <b class="caret"></b></a>
                  <ul class="dropdown-menu multi-level">
                    <li class="dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Educación Básica</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=concurso&imagen=INGRESO-EB-OK.jpg&proceso=INGRESO&funcion=DOCENTE&nivel=BASICA">
                            Docentes y Técnicos Docentes</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Educación Media Superior</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=concurso&imagen=PROMOCION-INGRESO-EMS-OK.jpg&proceso=INGRESO&funcion=DOCENTE&nivel=MEDIA">
                            Docentes y Técnicos Docentes</a></li>                    
                      </ul>
                    </li>
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
                        <li><a href="filtro.php?pag=concurso&imagen=INGRESO-DIRECCION-EB-OK.jpg&proceso=PROMOCION&funcion=DIRECTOR&nivel=BASICA">
                            Dirección</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=INGRESO-SUPERVISION-EB-OK.jpg&proceso=PROMOCION&funcion=SUPERVISOR&nivel=BASICA">
                            Supervisión</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=INGRESO-ATP-EB-OK.jpg&proceso=PROMOCION&funcion=ATP&nivel=BASICA">
                            Asesoría Técnica Pedagógica</a></li>
                      </ul>
                    </li>

                    <li class="dropdown-submenu">

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Educación Media Superior</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=concurso&imagen=PROMOCION-DIRECCION-EMS-OK.jpg&proceso=PROMOCION&funcion=DIRECTOR&nivel=MEDIA">
                            Dirección</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=PROMOCION-SUPERVISION-EMS-OK.jpg&proceso=PROMOCION&funcion=SUPERVISOR&nivel=MEDIA">
                            Supervisión</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=PROMOCION-ATP-EMS-OK.jpg&proceso=PROMOCION&funcion=ATP&nivel=MEDIA">
                            Asesoría Técnica Pedagógica</a></li>
                      </ul>                      
                    </li>
                  </ul>
                </li>
                <li><a href="?m=enconstruccion" class="dropdown-toggle">
                    Reconocimiento</a></li>
                <li><a href="?m=enconstruccion" class="dropdown-toggle">
                    Permanencia</a></li>
                <li><a href="?m=repositorio" class="dropdown-toggle">
                    Repositorio</a></li>
                <?php if (!isset($_SESSION['usuario'])) { ?>  
                  <li id="menuLogin">                     
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                    <div class="dropdown-menu" style="padding:37px;">                                                 
                      <form method="POST" action="login.php" class="navbar-form navbar-right">
                        <div class="form-group">
                          <label></label>
                          <input type="text" name="email" placeholder="Email" 
                                 class="form-control">
                        </div>
                        <div class="form-group">
                          <label></label>
                          <input type="password" name="password" 
                                 placeholder="Password" class="form-control">
                          <label></label>
                        </div>

                        <button type="submit" class="btn btn-success">
                          Inicia sesión</button>                            
                      </form>

                    </div>
                  </li>
                <?php } ?>
                <?php if (isset($_SESSION['usuario'])) { ?>
                  <li>
                    <a href="cierraSesion.php" class="dropdown-toggle">Cerrar sesión</a></li>
                <?php } ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    </div>

    <?php if ($modulo != 'home.php' && $modulo != 'enconstruccion.php') { ?>
      <div class="container-fluid theme-showcase" role="main">                        
        <div class="row"> 
          <div class="col-md-1"></div>
          <div class="col-md-2 sidebar"><b>
              <?php
              if (isset($_SESSION['proceso'])) {
                print $_SESSION['proceso'] . " ";
              }
              if (isset($_SESSION['funcion'])) {
                if ($_SESSION['funcion'] == 'DIRECTOR') {
                  print 'DIRECCIÓN';
                } else {
                  print $_SESSION['funcion'];
                }
              }
              ?>
            </b>
            <ul class="nav nav-sidebar">
              <li><a href="show.php">
                  <?php
                  if ($_SESSION['nivel'] == 'MEDIA') {
                    print 'Perfiles, Parámetros e Indicadores (PPI)';
                  } else {
                    print 'Perfiles, Guías y Bibliografía';
                  }
                  ?>                  
                </a></li>       
              <?php
              if ($_SESSION['nivel'] == 'MEDIA') {
                print '<li><a href="#">';
                print 'Guías de estudio';
                print '</a></li>';
              }
              ?>                  
              <li><a href="?m=repositorio">
                  Repositorio de materiales de estudio
                </a></li>
              <?php
              if ($_SESSION['nivel'] == 'BASICA') {
                print '<li><a href="?m=estrategias">';
                print 'Estrategias de estudio';
                print '</a></li>';
              }
              ?>                                
              <li><a href=" http://simulador.ceneval.edu.mx" target="_black">
                  Simulador de examen</a></li>
              <li><a href="?m=preguntas_frecuentes">
                  Preguntas frecuentes</a></li>
              <li><a href="?m=contacto">
                  Contacto</a></li>

              <?php if (isset($_SESSION['usuario'])) { ?>
                <h3>Administración</h3>
                <li class="dropdown nav nav-sidebar">
                  <a data-toggle="dropdown" class="dropdown-toggle"> 
                    Subir Documentos <b class="caret"></b></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="?m=uploadGuia">Guias Básica</a></li>
                    <li><a href="?m=uploadGuiaMS">Guias Media Superior</a></li>
                    <li><a href="?m=uploadMateriales">Materiales Básica</a></li>
                    <li><a href="?m=uploadMaterialesMS">Materiales Media Superior</a></li>
                    <li><a href="?m=uploadPerfiles">Perfiles Educación Básica</a></li>
                    <li><a href="?m=uploadPerfilesMS">Perfiles Educación Media Superior</a></li>
                  </ul>
                </li>  
              <?php } ?>
            </ul>
          </div>
          <div class="col-md-8">
            <?php require $modulo; ?>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    <?php } else {
      ?>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php
          require_once $modulo;
        }
        ?>  
        <br><br>
      </div>
    </div>

    <div class="row">
      <footer id="footer" class="col-md-12">        
        <div class="container center-block">
          <div class="footer-bottom">
            <ul class="nav nav-pills payments">
              <li><img class="col-md-1 logofoot2" src="imgs/sep.png"></li>
              <li><img class="col-md-1 logofoot" src="imgs/seb.jpg"></li>
              <li><img class="col-md-1 logofoot" src="imgs/imgres.jpg"></li>
              <li><img class="col-md-1 logofoot" src="imgs/inee.png"></li>
              <li><img class="col-md-1 logofoot" src="imgs/logo-tve-solo-esfera.png"></li>
              <li><img class="col-md-1 logofoot" src="imgs/ilce.jpg"></li>
              <li><img class="col-md-1 logofoot1" src="imgs/logounadm.png"></li>
              <li><img class="col-md-1 logofoot" src="imgs/radioeducacion.jpg"></li>
              <li><img class="col-md-1 logofoot2" src="imgs/normateca.png"></li>
            </ul> <br>
            <hr>
            <p class="pull-left">© 2015 DGTVE Desarrollado por Ventana Educativa  </p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
