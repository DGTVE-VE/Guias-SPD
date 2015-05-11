<?php
session_start();
require_once './include_dao.php';
require_once './funciones.php';

$email      = filter_input(INPUT_POST, 'email');
$password   = filter_input(INPUT_POST, 'password');

$usuario = DAOFactory::getUsuariosDAO()->queryByNick($email);
if (count($usuario) === 0){
    $_SESSION['mensaje'] = 'El usuario no existe';
    header('Location: index.php?m=mensaje');
}
//print md5($password) ."==" . $usuario[0]->pass;
if (md5($password) == $usuario[0]->pass){
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php?m=uploadGuia');
} else {
    $_SESSION['mensaje'] = 'El password es incorrecto';
    header('Location: index.php?m=mensaje');
}

