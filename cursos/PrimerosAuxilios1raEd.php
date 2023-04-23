<?php
include '../includes/templates/header.php';
?>

<?php

$titulo_curso = "Primeros Auxilios, RCP y uso de DAE";
$imagen_curso = "../../assets/images/cursos/bg-FaunaSilvestre.webp";
$edicion = "1ra. Edición";
$fecha = "2, 4, 9 y 11 de mayo de 2023";
$precio_unam = "500";
$precio_general = "800";
$dias = "Martes y Jueves";
$horario = "9:00 a 12:00";
$no_horas = "27";
$modalidad = "Precencial";
$max_alumnos = "35";
$min_alumnos = "15";
$descripcion = "En las labores diarias en nuestro trabajo o en nuestra propia casa, pueden presentarse accidentes o incidentes donde una persona presente un evento agudo por alguna enfermedad. La atención rápida y eficiente en esos casos es de la mayor importancia tanto para resolver el problema como para reducir los riesgos de secuelas. Más aún si el paciente se encuentra en paro cardiorespiratorio, la ayuda debe ser inmediata y de acuerdo a los estándares de atención internacionales y sustentados por la evidencia científica más actual. Una comunidad capacitada en primeros auxilios, es capaz de responder mejor en emergencias y desastres, ayuda a construir resiliencia y fortalece los vínculos sociales. Los cuidados cardiacos de emergencia y los primeros auxilios involucran intervenciones de atención médica que deben seguir los lineamientos más actualizados y avalados por la evidencia médica que los expertos colectan y analizan. Por ello, la capacitación debe apegarse a los últimos estándares aprobados (ILCOR, 2020). El curso está diseñado para el público en general y ofrece tanto la información teórica como práctica.";
$objetivo = "Proporcionar los conocimientos actualizados en cuidados cardíacos de emergencia, primeros auxilios y uso de desfibriladores automáticos externos.";
$dirigido_a = "Todo público.";
$requisitos = "Ninguno";
$lugar = "Zoom";
$formato_inscripcion = "https://forms.gle/wwn996LgigXLKmsM6";
$info_academica = "Dra. Rosalía Pastor Nieto <br> Correo electrónico: rosalia.pastor@gmail.com"
?>

<!-- Start Hero -->
<section class="portada">
    <img src="../../assets/images/cursos/bg-FaunaSilvestre.webp" alt="">
    <div class="portada-opacity"></div>
    <div class="container">
        <div class="portada-informacion">
            <span class="portada-informacion-pu">$<?php echo $precio_unam ?> /
                UNAM</span>
            <span class="portada-informacion-pg">$<?php echo $precio_general ?> /
                GENERAL</span>
            <h1><?php echo $titulo_curso ?></h1>
            <p class="text-indigo-600"><?php echo $edicion ?></p>
            <!-- Genera el contenedor con los datos del profesor, es decir, la foto, el nombre y el enlace del curriculum. -->
            <!-- Si hay mas de un profe, se debe copiar todo el contenedor, para cada uno. -->
            <!-- PROFESORES QUE IMPARTEN -->
            <div class="profesor">
                <div>
                    <img src="../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../assets/curriculums_docentes/JulioPrieto.pdf" target="_blank">M. en C. Julio Alejandro Prieto Sagredo, TUM-A</a>
                </div>
            </div>
            <div class="profesor">
                <div>
                    <img src="../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../assets/curriculums_docentes/TabareMerinoSanchez.pdf" target="_blank">P. de M. Tabaré Merino Sánchez</a>
                </div>
            </div>
            <!-- FIN - PROFESORES QUE IMPARTEN -->
            <div class="fecha">
                <i class="uil uil-calendar-alt"></i>
                <span><?php echo $fecha ?></span>
            </div>

        </div>
    </div>

    <div class="datos">
        <ul>
            <li>
                <i class="uil uil-calendar-alt"></i>
                <span><?php echo $dias ?></span>
            </li>

            <li>
                <i class="uil uil-bell-school"></i>
                <span><?php echo $horario ?>h</span>
            </li>

            <li>
                <i class="uil uil-clock"></i>
                <span><?php echo $no_horas ?> horas</span>
            </li>

            <li>
                <i class="uil uil-map-marker"></i>
                <span><?php echo $modalidad ?></span>
            </li>

            <li>
                <i class="uil uil-user-circle"></i>
                <span>Máx. <?php echo $max_alumnos ?> / Min. <?php echo $min_alumnos ?></span>
            </li>

            <li>
                <i class="uil uil-shopping-cart text-green-600"></i>
                <a href="#inscripcion" class="text-green-600">Inscribirse</a>
            </li>
        </ul>
    </div>
