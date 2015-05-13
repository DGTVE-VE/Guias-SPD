<?php 
if(!isset($_SESSION)){
    session_start();
}
require 'validaUsuario.php';
    
$bibliografia = DAOFactory::getBibliografiaMsDAO()->queryGuiasNullURL();
?>
<h2> Sólo se muestran las guías que no tienen PDF</h2>
<div class="row">
    <div class="col-md-12">
        <table class="table-condensed table table-bordered table-hover table-responsive table-striped">
            <?php 
                /*@var $b BibliografiaM*/
                foreach ($bibliografia as $b){                    
                    print '<tr>';
                    if ($b->url_guia !== NULL){
                        print '<td><a href="'. $b->url_guia. '"> Link </a></td>';
                    }
                    else{
                        print '<td>'. 
                              '<form action="uploadGuiaMS.php" method="POST" enctype="multipart/form-data">'.
                                '<input type="file" name="guia">'.
                                '<input type="hidden" name="nombre" value="'.$b->gUIADEESTUDIO.'" >'.
                                '<input type="submit" value="Sube guia">'.
                              '</form>'.
                              '</td>';                                                                                    
                    }
                    print '<td>'. $b->gUIADEESTUDIO. '</td>';
                    print '<td>'. $b->fUNCION. '</td>';
                    print '<td>'. $b->pROCESO. '</td>';
                    print '<td>'. $b->nIVELSERVICIO. '</td>';   
                    print '</tr>';
                }
            ?>
        </table>
    </div>
</div>