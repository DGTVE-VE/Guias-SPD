<?php

session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$perfilesDir = "./perfilesMS";
$id = filter_input(INPUT_POST, 'perfil');


if (!file_exists($perfilesDir)) {
    mkdir($perfilesDir);
    chmod($perfilesDir, 777);
}

$tmp_name = $_FILES['perfil']['tmp_name'];
$name = $_FILES['perfil']['name'];

$path = $perfilesDir."/".$name;

move_uploaded_file($tmp_name, $path);

/* @var $dao PerfilesDAO*/
$dao = DAOFactory::getBibliografiaMediaSuperiorDAO();
$perfiles = $dao->queryByPERFIL($id);
foreach ($perfiles as $perfil){
  $perfil->uRLPERFIL = $path;
  $dao->update($perfil);
}

header('Location: index.php?m=uploadPerfilesMS');
die ();
