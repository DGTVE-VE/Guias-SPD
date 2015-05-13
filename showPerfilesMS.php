<?php
if(!isset($_SESSION)){
    session_start();
}
require_once './include_dao.php';

/*@var daoGuias BibliografiaDAO*/
$dao = DAOFactory::getBibliografiaMediaSuperiorDAO();
$perfiles = $dao->queryPerfiles();

?>
<div class="page-header">
    <h1>Perfiles</h1>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                  <td>Perfil</td><td>PDF</td>
                </tr>        
            </thead>
            <tbody>
                <?php
                foreach ($perfiles as $perfil) {
                    print '<tr><td>';
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