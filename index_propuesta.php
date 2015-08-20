<?php
session_start();
require 'include_dao.php';
?>
<!DOCTYPE html>
<html class=" js no-touch" style="" lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0,minmum-scale=1.0"> 
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Propuesta</title>
        <meta content="Blueprint: Fixed Background Scrolling Layout" name="description">
        <meta content="background scrolling, fixed background, background-attachment, jquery" name="keywords">
        <meta content="Codrops" name="author">
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">-->
        <!-- <link href="css/default.css" type="text/css" rel="stylesheet"> -->
        <link rel="stylesheet" href="css/component1.css">
        <!--link agrego Sonia-->
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.css">-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://getbootstrap.com/dist/js/bootstrap.js" type="text/javascript"></script>
        
        
        <style type="text/css">
            a:link {
                color: #c10435;
                text-decoration: none;
            }
            a:hover {
                color: #007229;
                text-decoration: underline;
            }
            a:visited {
                text-decoration: none;
            }
            a:active {
                text-decoration: none;
            }
            .gris{
                background-color: #E8E7E7 !important;
            }
            .titulo-naranja{
                background-color: #F0A541 !important;
            }
            .titulo-azul{
                background-color: #45A0D9  !important;
            }
            .titulo-verde{
                background-color: #079A51 !important;
            }
            .titulo-gris{
                background-color: #CACFCD !important;
            }
            /*código para la ventana modal*/
        </style>

        <link href="css/style.css" type="text/css" rel="stylesheet">



        <script src="js/jquery.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="pull-right"><a href="http://10.20.12.155/prueba">Inicio</a> | <a href="#preguntasfrecuentes">Preguntas frecuentes</a> | <a href="#contacto">Contacto
                    </a></div><a href="#contacto">
            </div>
            <div class="row">
                <br>
                <br>
                <br>
                </a><header><a href="#contacto">
                        <img style="margin-top: -4%; margin-left: 5%;" src="propuesta_files/encabezado.png" class="img-responsive">
                    </a><h1><a href="#contacto">

                        </a><a href="http://10.20.12.155/prueba"></a>
                    </h1>
                </header>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <img class="imagen img-responsive" src="propuesta_files/ico_ingreso.png">
                    <!--<h2>INGRESO</h2>-->
                    <div class="enlaces gris">
                        <ul>
                            <li class="naranja"><a  href="#IngEducacionBasica"><strong>Educación básica</strong></a></li>
                            <li class="naranja"><a  href="#IngDocentesTecnicosDocentesBasica">.::Ingreso Docentes y Técnicos Docentes:.</a></li>
                            <li class="naranja"><a  href="#IngMediaSuperior"><strong>Educación Media Superior</strong></a></li>
                            <li class="naranja"><a  href="#IngDocentesTecnicosDocentesMS">.::Ingreso Docentes y Técnicos Docentes:.</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <img class="imagen img-responsive" src="propuesta_files/ico_promocion.png">
                    <!--<h2>PROMOCIÓN</h2>-->
                    <div class="enlaces gris">

                        <ul>
                            <li class="azul"><a href="#PromocionEduaccionBasica"><strong>Educación Básica</strong></a></li>
                            <li class="azul"><a href="#PromocionDireccion">.:Promoción Dirección</a></li>
                            <li class="azul"><a href="#PromocionSupervisi%C3%B3n">.:Promoción Supervisión</a></li>
                            <li class="azul"><a href="#PromocionATP">.:Promoción Asesor Técnico Pedagógico</a></li>
                            <li class="azul"><a href="#PromocionMS"><strong>Educación Media Superior</strong></a></li>
                            <li class="azul"><a href="#PromocionDireccionMS">.:Promoción Dirección</a></li>
                            <li class="azul"><a href="#PromocionSupervisi%C3%B3nMS">.:Promoción Supervisión</a></li>
                            <li class="azul"><a href="#PromocionATPMS">.:Promoción Asesor Técnico Pedagógico</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<h2>PERMANENCIA</h2>-->
                    <img class="imagen img-responsive"  src="propuesta_files/ico_permanencia.png">
                    <div class="gris">
                        <ul>
                            <li class="verde"><a href="#permanenciaEB"><strong>Educación Básica</strong></a></li>
                            <li class="verde"><a href="#permanenciaMS"><strong>Eduacción Media Superior</strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="gris">
                        <ul>
                            <li class="gato"> <a class="" href="http://simulador.ceneval.edu.mx/">Simulador</a></li>
                            <li class="gato"> <a class="" href="#estrategiasestudio">Estrategias de estudio</a></li>
                            <li class="gato"><a class="" href="#preguntasfrecuentes">Preguntas frecuentes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <form action="resultado_repo.php?recurso=" method="get" target="new">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <img src="propuesta_files/recursos.png" class="img-responsive">
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="col-xs-8 col-sm-10 col-md-10">
                                <br><br>
                                <input name="recurso1" id="recurso1" type="text" style="float: left;">
                            </div>      
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <br>
                                <input src="propuesta_files/icon_lupa.png" alt="" name="button" id="button" value="Enviar" type="image" width="50" height="50">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <!-- COMIENZA SECCIÓN INGRESO -->
                <div class="row ingreso">
                    <img src="propuesta_files/tit_ingreso.png">
                </div>
                <div class="col-md-6 module beneficios">
                    <div class="col-md-12 titulo-naranja">
                        <h2 id="IngEducacionBasica" class="textVis">Educación Básica</h2>
                    </div>
                    <h2><p>Bienvenida</p></h2>
                    <p align="justify">Con el objetivo de ofrecer mayores 
                        condiciones de equidad y de igualdad de oportunidades para todos los 
                        sustentantes en los procesos de evaluación del Servicio Profesional 
                        Docente, este sitio ofrece diversos recursos de apoyo para el 
                        autoestudio y la formación.</p>
                    <p align="justify">Los docentes, técnicos docentes, 
                        directivos, personal con funciones de supervisión y asesoría técnico 
                        pedagógica, dispondrán de acceso libre y permanente a un simulador de 
                        exámenes, a Guías de estudio conforme a cada perfil y a un repositorio 
                        de materiales bibliográficos en formato electrónico, entre otros 
                        instrumentos.</p>
                    <p align="justify">A medida que avancen los procesos de 
                        evaluación, la oferta de recursos se ampliará y diversificará a fin de 
                        cubrir las necesidades del personal docente tanto de Educación Básica 
                        como de Educación Media Superior conforme a los Perfiles, parámetros e 
                        indicadores establecidos para cada función. </p>
                    <p align="justify">La Secretaría de Educación Pública 
                        confía que este material aporte elementos valiosos para mejorar su 
                        desempeño en las evaluaciones docentes y en la práctica educativa 
                        cotidiana. </p>
                </div>
                <div class="col-md-6" style="text-align: center; font-style: italic;">
                    <img src="propuesta_files/ingreso-eb-web.jpg" alt="Infografía ingreso Educación Básica" 
                         class="infografia" width="376" height="645">
                </div>
            </div>
            <div class="row descargables module x2 shadow2">
                <div class="col-md-12 titulo-naranja">
                    <h3 id="IngDocentesTecnicosDocentesBasica" class="textVis">
                        Ingreso Docentes y Técnicos Docentes. Perfiles, guías y bibliografía</h3>
                </div>
                <li>                        
                    <a href="javascript:void(0);" onclick="SINO('demo1')">Perfiles, guías y bibliografía</a>              
                </li>
                <div id="demo1" style="display:none;">                       
                    <?php
