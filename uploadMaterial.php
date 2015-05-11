
<?php

session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$materialesDir = "./materiales";
$nombre = filter_input(INPUT_POST, 'nombre');

if (!file_exists($materialesDir)) {
    mkdir($materialesDir);
}
$tmp_name = $_FILES['material']['tmp_name'];
$name = $_FILES['material']['name'];

$path = $materialesDir."/".$name;

move_uploaded_file($tmp_name, $path);

/* @var $daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaDAO();
$materiales = $daoGuias->queryByNOMENCLATURA ($nombre);
foreach ($materiales as $material){
    $material->uRLMATERIAL = $path;
    $daoGuias->update($material);
}

header('Location: index.php?m=uploadMaterial');
die ();