</section><!--end section-->



<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="oferta-academica md:py-20">
    <div class="container">
        <h2>Descripción</h2>
        <p><?php echo $descripcion ?></p>
        <h2>Objetivo</h2>
        <p><?php echo $objetivo ?></p>
        <h2>Dirigido a</h2>
        <p><?php echo $dirigido_a ?></p>
        <p class="text-red-600 mt-4">
            Mín / Máx de alumnos: Mínimo <?php echo $min_alumnos ?>, máximo <?php echo $max_alumnos ?>.<br>
            La apertura del curso está sujeta al mínimo de inscritos.</p>
    </div>
</section>




<!-- Start Section-->
<section class="curso-horarios md:py-14">

    <div class="container">
        <div class="curso-horarios-container grid grid-cols-1 lg:grid-cols-3 md:grid-cols-1 gap-[30px]">
            <div>
                <div>
                    <i class="uil uil-check-square"></i>
                </div>

                <div>
                    <h3>Requisitos</h3>
                    <p><?php echo $requisitos ?></p>
                    <div class="mt-5">
                        <a href="#" data-type="iframe" class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <i class="uil uil-calendar-alt"></i>
                </div>
                <div>
                    <h3>Horario</h3>
                    <p><?php echo $horario ?> hrs</p>
                    <p><?php echo $dias ?></p>
                    <div class="mt-5">
                        <a href="#" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Total: <?php echo $no_horas ?>horas</a>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <i class="uil uil-map-marker"></i>
                </div>

                <div>
                    <h3>Lugar</h3>
                    <p><?php echo $lugar ?></p>
                </div>
            </div>
        </div>
    </div>


    <div class="curso-costo container">
        <h2 class="md:text-3xl md:leading-normal">Costo</h2>
        <!-- Si el curso no tiene descuento, solo debe quitarse el p. -->

        <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="curso-costo-g">
                <h3>Público GENERAL</h3>
                <!-- Para quitar el precio con descuento solo basta con borrar lo siquiente. -->
                <!-- PRECIO GENERAL CON DESCUENTO -->
                <div>
                    <span>$</span>
                    <span><?php echo $precio_general ?></span>
                    <span>MXN</span>
                </div>
                <!-- FIN-PRECIO GENERAL CON DESCUENTO -->


                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>


            <div class="curso-costo-g">
                <h3>Comunidad UNAM</h3>
                <div>
                    <span>$</span>
                    <span><?php echo $precio_unam ?></span>
                    <span>MXN</span>
                </div>

                <ul>
                    <li><i class="uil uil-check-circle"></i>Alumnos, exalumnos
                        y personal de la UNAM</li>
                    <li><i class="uil uil-check-circle"></i>También aplica
                        para afiliados a Fundación UNAM</li>
                </ul>

                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>
        </div>
    </div>

</section>


