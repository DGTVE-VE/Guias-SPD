<?php 
if(!isset($_SESSION)){
    session_start();
}
require 'validaUsuario.php';
    
$bibliografia = DAOFactory::getBibliografiaDAO()->queryGuias();
?>
<h2> Sólo se muestran las guías que no tienen PDF</h2>
<div class="row">
    <div class="col-md-12">
        <table class="table-condensed table table-bordered table-hover table-responsive table-striped">
            <?php 
                foreach ($bibliografia as $b){                    
                    print '<tr>';
                    if ($b->uRLGUIA !== NULL){
                        print '<td><a href="'. $b->uRLGUIA. '"> Link </a></td>';
                    }
                    else{
                        print '<td>'. 
                              '<form action="uploadGuia.php" method="POST" enctype="multipart/form-data">'.
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