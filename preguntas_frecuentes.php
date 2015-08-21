<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">PREGUNTAS FRECUENTES</h3>
        <p><strong>¿Cómo puedo modificar mis datos cuando ya he iniciado el 
                proceso de Pre-registro pero aún no obtengo mi ficha?
            </strong>
        </p>
        <p>Usted podrá realizar alguna de las siguientes opciones:</p>
        <ul><li class="li-none">•    Ingrese al sistema con su CURP y la 
                contraseña respectiva, posteriormente en la parte inferior de 
                la pantalla deberá dar clic en el botón “Inicio de Sesión”, 
                éste lo llevará a las pantalla donde podrá modificar todos sus 
                datos.</li>
            <br>
            <?php if (!isset($_SESSION['faq1'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq1" value="1">
                    <button type="submit" name="resp1" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp1" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?>
        </ul>
        <p><strong>¿Cómo puedo modificar mis datos cuando ya finalicé el 
                proceso de Pre-registro?</strong></p>
        <ul><li class="li-none">•    Usted podrá presentarse en la Sede de 
                registro y solicitar al Responsable de la Mesa de Registro 
                (RMR) que sean eliminados sus datos, con ello podrá realizar 
                nuevamente el proceso Pre-registro.</li>
            <br>
            <?php if (!isset($_SESSION['faq2'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq2" value="2">
                    <button type="submit" name="resp2" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp2" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?>
        </ul>
        <p><strong>¿Cómo puedo cambiar la entidad donde pretendo concursar 
                cuando ya he iniciado el proceso de Pre-registro, pero aún no 
                obtengo mi ficha?</strong></p>
        <ul><li class="li-none">•    Llamar a la Mesa de ayuda del Distrito 
                Federal al 01-55-5015-0120 de 08:00 a 20:00hrs tiempo del 
                centro, donde deberá proporcionar su CURP y nombre completo 
                para revisar y validar sus datos en el SNRSPD.</li>
                        <br>
            <?php if (!isset($_SESSION['faq3'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq3" value="3">
                    <button type="submit" name="resp3" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp3" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?>
        </ul>
        <p><strong>¿Cómo puedo cambiar la entidad donde pretendo concursar 
                cuando ya finalicé el proceso de Pre-registro?</strong></p>
        <ul><li class="li-none">•    Deberá presentarse en la Sede de registro 
                del Estado que haya seleccionado para concursar, con su ficha 
                de Pre-registro, y solicitarle al Responsable de la Mesa de 
                Registro (RMR) que sean eliminados sus datos, con ello podrá 
                realizar nuevamente el proceso Pre-registro, seleccionando la 
                nueva Entidad.</li>
                                    <br>
            <?php if (!isset($_SESSION['faq4'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq4" value="4">
                    <button type="submit" name="resp4" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp4" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?>
        </ul>
        <p><strong>¿Cómo puedo recuperar mi contraseña para ingresar al sistema 
                cuando la he olvidado?</strong></p>
        <ul><li class="li-none">•    Haga clic en la pregunta ¿Olvidó su 
                Contraseña? que aparece en la pantalla de acceso, ingrese su 
                CURP y oprima el botón “Buscar”; el sistema le presentará la 
                pregunta secreta que usted seleccionó al crear su cuenta de 
                usuario. Ingrese la respuesta correcta y haga clic en el botón 
                “Recuperar”. El sistema le mostrará su contraseña de acceso.
            </li>
                                    <br>
            <?php if (!isset($_SESSION['faq5'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq5" value="5">
                    <button type="submit" name="resp5" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp5" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?>            
        </ul>
        <p><strong>¿Qué debo hacer si al ingresar mi CURP el sistema me dice 
                que ya existe?</strong></p>
        <p>Usted deberá intentar alguna de las siguientes opciones:</p>
        <ul>
            <li class="li-none">•    Recuperar su contraseña.</li>
            <li class="li-none">•    Llamar a la Mesa de ayuda del Distrito
                Federal al 01-55-5015-0120 de 08:00 a 20:00hrs tiempo del 
                centro, donde deberá proporcionar su CURP y nombre completo 
                para revisar y validar sus datos en el SNRSPD.</li>
                                                <br>
            <?php if (!isset($_SESSION['faq6'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq6" value="6">
                    <button type="submit" name="resp6" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp6" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?> 
        </ul>
        <p><strong>¿Cómo puedo obtener  mi usuario y contraseña para entrar al 
                simulador?</strong></p>
        <p>
            Si aún no recibe en su correo electrónico la información  
            de usuario y contraseña, envíe los siguientes datos al 
            correo <a href="mailto:evaluaciondocente@sep.gob.mx">evaluaciondocente@sep.gob.mx</a></p>
        <ul>
            <li class="li-none">•   Folio</li>
            <li class="li-none">•   Entidad</li>
            <li class="li-none">•   Nombre completo </li>
            <li class="li-none">•   CURP</li>
            <li class="li-none">•   Correo electrónico de registro</li>
            <li class="li-none">•   Examen en el que está registrado (En caso 
                de promoción, indicar la función). </li>
            <li class="li-none">•   Nivel educativo</li>
        </ul>
        <p>
            Verifique que todos sus datos sean correctos. 
        </p>
        <p>
            Revise su bandeja de mensajes nuevos y de spam.
                                                <br>
            <?php if (!isset($_SESSION['faq7'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq7" value="7">
                    <button type="submit" name="resp7" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp7" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?> 
        </p>
        <p><strong>Suspendí o cerré la sesión en el simulador ¿Cómo puedo 
                ingresar nuevamente?</strong></p>
        <p>Usted cuenta con 8 horas para realizar el examen en el simulador.
            Si <strong>suspende</strong> sesión y desea ingresar nuevamente, debe anotar las 
            siguientes claves:</p>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <table border="1">
                    <tr>
                        <td> Usuario: </td><td>simulador</td></tr>
                    <tr>
                        <td> Contraseña: </td><td>docente</td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <p>Si <strong>Finaliza</strong> sesión debe esperar 24 horas para 
            acceder nuevamente al simulador.
                                                            <br>
            <?php if (!isset($_SESSION['faq8'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq8" value="8">
                    <button type="submit" name="resp8" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp8" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?> 
        </p>

        <p><strong>El simulador no me permite entrar con la contraseña y el 
                usuario que se me proporcionó por correo ¿Qué puedo hacer?
            </strong></p>
        <p>Hay muchos usuarios ingresando al mismo tiempo al simulador, 
            por lo que en ocasiones se dificulta el acceso. Inténtelo 
            nuevamente pasados unos minutos.
                                                            <br>
            <?php if (!isset($_SESSION['faq9'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq9" value="9">
                    <button type="submit" name="resp9" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp9" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?> 
        </p>

        <p><strong>¿Dónde puedo ver si mis respuestas son correctas?
            </strong></p>
        <p>En el botón “Material de apoyo” se presenta la lista de respuestas 
            correctas que obtuvo.
                                                            <br>
            <?php if (!isset($_SESSION['faq10'])) { ?>
                <form action="guardaFeedbackFaq.php" method="post">
                    <input type="hidden" name="faq10" value="10">
                    <button type="submit" name="resp10" value="1" class="btn btn-info active">Si me sirvió esta información</button>
                    <button type="submit" name="resp10" value="0" class="btn btn-default active">No me sirvió esta información</button>
                </form>
                <hr>
            <?php } ?> 
        </p>
    </div>
</div>