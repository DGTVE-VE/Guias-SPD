<?php
session_start();
require_once './include_dao.php';
$dao = DAOFactory::getFeedBackBibilioDAO();
$feedback = new FeedBackBiblio ();
$feedback->calificacion = $_POST['calificacion'];
$feedback->idBiblio = $_POST['guia'];
$dao->insert($feedback);
$_SESSION['feedbackbiblio_'.$feedback->idBiblio] = 1;


