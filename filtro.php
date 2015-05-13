<?php
if(!isset($_SESSION)){
    session_start();
}

//print 'hola';
$pag      = filter_input(INPUT_GET, 'pag');

$constantes['PROCESO']['INGRESO'] = "INGRESO";
$constantes['PROCESO']['PROMOCION'] = "PROMOCIÓN";
$constantes['FUNCION']['TECNICO_DOCENTE'] = "TÉCNICO DOCENTE";
$constantes['FUNCION']['DOCENTE'] = "DOCENTE";

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

