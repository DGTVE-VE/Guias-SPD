<?php
if(!isset($_SESSION)){
    session_start();
}
require 'validaUsuario.php';

$bibliografia = DAOFactory::getBibliografiaDAO()->queryMateriales();
?>
<h2> Sólo se muestran los materiales que no tienen PDF. </h2>
<h3> Si no quieres que se muestre el material, presiona el botón <span>Omitir</span></h3>
<div class="row">
    <div class="col-md-12">
        <table class="table-condensed table table-bordered table-hover table-responsive table-striped">
            <?php
            foreach ($bibliografia as $b) {
                print '<tr>';
                print '<td>' .
                        '<form action="omiteMaterial.php" method="POST">' .                        
                        '<input type="hidden" name="numero" value="' . $b->nUMERO . '" >' .
                        '<input type="submit" value="Omitir">' .
                        '</form>' .
                        '</td>';
                print '<td>' .
                        '<form action="uploadMaterial.php" method="POST" enctype="multipart/form-data">' .
                        '<input type="file" name="material">' .
                        '<input type="hidden" name="nombre" value="' . $b->nOMENCLATURA . '" >' .
                        '<input type="submit" value="Sube material">' .
                        '</form>' .
                        '</td>';

                print '<td>' . $b->bIBLIOGRAFIA . '</td>';
                print '<td>' . $b->nOMENCLATURA . '</td>';                
                print '<td>' . ($b->lIGAOREFERENCIA == NULL || trim($b->lIGAOREFERENCIA) == '')? '':
                      '<a href="'.  $b->lIGAOREFERENCIA . '"> Link </a></td>';
                print '</tr>';
            }
            ?>
        </table>
    </div>
</div>
