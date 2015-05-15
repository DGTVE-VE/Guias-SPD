<?php
session_start ();


if (!isset ($_SESSION['nivel'])){
  header('Location: index.php?m=showGuias&all=true');
  die ();
}

if ($_SESSION['nivel'] == 'BASICA'){
  header('Location: index.php?m=showGuias');
  die ();
} else if ($_SESSION['nivel'] == 'MEDIA'){
  header('Location: index.php?m=showGuiasMS');
  die ();
} else {
  header('Location: index.php?m=showGuias&all=true');
  die ();
}