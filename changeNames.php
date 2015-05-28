<?php

include_once './include_dao.php';

ini_set('max_execution_time', 3000);

convierteAscii('./guias/', 
               DAOFactory::getBibliografiaDAO(),
               'queryByURLGUIA',
               'uRLGUIA');
convierteAscii('./materiales/', 
               DAOFactory::getBibliografiaDAO(),
               'queryByURLMATERIAL',
               'uRLMATERIAL');
convierteAscii('./materialesMS/',                 
               DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO(), 
               'queryByURLMATERIAL',
               'uRLMATERIAL');

function quitaLetras ($cadena){
  $respuesta = "";
  for ($i = 0; $i<strlen($cadena); $i++){
    if (  ctype_alpha ($cadena[$i]) ||  
          ctype_digit ($cadena[$i]) || 
            $cadena[$i] == '.'){
      $respuesta = $respuesta.$cadena[$i];
    }
  }
  return $respuesta;
}

function convierteAscii($directorio, $dao, $query, $propiedad) {
  $archivos = scandir($directorio);
  print 'Se encontraron '.count($archivos).' archivos en '.$directorio;
  print '<br>';
  foreach ($archivos as $archivo) {    
    print 'Cambiando nombre de:'.$archivo;    
    print '<br>';
    $texto = quitaLetras ($archivo);
    print 'Nuevo nombre: '.$texto;
    print '<br>';
    $guias = $dao->$query($directorio . $archivo);    
    print 'Se encontraron '.count($guias).' registros <br>';        
    print 'Cambiando nombres en bases de datos...';
    print '<br>';
    foreach ($guias as $guia) {
      $guia->$propiedad = $directorio . $texto;
      $result = $dao->update($guia);
      print 'Filas afectadas: '.$result;
      print '<br>';
    }
    print 'Cambiando nombres de archivo...'.$directorio . $archivo;
    print '<br> por: '.$directorio . $texto;
    print '<br>';
    $result = rename($directorio . $archivo, $directorio . $texto);
    print 'El resultado del renombrado fue: ';
    var_dump($result);
    print '<br>';
  }
}

