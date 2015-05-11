<?php
if(!isset($_SESSION)){
    session_start();
}
if ( !isset($_SESSION['usuario'])){
    $_SESSION['mensaje'] = "Debes iniciar sesión para acceder a esta sección.";
    header('Location: index.php?m=mensaje');
    die ();
}