//                    proceso=INGRESO&funcion=DOCENTE&nivel=BASICA
                    $_SESSION['nivel'] = 'BASICA';
                    $_SESSION['funcion'] = 'DOCENTE';
                    $_SESSION['proceso'] = 'INGRESO';
                    require "./showGuias.php";
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 module">
                        <div class="col-md-12 titulo-naranja">
                            <h3 id="IngMediaSuperior" class="textVis">Educación Media Superior</h3></div>
                        <h2><p>Bienvenida</p></h2>
                        <p align="justify">Con el objetivo de ofrecer mayores 
                            condiciones de equidad y de igualdad de oportunidades para todos los 
                            sustentantes en los procesos de evaluación del Servicio Profesional 
                            Docente, este sitio ofrece diversos recursos de apoyo para el 
                            autoestudio y la formación. </p>
                        <p align="justify">Los docentes, técnicos docentes, 
                            directivos, personal con funciones de supervisión y asesoría técnico 
                            pedagógica, dispondrán de acceso libre y permanente a un simulador de 
                            exámenes, a Guías de estudio conforme a cada perfil y a un repositorio 
                            de materiales bibliográficos en formato electrónico, entre otros 
                            instrumentos. </p>
                        <p align="justify">A medida que avancen los procesos de 
                            evaluación, la oferta de recursos se ampliará y diversificará a fin de 
                            cubrir las necesidades del personal docente tanto de Educación Básica 
                            como de Educación Media Superior conforme a los Perfiles, parámetros e 
                            indicadores establecidos para cada función. </p>
                        <p align="justify">La Secretaría de Educación Pública 
                            confía que este material aporte elementos valiosos para mejorar su 
                            desempeño en las evaluaciones docentes y en la práctica educativa 
                            cotidiana. </p>
                    </div>
                    <div class="col-md-6" style="text-align: center; font-style: italic;">
                        <img src="propuesta_files/Ing_MS.jpg" alt="Infografía ingreso Educación Básica" 
                             class="infografia" width="376" height="645">
                    </div>


                </div>
            </div>
            <div class="row descargables module x2 shadow2">
                <div class="col-md-12 titulo-naranja">
                    <h3 id="IngDocentesTecnicosDocentesMS" class="textVis">
                        Ingreso Docentes y Técnicos Docentes Educación Media Superior. Perfiles, guías y bibliografía
                    </h3>
                </div>
                <ul><li><a href="javascript:void(0);" onclick="SINO('ingreso1')">Perfiles, guías y bibliografía</a></li></ul>
                <div id="ingreso1" style="display:none;">                       
                    <?php
