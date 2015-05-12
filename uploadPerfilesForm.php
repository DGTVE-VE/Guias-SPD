<?php
if(!isset($_SESSION)){
    session_start();
}
require_once './include_dao.php';

/*@var daoGuias BibliografiaDAO*/
$dao = DAOFactory::getPerfilesDAO();
$perfiles = $dao->queryAll();

?>
<div class="page-header">
    <h1>Perfiles</h1>
</div>
<div class="row">
    
    <div class="col-md-12">
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <td></td><td>PPI</td><td> PROCESO</td>
                    <td> FUNCION </td><td> NIVEL MODALIDAD </td><td>PDF</td>
                </tr>        
            </thead>
            <tbody>
                <?php
                foreach ($perfiles as $perfil) {
                    print '<tr>';
                    print '<td>'. 
                              '<form action="uploadPerfil.php" method="POST" enctype="multipart/form-data">'.
                                '<input type="file" name="perfil">'.
                                '<input type="hidden" name="id" value="'.$perfil->nUMERO.'" >'.
                                '<input type="submit" value="Sube perfil">'.
                              '</form>'.
                              '</td>'; 
                    print '<td>';
                    print $perfil->pPI;
                    print '</td>';
                    print '<td>';
                    print $perfil->pROCESO;
                    print '</td>';
                    print '<td>';
                    print $perfil->fUNCION;
                    print '</td>';
                    print '<td>';
                    print $perfil->nIVELMODALIDAD;
                    print '</td>';
                    print '<td>';  
                    
                    if ($perfil->uRL !== NULL && trim($perfil->uRL)!= false){
                        print '<a href="' . $perfil->uRL. '"> PDF </a>';
                    }                    
                    print '</td>';
                    
                    print '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>