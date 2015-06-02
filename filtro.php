<?php
if(!isset($_SESSION)){
    session_start();
}

//print 'hola';
$pag      = filter_input(INPUT_GET, 'pag');
$nivel      = filter_input(INPUT_GET, 'nivel');

$_SESSION['imagen'] = filter_input(INPUT_GET, 'imagen');
$_SESSION['nivel'] = $nivel;

$constantes['PROCESO']['INGRESO'] = "INGRESO";
$constantes['PROCESO']['PROMOCION'] = "PROMOCIÓN";
$constantes['FUNCION']['TECNICO_DOCENTE'] = "TÉCNICO DOCENTE";
$constantes['FUNCION']['DOCENTE'] = "DOCENTE";
$constantes['FUNCION']['DIRECTOR'] = "DIRECTOR";
$constantes['FUNCION']['SUPERVISOR'] = "SUPERVISOR";
$constantes['FUNCION']['SUBDIRECTOR_ADMINISTRATIVO'] = "SUBDIRECTOR ADMINISTRATIVO";
$constantes['FUNCION']['SUBDIRECTOR_ACADEMICO'] = "SUBDIRECTOR ACADÉMICO";
$constantes['FUNCION']['JEFE_DE_DEPARTAMENTO_ADMINISTRATIVO'] = "JEFE DE DEPARTAMENTO ADMINISTRATIVO";
$constantes['FUNCION']['JEFE_DE_DEPARTAMENTO_ACADEMICO'] = "JEFE DE DEPARTAMENTO ACADÉMICO";
$constantes['FUNCION']['ATP'] = "ATP";
$constantes['FUNCION']['SUBDIRECTOR'] = "SUBDIRECTOR";
$constantes['FUNCION']['COORDINADOR'] = "COORDINADOR DE ACTIVIDADES";
$constantes['FUNCION']['JEFE_SECTOR'] = "JEFE DE SECTOR";
$constantes['FUNCION']['JEFE_ENSENANZA'] = "JEFE DE ENSEÑANZA";
$constantes['FUNCION']['INSPECTOR'] = "INSPECTOR";


$funcion = filter_input(INPUT_GET, 'funcion');
$proceso = filter_input(INPUT_GET, 'proceso');


if (array_key_exists($funcion, $constantes['FUNCION'])) {
  $_SESSION['funcion'] = $constantes['FUNCION'][$funcion];
}else{//DEFAULT
  $_SESSION['funcion'] = $constantes['FUNCION']['DOCENTE'];
}


if (array_key_exists($proceso, $constantes['PROCESO'])) {
  $_SESSION['proceso'] = $constantes['PROCESO'][$proceso];
}else{//DEFAULT
  $_SESSION['proceso'] = $constantes['PROCESO']['INGRESO'];
}

header('Location: index.php?m='.$pag);
die ();