<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <td> son subtemas. -->
<section class="temario-tabla container">
    <h2>Temario</h2>
    <table border="">
        <tbody>
            <tr>
                <th>

                    Fecha/hr </th>
                <th> Tema </th>
                <th> Duración </th>
                <th> Materiales </th>
                <th> Instructor
                </th>
            </tr>
            <tr>
                <td colspan="5" bgcolor="#0897D5">

                    <b>Día 1</b>
                </td>
            </tr>
            <tr>
                <td>

                    0900 </td>
                <td> Bienvenida, presentaciones, entrega de materiales </td>
                <td> 20 min </td>
                <td>
                    Lista asistencia, “guantes” filtros azules, barreras RCP </td>
                <td> JP y TM
                </td>
            </tr>
            <tr>
                <td>

                    0920 </td>
                <td> Introducción al curso </td>
                <td> 15 min </td>
                <td>
                    Presentación 1 </td>
                <td> JP
                </td>
            </tr>
            <tr>
                <td>

                    0935 </td>
                <td> Aspectos legales </td>
                <td> 15’ </td>
                <td>
                    Presentación 2 </td>
                <td>JP
                </td>
            </tr>
            <tr>
                <td>

                    0950 </td>
                <td> Evaluación de la escena y ASMU </td>
                <td> 20’ </td>
                <td>
                    Presentación 2 </td>
                <td>TM
                </td>
            </tr>
            <tr>
                <td>

                    1010 </td>
                <td> Protocolo RCP Adulto </td>
                <td> 30’ </td>
                <td>
                    Presentación 6 </td>
                <td>TM
                </td>
            </tr>
            <tr>
                <td>

                    1040 </td>
                <td> Práctica RCP adulto. <b>Estación de destrezas 1.</b> </td>
                <td> 80’ </td>
                <td>
                    maniquíes,
                    mascarillas, filtros, barreras, “guantes”, desinfectante de manos, Fomi rodillas </td>
                <td>TM
                </td>
            </tr>
            <tr>
                <td>

                    12:00 </td>
                <td colspan="4"> Fin Dia 1.
                </td>
            </tr>
            <tr>
                <td colspan="5" bgcolor="#0897D5">



                    <b>Día 2 </b>
                </td>
            </tr>
            <tr>
                <td>

                    9:00 </td>
                <td> Uso del DAE </td>
                <td> 20’ </td>
                <td>
                    Presentación 6 </td>
                <td> JP
                </td>
            </tr>
            <tr>
                <td>

                    9:20 </td>
                <td> Práctica uso del DAE. Estación de Destrezas 2. </td>
                <td>40’ </td>
                <td>
                    Maniquies, DAEs, mascarillas, filtros, barreras, “guantes”, desinfectante de manos, Fomi rodillas </td>
                <td> JP
                </td>
            </tr>
            <tr>
                <td>

                    10:00 </td>
                <td> Protocolo de atención de Atragantamiento </td>
                <td> 20’ </td>
                <td>
                    Presentación 6 </td>
                <td>JP
                </td>
            </tr>
            <tr>
                <td>

                    10:20 </td>
                <td> Práctica maniobra de Heimlich y posición de seguridad. Estación de destrezas 3. </td>
                <td>20’’ </td>
                <td>
                    Maniquies </td>
                <td>TM
                </td>
            </tr>
            <tr>
                <td>

                    10:40 </td>
                <td> Evaluación del paciente </td>
                <td> 20’ </td>
                <td>
                    Presentación 2 </td>
                <td>JP
                </td>
            </tr>
            <tr>
                <td>

                    11:00 </td>
                <td> Ejercicio SAMPLE por parejas. Revisión de los casos con todos los participantes.
                    Estación de destrezas 4. </td>
                <td>40’ </td>
                <td>
                    Tarjetas SAMPLE </td>
                <td> TM
                </td>
            </tr>
            <tr>
                <td>

                    11:40 </td>
                <td> Evaluación del paciente </td>
                <td> 20’ </td>
                <td>
                    Presentación 2 </td>
                <td>JP
                </td>
            </tr>
            <tr>
                <td>

                    12:00 </td>
                <td colspan="4"> Fin del Dia 2
                </td>
            </tr>
            <tr>
                <td colspan="5" bgcolor="#0897D5">

                    Día 3
                </td>
            </tr>
            <tr>
                <td>

                    09:00 </td>
                <td> Práctica revisión cabeza a pies por parejas. Estación de destrezas 5. </td>
                <td> 40’ </td>
                <td>
                    – </td>
                <td>TM
                </td>
            </tr>
            <tr>
                <td>

                    09:40 </td>
                <td> Hemorragias, heridas, lesiones musculoesqueléticas </td>
                <td> 40’ </td>
                <td>
                    Presentación 3 </td>
                <td> JP
                </td>
            </tr>
            <tr>
                <td>

                    10:20 </td>
                <td> Práctica control de hemorragias, TGH e inmovilización. Organizar 3 bases:
                    Control de hemorragias, TGH y vendoletes, Inmovilización con SAM y vendaje triangular.
                    Estaciones de destrezas 6, 7 y 8. </td>
                <td>80’ </td>
                <td>
                    Simulación de heridas cortantes y objetos empalados.
                    materiales para TGH, férulas SAM, apósitos, vendas triangulares y vendas elásticas. </td>
                <td> JP y TM
                </td>
            </tr>
            <tr>
                <td>

                    11:40 </td>
                <td> Enfermedades súbitas </td>
                <td> 20’ </td>
                <td>
                    presentación 4 </td>
                <td>JP
                </td>
            </tr>
            <tr>
                <td>

                    12:00 </td>
                <td> Fin del dia 3 </td>
                <td> </td>
                <td> </td>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="5" bgcolor="#0897D5">

                    Día 4
                </td>
            </tr>
            <tr>
                <td>

                    09:00 </td>
                <td> Enfermedades súbitas </td>
                <td>20’ </td>
                <td>
                    presentación 4 </td>
                <td>Julio
                </td>
            </tr>
            <tr>
                <td>

                    09:20 </td>
                <td> Lesiones ambientales </td>
                <td> 30’ </td>
                <td>
                    presentación 5 </td>
                <td>TM
                </td>
            </tr>
            <tr>
                <td>



                    09:50 </td>
                <td> Práctica Mov. y traslado de lesionados por parejas y tercias. Estación de destrezas 9. </td>
                <td> 40’ </td>
                <td>
                </td>
                <td> JP
                </td>
            </tr>
            <tr>
                <td>

                    10:30 </td>
                <td> Repaso de los temas vistos y dudas </td>
                <td> 15’ </td>
                <td>
                    Pizarrón </td>
                <td>JP
                </td>
            </tr>
            <tr>
                <td>

                    10:45 </td>
                <td> Evaluación </td>
                <td> 45’ </td>
                <td>
                    Exámenes y hojas de respuesta </td>
                <td> JP y TM
                </td>
            </tr>
            <tr>
                <td>

                    11:30 </td>
                <td> Recapitulación del curso, dudas finales </td>
                <td> 15’ </td>
                <td>
                </td>
                <td> JP y TM
                </td>
            </tr>
            <tr>
                <td>

                    11:45 </td>
                <td> Fin del curso </td>
                <td> </td>
                <td> </td>
                <td> JP y TM

                </td>
            </tr>
        </tbody>
    </table>

