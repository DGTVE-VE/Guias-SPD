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
                    <li><a href="#EMS1" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Expediente de Evidencias de Enseñanza</a></li>
                    <li><a href="#EMS2" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Informe de Cumplimiento de Responsabilidades</a></li>
                    <li><a href="#EMS3" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para la Planeación Didáctica Argumentada</a></li>                    
                    <li><a href="#EMS4" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Examen de Conocimientos</a></li>
                    <li><a href="#EMS5" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el examen de casos de competencias didácticas</a></li>                    
                    <li><a href="#EMS6" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
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
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Perfiles, parámetros e indicadores</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Etapas, aspectos, métodos e instrumentos</a></li>
                    <li><a href="#EB1" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Expediente de Evidencias de Enseñanza</a></li>
                    <li><a href="#EB2" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Informe de Cumplimiento de Responsabilidades</a></li>
                    <li><a href="#EB3" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Examen de Conocimientos y Competencias Didácticas</a></li>
                    <li><a href="#EB4" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
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
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Perfiles, parámetros e indicadores</a></li>
                    <li><a href="#" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Etapas, aspectos, métodos e instrumentos</a></li>
                    <li><a href="#EB5" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Expediente de Evidencias de la Función Directiva</a></li>
                    <li><a href="#EB6" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para el Examen de Conocimientos y Habilidades Directivas</a></li>
                    <li><a href="#EB7" data-toggle="collapse" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                            Guías para la elaboración de la Ruta de Mejora Argumentada. Director</a></li>
                </ul>            
            </div>
            <?php
        }
        ?>
        <div id="EMS1" class="collapse col-md-9">
            <h3>Guías para el Expediente de Evidencias de Enseñanza</h3>
            <table class="table table-bordered">
                <thead>
                <th>Disciplina</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>
        <div id="EMS2" class="collapse col-md-9">
            <h3>Guías para el Informe de Cumplimiento de Responsabilidades</h3>
            <table class="table table-bordered">
                <thead>
                <th>Disciplina</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>           
        <div id="EMS3" class="collapse col-md-9">
            <h3>Guías para la Planeación Didáctica Argumentada</h3>
            <table class="table table-bordered">
                <thead>
                <th>Disciplina</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>        
        <div id="EMS4" class="collapse col-md-9">
            <h3>Guías para el examen de conocimientos</h3>
            <table class="table table-bordered">
                <thead>
                <th>Disciplina</th>
                <th>Guía</th>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>        
        <div id="EMS5" class="collapse col-md-9">
            <h3>Guías para el examen de casos de competencias didácticas</h3>
            <table class="table table-bordered">
                <thead>
                <th>Disciplina</th>
                <th>Guía</th>
                </thead>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>
        <div id="EMS6" class="collapse col-md-9">
            <h3>Normatividad (Acuerdos Secretariales)</h3>
            <table class="table table-bordered">
                <thead>
                <th>Acuerdo Secretarial</th>
                <th>Documento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>  
            
            <!--EDUCAIÓN BÁSICA-->
        <div id="EB1" class="collapse col-md-9">
            <h3>Guías para el Expediente de Evidencias de Enseñanza</h3>
            <table class="table table-bordered">
                <thead>
                <th>Nivel / Asignatura / Servicio</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div> 
        <div id="EB2" class="collapse col-md-9">
            <h3>Guías para el Informe de Cumplimiento de Responsabilidades</h3>
            <table class="table table-bordered">
                <thead>
                <th>Instrumento</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div> 
        <div id="EB3" class="collapse col-md-9">
            <h3>Guías para el Examen de Conocimientos y Competencias Didácticas</h3>
            <table class="table table-bordered">
                <thead>
                <th>Nivel / Asignatura / Servicio</th>
                <th>Documento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div> 
        <div id="EB4" class="collapse col-md-9">
            <h3>Guías para la Planeación Didáctica Argumentada</h3>
            <table class="table table-bordered">
                <thead>
                <th>Nivel / Asignatura / Servicio</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div> 
        <div id="EB5" class="collapse col-md-9">
            <h3>Guías para el Expediente de Evidencias de la Función Directiva</h3>
            <table class="table table-bordered">
                <thead>
                <th>Nivel</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>  
        <div id="EB6" class="collapse col-md-9">
            <h3>Guías para el Examen de Conocimientos y Habilidades Directivas</h3>
            <table class="table table-bordered">
                <thead>
                <th>Nivel</th>
                <th>Guía Académica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>  
        <div id="EB7" class="collapse col-md-9">
            <h3>Guías para la elaboración de la Ruta de Mejora Argumentada. Director</h3>
            <table class="table table-bordered">
                <thead>
                <th>Nivel</th>
                <th>Guía Académica</th>
                <th>Guía Técnica</th>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td><a href="pdf/">PDF</a></td>
                        <td><a href="pdf/">PDF</a></td>
                    </tr>                         
                </tbody>
            </table>
        </div>      
    </div>        
</div>