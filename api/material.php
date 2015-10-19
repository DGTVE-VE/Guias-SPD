<?php
header('Content-type: application/json');
require_once '../include_dao.php';
class Material_api {

    function Material() {
        $guia = filter_input(INPUT_GET, 'guia');
        $dimension = filter_input(INPUT_GET, 'dimension');
        $nivel = filter_input(INPUT_GET, 'nivel');

        if ($nivel === 'MEDIA') {
            $dao = DAOFactory::getBibliografiaDAO();
        } else {
            $dao = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();
        }
        $material = $dao->queryByGuia_Dimension($guia, $dimension);
        print json_encode($material);
    }

}

$resul = new Material_api();
$resul->Material();

// http://localhost/guias-spd/api/material.php?guia=EXAMEN%20DE%20DIRECTOR.%20R%C3%9ABRICA%20DEL%20PLAN%20DE%20MEJORA&dimension=5&nivel=EDUCACI%C3%93N%20B%C3%81SICA