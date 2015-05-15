<?php
if(!isset($_SESSION)){
    session_start();
}
require_once './include_dao.php';

/*@var daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();
$all = filter_input(INPUT_GET, 'all');


if ($all != NULL && $all!= false ){
  $material = $daoGuias->queryGuias();
} else{
  $material = $daoGuias->queryGuiasByFuncionProceso($_SESSION['funcion'], $_SESSION['proceso']);
}
?>
<div class="page-header">
    <h1>Guías Media Superior</h1>
    <h2><?php 
    if ($all == NULL || $all == false ){
      print $_SESSION['proceso'].'-' .$_SESSION['funcion'];
    }?> 
    </h2>    
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-striped table-bordered table-hover table-responsive">
            <thead>
                <tr>
                    <td> Función</td>
                    <td> Perfil </td>
                    <td> Guía de estudio</td>                    
                    <td> PDF Guía </td>
                    <td> PDF Perfil </td>
                    <td> Bibliografia </td>
                </tr>        
            </thead>
            <tbody>
                <?php
                /*@var $guia BibliografiaMediaSuperiorNormalizada*/
                foreach ($material as $guia) {
                    
                    print '<tr><td>';
                    print $guia->fUNCION;
                    print '</td>';
                    print '<td>';
                    print $guia->pERFIL;
                    print '</td>';
                    print '<td>';
                    print $guia->gUIADEESTUDIO;
                    print '</td>';
                    
                    print '<td>';  
                    
                    if ($guia->uRLGUIA !== NULL && trim($guia->uRLGUIA) != false){
                        print '<a href="' . $guia->uRLGUIA. '"> PDF </a>';
                    }                    
                    print '</td>';
                    print '<td>';  
                    
                    if ($guia->uRLPERFIL !== NULL && trim($guia->uRLPERFIL) != false){
                        print '<a href="' . $guia->uRLPERFIL. '"> PDF </a>';
                    }                    
                    print '</td>';
                    print '<td> <a href="?m=showGuiaMS&nombre=' . $guia->gUIADEESTUDIO. '">';
                    print 'Bibliografía </a></td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>