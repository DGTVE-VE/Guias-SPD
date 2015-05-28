<?php

$archivos = scandir ( 'guias' );
//function sanear_string($string)
//{
//
//    $string = trim($string);
//
//    $string = str_replace(
//        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
//        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
//        $string
//    );
//
//    $string = str_replace(
//        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
//        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
//        $string
//    );
//
//    $string = str_replace(
//        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
//        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
//        $string
//    );
//
//    $string = str_replace(
//        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
//        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
//        $string
//    );
//
//    $string = str_replace(
//        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
//        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
//        $string
//    );
//
//    $string = str_replace(
//        array('ñ', 'Ñ', 'ç', 'Ç'),
//        array('n', 'N', 'c', 'C',),
//        $string
//    );
//
//    //Esta parte se encarga de eliminar cualquier caracter extraño
//    $string = str_replace(
//        array("\\", "¨", "º", "-", "~",
//             "#", "@", "|", "!", "\"",
//             "·", "$", "%", "&", "/",
//             "(", ")", "?", "'", "¡",
//             "¿", "[", "^", "`", "]",
//             "+", "}", "{", "¨", "´",
//             ">", "< ", ";", ",", ":",
//             "."),
//        '',
//        $string
//    );
//    
//    $string = str_replace(
//        array(" "),
//        '_',
//        $string
//    );
//
//
//    return $string;
//}


foreach ($archivos as $archivo){
  $vocales =       array('a','e','i','o','u','n','','A','E','I','O','U','N');
  $vocalesAcento = array('á','é','í','ó','ú','ñ','´','Á','É','Í','Ó','Ú','Ñ');    
   
//  $lower = strtolower($archivo);
//  $nuevo = str_replace ('-',' ',$lower);  
  $nuevo1 = str_replace ($vocalesAcento,$vocales,$archivo);
  $lower = strtolower($archivo);
  $nuevo2 = str_replace ($vocalesAcento,$vocales,$lower);
  $lower2 = strtolower($nuevo2);
  print '<br>';
  print $archivo;
    print '<br>';
  print $nuevo1;
  print '<br>';
  print $lower;
  print '<br>';
  print $nuevo2;
  print '<br>';
  print $lower2;
}


//foreach ($archivos as $archivo) {
//    print '<br>';    
//    print($archivo);
//    $lower = strtolower($archivo);
//    print '<br>'; 
//    print($lower);    
//    $vocalesAcento = array('Á','É','Í','Ó','Ú','´','Ñ','á','é','í','ó','ú','ñ',' ');    
//    $nombre = str_replace ($vocalesAcento,'_',$lower);
//    print '<br>'; 
//    print($nombre); 
//}