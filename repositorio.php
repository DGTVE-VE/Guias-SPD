<div class="row" id="contenidoRepositorio">
    <div class="col-md-12">
        <div class="col-md-5">
            <h3>Ingresa filtro:</h3>
            <form role="search" action="?m=repositorio" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="busqueda"  placeholder="Buscar">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
<?php
if (isset($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];    
    
    $mensaje = 'Resultados de la consulta';
    echo'<table id="tblRepositorio" class="table table-bordered">';
    echo'    <caption> ' . $mensaje . '</caption>';
    echo'    <thead>';
    echo'        <tr>';
    echo'            <th>BIBLIOGRAFÍA</th>';
    echo'        </tr>';
    echo'    </thead>';
    echo'    <tbody>';
    $dao = DAOFactory::getBibliografiaDAO();
    $repositorio = $dao->queryRepositorio($busqueda);
    foreach ($repositorio as $rep) {
        
        if ($rep->uRLMATERIAL != NULL && trim($rep->uRLMATERIAL) != false){
        echo'<tr>';           
             echo'<td><a href="'.$rep->uRLMATERIAL.'">' . $rep->bIBLIOGRAFIA . '</a></td>';             
        echo'</tr>';
        }
    }
    
    $repositorio_guias = $dao->queryRepositorioGuias($busqueda);
    foreach ($repositorio_guias as $rep) {
        
        if ($rep->uRLGUIA != NULL && trim($rep->uRLGUIA) != false){
        echo'<tr>';           
             echo'<td><a href="'.$rep->uRLGUIA.'">' . $rep->gUIADEESTUDIO . '</a></td>';             
        echo'</tr>';
        }
    }
    $repositorioMS = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO()->queryRepositorio($busqueda);
    foreach ($repositorioMS as $rep) {
        
        if ($rep->uRLMATERIAL != NULL && trim($rep->uRLMATERIAL) != false){
        echo'<tr>';           
             echo'<td><a href="'.$rep->uRLMATERIAL.'">' . $rep->bIBLIOGRAFIA . '</a></td>';             
        echo'</tr>';
        }
    }
    $repositorioMS_guias = DAOFactory::getBibliografiaMediaSuperiorNormalizadaDAO()->queryRepositorioGuias($busqueda);
    foreach ($repositorioMS_guias as $rep) {
        
        if ($rep->uRLGUIA != NULL && trim($rep->uRLGUIA) != false){
        echo'<tr>';           
             echo'<td><a href="'.$rep->uRLGUIA.'">' . $rep->gUIADEESTUDIO . '</a></td>';             
        echo'</tr>';
        }
    }
    echo'</tbody>';
    echo'</table>';
} else{ echo 'Búsqueda';} 
?>
                </div>
            </div>
        </div>
    </div>
</div>