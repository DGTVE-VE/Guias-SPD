<?php

$id = filter_input(INPUT_GET, 'id');
$guia = DAOFactory::getGuiasDAO()->load($id);
//var_dump ($guia);
//print filesize ( $guia->url );
ob_start();
// We'll be outputting a PDF
header('Content-Type: application/pdf');
header("Content-Length: " . filesize ( $guia->url ) ); 
header("Content-type: application/octet-stream"); 
header("Content-disposition: attachment; filename=".$guia->nombre.".pdf");
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
ob_clean();
ob_flush();
readfile($guia->url);