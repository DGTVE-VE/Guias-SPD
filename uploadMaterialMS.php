
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


/* @var $daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaMsDAO();

$materiales = $daoGuias->load ($id);
$materiales->url_material = $path;
$daoGuias->update($materiales);
//$todos = $daoGuias->queryByBIBLIOGRAFIA($materiales->bIBLIOGRAFIA);
//foreach ($todos as $material){
//    $material->url_material = $path;
//    $daoGuias->update($material);
//}

//header('Location: index.php?m=uploadMaterialesMS');
//die ();

