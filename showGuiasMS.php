<?php
if(!isset($_SESSION)){
    session_start();
}
require_once './include_dao.php';

/*@var daoGuias BibliografiaDAO*/
$daoGuias = DAOFactory::getBibliografiaMsDAO();
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
                    <td>Guia</td><td> Documento PDF </td><td> Bibliografía</td>
                </tr>        
            </thead>
            <tbody>
                <?php
                foreach ($material as $guia) {
                    
                    print '<tr><td>';
                    print $guia->gUIADEESTUDIO;
                    print '</td>';
                    print '<td>';  
                    
                    if ($guia->url_guia !== NULL && trim($guia->url_guia) != false){
                        print '<a href="' . $guia->url_guia. '"> PDF </a>';
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