//                    proceso=INGRESO&funcion=DOCENTE&nivel=MEDIA
                    $_SESSION['nivel'] = 'MEDIA';
                    $_SESSION['funcion'] = 'DOCENTE';
                    $_SESSION['proceso'] = 'INGRESO';
                    require "./showGuias.php";
                    ?>
                </div>
            </div>

            <div class="row">
                <!-- EMPIEZA PROMOCIÓN -->
                <div class="col-md-12">
                    <div class="col-md-12 promocion transparent module">
                    </div>
                    <div class="beneficios col-md-6">
                        <img src="propuesta_files/tit_promocion.png">
                        <div class="module">
                            <div class="col-md-12 titulo-azul">
                                <h3 id="PromocionEduaccionBasica" class="textVis">Promoción Educación Básica</h3>
                                <p><strong>La promoción a cargos con funciones de Dirección comprenden:</strong></p>
                                <ul></div>
                            <li>Directores</li>
                            <li>Subdirectores</li>
                            <li>Coordinadores de Actividades</li>
                            </ul>
                            <p><strong>La promoción a cargos con funciones de supervisión, comprenden:</strong></p>
                            <ul>
                                <li>Supervisores</li>
                                <li>Jefes de Sector</li>
                                <li>Jefes de Enseñanza</li>
                                <li>Inspectores Generales</li>
                            </ul>
                            <p><strong>La promoción a cargos de Asesoría Técnica Pedagógica</strong></p>
                            <ul>												
                                <li>Asesores Técnico Pedagógicos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6" style="text-align: center; font-style: italic;">
                        <img src="propuesta_files/promocion-direccion-eb-web.jpg" alt="Infografía ingreso Educación Básica" 
                             class="infografia" width="376" height="645">
                    </div>

                    <div class="col-md-12 module x2 shadow2">
                        <div class="col-md-12 titulo-azul">
                            <h3 id="PromocionDireccion" class="textVis">Promoción Dirección Educación Básica</h3>
                        </div>
                        <ul>
                            <li>Dirección</li>
                            <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPdireccion')">Perfiles, guías y bibliografía</a></li></ul>
                            <div id="EBPdireccion" style="display:none;">                       
                                <?php
                                //proceso=PROMOCION&funcion=DIRECTOR&nivel=BASICA
                                $_SESSION['nivel'] = 'BASICA';
                                $_SESSION['funcion'] = 'DIRECTOR';
                                $_SESSION['proceso'] = 'PROMOCION';
                                require "./showGuias.php";
                                ?>
                            </div>
                            <li>Subdirección</li>
                            <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPsubdireccion')">Perfiles, guías y bibliografía</a></li></ul>
                            <div id="EBPsubdireccion" style="display:none;">                       
                                <?php
//                                proceso=PROMOCION&funcion=SUBDIRECTOR&nivel=BASICA
                                $_SESSION['nivel'] = 'BASICA';
                                $_SESSION['funcion'] = 'SUBDIRECTOR';
                                $_SESSION['proceso'] = 'PROMOCION';
                                require "./showGuias.php";
                                ?>
                            </div>
                            <li>Coordinador de Actividades</li>
                            <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPcoordinador')">Perfiles, guías y bibliografía</a></li></ul>
                            <div id="EBPcoordinador" style="display:none;">                       
                                <?php
//                                proceso=PROMOCION&funcion=COORDINADOR&nivel=BASICA
                                $_SESSION['nivel'] = 'BASICA';
                                $_SESSION['funcion'] = 'COORDINADOR DE ACTIVIDADES';
                                $_SESSION['proceso'] = 'PROMOCION';
                                require "./showGuias.php";
                                ?>
                            </div>
                        </ul>
                    </div>
                    <div class="col-md-12 module x2 shadow2">
                        <div class="col-md-12 titulo-azul">
                            <h3 id="PromocionSupervisión" class="textVis">Promoción Supervisión Educación Básica</h3>
                        </div>
                        <ul>
                            <li>Supervisión
                            <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPsupervision')">Perfiles, guías y bibliografía</a></li></ul>
                            <div id="EBPsupervision" style="display:none;">                       
                                <?php
//                                proceso=PROMOCION&funcion=SUPERVISOR&nivel=BASICA
                                $_SESSION['nivel'] = 'BASICA';
                                $_SESSION['funcion'] = 'SUPERVISOR';
                                $_SESSION['proceso'] = 'PROMOCION';
                                require "./showGuias.php";
                                ?>
                            </div>
                            </li>
                            <li>
                                Jefe de Sector
                                <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPjefe')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EBPjefe" style="display:none;">                       
                                    <?php
//                                proceso=PROMOCION&funcion=JEFE_SECTOR&nivel=BASICA
                                    $_SESSION['nivel'] = 'BASICA';
                                    $_SESSION['funcion'] = 'JEFE DE SECTOR';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuias.php";
                                    ?>
                                </div>
                            </li>
                            <li>
                                Jefe de Enseñanza
                                <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPensenanza')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EBPensenanza" style="display:none;">                       
                                    <?php
//                                proceso=PROMOCION&funcion=JEFE_ENSENANZA&nivel=BASICA
                                    $_SESSION['nivel'] = 'BASICA';
                                    $_SESSION['funcion'] = 'JEFE DE ENSEÑANZA';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuias.php";
                                    ?>
                                </div>
                            </li>
                            <li>
                                Inspector General
                                <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBPinspector')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EBPinspector" style="display:none;">                       
                                    <?php
//                                proceso=PROMOCION&funcion=INSPECTOR&nivel=BASICA
                                    $_SESSION['nivel'] = 'BASICA';
                                    $_SESSION['funcion'] = 'INSPECTOR';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuias.php";
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 module x2 shadow2">
                        <div class="col-md-12 titulo-azul">
                            <h3 id="PromocionATP" class="textVis">Promoción Asesor Técnico Pedagógico Educación Básica</h3>
                        </div>
                        <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EBatp')">Perfiles, guías y bibliografía</a></li></ul>
                        <div id="EBatp" style="display:none;">                       
                            <?php
