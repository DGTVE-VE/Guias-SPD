<div class="container-fluid theme-showcase" role="main">                        
    <div class="row">
        <?php
        $funcion = $_GET['funcion'];
        $nivel = $_GET['nivel'];
        //print($nivel.$funcion);
        if (($nivel === 'MEDIA') && ($funcion === 'EDD')) {
            ?>        
            <div class="col-md-12">
                <!--EMS VF-->            
                <h3>Evaluación del Desempeño Docente 2015-2016</h3>
                <!-- tabs left -->
                <div class="tabbable">
                    <ul class="nav nav-pills nav-stacked col-md-3">
                        <li><a href="permanencia/MS/PPI_DESEMPENO_EMS.pdf"  target="_blank"  onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Perfiles, parámetros e indicadores para Docentes y Técnicos Docentes en Educación Media Superior</a></li>
                        <li><a href="permanencia/MS/Etapas_Docentes_Desempeno_EMS.pdf"  target="_blank" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Etapas, aspectos, métodos e instrumentos</a></li>
                        <li><a href="#EM1" data-toggle="tab"  onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Expediente de Evidencias de Enseñanza</a></li>
                        <li><a href="#EM2" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Informe de Cumplimiento de Responsabilidades</a></li>
                        <li><a href="#EM3" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para la Planeación Didáctica Argumentada</a></li>                    
                        <li><a href="#EM4" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Examen de Conocimientos</a></li>
                        <li><a href="#EM5" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el examen de casos de competencias didácticas</a></li>                    
                        <li><a href="#EM6" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Normatividad (Acuerdos Secretariales)</a></li>                      
                    </ul>
                    <div class="tab-content col-md-9">
                        <div class="tab-pane" id="EM1">
                            <h3>Guías para el Expediente de Evidencias de Enseñanza:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Disciplina </th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matemáticas</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_MAT.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_MAT.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Dibujo</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_DBJ.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_DBJ.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Biología</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_Guia_Aca_BIO.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_BIO.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ciencias de la Salud</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_CIESAL.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_CIESAL.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Física</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desem_GuiaAca_FIS.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_FIS.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Geografía</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desem_GuiaAca_GEO.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_GEO.pdf"  target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Química</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desem_GuiaAca_QUIM.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_QUIM.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Psicología</td>
                                        <td><a href="#"  target="_blank" ></a></td>
                                        <td><a href="#"  target="_blank" ></a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Humanidades</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_HUM.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_HUM.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia del Arte</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_HISAR.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_HISART.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Economía</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_ECON.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_ECON.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Derecho</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_DER.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_DER.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Administración</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_ADM.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_ADMON.pdf"  target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Historia</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_HIST.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_HIS.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Sociología y Política</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Dsemp_GuiaAca_SOCPOL.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_SOCPOL.pdf"  target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Metodología de la Investigación</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_METINV.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_METINV.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Literatura</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_LIT.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_LIT.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Lectura, Expresión Oral y Escrita</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Demep_GuiaAca_LEXOES.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_LEXOES.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Informática</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_INFO.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_INFO.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Etimología grecolatina</td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Academicas/EMS_Desemp_GuiaAca_ETIM.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Expediente de Evidencias de Enseñanza/Tecnicas/EMS_GuiaTec_ETIM.pdf"  target="_blank" >PDF</a></td>
                                    </tr>                                                       
                                </tbody>
                            </table>                        
                        </div><!--fin EM1-->
                        <div class="tab-pane" id="EM2">  
                            <h3>Guías para el Informe de Cumplimiento de Responsabilidades: </h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Instrumento </th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Guía para el Informe de Cumplimiento de Responsabilidades Profesionales</td>
                                        <td><a href="permanencia/MS/Guías para el Informe de Cumplimiento de Responsabilidades/EMS_Desempeno_IRP_Director.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para el Informe de Cumplimiento de Responsabilidades/EMS_Guia_Tecnica_DIRECTOR_IRP.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                </tbody>
                            </table>            
                        </div><!--fin EM2-->
                        <div class="tab-pane" id="EM3">
                            <h3>Guías para la Planeación Didáctica Argumentada:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Instrumento </th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matemáticas</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/1_Guia-plan-didac-Matematicas.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/1_GUIA_TECNICA_PLANEACION_MATEMATICAS_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Dibujo</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/2_Guia-plan_didac_Dibujo.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/2_GUIA_TECNICA_PLANEACION_DIBUJO_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Biología</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/3_Guia-plan-didac-Biologia.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/3_GUIA_TECNICA PLANEACION_BIOLOGIA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Ciencias de la Salud</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/4_Guia-plan-didac-CienciasdelaSalud.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/4_GUIA_TECNICA_PLANEACION_CIENCIAS_DE_LA_SALUD_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Física</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/5_Guia-plan-didac-Fisica.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/5_GUIA_TECNICA_PLANEACION_FISICA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Geografía</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/6_Guia-plan-didac-Geografia.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/6_GUIA_TECNICA_PLANEACION_GEOGRAFIA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Química</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/7_Guia-plan-didac-Quimica.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/7_GUIA_TECNICA_PLANEACION_QUIMICA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Psicología</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/8_Guia-plan-didac-Psicologia.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/8_GUIA_TECNICA_PLANEACION_PSICOLOGIA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Humanidades</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/9_Guia-plan-didac-Humanidades.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/9_GUIA_TECNICA_PLANEACION_HUMANIDADES_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Historia del Arte</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/10_Guia-plan-didac-Historia_del_Arte.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/10_GUIA_TECNICA_PLANEACION_HISTORIA_DEL_ARTE_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Economía</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/11_Guia-plan-didac-Economia.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/11_GUIA_TECNICA PLANEACION_ECONOMIA EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Derecho</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/12_Guia-plan-didac-Derecho.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/12_GUIA_TECNICA_PLANEACIOON_DERECHO_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Administración</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/13_Guia-plan_didac_Administracion.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/13_GUIA_TECNICA_PLANEACION_ADMINISTRACION_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Historia</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/14_Guia-plan-didac-Historia.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/14_GUIA_TECNICA_PLANEACION_HISTORIA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Sociología y Política</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/15_Guia-plan-didac-SocyPolitica.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/15_GUIA_TECNICA_PLANEACION_SOCIOLOGIA_Y_POLITICA_EMS.pdf"  target="_blank" >PDF</a></td>                   

                                    </tr>
                                    <tr>
                                        <td>Metodología de la Investigación</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/16_Guia-plan-didac-Metod_Investig.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/16_GUIA_TECNICA_PLANEACION_METODOLGIA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Literatura</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/17_Guia-plan-didac-Literatura.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/17_GUIA_TECNICA_PLANEACION_LITERATURA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Lectura, Expresión Oral y Escrita</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/18_Guia-plan-didac-Lectura_Ex_OralyEsc.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/18_GUIA_TECNICA_PLANEACION_LECTURA-EXPRESION_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Informática</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/19_Guia-plan-didac-Informatica.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/19_GUIA_TECNICA_PLANEACION_INFORMATICA_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>
                                    <tr>
                                        <td>Etimología grecolatina</td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Academica/20_Guia_plan-didac-Etimologias.pdf"  target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/MS/Guías para la Planeación Didáctica Argumentada/Tecnica/20_GUIA_TECNICA PLANEACION_ETIMOLOGIAS_EMS.pdf"  target="_blank" >PDF</a></td>                   
                                    </tr>    
                                </tbody>
                            </table>                                     
                        </div><!--fin EM3-->                    
                        <div class="tab-pane" id="EM4">                        
                            <h3>Guías para el examen de conocimientos:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Disciplina </th>
                                <th>Guía </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matemáticas</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/1_Ex-conocimientos-Matematicas.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Dibujo</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/2_Ex-conocimientos-Dibujo.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Biología</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/3_Ex-conocimientos-Biologia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ciencias de la Salud</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/4_Ex-conocmientos-Ciencias_de_la_Salud.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Física</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/5_Ex-conocimientos-Fisica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Geografía</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/6_Ex-conocimientos-Geografia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Química</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/7_Ex-conocimientos-Quimica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Psicología</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/8_Ex-conocimientos-Psicologia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Humanidades</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/9_Ex-conocimientos-Humanidades.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia del Arte</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/10_Ex-conocimientos-Historia_del_arte.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Economía</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/11_Ex-conocimientos-Economia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Derecho</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/12_Ex-conocimientos-Derecho.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Administración</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/13_Ex-conocimientos-Administracion.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/14_Ex-conocimientos-Historia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Sociología y Política</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/15_Ex-conocimientos-SociologiaPolitica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Metodología de la Investigación</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/16_Ex-conocimientos-Metodologia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Literatura</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/17_Ex-conocmientos-Literatura.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Lectura, Expresión Oral y Escrita</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/18_Ex-conocimientos-Lectura-expre-oralyescrita.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Informática</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/19_Ex-conocimientos-Informatica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Etimología grecolatina</td>
                                        <td><a href="permanencia/MS/Guías para el examen de conocimientos/20_Ex-conocimientos-Etimologias.pdf"  target="_blank" >PDF</a></td>
                                    </tr>    
                                </tbody>
                            </table>             

                        </div><!--fin EM4-->                    
                        <div class="tab-pane" id="EM5">  
                            <h3>Guías para el examen de casos de competencias didácticas:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Disciplina </th>
                                <th>Guía </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matemáticas</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/1_Ex-casos-Matematicas.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Dibujo</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/2_Ex-casos-Dibujo.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Biología</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/3_Ex-casos-Biologia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Ciencias de la Salud</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/4_Ex-casos-Ciencias_de_la_salud.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Física</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/5_Ex-casos-Fisica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Geografía</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/6_Ex_casos-Geografia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Química</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/7_Ex-casos-Quimica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Psicología</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/8_Ex-casos-Psicologia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Humanidades</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/9_Ex-casos-Humanidades.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia del Arte</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/10_Ex-casos-Historia_del_Arte.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Economía</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/11_Ex-casos-Economia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Derecho</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/12_Ex-casos-Derecho.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Administración</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/13_Ex-casos-Administracion.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/14_Ex-casos-Historia.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Sociología y Política</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/15_Ex-casos-Sociologia_y_Politica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Metodología de la Investigación</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/16_Ex-casos-Metodologia_de_la_Investigacion.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Literatura</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/17_Ex-casos-Literatura.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Lectura, Expresión Oral y Escrita</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/18_Ex-casos-Lectura_expresion.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Informática</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/19_Ex-casos-Informatica.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Etimología grecolatina</td>
                                        <td><a href="permanencia/MS/Guías para el examen de casos de competencias didácticas/20_Ex-casos-Etimologias.pdf"  target="_blank" >PDF</a></td>
                                    </tr>    
                                </tbody>
                            </table>             

                        </div><!--fin EM5-->                    
                        <div class="tab-pane" id="EM6">   
                            <h3>Normatividad (Acuerdos Secretariales):</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Acuerdo Secretarial</th>
                                <th>Documento</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Acuerdo No. 442, Sistema Nacional de Bachillerato</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_442.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Acuerdo No. 444, Competencias, Marco Curricular Común</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_444.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Acuerdo No. 445, Opciones Educativas en Diferentes Modalidades</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_445.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Acuerdo No. 447, Competencias Docentes, Modelo Escolarizado</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_447.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Acuerdo No. 449, Competencias Perfil Director</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_449.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Acuerdo No. 486, Competencias Disciplinares, Bachillerato General</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_486.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Acuerdo No. 488, Modificación de los Acuerdos 442, 444, 447</td>
                                        <td><a href="permanencia/MS/Normatividad (Acuerdos Secretariales)/Acuerdo_488.pdf"  target="_blank" >PDF</a></td>
                                    </tr>
                                </tbody>
                            </table>                        
                        </div><!--fin EM6-->                                        
                    </div>
                </div>
                <!-- /tabs  -->
            </div> <!--Fin de EMS-->
            <?php
        }
        if (($nivel === 'BASICA') && ($funcion === 'EDD')) {
            ?>        
            <div class="col-md-12">
                <!--EB EDD-->            
                <h3>Evaluación de Desempeño Docente</h3>
                <!-- tabs left -->
                <div class="tabbable">
                    <ul class="nav nav-pills nav-stacked col-md-3">
                        <li><a href="permanencia/Perfiles Parámetros Indicadores/PPI_Desempeno_Docente_Tecnodocentes.pdf" target="_blank" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Perfiles, parámetros e indicadores</a></li>
                        <li><a href="permanencia/EAMI EB/Etapas_Asp_Met_inst_docentes.pdf" target="_blank" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Etapas, aspectos, métodos e instrumentos</a></li>
                        <li><a href="#EB1" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Expediente de Evidencias de Enseñanza</a></li>
                        <li><a href="#EB2" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Informe de Cumplimiento de Responsabilidades</a></li>
                        <li><a href="#EB3" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Examen de Conocimientos y Competencias Didácticas</a></li>
                        <li><a href="#EB4" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para la Planeación Didáctica Argumentada</a></li>                     
                    </ul>
                    <div class="tab-content col-md-9">
                        <div class="tab-pane" id="EB1">
                            <h3>Guías para el Expediente de Evidencias de Enseñanza:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Nivel / Asignatura / Servicio</th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Educación preescolar</td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/1_Guia_Exp_Docente_Preescolar.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/1_Guia_Exp_Tec_Docentes_Preescolar.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación primaria</td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/2_Guia_Exp_Docente_Primaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/2_Guia_Exp_Tec_Docentes_Primaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Educación Secundaria</td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Español</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/3_Guia_Exp_Docente_Sec_Español.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/3_Guia_Exp_Tec_Docentes_Sec_Español.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Inglés</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/4_Guia_Exp_Docente_Sec_Lengua_Ingles.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/4_Guia_Exp_Tec_Docentes_Sec_Lengua_Ingles.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Matemáticas</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/5_Guia_Exp_Docente_Sec_Matematicas.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/5_Guia_Exp_Tec_Docentes_Sec_Matematicas.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Biología</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/6_Guia_Exp_Docente_Sec_Ciencias_I_Biologia.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/6_Guia_Exp_Tec_Docentes_Sec_Ciencias_I_Biologia.pdf" target="_blank" >PDF</a></td>
                                    </tr>

                                    <tr>
                                        <td><ul><li>Física</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/7_Guia_Exp_Docente_Sec_Ciencias_II_Fisica.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/7_Guia_Exp_Tec_Docentes_Sec_Ciencias_II_Fisica.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Química</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/8_Guia_Exp_Docente_Sec_Ciencias_III_Quimica.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/8_Guia_Exp_Tec_Docentes_Sec_Ciencias_III_Quimica.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Geografía</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/9_Guia_Exp_Docente_Sec_Geografia.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/9_Guia_Exp_Tec_Docentes_Sec-Geografia.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Historia</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/10_Guia_Exp_Docente_Sec_Historia.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/10_Guia_Exp_Tec_Docentes_Sec_Historia.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Formación Cívica y Ética</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/11_Guia_Exp_Docente_Sec_Formacion_CyE.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/11_Guia_Exp_Tec_Docentes_Sec_Formacion_CyE.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Educación física</li></ul></td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/13_Guia_Exp_Docente_Educ_Fisica.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/13_Guia_Exp_Tec_Docentes_Sec_Educ_Fisica.pdf" target="_blank" >PDF</a></td>
                                    </tr>                    
                                    <tr>
                                        <td>Educación Telesecundaria</td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/12_Guia_Exp_Docente_Telesecundaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/12_Guia_Exp_Tec_Docentes_Telesecundaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Especial</td>
                                        <td><a href="permanencia/ExpEvi Acad Docentes/14_Guia_Exp_Docente_Educ_Especial.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Docentes/14_guia_Exp_Tec_Docentes_Educ-Especial.pdf" target="_blank" >PDF</a></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div><!--fin EB1-->                    
                        <div class="tab-pane" id="EB2">                        
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
                                        <td><a href="permanencia/ICRP/1_Guia_Academica_ICRP.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ICRP/1_Guia_Tecnica_ICRP.pdf" target="_blank" >PDF</a></td>
                                    </tr>                         
                                </tbody>
                            </table>                           
                        </div><!--fin EB2-->
                        <div class="tab-pane" id="EB3">  
                            <h3>Guías para el Examen de Conocimientos y Competencias Didácticas:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Nivel / Asignatura / Servicio</th>
                                <th>Documento</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Educación preescolar</td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/1_Guia_Exp_Tec_Docentes_Preescolar.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación primaria</td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/2_Guia_Exp_Tec_Docentes_Primaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Educación Secundaria</td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Español</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/3_Guia_Exp_Tec_Docentes_Sec_Español.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Inglés</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/4_Guia_Exp_Tec_Docentes_Sec_Lengua_Ingles.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Matemáticas</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/5_Guia_Exp_Tec_Docentes_Sec_Matematicas.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Biología</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/6_Guia_Exp_Tec_Docentes_Sec_Ciencias_I_Biologia.pdf" target="_blank" >PDF</a></td>
                                    </tr>

                                    <tr>
                                        <td><ul><li>Física</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/7_Guia_Exp_Tec_Docentes_Sec_Ciencias_II_Fisica.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Química</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/8_Guia_Exp_Tec_Docentes_Sec_Ciencias_III_Quimica.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Geografía</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/9_Guia_Exp_Tec_Docentes_Sec-Geografia.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Historia</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/10_Guia_Exp_Tec_Docentes_Sec_Historia.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Formación Cívica y Ética</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/11_Guia_Exp_Tec_Docentes_Sec_Formacion_CyE.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Educación física</li></ul></td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/13_Guia_Exp_Tec_Docentes_Sec_Educ_Fisica.pdf" target="_blank" >PDF</a></td>
                                    </tr>                    
                                    <tr>
                                        <td>Educación Telesecundaria</td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/12_Guia_Exp_Tec_Docentes_Telesecundaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Especial</td>                        
                                        <td><a href="permanencia/ExpEvi Tec Docentes/14_guia_Exp_Tec_Docentes_Educ-Especial.pdf" target="_blank" >PDF</a></td>
                                    </tr>

                                </tbody>
                            </table>                            
                        </div><!--fin EB3-->                    
                        <div class="tab-pane" id="EB4">                        
                            <h3>Guías para la Planeación Didáctica Argumentada:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Nivel / Asignatura / Servicio</th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Educación preescolar</td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/1_Guia_Academica_planeacion_Preescolar.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/1_Guia_Tec_planeacion_Docente_Preescolar.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación primaria</td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/2_Guia_ Academica_planeacion_Primaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/2_Guia_Tec_planeacion_Docente_ Primaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Educación Secundaria</td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Español</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/3_Guía_Academica_planeacion_Español.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/3_Guia_Tec_ planeacion_Docente_Sec_Español.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Inglés</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/4_Guia_Academica_planeacion_Segunda_Lengua_Ingles.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/4_Guia_Tec_planeacion_Docente_Sec_Lengua_Ingles.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Matemáticas</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/5_Guia_Academica_planeacion_Matematicas.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/5_Guia_Tec_planeacion_Docente_Sec-Matematicas.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Biología</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/6_Guia_Academica_planeacion_Ciencias_I_bilologia.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/6_Guia_Tec_planeacion_Docente_Sec_Biologia.pdf" target="_blank" >PDF</a></td>
                                    </tr>

                                    <tr>
                                        <td><ul><li>Física</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/7_Guia_Academica_planeacion_Ciencias_II_Fisica.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/7_Guia_Tec_planeacion_Docente_Sec_Fisica.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Química</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/8_Guia_Academica_planeacion_Ciencias_III_Quimica.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/8_Guia_Tec_planeacion_Docente_Sec_Quimica.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Geografía</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/9_Guia_Academica_planeacion_Geografia.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/9_Guia_Tec_planeacion_Docente_Sec_Geografia.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Historia</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/10_ Guia_Academica_planeacion_Historia.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/10_Guia_Tec_planeacion_Docente_Sec_Historia.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Formación Cívica y Ética</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/11_Guia_Academica_planeacion_Formación_CyE.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/11_Guia_Tec_planeacion_Docente_Sec_Formacion_CyE.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td><ul><li>Educación física</li></ul></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/13_Guia_Academica_planeacion_Educ_Fisica.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/7_Guia_Tec_planeacion_Docente_Sec_Fisica.pdf" target="_blank" >PDF</a></td>
                                    </tr>                    
                                    <tr>
                                        <td>Educación Telesecundaria</td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/12_Guia_Academica_planeacion_Telesecundaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/12_Guia_Tec_planeacion_Docente_Telesecundaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Especial</td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS ACADÉMICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/14_Guia_Academica_planeacion_Educ_Especial.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/PLANEACIÓN DIDÁCTICA/VF GUÍAS  TÉCNICAS PLANEACIÓN DIDÁCTICA ARGUMENTADA/14_Guia_Tec_planeacion_Docente_Educ_Especial.pdf" target="_blank" >PDF</a></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div><!--fin EB4-->                    
                    </div>
                </div>
                <!-- /tabs  -->
            </div>   <!--Fin de EB1--> 
            <?php
        }
        if (($nivel === 'BASICA') && ($funcion === 'EDPFD')) {
            ?>        
            <div class="col-md-12">
                <!--EB EDPFD-->            
                <h3>Evaluación del Desempeño de Personal con Funciones de Dirección</h3>
                <!-- tabs left -->
                <div class="tabbable">
                    <ul class="nav nav-pills nav-stacked col-md-3">
                        <li><a href="permanencia/Perfiles Parámetros Indicadores/PPI_Desempeno_Directivos_Supervisores.pdf" target="_blank" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Perfiles, parámetros e indicadores</a></li>
                        <li><a href="permanencia/EAMI EB/Etapas_Asp_Met_Inst_direccion.pdf" target="_blank" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Etapas, aspectos, métodos e instrumentos</a></li>
                        <li><a href="#EB5" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Expediente de Evidencias de la Función Directiva</a></li>
                        <li><a href="#EB6" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para el Examen de Conocimientos y Habilidades Directivas</a></li>
                        <li><a href="#EB7" data-toggle="tab" onclick="ga('send', 'pageview', {'page': '/permanencia', 'title': 'Permanencia'});">
                                Guías para la elaboración de la Ruta de Mejora Argumentada. Director</a></li>                    
                    </ul>
                    <div class="tab-content col-md-9">
                        <div class="tab-pane" id="EB5">
                            <h3>Guías para el Expediente de Evidencias de la Función Directiva:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Nivel</th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Educación Preescolar</td>
                                        <td><a href="permanencia/ExpEvi Acad Director/1_Guia_Expe_Directivo_Preescolar.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Director/1_Guia_Exp_Tec_Directivo_Preescolar.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Primaria</td>
                                        <td><a href="permanencia/ExpEvi Acad Director/2_Guia_Exp_Directivo_Primaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Director/2_Guia_Exp_Tec_Directivo_Primaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Secundaria</td>
                                        <td><a href="permanencia/ExpEvi Acad Director/3_Guia_Exp_Directivo_Secundaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Director/3_Guia_Exp_Tec_Directivo_Secundaria.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Especial</td>
                                        <td><a href="permanencia/ExpEvi Acad Director/4_Guia_Exp_Directivo_Educ_Especial.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/ExpEvi Tec Director/4_Guia_Exp_Tec_Directivo_Especial.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div><!--fin EB5-->                    
                        <div class="tab-pane" id="EB6">                        
                            <h3>Guías para el Examen de Conocimientos y Habilidades Directivas:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Nivel</th>
                                <th>Guía Académica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Educación Preescolar</td>
                                        <td><a href="permanencia/EXAMEN DIRECTIVOS/2_Guia_Educ_Preescolar_Exam_Directivo.pdf" target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Educación Primaria</td>
                                        <td><a href="permanencia/EXAMEN DIRECTIVOS/3_Guia_Educ_Primaria_Exam_Directivo.pdf" target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Educación Secundaria</td>
                                        <td><a href="permanencia/EXAMEN DIRECTIVOS/4_Guia_Educ_Secundaria_Exam_Directivo.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Especial</td>
                                        <td><a href="permanencia/EXAMEN DIRECTIVOS/1_Guia_Educ_Especial_Exam_ Directivo.pdf" target="_blank" >PDF</a></td>

                                    </tr>
                                </tbody>
                            </table>

                        </div><!--fin EB6-->
                        <div class="tab-pane" id="EB7">                        
                            <h3>Guías para la elaboración de la Ruta de Mejora Argumentada. Director:</h3>
                            <table class="table table-bordered">
                                <thead>
                                <th>Nivel</th>
                                <th>Guía Académica</th>
                                <th>Guía Técnica</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Educación Preescolar</td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS ACADÉMICAS RUTA DE MEJORA/1_Guia_Academica_Educ_Preescolar.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS TÉCNICAS RUTA DE MEJORA/1_Guia_Tec_Ruta_Mejora_Preescolar.pdf" target="_blank" >PDF</a></td>
                                    </tr>
                                    <tr>
                                        <td>Educación Primaria</td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS ACADÉMICAS RUTA DE MEJORA/2_Guia_Academica_Educ_Primaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS TÉCNICAS RUTA DE MEJORA/2_Guia_Tec_Ruta_Mejora_Primaria.pdf" target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Educación Secundaria</td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS ACADÉMICAS RUTA DE MEJORA/3_Guia_ Academica_Educ_Secundaria.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS TÉCNICAS RUTA DE MEJORA/3_Guia_Tec_Ruta_Mejora_Secundaria.pdf" target="_blank" >PDF</a></td>

                                    </tr>
                                    <tr>
                                        <td>Educación Especial</td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS ACADÉMICAS RUTA DE MEJORA/4_Guia_Academica_ Educ_Especial.pdf" target="_blank" >PDF</a></td>
                                        <td><a href="permanencia/RUTA DE MEJORA/GUÍAS TÉCNICAS RUTA DE MEJORA/4_Guia_Tec_Ruta_Mejora_Educ_Especial.pdf" target="_blank" >PDF</a></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div><!--fin EB7-->                    
                    </div>
                </div>
                <!-- /tabs  -->
            </div>   <!--Fin de EB2-->    
            <?php
        }
        ?>

    </div>
    <!-- /row -->
</div>
