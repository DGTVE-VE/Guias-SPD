
<?php
session_start();
require 'validaUsuario.php';
require_once './include_dao.php';
require_once './funciones.php';

$numero = filter_input(INPUT_POST, 'numero');


$dao = DAOFactory::getBibliografiaMsDAO();
$material = $dao->load($numero);
$material->url_material = "#";
$dao->update($material);


header('Location: index.php?m=uploadMaterialesMS');
die ();