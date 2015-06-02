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
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <td>PPI</td><td> PROCESO</td>
                    <td> FUNCION </td><td> NIVEL MODALIDAD </td><td>PDF</td>
                </tr>        
            </thead>
            <tbody>
                <?php
                foreach ($perfiles as $perfil) {
                    print '<tr><td>';
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
                        print '<a href="' . $perfil->uRL. '"'
                                . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/basica/perfil/'.$perfil->pERFIL.'\',\'title\': \''.$guia->gUIADEESTUDIO.'\'});"> PDF </a>';
                    }                    
                    print '</td>';
                    
                    print '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>