<?php
if(!isset($_SESSION)){
    session_start();
}
require_once './include_dao.php';

$dao = DAOFactory::getBibliografiaDAO();
$perfiles = $dao->queryPerfiles();

?>
<div class="page-header">
    <h1>Perfiles</h1>
</div>
<div class="row">
    
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <td></td><td>PPI<td>PDF</td>
                </tr>        
            </thead>
            <tbody>
                <?php
                foreach ($perfiles as $perfil) {
                    print '<tr>';
                    print '<td>'. 
                              '<form action="uploadPerfil.php" method="POST" enctype="multipart/form-data">'.
                                '<input type="file" name="perfil">'.
                                '<input type="hidden" name="id" value="'.$perfil->pERFIL.'" >'.
                                '<input type="submit" value="Sube perfil">'.
                              '</form>'.
                              '</td>'; 
                    print '<td>';
                    print $perfil->pERFIL;
                    print '</td>';
                    
                    print '<td>';  
                    if ($perfil->uRLPERFIL !== NULL && trim($perfil->uRLPERFIL)!= false){
                        print '<a href="' . $perfil->uRLPERFIL. '"> PDF </a>';
                    }                    
                    print '</td>';
                    
                    print '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>