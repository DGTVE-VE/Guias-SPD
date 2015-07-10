<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once './include_dao.php';

/* @var daoGuias BibliografiaDAO */
$daoGuias = DAOFactory::getBibliografiaDAO();

$all = filter_input(INPUT_GET, 'all');

if ($all != NULL && $all != false) {
  $material = $daoGuias->queryGuias();
} else {
  $material = $daoGuias->queryGuiasByFuncionProceso($_SESSION['funcion'], $_SESSION['proceso']);
}
?>
<div class="page-header">
  <h1>Guías Educación Básica</h1>
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

<table class="table table-striped table-bordered table-hover table-responsive">
  <thead>
    <tr>
      <td>Función </td><td>Perfil </td><td>Guía</td><td>Guía PDF</td><td> Descripción del Perfil</td><td> Bibliografía</td>
    </tr>        
  </thead>
  <tbody>
    <?php
//        $con = 1;
    $flag = true;
    foreach ($material as $guia) {
      if ($guia->pROCESO == 'INGRESO/COMPLEMENTARIO' && $flag == true) {
        print '</tbody></table>';
        print '<h2> EXÁMENES COMPLEMENTARIOS </h2>';
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
//            print '<td>';            
//            print $con++;
//            print '</td>';
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
                . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/basica/guia/'.$guia->gUIADEESTUDIO.'\',\'title\': \''.$guia->gUIADEESTUDIO.'\'});"> PDF </a>';
      }
      print '<td>';

      if ($guia->uRLPERFIL !== NULL && trim($guia->uRLPERFIL) != false) {
        print '<a href="' . $guia->uRLPERFIL . '"'
                . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/basica/perfil/'.$guia->pERFIL.'\',\'title\': \''.$guia->pERFIL.'\'});"> PDF </a>';
      }
      print '</td>';
      print '<td> <a href="?m=showGuia&nombre=' . $guia->gUIADEESTUDIO . '" data-toggle="modal" data-target="#myModal" '
              . ' onclick="ga(\'send\', \'pageview\', {\'page\': \'/basica/materiales/'.$guia->gUIADEESTUDIO.'\',\'title\': \'Materiales de '.$guia->gUIADEESTUDIO.'\'});">';
      print 'Bibliografía </a></td></tr>';
    }
    ?>
  </tbody>
</table>
<script type="text/javascript">

</script>

<!--<a data-toggle="modal" href="http://fiddle.jshell.net/bHmRB/51/show/" data-target="#myModal">Click me !</a>-->

<!-- Modal 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>
                 <iframe src="?m=showGuia&nombre=' . $guia->gUIADEESTUDIO . '" width="700" height="250"></iframe>
            </div>
            <div class="modal-body"><div class="te"></div></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
         /.modal-content 
    </div>
     /.modal-dialog 
</div>
 /.modal -->