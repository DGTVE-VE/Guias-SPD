<div class="container-fluid theme-showcase" role="main">                        
    <div class="row">
        <?php
        $funcion = $_GET['funcion'];
        $nivel = $_GET['nivel'];
        //print($nivel.$funcion);
        if (($nivel === 'MEDIA') && ($funcion === 'EDD')) {
            ?>
            <!--EMS VF-->
            <div class="col-md-3 sidebar">
                <b>Evaluación del Desempeño Docente 2015-2016</b>
                <ul class="nav nav-sidebar">                                 
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Perfiles, parámetros e indicadores para Docentes y Técnicos Docentes en Educación Media Superior</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Etapas, aspectos, métodos e instrumentos</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Expediente de Evidencias de Enseñanza</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Informe de Cumplimiento de Responsabilidades</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para la Planeación Didáctica Argumentada</a></li>                    
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Examen de Conocimientos</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el examen de casos de competencias didácticas</a></li>                    
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Normatividad (Acuerdos Secretariales)</a></li>                                        
                </ul>
            </div>
            <?php
        }
        if (($nivel === 'BASICA') && ($funcion === 'EDD')) {
            ?>
            <!--EB VF-->  
            <div class="col-md-3 sidebar">            
                <b>Evaluación de Desempeño Docente</b>
                <ul class="nav nav-sidebar">                                 
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Perfiles, parámetros e indicadores</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Etapas, aspectos, métodos e instrumentos</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Expediente de Evidencias de Enseñanza</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Informe de Cumplimiento de Responsabilidades</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Examen de Conocimientos y Competencias Didácticas</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para la Planeación Didáctica Argumentada</a></li>
                </ul>
            </div>

            <?php
        }
        if (($nivel === 'BASICA') && ($funcion === 'EDPFD')) {
            ?>
            <div class="col-md-3 sidebar">            
                <b>Evaluación del Desempeño de Personal con Funciones de Dirección</b>
                <ul class="nav nav-sidebar">                                 
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Perfiles, parámetros e indicadores</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Etapas, aspectos, métodos e instrumentos</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Expediente de Evidencias de la Función Directiva</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Examen de Conocimientos y Habilidades Directivas</a></li>
                    <li><a href="" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para la elaboración de la Ruta de Mejora Argumentada. Director</a></li>
                </ul>            
            </div>
            <?php
        }
        ?>
        <div id="EMGEEE" class="collapse col-md-9">
            <h3>Guías para el Informe de Cumplimiento de Responsabilidades:</h3>
            <table class="table table-bordered">
                <thead>
                <th>Instrumento</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Informe de Cumplimiento de Responsabilidades Profesionales</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>
    </div>        
</div>
</div>