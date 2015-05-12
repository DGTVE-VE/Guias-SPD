<?php

session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$guiasDir = "./guiasMS";
$nombre = filter_input(INPUT_POST, 'nombre');
//if(intval($_SERVER['CONTENT_LENGTH'])>0 && count($_POST)===0){
//    print 'PHP discarded POST data because of request exceeding post_max_size.';
//    echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
//}
//print_r($_FILES);

if (!file_exists($guiasDir)) {
    mkdir($guiasDir);
    chmod($guiasDir, 777);
}

$tmp_name = $_FILES['guia']['tmp_name'];
$name = $_FILES['guia']['name'];

$path = $guiasDir."/".$name;

move_uploaded_file($tmp_name, $path);

/* @var $daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaMsDAO();
$guias = $daoGuias->queryByGUIADEESTUDIO($nombre);
foreach ($guias as $guia){
    $guia->url_guia = $path;
    $daoGuias->update($guia);
}

header('Location: index.php?m=uploadGuiaMS');
die ();