//                               proceso=PROMOCION&funcion=ATP&nivel=BASICA
                            $_SESSION['nivel'] = 'BASICA';
                            $_SESSION['funcion'] = 'ATP';
                            $_SESSION['proceso'] = 'PROMOCION';
                            require "./showGuias.php";
                            ?>
                        </div>
                    </div>


                    <!--CONTINUA PROMOCION MS-->
                    <div class="row">
                        <div class="beneficios col-md-6 module">
                            <div class="col-md-12 titulo-azul">
                                <h3 id="PromocionMS" class="textVis">Promoción Educación Media Superior</h3>
                            </div>
                            <p><strong>La promoción a cargos con funciones de Dirección comprenden:</strong></p>
                            <ul>
                                <li>Directores
                                </li><li>Subdirector Administrativo
                                </li><li>Subdirector Académico
                                </li><li>Jefe de Departamento Administrativo
                                </li><li>Jefe de Departamento Académico
                                </li></ul>
                            <p><strong>La promoción a cargos con funciones de supervisión, comprenden:</strong></p>
                            <ul>
                                <li>Supervisores
                                </li></ul>
                            <p><strong>La promoción a cargos de Asesoría Técnica Pedagógica</strong></p>
                            <ul>
                                <li>Asesores Técnico Pedagógicos
                                </li></ul>
                        </div>
                        <div class="col-md-6" style="text-align: center; font-style: italic;">
                            <img src="propuesta_files/promocion-direccion-ems-web.jpg" alt="Infografía ingreso Educación Básica" 
                                 class="infografia" width="376" height="645">
                        </div>
                    </div> 

                    <div class="col-md-12 module x2 shadow2">
                        <div class="col-md-12 titulo-azul">
                            <h3 id="PromocionDireccionMS" class="textVis">Promoción Dirección Educación Media Superior</h3>
                        </div>
                        <ul>
                            <li>
                                Dirección
                                <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMdireccion')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EMdireccion" style="display:none;">                       
                                    <?php
//                               proceso=PROMOCION&funcion=DIRECTOR&nivel=MEDIA
                                    $_SESSION['nivel'] = 'MEDIA';
                                    $_SESSION['funcion'] = 'DIRECTOR';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuiasMS.php";
                                    ?>
                                </div>
                            </li>
                            <li>
                                Subdirector Administrativo
                               <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMsubdireccionad')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EMsubdireccionad" style="display:none;">                       
                                    <?php
//                               proceso=PROMOCION&funcion=SUBDIRECTOR_ADMINISTRATIVO&nivel=MEDIA
                                    $_SESSION['nivel'] = 'MEDIA';
                                    $_SESSION['funcion'] = 'SUBDIRECTOR ADMINISTRATIVO';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuiasMS.php";
                                    ?>
                                </div>
                            </li>
                            <li>
                               Subdirector Académico
                               <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMsubdireccionac')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EMsubdireccionac" style="display:none;">                       
                                    <?php
//                              proceso=PROMOCION&funcion=SUBDIRECTOR_ACADEMICO&nivel=MEDIA
                                    $_SESSION['nivel'] = 'MEDIA';
                                    $_SESSION['funcion'] = 'SUBDIRECTOR ACADÉMICO';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuiasMS.php";
                                    ?>
                                </div>
                            </li>
                            <li>
                                Jefe de Departamento Administrativo
                               <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMjefead')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EMjefead" style="display:none;">                       
                                    <?php
//                               proceso=PROMOCION&funcion=JEFE_DE_DEPARTAMENTO_ADMINISTRATIVO&nivel=MEDIA
                                    $_SESSION['nivel'] = 'MEDIA';
                                    $_SESSION['funcion'] = 'JEFE DE DEPARTAMENTO ADMINISTRATIVO';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuiasMS.php";
                                    ?>
                                </div>
                            </li>
                            <li>
                               Jefe de Departamento Académico
                               <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMjefeac')">Perfiles, guías y bibliografía</a></li></ul>
                                <div id="EMjefeac" style="display:none;">                       
                                    <?php
//                               proceso=PROMOCION&funcion=JEFE_DE_DEPARTAMENTO_ACADEMICO&nivel=MEDIA
                                    $_SESSION['nivel'] = 'MEDIA';
                                    $_SESSION['funcion'] = 'JEFE DE DEPARTAMENTO ACADÉMICO';
                                    $_SESSION['proceso'] = 'PROMOCION';
                                    require "./showGuiasMS.php";
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>



                    <div class="col-md-12 module x2 shadow2">
                        <div class="col-md-12 titulo-azul">
                            <h3 id="PromocionSupervisiónMS" class="textVis">Promoción Supervisión Educación Media Superior</h3>
                        </div>
                        <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMpromocion')">Perfiles, guías y bibliografía</a></li></ul>
                        <div id="EMpromocion" style="display:none;">                       
                            <?php
//                               proceso=PROMOCION&funcion=SUPERVISOR&nivel=MEDIA
                            $_SESSION['nivel'] = 'MEDIA';
                            $_SESSION['funcion'] = 'SUPERVISOR';
                            $_SESSION['proceso'] = 'PROMOCION';
                            require "./showGuiasMS.php";
                            ?>
                        </div>
                    </div>

                    <div class="col-md-12 module x2 shadow2">
                        <div class="col-md-12 titulo-azul">
                            <h3 id="PromocionATPMS" class="textVis">Promoción Asesor Técnico Pedagógico Educación Media Superior</h3>
                        </div>
                        <ul><li><a class="textVis" href="javascript:void(0);" onclick="SINO('EMatp')">Perfiles, guías y bibliografía</a></li></ul>
                        <div id="EMatp" style="display:none;">                       
                            <?php
