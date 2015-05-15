<?php
if (!isset($_SESSION)) {
    session_start();
}

$nombre = filter_input(INPUT_GET, 'nombre');

$dao = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();
$guias1 = $dao->queryByGuia_Dimension($nombre, '1');
$guias2 = $dao->queryByGuia_Dimension($nombre, '2');
$guias3 = $dao->queryByGuia_Dimension($nombre, '3');
$guias4 = $dao->queryByGuia_Dimension($nombre, '4');
$guias5 = $dao->queryByGuia_Dimension($nombre, '5');
$guias6 = $dao->queryByGuia_Dimension($nombre, 'GENERAL');
$guias7 = $dao->queryByGuia_Dimension($nombre, 'SUGERIDA');


function showMateriales($guias) {
    /* @var $guia BibliografiaMediaSuperiorNormalizada*/
    foreach ($guias as $guia){
        print '<br>';
        if ($guia->uRLMATERIAL !== NULL && $guia->uRLMATERIAL != '#') {
            print '<a href="' . $guia->uRLMATERIAL . '">';
        }
        print trim($guia->bIBLIOGRAFIAREVISADA);
        if ($guia->uRLMATERIAL !== NULL && $guia->uRLMATERIAL != '#') {
            print '</a>';
        }
        print '<br>';
        print '<hr>';
    }
}
?>
<div class="page-header">
    <h1><?php print $nombre; ?></h1>
</div>
<div class="row">
    <div class="col-md-2">                
<!--        <a href="<?php // print $guia[0]->uRLGUIA;    ?>">
            <img src="imgs/cloud384.png" width="32" class="img-responsive" alt="icono descarga">
        </a>
        <iframe src="<?php // print $guia->uRLGUIA;     ?>" width="100%" height="600px"></iframe>-->        
    </div>

    <div class="col-md-8">
        <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <?php if (count($guias1)>0){?>
                <li role="presentation" class="active">
                    <a href="#d1" aria-controls="d1" role="tab" data-toggle="tab">Dimensión 1</a></li>
                <?php } if (count($guias2)>0){?>
                <li role="presentation">
                    <a href="#d2" aria-controls="d2" role="tab" data-toggle="tab">Dimensión 2</a></li>
                <?php } if (count($guias3)>0){?>
                <li role="presentation">
                    <a href="#d3" aria-controls="d3" role="tab" data-toggle="tab">Dimensión 3</a></li>
                <?php } if (count($guias4)>0){?>
                <li role="presentation">
                    <a href="#d4" aria-controls="d4" role="tab" data-toggle="tab">Dimensión 4</a></li>
                <?php } if (count($guias5)>0){?>
                <li role="presentation">
                    <a href="#d5" aria-controls="d5" role="tab" data-toggle="tab">Dimensión 5</a></li>
                <?php } if (count($guias6)>0){?>
                <li role="presentation">
                    <a href="#d6" aria-controls="d6" role="tab" data-toggle="tab">GENERAL</a></li>
                <?php } if (count($guias7)>0){?>
                <li role="presentation">
                    <a href="#d7" aria-controls="d7" role="tab" data-toggle="tab">SUGERIDA</a></li>
                <?php } ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="d1">
                    <?php showMateriales($guias1);?>
                </div>
                <div role="tabpanel" class="tab-pane " id="d2">
                    <?php showMateriales($guias2);?>
                </div>
                <div role="tabpanel" class="tab-pane " id="d3">
                    <?php showMateriales($guias3);?>
                </div>
                <div role="tabpanel" class="tab-pane " id="d4">
                    <?php showMateriales($guias4);?>
                </div>
                <div role="tabpanel" class="tab-pane " id="d5">
                    <?php showMateriales($guias5);?>
                </div>
                <div role="tabpanel" class="tab-pane " id="d6">
                    <?php showMateriales($guias6);?>
                </div>
                <div role="tabpanel" class="tab-pane " id="d7">
                    <?php showMateriales($guias7);?>
                </div>
                
            </div>

        </div>
    </div>
</div>