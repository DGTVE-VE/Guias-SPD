<?php

header('Content-type: application/json');
require_once '../include_dao.php';

class Guia_api {

    public function Guia() {
        $funcion = filter_input(INPUT_GET, 'funcion');
        $proceso = filter_input(INPUT_GET, 'proceso');
        $nivel = filter_input(INPUT_GET, 'nivel');

        if ($nivel === 'MEDIA'){
            $daoGuias = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();        
        } else {                
            $daoGuias = DAOFactory::getBibliografiaDAO();        
        }
        $material = $daoGuias->queryGuiasByFuncionProceso($funcion, $proceso);
        //return $material;
         print json_encode($material);
    }
}

$resul = new Guia_api();
$resul->Guia();


//?proceso=PROMOCION&funcion=SUPERVISOR&nivel=MEDIA