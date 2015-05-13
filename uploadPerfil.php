<?php

session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$perfilesDir = "./perfiles";
$id = filter_input(INPUT_POST, 'id');
//if(intval($_SERVER['CONTENT_LENGTH'])>0 && count($_POST)===0){
//    print 'PHP discarded POST data because of request exceeding post_max_size.';
//    echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
//}
//print_r($_FILES);

if (!file_exists($perfilesDir)) {
    mkdir($perfilesDir);
    chmod($perfilesDir, 777);
}

$tmp_name = $_FILES['perfil']['tmp_name'];
$name = $_FILES['perfil']['name'];

$path = $perfilesDir."/".$name;

move_uploaded_file($tmp_name, $path);

/* @var $dao PerfilesDAO*/
$dao = DAOFactory::getPerfilesDAO();
$perfil = $dao->load($id);
$perfil->uRL = $path;
var_dump ($perfil);
$dao->update($perfil);
header('Location: index.php?m=uploadPerfiles');
die ();
