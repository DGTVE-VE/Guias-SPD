<?php

$idRecurso = filter_input(INPUT_GET, 'id');
$recurso = DAOFactory::getRecursosDAO()->load($idRecurso);

ob_start();
// We'll be outputting a PDF
header('Content-Type: application/pdf');
header("Content-Length: " . filesize ( $recurso->url ) ); 
header("Content-type: application/octet-stream"); 
header("Content-disposition: attachment; filename=".$recurso->nombre.".pdf");
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
ob_clean();
ob_flush();

readfile($recurso->url);