</section>


<!-- Start -->
<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2>Inscripción</h2>
        </div>

        <div class="pasos">
            <div class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                <!--Start content-->
                <div class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="paso-n grid md:grid-cols-2">
                        <h3 class="md:text-right md:mr-8">Paso 1</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Realizar el pago en línea mediante "Plaza
                                Prometeo", la tienda de la Facultad de Ciencias</h4>
                            <p><a href="https://tienda.fciencias.unam.mx" target="_blank" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">tienda.fciencias.unam.mx</a>
                            </p>
                        </div>
                    </div>

                    <div class="paso-n grid md:grid-cols-2 mt-10">
                        <h3 class="md:text-right md:mr-8">Paso 2</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Registrarse en este formato de inscripción</h4>
                            <p>(únicamente si usted ya hizo el pago)</p>
                            <p><a href=<?php echo $formato_inscripcion ?> target="_blank" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Formato
                                    de inscripción</a></p>
                        </div>
                    </div>

                </div>
                <!--End content-->

            </div>
        </div>
        <p class="advertencia"><i class="uil uil-exclamation-circle"></i>En caso de
            cancelación, procederá la devolución de lo pagado con los criterios administrativos de la Facultad de
            Ciencias.</p>
    </div>
</section><!--end section-->
<!-- End -->

<div class="ayuda container md:mt-24">
    <div class="titulo">
        <h2 class="md:text-3xl md:leading-normal">¿Necesitas ayuda?</h2>
        <p>Contáctanos</p>
    </div>
    <div class="informacion grid md:grid-cols-2 grid-cols-1 mt-8 md:gap-[30px]" id="accordion-collapse" data-accordion="collapse">
        <div>
            <div>
                <h2 id="info-admin-col">
                    <button type="button" data-accordion-target="#info-admin" aria-expanded="false" aria-controls="info-admin">
                        <span>Información administrativa</span>
                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="info-admin" class="hidden" aria-labelledby="info-admin-col">
                    <div class="p-5">
                        <p class="text-slate-400 dark:text-gray-400">Secretaría de Educación Abierta y Continua,
                            Facultad de Ciencias, UNAM.<br>
                            Sitio web: <a class="text-cyan-600 underline" href="http://www.educontinua.fciencias.unam.mx" target="_blank">www.educontinua.fciencias.unam.mx</a><br>
                            Edificio Tlahuizcalpan, 1er piso (saliendo del elevador a la izquierda).<br>
                            Teléfono: 56 66 47 89 y 56 22 53 86<br>
                            Correo electrónico: educontinua.of@ciencias.unam.mx</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2 id="info-acad-col">
                    <button type="button" data-accordion-target="#info-acad" aria-expanded="true" aria-controls="info-acad">
                        <span>Información académica</span>
                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="info-acad" class="hidden" aria-labelledby="info-acad-col">
                    <div class="p-5">
                        <p class="text-slate-400 dark:text-gray-400"><?php echo $info_academica ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include '../includes/templates/footer.php';
?>