//                               proceso=PROMOCION&funcion=ATP&nivel=MEDIA
                            $_SESSION['nivel'] = 'MEDIA';
                            $_SESSION['funcion'] = 'ATP';
                            $_SESSION['proceso'] = 'PROMOCION';
                            require "./showGuiasMS.php";
                            ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <!-- EMPIEZA PERMANENCIA -->
                <div class="col-md-12">
                    <div class="col-md-12 permanencia transparent module">
                    </div>
                    <div class="beneficios col-md-12">
                        <img src="propuesta_files/tit_permanencia.png">
                    </div>
                    <div class="module">
                        <div class="module x2 shadow2 col-md-12">
                            <div class="col-md-12 titulo-verde">
                                <h3 id="permanenciaEB" class="textVis">PERMANENCIA EDUCACIÓN BÁSICA</h3>
                            </div>
                            <p><strong>Texto permanencia Educación Básica</strong></p>
                        </div>
                        <div class="module x2 shadow2 col-md-12">
                            <div class="col-md-12 titulo-verde">
                                <h3 id="procedimiento3" class="textVis">TEXTO PERMANENCIA EDUCACIÓN BÁSICA</h3>
                            </div>
                            <p>Texto Permanencia Educación Básica</p>

                        </div>
                        <div class="module x2 shadow2 col-md-12">
                            <div class="col-md-12 titulo-verde">
                                <h3 id="guiaEstudio3" class="textVis">TEXTO PERMANENCIA EDUCACIÓN BÁSICA 2</h3>
                            </div>
                            <p>Texto Permanencia Educación Básica2</p>
                        </div>
                        <div class="beneficios module col-md-12">
                            <div>
                                <div class="col-md-12 titulo-verde">
                                    <h3 id="permanenciaMS" class="textVis">PERMANENCIA EDUCACIÓN MEDIA SUPERIOR</h3>
                                </div>
                            </div>
                            <p>Texto introducción permanencia Educación Media Superior</p>
                        </div>
                        <div class="module x2 shadow2 col-md-12">
                            <div class="col-md-12 titulo-verde">
                                <h3 id="procedimiento3" class="textVis">TEXTO PERMANENCIA EDUCACIÓN MEDIA SUPERIOR</h3>
                            </div>
                            <p>Texto Permanencia Educación Media Superior</p>
                        </div>
                        <div class="module x2 shadow2 col-md-12">
                            <div class="col-md-12 titulo-verde">
                                <h3 id="guiaEstudio3" class="textVis">TEXTO PERMANENCIA EDUCACIÓN MEDIA SUPERIOR 2</h3>
                            </div>
                            <p>Texto Permanencia Educación Media Superior 2</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <!--COMIENZA MENU COMUN-->
                <div class="col-md-12">
                    <div class="module x2 shadow2 col-md-12">
                        <div class="col-md-12 titulo-gris">
                            <h3 id="estrategiasestudio" class="textVis">ESTRATEGIAS DE ESTUDIO</h3>
                        </div>
                        <h2><p align="center"><strong>Estrategias y sugerencias para preparar el Concurso de Oposición</strong></p></h2>
                        <p align="justify">El Concurso de Oposición para el Ingreso 
                            al servicio público educativo requiere ser preparado con esmero por 
                            parte de los aspirantes, el propósito de estas sugerencias es apoyarlos 
                            en dicha tarea. Asimismo, se ofrece la referencia de diversos recursos 
                            que, empleados metódicamente, contribuirán a afianzar los conocimientos y
                            habilidades indispensables para resolver con éxito el examen de 
                            oposición.</p>
                        <h4><p align="left"><strong>Materiales de apoyo para el estudio</strong></p></h4>
                        <p align="justify">Los aspirantes cuentan para su preparación
                            con los siguientes materiales de apoyo para el estudio elaborados por 
                            la Secretaría de Educación Pública, los cuales pueden consultarse en 
                            este sitio:</p>
                        <ul>
                            <li align="justify">Perfil, parámetros e indicadores.</li>
                            <li align="justify">Guía de estudio, específica para cada nivel educativo, modalidad, tipo de servicio o asignatura.</li>
                            <li align="justify">Bibliografía y otros materiales de 
                                consulta en formato electrónico (PDF) que forman parte de los documentos
                                oficiales de la SEP y de los Libros de la colección Biblioteca para la 
                                Actualización del Maestro y la colección Biblioteca del Normalista. 
                                Éstos están disponibles además en las bibliotecas de Centros de Maestros
                                y Escuelas Normales públicas del país.</li>
                        </ul>
                        <h4><p align="left"><strong>La relación entre los materiales de apoyo para el estudio</strong></p></h4>
                        <p align="justify">El Perfil, parámetros e indicadores es el 
                            documento que expresa las características, aptitudes y conocimientos 
                            deseables de docentes y técnicos docentes de educación básica para el 
                            desempeño de sus funciones y, fundamentalmente, para asegurar el máximo 
                            logro educativo del alumnado. Asimismo, es un referente para el estudio 
                            personal, la autoformación, la formación continua, el diseño de 
                            programas de desarrollo profesional y la evaluación docente. En el 
                            Perfil los aspirantes podrán identificar con precisión las dimensiones, 
                            parámetros e indicadores que serán objeto de evaluación, para ello, es 
                            necesario que analicen cada uno de estos elementos para comprender su 
                            sentido general y específico. </p>
                        <p align="justify">La bibliografía básica seleccionada se 
                            vincula con cada uno de los parámetros e indicadores del Perfil y con 
                            los aspectos a evaluar contenidos en esta Guía de estudio. De tal manera
                            que Perfil (parámetros e indicadores), bibliografía y aspectos a 
                            evaluar son elementos relacionados e imprescindibles para el estudio y 
                            la preparación integral del examen.</p>
                        <h4><p align="left"><strong>La bibliografía básica para el estudio</strong></p></h4>
                        <p align="justify">Como se ha dicho, la bibliografía básica 
                            para el estudio ha sido seleccionada con la finalidad de que todos los 
                            parámetros e indicadores del Perfil cuenten con referentes para el 
                            estudio. Los recursos bibliográficos son de diversa índole, hay 
                            referencias de tipo normativo, como planes y programas de estudio y 
                            acuerdos secretariales, pero también estudios de corte académico. En 
                            conjunto, la bibliografía aporta elementos prácticos y teóricos 
                            (experiencias, información, conceptos, tesis, explicaciones) 
                            relacionados con los parámetros, indicadores y aspectos a evaluar, lo 
                            cual constituye un insumo fundamental para la preparación de los 
                            aspirantes.</p>
                        <img class="infografia1" alt="Estrategias de estudio" src="propuesta_files/estrategias.png" width="100%" height="auto">
                        <h4><p align="left"><strong>Recomendaciones para el estudio</strong></p></h4>
                        <h4><p align="left"><strong>Sesiones de estudio</strong></p></h4>
                        <ul>
                            <li align="justify">Programe las sesiones de estudio. 
                                Realice un calendario personal para distribuir los aspectos a evaluar 
                                entre el tiempo disponible para su estudio. </li>
                            <li align="justify">Defina el objetivo de cada sesión de estudio y establezca el tiempo que dedicará a cada una según sus ocupaciones personales.</li>
                            <li align="justify">Dedique más tiempo de estudio a los temas que considere su mayor debilidad o preocupación.</li>
                            <li align="justify">De preferencia, estudie en un lugar cómodo, iluminado, ventilado, con temperatura adecuada y libre de distracciones.</li>
                            <li align="justify">Repase las veces que sea necesario notas, resúmenes y esquemas con la finalidad de afianzar sus conocimientos.</li>
                            <li align="justify">Estudie con tiempo, dejar todo para el final provoca estrés e impide la concentración adecuada.</li>
                        </ul>
                        <h4><p align="left"><strong>Cómo aprovechar la bibliografía básica para el estudio</strong></p></h4>
                        <p align="justify"><strong>1. Compilar la bibliografía.</strong> Reúna la bibliografía y los materiales de consulta sugeridos, ya sea que sea en formato electrónico o impreso.</p>
                        <p align="justify"><strong>2. Leer para comprender.</strong> 
                            Con base en su programación lea gradualmente los materiales de estudio, 
                            para ello realice ejercicios de predicción a partir de títulos y 
                            subtítulos de libros y capítulos; fije el objetivo de cada lectura, por 
                            ejemplo, identificar los aspectos fundamentales de los procesos de 
                            desarrollo infantil, explicar la influencia del entorno familiar y 
                            sociocultural en el aprendizaje de los alumnos, etcétera; subraye las 
                            ideas principales y secundarias del texto; relacione las ideas 
                            principales de modo que pueda construir un texto coherente con 
                            continuidad lógica; realice ejercicios para expresar con pocas palabras 
                            lo sustancial del texto; identifique y defina conceptos clave. Es 
                            importante que siempre realice este tipo de actividades con el propósito
                            de comprender el contenido de los textos.</p>
                        <p align="justify"><strong>3. Conocimientos previos.</strong>Cuando
                            estudie utilice sus conocimientos previos, relacione la información 
                            nueva con lo que ya sabe. Esto facilitará la adquisición, asimilación y 
                            comprensión de nuevos conocimientos.</p>
                        <p align="justify"><strong>4. Esquemas organizadores de texto.</strong>Elabore
                            esquemas (cuadros sinópticos, mapas mentales y conceptuales, cuadros 
                            comparativos, etcétera) sobre el contenido de los materiales de lectura.
                            Esta técnica permite organizar la información y expresarla 
                            sintéticamente de forma clara y sencilla, además hace posible el repaso 
                            rápido de los temas de estudio.</p>
                        <p align="justify"><strong>5. Preguntas y respuestas.</strong>Escriba
                            preguntas y respuestas que ayuden a mejorar la comprensión del texto, o
                            escriba preguntas para las que no tiene respuestas y búsquelas 
                            releyendo los textos. </p>
                        <p align="justify"><strong>6. Estudio en grupo. </strong> 
                            Esta modalidad de estudio tiene la ventaja de trabajar en colaboración, 
                            lo cual resulta muy formativo: se comparten materiales, se despejan 
                            dudas mediante el análisis y la discusión colectiva, se resuelven 
                            problemas y realizan ejercicios en común. La comparación de diferentes 
                            puntos de vista estimula la actividad metacognitiva de las personas, lo 
                            cual repercute en la mejora de sus conocimientos.</p>
                        <h4><p align="left">La aplicación del examen</p>
                            <p align="left">1. Como se ha indicado antes, el examen que 
                                usted presentará será un instrumento estandarizado de opción múltiple, 
                                con cuatro opciones de respuesta donde sólo una es la correcta.</p>
                            <p align="justify">2. Estime el tiempo que necesitará para 
                                resolver todos los reactivos del examen. Distribuya el tiempo disponible
                                entre el número de reactivos. Considere que algunos los responderá más 
                                rápido que otros.</p>
                            <p align="justify">3. Lea detenidamente las preguntas y asegúrese que las ha comprendido bien.</p>
                            <p align="justify">4. Antes de responder, asegúrese de 
                                entender el sentido del enunciado de cada pregunta (afirmativo, 
                                negativo, interrogativo, imperativo).</p>
                            <p align="justify">5. Analice cada una de las posibles 
                                respuestas, argumente mentalmente por qué una opción puede ser o no la 
                                correcta. Recuerde que en ocasiones un detalle hace la diferencia entre 
                                la respuesta correcta y las incorrectas. </p>
                            <p align="justify">6. Si no sabe la respuesta a una pregunta no se entretenga demasiado en ella. Pase a las siguientes y al final vuelva a ella.</p>
                            <p align="justify">7. Cuando finalice el examen asegúrese de haber respondido todos los reactivos.</p>
                            <p align="justify">8. Atienda las indicaciones que dé el 
                                aplicador del instrumento. Él le proporcionará información sobre el 
                                inicio y el término del examen, así como del proceso en su conjunto. 
                                Respete los horarios establecidos por la convocatoria para la aplicación
                                de los instrumentos.</p>
                        </h4><h4><p align="left"><strong>Recomendaciones generales</strong></p></h4>
                        <h4><p align="left"><strong>Antes del día de la aplicación</strong></p></h4>
                        <ul>
                            <li align="justify">Leer con atención la convocatoria del 
                                concurso que emita la autoridad educativa local; en ella se podrán 
                                conocer aspectos fundamentales del proceso de evaluación, como: plazas 
                                sujetas a concurso, requisitos para participar, etapas, aspectos y 
                                métodos de la evaluación, resultados, criterios para la asignación de 
                                plazas, entre otros elementos de interés para los sustentantes.</li>
                            <li align="justify">Visitar con antelación la sede de 
                                aplicación con la finalidad de conocer su ubicación precisa y prever 
                                factores de riesgo que impidan llegar a tiempo. </li>
                            <li align="justify">Estudiar con el mayor tiempo de anticipación posible los aspectos a evaluar y la bibliografía básica sugerida.</li>
                            <li align="justify">Descansar los días previos al examen.</li>
                        </ul>
                        <h4><p align="left"><strong>El día de la aplicación</strong></p></h4>
                        <ul>
                            <li align="justify">Ingerir alimentos saludables, ligeros y suficientes.</li>
                            <li align="justify">Usar ropa cómoda. </li>
                            <li align="justify">Portar ficha de examen y una 
                                identificación oficial vigente con fotografía (credencial de elector, 
                                cédula profesional, pasaporte). Si no se presenta la ficha de examen no 
                                podrá realizarse la evaluación.</li>
                            <li align="justify">Llegar con una hora de anticipación a la
                                sede de aplicación. Cerrada la puerta de acceso al plantel, por ningún 
                                motivo se permitirá entrar a los sustentantes con retardo.</li>
                            <li align="justify">Leer con atención las indicaciones para 
                                el sustentante que se encontrarán en la puerta de acceso o en un lugar 
                                visible de la sede.</li>
                            <li align="justify">Durante la aplicación del examen no se 
                                permitirá el uso de libros, materiales impresos y dispositivos 
                                electrónicos y de comunicación.</li>
                            <li align="justify">Conservar la calma en caso de que se 
                                presente alguna contingencia que demore el inicio de la aplicación del 
                                examen ya que se repondrá el tiempo de retraso para cumplir con lo 
                                establecido en la convocatoria.</li>
                            <li align="justify">Informar al coordinador de sede cuando 
                                el sustentante presente alguna discapacidad (motriz, debilidad visual 
                                severa, ceguera) para que se le otorgue el apoyo y las condiciones 
                                adecuadas que requiera.</li>
                        </ul>

                    </div>

                    <div class="module col-md-12">
                        <div class="col-md-12 titulo-gris">
                            <h3 id="preguntasfrecuentes" class="textVis">PREGUNTAS FRECUENTES</h3>
                        </div>
                        <h4><strong>¿Cómo puedo modificar mis datos cuando ya he iniciado el proceso de Pre-registro pero 
                                aún no obtengo mi ficha? </strong></h4>
                        <p class="text-justify">Usted podrá realizar alguna de las siguientes opciones:</p>
                        <ul>
                            <li>Ingrese al sistema con su CURP y la contraseña 
                                respectiva, posteriormente en la parte inferior de la pantalla deberá 
                                dar clic en el botón “Inicio de Sesión”, éste lo llevará a las pantalla 
                                donde podrá modificar todos sus datos.</li>
                        </ul>
                        <h4><strong>¿Cómo puedo modificar mis datos cuando ya finalicé el proceso de 
                                Pre-registro?</strong></h4>
                        <ul>
                            <li>Llamar a la Mesa de ayuda del Distrito 
                                Federal al 01-55-5015-0120 de 08:00 a 20:00hrs tiempo del centro, donde 
                                deberá proporcionar su CURP y nombre completo para revisar y validar sus
                                datos en el SNRSPD.</li>
                        </ul>
                        <h4><strong>¿Cómo puedo cambiar la entidad donde pretendo concursar cuando ya 
                                finalicé el proceso de Pre-registro?</strong></h4>
                        <ul>
                            <li>Deberá presentarse en la Sede de 
                                registro del Estado que haya seleccionado para concursar, con su ficha 
                                de Pre-registro, y solicitarle al Responsable de la Mesa de Registro 
                                (RMR) que sean eliminados sus datos, con ello podrá realizar nuevamente 
                                el proceso Pre-registro, seleccionando la nueva Entidad.</li>
                        </ul>
                        <h4><strong>¿Cómo puedo recuperar mi contraseña para ingresar al sistema cuando 
                                la he olvidado?</strong></h4>
                        <ul>
                            <li>Haga clic en la pregunta ¿Olvidó su 
                                Contraseña? que aparece en la pantalla de acceso, ingrese su CURP y 
                                oprima el botón “Buscar”; el sistema le presentará la pregunta secreta 
                                que usted seleccionó al crear su cuenta de usuario. Ingrese la respuesta
                                correcta y haga clic en el botón “Recuperar”. El sistema le mostrará su
                                contraseña de acceso. </li>
                        </ul>
                        <h4><strong>¿Qué debo hacer si al ingresar mi CURP el sistema me dice que ya existe?</strong></h4>
                        <p class="text-justify">Usted podrá realizar alguna de las siguientes opciones:</p>
                        <ul>
                            <li>Recuperar su contraseña.</li>
                            <li>Llamar a la Mesa de ayuda del Distrito 
                                Federal al 01-55-5015-0120 de 08:00 a 20:00hrs tiempo del centro, donde 
                                deberá proporcionar su CURP y nombre completo para revisar y validar sus
                                datos en el SNRSPD.</li>
                        </ul>
                        <h4><strong>¿Cómo puedo obtener mi usuario y contraseña para entrar al simulador?</strong></h4>
                        <p class="text-justify">Si aún no recibe en su correo electrónico 
                            la información de usuario y contraseña, envíe los siguientes datos al 
                            correo evaluaciondocente@sep.gob.mx</p>
                        <ul>
                            <li>Folio</li>
                            <li>Entidad</li>
                            <li>Nombre completo</li>
                            <li>CURP</li>
                            <li>Correo electrónico de registro</li>
                            <li>Examen en el que está registrado (En caso de promoción, indicar la función)</li>
                            <li>Nivel educativo</li>
                        </ul>
                        <p class="text-justify">Verifique que todos sus datos sean correctos.</p>
                        <p class="text-justify">Revise su bandeja de mensajes nuevos y de spam.</p>
                        <h4><strong>Suspendí o cerré la sesión en el simulador ¿Cómo puedo ingresar nuevamente?</strong><br>
                            <p class="text-justify">Usted cuenta con 8 horas para realizar el 
                                examen en el simulador. Si suspende sesión y desea ingresar nuevamente, 
                                debe anotar las siguientes claves:</p>
                            <table border="1" align="center">
                                <tbody>
                                    <tr>
                                        <td>Usuario:</td><td>simulador</td></tr>
                                    <tr>
                                        <td>Contraseña:</td><td>docente</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <p>Si <strong>Finaliza</strong> sesión debe esperar 24 horas para 
                                acceder nuevamente al simulador.</p>
                        </h4><h4><strong>El simulador no me permite entrar con la 
                                contraseña y el usuario que se me proporcionó por correo ¿Qué puedo hacer? </strong></h4>
                        <p class="text-justify">Hay muchos usuarios ingresando al mismo 
                            tiempo al simulador, por lo que en ocasiones se dificulta el acceso. 
                            Inténtelo nuevamente pasados unos minutos.</p>
                        <h4><strong>¿Dónde puedo ver si mis respuestas son correctas?</strong></h4>
                        <p class="text-justify">En el botón “Material de apoyo” se presenta la lista de respuestas 
                            correctas que obtuvo.</p>
                        <p></p>

                    </div>						

                    <div class="beneficios row">
                        <div class="col-md-6 module">
                            <div class="col-md-12 titulo-gris">
                                <h3 id="contacto" class="textVis">CONTACTO</h3>
                            </div>
                            <p>Mesa de ayuda</p>
                            <p>Tel. 01 800 288 1566</p>
                            <p>Horario de atención de: Lunes a Viernes de 9:00 a 18:00 hrs (hora del centro)</p>
                            <p>Correo electrónico. <a href="mailto:%20evaluaciondocente@sep.gob.mx">evaluaciondocente@sep.gob.mx</a></p>
                            <p>Página web. <a href="http://servicioprofesionaldocente.sep.gob.mx/">http://servicioprofesionaldocente.sep.gob.mx </a></p>
                        </div>
                    </div>
                </div></div>
            <img src="propuesta_files/FRANJA-LOGOS-WEB.jpg" width="100%" height="102" align="middle">
        </div>







        <!--<h3 id="recomendacionesPart" class="textVis">RECOMENDACIONES PARA LA PARTICIPACIÓN</h3>
                                <img src="images/FRANJA-LOGOS-WEB.jpg" width="936" height="102">
        </div>
        
        COMIENZA SECCIÓN FINAL -->
        <a class="cd-top" href="#0">Top</a>
        <script src="propuesta_files/main.js">
<!-- Reargar la página para obtener la fuente: http://sems.gob.mx/work/models/sems/OrientacionServicioProfesionalDocente/js/main.js -->
        </script>
        <script src="propuesta_files/jquery.htm">
<!--Reargar la página para obtener la fuente: http://sems.gob.mx/work/models/sems/OrientacionServicioProfesionalDocente/js/jquery.easing.min.js-->
        </script>
        <script src="propuesta_files/waypoints.htm">
                            <!--Reargar la página para obtener la fuente:
        http://sems.gob.mx/work/models/sems/OrientacionServicioProfesionalDocente/js/waypoints.min.js-->
        </script>
        <script src="propuesta_files/jquery_002.htm">
<!--Reargar la página para obtener la fuente: http://sems.gob.mx/work/models/sems/OrientacionServicioProfesionalDocente/js/jquery.debouncedresize.js-->
        </script>

    </div></div></body></html>
<script>
    function SINO(cual) {
        var elElemento = document.getElementById(cual);
        if (elElemento.style.display === 'block') {
            elElemento.style.display = 'none';
        } else {
            elElemento.style.display = 'block';
        }
    }
</script>