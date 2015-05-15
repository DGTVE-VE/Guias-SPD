
<?php

session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$materialesDir = "./materialesMS";
$id = filter_input(INPUT_POST, 'id');



if (!file_exists($materialesDir)) {
    mkdir($materialesDir);
    chmod($materialesDir, 777);
}
$tmp_name = $_FILES['material']['tmp_name'];
$name = $_FILES['material']['name'];

$path = $materialesDir."/".$name;

move_uploaded_file($tmp_name, $path);
/* @var $daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();

$material = $daoGuias->load ($id);
$material->uRLMATERIAL = $path;
$daoGuias->update($material);

header('Location: index.php?m=uploadMaterialesMS');
die ();

