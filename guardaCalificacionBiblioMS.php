<?php
session_start();
require_once './include_dao.php';
$dao = DAOFactory::getFeedBackBibilioMSDAO();
$feedback = new FeedBackBiblioMS ();
$feedback->calificacion = $_POST['calificacion'];
$feedback->idBiblio = $_POST['guia'];
$dao->insert($feedback);
$_SESSION['feedbackbiblioMS_'.$feedback->idBiblio] = 1;


