<?php
session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$guiasDir = "./guiasMS";
$nombre = filter_input(INPUT_POST, 'nombre');


if (!file_exists($guiasDir)) {
    mkdir($guiasDir);
    chmod($guiasDir, 777);
}

$tmp_name = $_FILES['guia']['tmp_name'];
$name = $_FILES['guia']['name'];

$path = $guiasDir."/".$name;

move_uploaded_file($tmp_name, $path);

/* @var $daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();
$guias = $daoGuias->queryByGUIADEESTUDIO($nombre);
foreach ($guias as $guia){
    $guia->uRLGUIA = $path;
    $daoGuias->update($guia);
}

header('Location: index.php?m=uploadGuiaMS');
die ();
