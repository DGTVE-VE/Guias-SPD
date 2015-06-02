<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once './include_dao.php';

/* @var daoGuias BibliografiaMediaSuperiorNormalizadaMySqlExtDAO */
$daoGuias = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO();
$all = filter_input(INPUT_GET, 'all');


if ($all != NULL && $all != false) {
  $material = $daoGuias->queryGuias();
} else {
  $material = $daoGuias->queryGuiasByFuncionProceso($_SESSION['funcion'], $_SESSION['proceso']);
}
?>
<div class="page-header">
  <h1>Guías Media Superior</h1>
  <h2><?php
    if ($all == NULL || $all == false) {
      if ($_SESSION['funcion'] === 'DOCENTE') {
        print $_SESSION['proceso'] . ' - DOCENTES Y TÉCNICOS DOCENTES';
      } else {
        print $_SESSION['proceso'] . ' - ' . $_SESSION['funcion'];
      }
    }
    ?> 
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
        /* @var $guia BibliografiaMediaSuperiorNormalizada */
//                $cont = 1;
        $flag = true;
        foreach ($material as $guia) {
          if ($guia->pROCESO == 'INGRESO/COMPLEMENTARIO' && $flag == true) {
            print '</tbody></table>';
            print '<h1> EXÁMENES COMPLEMENTARIOS </h1>';
            print '<table class="table table-striped table-bordered table-hover table-responsive">
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
            <tbody>';
            $flag = false;
          }
          print '<tr>';
          
          print '<td>';
          print $guia->fUNCION;
          print '</td>';
          print '<td>';
          print $guia->pERFIL;
          print '</td>';
          print '<td>';
          print $guia->gUIADEESTUDIO;
          print '</td>';

          print '<td>';

          if ($guia->uRLGUIA !== NULL && trim($guia->uRLGUIA) != false) {
            print '<a href="' . $guia->uRLGUIA . '"'
                    . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/media/guia/'.$guia->gUIADEESTUDIO.'\',\'title\': \''.$guia->gUIADEESTUDIO.'\'});"> PDF </a>';
          }
          print '</td>';
          print '<td>';

          if ($guia->uRLPERFIL !== NULL && trim($guia->uRLPERFIL) != false) {
            print '<a href="' . $guia->uRLPERFIL . '"'
                    . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/media/perfil/'.$guia->pERFIL.'\',\'title\': \''.$guia->pERFIL.'\'});"> PDF </a>';
          }
          print '</td>';
          print '<td> <a href="?m=showGuiaMS&nombre=' . $guia->gUIADEESTUDIO . '"'
                  . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/media/materiales/'.$guia->gUIADEESTUDIO.'\',\'title\': \'Materiales de '.$guia->gUIADEESTUDIO.'\'});">';
          print 'Bibliografía </a></td></tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</div>