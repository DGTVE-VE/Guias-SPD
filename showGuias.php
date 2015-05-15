<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once './include_dao.php';

/* @var daoGuias BibliografiaDAO */
$daoGuias = DAOFactory::getBibliografiaDAO();

$all = filter_input(INPUT_GET, 'all');

if ($all != NULL && $all!= false ){
  $material = $daoGuias->queryGuias();
} else {
  $material = $daoGuias->queryGuiasByFuncionProceso($_SESSION['funcion'], $_SESSION['proceso']);
}
?>
<div class="page-header">
    <h1>Guías Educación Básica</h1>
    <h2><?php 
    if ($all == NULL || $all == false ){
      print $_SESSION['proceso'].'-' .$_SESSION['funcion'];
    }?> 
    </h2>
</div>

<table class="table table-striped table-bordered table-hover table-responsive">
    <thead>
        <tr>
          <td>Perfil </td><td>Guía</td><td>Guía PDF</td><td> Descripción del Perfil</td><td> Bibliografía</td>
        </tr>        
    </thead>
    <tbody>
        <?php
        foreach ($material as $guia) {
            print '<tr>';            
            print '<td>';            
            print $guia->pERFIL;
            print '</td>';
            print '<td>';            
            print $guia->gUIADEESTUDIO;
            print '</td>';
            print '<td>';
            if ($guia->uRLGUIA !== NULL) {
                print '<a href="' . $guia->uRLGUIA . '"> PDF </a>';
            }
            print '<td>';

            if ($guia->uRLPERFIL !== NULL) {
                print '<a href="' . $guia->uRLPERFIL . '"> PDF </a>';
            }
            print '</td>';
            print '<td> <a href="?m=showGuia&nombre=' . $guia->gUIADEESTUDIO . '">';
            print 'Bibliografía </a></td></tr>';
        }
        ?>
    </tbody>
</table>
