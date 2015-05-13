<?php

session_start();
require_once './include_dao.php';
require_once './funciones.php';

$recursosDir = "./recursos";
$materialesDir = "./guias";

if (!file_exists($recursosDir)) {
    print 'creando directorio recursos';
    mkdir($recursosDir);
}
if (!file_exists($materialesDir)) {
    print 'creando directorio guias';
    mkdir($materialesDir);
}
$tmp_name = $_FILES['archivoGuia']['tmp_name'];
$name = $_FILES['archivoGuia']['name'];

move_uploaded_file($tmp_name, $materialesDir."/".$name);

$daoGuias = DAOFactory::getGuiasDAO();
$guia = new Guia();
$guia->categoria = filter_input(INPUT_POST, 'categoriaGuia');
$guia->md5 = md5_file($materialesDir."/".$name);
$guia->nombre = filter_input(INPUT_POST, 'nombreGuia');
$guia->url = $materialesDir."/".$name;

$idGuia = $daoGuias->insert($guia);

$daoRelacion = DAOFactory::getGuiaRecursoDAO();
$daoRecurso = DAOFactory::getRecursosDAO();

if ($_FILES['archivoRecurso']) {
    $file_ary = reArrayFiles($_FILES['archivoRecurso']);
    $i = 0;
    
    foreach ($file_ary as $file) {
        move_uploaded_file($file['tmp_name'], $recursosDir."/".$file['name']);        
        $recurso = new Recurso;
        $recurso->md5 = md5_file($recursosDir."/".$file['name']);
        $recurso->nombre = $_POST['nombreRecurso'][$i];
        $recurso->url = $recursosDir."/".$file['name'];
        
        //TODO Validar si ya existe el recurso
        $idRecurso = $daoRecurso->insert($recurso);
        
        $relacion = new GuiaRecurso;
        $relacion->idGuia = $idGuia;
        $relacion->idRecurso = $idRecurso;
        
        $daoRelacion->insert($relacion);
    }
}



die ();
