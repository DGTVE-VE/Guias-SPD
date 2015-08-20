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
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
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
                        <li><a href="filtro.php?pag=concurso&imagen=ingreso-eb-web.jpg&proceso=INGRESO&funcion=DOCENTE&nivel=BASICA"
                               onclick="ga('send', 'pageview', {'page': '/basica/ingreso/docentes', 'title': 'Ingreso Docentes Básica'});">
                            Docentes y Técnicos Docentes</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Educación Media Superior</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=concurso&imagen=ingreso-ems-web.jpg&proceso=INGRESO&funcion=DOCENTE&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/ingreso/docentes', 'title': 'Ingreso Docentes Media'});">
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
                        <li class="dropdown-submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Dirección
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-direccion-eb-web.jpg&proceso=PROMOCION&funcion=DIRECTOR&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/direccion', 'title': 'Promoción Dirección Básica'});">
                                Dirección
                              </a>
                            </li>
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-direccion-eb-web.jpg&proceso=PROMOCION&funcion=SUBDIRECTOR&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/subdireccion', 'title': 'Promoción Subdirector Básica'});">
                                Subdirección
                              </a>
                            </li>
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-direccion-eb-web.jpg&proceso=PROMOCION&funcion=COORDINADOR&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/coordinador', 'title': 'Promoción Coordinador Básica'});">
                                Coordinador de Actividades
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu">                          
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Supervisión</a>
                          <ul class="dropdown-menu">
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-supervision-eb-web.jpg&proceso=PROMOCION&funcion=SUPERVISOR&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/supervision', 'title': 'Promoción Supervisión Básica'});">
                                Supervisión
                              </a>
                            </li>
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-supervision-eb-web.jpg&proceso=PROMOCION&funcion=JEFE_SECTOR&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/jefe-de-sector', 'title': 'Promoción Jefe de Sector Básica'});">
                                Jefe de Sector
                              </a>
                            </li>
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-supervision-eb-web.jpg&proceso=PROMOCION&funcion=JEFE_ENSENANZA&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/jefe-de-ensenanza', 'title': 'Promoción Jefe de Ensenanza Básica'});">
                                Jefe de Enseñanza
                              </a>
                            </li>
                            <li>
                              <a href="filtro.php?pag=concurso&imagen=promocion-supervision-eb-web.jpg&proceso=PROMOCION&funcion=INSPECTOR&nivel=BASICA"
                                 onclick="ga('send', 'pageview', {'page': '/basica/promocion/inspector-general', 'title': 'Promoción Inspector General Básica'});">
                                Inspector General
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-atp-eb-web.jpg&proceso=PROMOCION&funcion=ATP&nivel=BASICA"
                               onclick="ga('send', 'pageview', {'page': '/basica/promocion/atp', 'title': 'Promoción ATP Básica'});">
                            Asesoría Técnica Pedagógica</a></li>
                      </ul>
                    </li>

                    <li class="dropdown-submenu">

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Educación Media Superior</a>
                      <ul class="dropdown-menu">
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-direccion-ems-web.jpg&proceso=PROMOCION&funcion=DIRECTOR&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/direccion', 'title': 'Promoción Dirección Básica'});">
                            Funciones de Dirección</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-direccion-ems-web.jpg&proceso=PROMOCION&funcion=SUBDIRECTOR_ADMINISTRATIVO&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/subdirector-administrativo', 'title': 'Promoción Subdirector Administrativo Media'});">
                            Subdirector administrativo</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-direccion-ems-web.jpg&proceso=PROMOCION&funcion=SUBDIRECTOR_ACADEMICO&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/subdirector-academico', 'title': 'Promoción Subdirector Académico Media'});">
                            Subdirector académico</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-direccion-ems-web.jpg&proceso=PROMOCION&funcion=JEFE_DE_DEPARTAMENTO_ADMINISTRATIVO&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/jefe-depto-administrativo', 'title': 'Promoción Jefe Departamento Administrativo'});">
                            Jefe de departamento administrativo</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-direccion-ems-web.jpg&proceso=PROMOCION&funcion=JEFE_DE_DEPARTAMENTO_ACADEMICO&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/jefe-depto-academico', 'title': 'Promoción Jefe Departamento Académico'});">
                            Jefe de departamento académico</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-supervision-ems-web.jpg&proceso=PROMOCION&funcion=SUPERVISOR&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/supervision', 'title': 'Promoción Supervisor Media'});">
                            Supervisión</a></li>
                        <li><a href="filtro.php?pag=concurso&imagen=promocion-atp-ems-web.jpg&proceso=PROMOCION&funcion=ATP&nivel=MEDIA"
                               onclick="ga('send', 'pageview', {'page': '/media/promocion/atp', 'title': 'Promoción ATP Media'});">
                            Asesoría Técnica Pedagógica</a></li>
                      </ul>                      
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Promoción en la Función
                    <b class="caret"></b></a>
                  <ul class="dropdown-menu multi-level">
                    <li class="dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Educación Básica</a>
                      <ul class="dropdown-menu">
                        <li><a href="pdf/VBReglamento_final_2015.doc.pdf">
                            <p>PROGRAMA DE PROMOCIÓN EN LA FUNCIÓN </p>
                            <p>POR INCENTIVOS EN LA EDUCACIÓN BÁSICA </p>
                            <p>(sustituye al Programa de Carrera Magisterial)</p>
                          </a></li>
                      </ul>
                    </li>                    
                  </ul>
                </li>
                <li><a href="?m=enconstruccion" class="dropdown-toggle"
                       onclick="ga('send', 'pageview', {'page': '/reconocimiento', 'title': 'Reconocimiento'});">
                    Reconocimiento</a></li>
                <li><a href="?m=enconstruccion" class="dropdown-toggle"
                       onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                    Permanencia</a></li>
                <li><a href="?m=repositorio" class="dropdown-toggle"
                       onclick="ga('send', 'pageview', {'page': '/repositorio', 'title': 'Repositorio'});">
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

                        <button type="submit" class="btn btn-success" 
                                onclick="ga('send', 'pageview', {'page': '/login', 'title': 'Login'});">
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

    <?php
    if (!in_array($modulo, array("home.php",
                "enconstruccion.php",
                "repositorio.php",
                "contacto.php"))) {
      ?>
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
              <li><a href="show.php" 
                     onclick="ga('send', 'pageview', {'page': '<?php
                     $a = array(' ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
                     $b = array('-', 'A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
                     $text = '/guias/' . $_SESSION['nivel'] . '/' . $_SESSION['proceso'] . '/' . $_SESSION['funcion'];
                     $text = str_replace($a, $b, $text);
                     print strtolower($text);
                     ?>',
                             'title': 'Repositorio'});">
                       <?php
                       if ($_SESSION['nivel'] == 'MEDIA') {
                         print 'Perfiles, Parámetros e Indicadores (PPI)';
                       } else {
                         print 'Perfiles, Guías y Bibliografía';
                       }
                       ?>                  
                </a></li>                                      
              <li><a href="?m=repositorio"
                     onclick="ga('send', 'pageview', {'page': '/repositorio', 'title': 'Repositorio'});">
                  Repositorio de materiales de estudio
                </a></li>
              <?php
              if ($_SESSION['nivel'] == 'BASICA') {
                print '<li><a href="?m=estrategias"'
                        . 'onclick="ga(\'send\', \'pageview\', {\'page\': \'/basica/estrategias\',\'title\': \'Estrategias de estudio\'});">';
                print 'Estrategias de estudio';
                print '</a></li>';
              }
              ?>                                
              <li><a href=" http://simulador.ceneval.edu.mx" target="_black"
                     onclick="ga('send', 'pageview', {'page': '/simulador', 'title': 'Simulador'});">
                  Simulador de examen</a></li>
              <li><a href="?m=preguntas_frecuentes"
                     onclick="ga('send', 'pageview', {'page': '/faq', 'title': 'Preguntas frecuentes'});">
                  Preguntas frecuentes</a></li>
              <li><a href="?m=contacto"
                     onclick="ga('send', 'pageview', {'page': '/contacto', 'title': 'Contacto'});">
                  Contacto</a></li>

              <?php if (isset($_SESSION['usuario'])) { ?>
                <h3>Administración</h3>
                <li class="dropdown nav nav-sidebar">
                  <a data-toggle="dropdown" class="dropdown-toggle"> 
                    Subir Documentos <b class="caret"></b></a>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="?m=uploadGuia"
                           onclick="ga('send', 'pageview', {'page': '/administracion/upload/guia-basica', 'title': 'Sube Guía Básica'});">
                        Guias Básica</a></li>
                    <li><a href="?m=uploadGuiaMS"
                           onclick="ga('send', 'pageview', {'page': '/administracion/upload/guia-media', 'title': 'Sube Guía Media'});">
                        Guias Media Superior</a></li>
                    <li><a href="?m=uploadMateriales"
                           onclick="ga('send', 'pageview', {'page': '/administracion/upload/material-basica', 'title': 'Sube Material Básica'});">
                        Materiales Básica</a></li>
                    <li><a href="?m=uploadMaterialesMS"
                           onclick="ga('send', 'pageview', {'page': '/administracion/upload/material-media', 'title': 'Sube Material Media'});">
                        Materiales Media Superior</a></li>
                    <li><a href="?m=uploadPerfiles"
                           onclick="ga('send', 'pageview', {'page': '/administracion/upload/perfil-basica', 'title': 'Sube Perfil Básica'});">
                        Perfiles Educación Básica</a></li>
                    <li><a href="?m=uploadPerfilesMS"
                           onclick="ga('send', 'pageview', {'page': '/administracion/upload/perfil-media', 'title': 'Sube Perfil Media'});">
                        Perfiles Educación Media Superior</a></li>
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
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <?php require_once 'formNewsLetter.php'; ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <?php
          require_once $modulo;
        }
        ?>  
        <br><br>
      </div>

    </div>

    <div class="row">
      <footer class="footer-bottom" id="foot">        
        <p class="col-md-12 text-center textoFoot" id="footer">Argentina 28, Col. Centro, Deleg. Cuauhtémoc, México, D.F.  </p>
        <div class="col-md-12">
          <div class="col-md-1"></div>
          <div class="col-md-10 footer-bottom text-center">                               
            <a href="http://www.sep.gob.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/sep', 'title': 'SEP'});">
              <img class="imgfoot"  src="imgs/SriaEducacion.png"></a>&nbsp;&nbsp;
            <a href="http://basica.sep.gob.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/basica/sep', 'title': 'SEP Básica'});">
              <img class="imgfoot" src="imgs/LogoSEB.png"></a>&nbsp;&nbsp;
            <a href="http://www.sems.gob.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/sems', 'title': 'SEMS'});">
              <img class="imgfoot" src="imgs/LogoEMS.png"></a>&nbsp;&nbsp;
            <a href="http://servicioprofesionaldocente.sep.gob.mx/ba/ingreso/ordinaria/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/servicioprofesionaldocente', 'title': 'SPD'});">
              <img class="imgfoot" src="imgs/LogoCNSPD5cm.png"></a>&nbsp;&nbsp;       
            <a href="http://www.inee.edu.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/inee', 'title': 'INEE'});">
              <img class="imgfoot" src="imgs/LogoINEE.png"></a>&nbsp;&nbsp;
            <a href="http://www.televisioneducativa.gob.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/dgtve', 'title': 'DGTVE'});">
              <img class="imgfoot" src="imgs/logotv.png"></a>&nbsp;&nbsp;
            <a href="http://www.ilce.edu.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/ilce', 'title': 'ILCE'});">
              <img class="imgfoot" src="imgs/LogoILCE.png"></a>&nbsp;&nbsp;
            <a href="http://www.unadmexico.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/unad', 'title': 'UNADM'});">
              <img class="imgfoot" src="imgs/logoUNADM.png"></a>&nbsp;&nbsp;
            <a href="http://www.radioeducacion.edu.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/radioeducacion', 'title': 'Radioeducación'});">
              <img class="imgfoot" src="imgs/LogoRadioEducacion.png"></a>
            <a href="http://www.tecnm.mx/" target="_black"
               onclick="ga('send', 'pageview', {'page': '/link/tecnm', 'title': 'TECNM'});">
              <img class="imgfoot" src="imgs/LogoTECNOLOGICONALMEX.png"></a>
          </div>
          <div class="col-md-1"></div>
        </div>
        <div class="row">
          <br><br><br><br><br><br>
          <p class="col-md-12 text-center" id="derechos">© 2015 DGTVE Desarrollado por Ventana Educativa  </p>
        </div>
      </footer>
    </div>            
  </body>
</html>
