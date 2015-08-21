<?php

session_start();
require 'include_dao.php';

if (isset($_POST['faq1'])) {
    $faq = $_POST['faq1'];
    $resp = $_POST['resp1'];
    $_SESSION['faq1'] = 'faq1';
    almacenaFaq($faq, $resp);
}

if (isset($_POST['faq2'])) {
    $faq = $_POST['faq2'];
    $resp = $_POST['resp2'];
    $_SESSION['faq2'] = 'faq2';
    almacenaFaq($faq, $resp);
}

if (isset($_POST['faq3'])) {
    $faq = $_POST['faq3'];
    $resp = $_POST['resp3'];
    $_SESSION['faq3'] = 'faq3';
    almacenaFaq($faq, $resp);
}

if (isset($_POST['faq4'])) {
    $faq = $_POST['faq4'];
    $resp = $_POST['resp4'];
    $_SESSION['faq4'] = 'faq4';
    almacenaFaq($faq, $resp);
}

if (isset($_POST['faq5'])) {
    $faq = $_POST['faq5'];
    $resp = $_POST['resp5'];
    $_SESSION['faq5'] = 'faq5';
    almacenaFaq($faq, $resp);
}
if (isset($_POST['faq6'])) {
    $faq = $_POST['faq6'];
    $resp = $_POST['resp6'];
    $_SESSION['faq6'] = 'faq6';
    almacenaFaq($faq, $resp);
}
if (isset($_POST['faq7'])) {
    $faq = $_POST['faq7'];
    $resp = $_POST['resp7'];
    $_SESSION['faq7'] = 'faq7';
    almacenaFaq($faq, $resp);
}
if (isset($_POST['faq8'])) {
    $faq = $_POST['faq8'];
    $resp = $_POST['resp8'];
    $_SESSION['faq8'] = 'faq8';
    almacenaFaq($faq, $resp);
}
if (isset($_POST['faq9'])) {
    $faq = $_POST['faq9'];
    $resp = $_POST['resp9'];
    $_SESSION['faq9'] = 'faq9';
    almacenaFaq($faq, $resp);
}
if (isset($_POST['faq10'])) {
    $faq = $_POST['faq10'];
    $resp = $_POST['resp10'];
    $_SESSION['faq10'] = 'faq10';
    almacenaFaq($faq, $resp);
}
function almacenaFaq($faq, $resp) {
    $PreguntasFrecuentes = new PreguntasFrecuentes();
    $PreguntasFrecuentes->calificacion = $resp;
    $PreguntasFrecuentes->numPregunta = $faq;
    $dao = DAOFactory::getPreguntasFrecuentesDAO();
    $dao->insert($PreguntasFrecuentes);
}

header('Location: index.php?m=preguntas_frecuentes');
