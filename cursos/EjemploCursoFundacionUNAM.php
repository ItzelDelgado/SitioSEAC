<?php
include '../../includes/templates/header.php';
?>

<?php

$titulo_curso = "Rescate y Rehabilitación de Fauna Silvestre";
$imagen_curso = "../../assets/images/cursos/bg-FaunaSilvestre.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "6ta. Edición";
$fecha = "Del 17 de abril al 26 de junio de 2023";
$precio_unam = "2,700"; //No es necesario poner mxn
$precio_general = "3,200"; //No es necesario poner mxn
//Si no tiene descuento, se eliminan estas variables o simplemente no se usan, pero en la parte de los precios es necesario borrarlas
$precio_unam_descuento = "2,295"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
//
$dias = "Lunes";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "16:00 a 19:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "27"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "60"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "Las actividades antropogénicas como la construcción de carreteras, tendidos eléctricos, presas y los desastres naturales como sequías, inundaciones, incendios, huracanes, derrames petroleros y otros contaminantes, ponen en riesgo a poblaciones de especies de fauna silvestre que se encuentran en alguna categoría de amenaza de extinción. Ante estos nuevos retos la Unión Internacional para la Conservación de la Naturaleza (IUCN) a través del Grupo Especialista en Salud de Fauna Silvestre (WHSG), han creado criterios para rescatar y rehabilitar a ejemplares de fauna silvestre de especies de valor ecológico. Por ello, los biólogos y profesionistas de disciplinas afines (médicos veterinarios, ecólogos) deben ampliar su campo de acción hacia la atención, rescate y rehabilitación de animales silvestres para su posible re-introducción a sus hábitats naturales así recuperar a las poblaciones de especies amenazadas.";
$objetivo = "El participante adquirirá los conocimientos teóricos necesarios para rescatar y brindar atención primaria; valorará el tipo de destino final para cada caso.";
$dirigido_a = "Biólogos, Médicos Veterinarios Zootecnistas y disciplinas afines.";
$requisitos = "Estudiantes y profesionales de las áreas químico biológicas y afines.";
$lugar = "Zoom"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/wwn996LgigXLKmsM6"; //Pegar el formato de inscripcion
$info_academica = "Dra. Rosalía Pastor Nieto <br> Correo electrónico: rosalia.pastor@gmail.com" //Agregar el Nombre <br> correo, dando un br para saltar de linea.
?>

<!-- Se debe modificar la parte de los profes que viene abajo. -->
<!-- La parte más pesada es agregar el temario. Se puede usar ese o una tabla como la que normalmente creas, ya agregue estilos para que se adapten, ver ejemplo de primeros auxilios.-->
<!-- Start Hero -->
<section class="portada">
    <img src="<?php echo $imagen_curso ?>" alt="Imagen del curso">
    <div class="portada-opacity"></div>
    <div class="container">
        <div class="portada-informacion">
            <span class="portada-informacion-pu">$<?php echo $precio_unam ?> /
                UNAM</span>
            <span class="portada-informacion-pg">$<?php echo $precio_general ?> /
                GENERAL</span>

            <!-- Si no tiene descuento se borra esta sección -->
            <p>15% de descuento por concepto de pronto pago (hasta el 3 de abril)</p>
            <span class="portada-informacion-pu-red">$<?php echo $precio_unam_descuento ?> /
                UNAM</span>
            <span class="portada-informacion-pg">$<?php echo $precio_general_descuento ?> /
                GENERAL</span>
            <!--Cierre de la sección de descuentos.-->

            <h1><?php echo $titulo_curso ?></h1>
            <p class="text-indigo-600"><?php echo $edicion ?></p>
            <!-- Genera el contenedor con los datos del profesor, es decir, la foto, el nombre y el enlace del curriculum. -->
            <!-- Si hay mas de un profe, se debe copiar todo el contenedor, para cada uno. -->
            <!-- PROFESORES QUE IMPARTEN -->
            <!-- Datos de Profe -->
            <div class="profesor">
                <div>
                    <img src="../../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../../assets/curriculums_docentes/RosaliaPastorNieto.pdf" target="_blank">Dra. Rosalía Pastor Nieto</a>
                </div>
            </div>
            <!-- Fin de datos de profe -->
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
                <span><?php echo $horario ?></span>
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
                    <p><?php echo $horario ?></p>
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
        <p class="text-red-600 max-w-xl mx-auto text-center">15% de descuento por concepto de pronto pago (hasta el 3 de
            abril)</p>
        <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="curso-costo-g">
                <h3>Público GENERAL</h3>

                <!-- PRECIO GENERAL-->
                <div>
                    <span>$</span>
                    <span style="text-decoration: line-through;"><?php echo $precio_general ?></span>
                    <span>MXN</span>
                </div>
                <!-- FIN-PRECIO GENERAL -->

                <!-- Para quitar el precio con descuento solo basta con borrar lo siquiente. -->
                <!-- QUITAR EL style="text-decoration: line-through; DE LA LINEA ANTERIOR -->
                <!-- PRECIO GENERAL CON DESCUENTO-->
                <div>
                    <span>$</span>
                    <span class="price text-4xl font-semibold mb-0"><?php echo $precio_general_descuento ?></span>
                    <span>MXN</span>
                </div>
                <!-- FIN - PRECIO GENERAL  CON DESCUENTO-->

                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>


            <div class="curso-costo-g">
                <h3>Comunidad UNAM</h3>

                <div>
                    <span>$</span>
                    <span style="text-decoration: line-through;"><?php echo $precio_unam ?></span>
                    <span>MXN</span>
                </div>


                <!-- Para quitar el precio con descuento solo basta con borrar lo siquiente. -->
                <!-- QUITAR EL style="text-decoration: line-through; DE LA LINEA ANTERIOR -->
                <!-- PRECIO UNAM CON DESCUENTO-->
                <div>
                    <span>$</span>
                    <span class="price text-4xl font-semibold mb-0"><?php echo $precio_unam_descuento ?></span>
                    <span>MXN</span>
                </div>
                <!-- FIN PRECIO UNAM CON DESCUENTO-->

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


<!-- Este ejemoplo es para cuando se muestra en forma de indice. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <td> son subtemas. -->
<section class="temario container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <!-- ******SECCIÓN PARA CADA TEMA CON SUS SUBTEMAS *****-->
        <div>
            <!-- Subtema -->
            <h3>I. Introducción a la Rehabilitación de Fauna Silvestre</h3>
            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>
                        </tr>
                    </thead>
                    <tbody><!-- Sub-subtemas -->
                        <!-- Sub-subtema -->
                        <tr>
                            <td>
                                I.1 Historia introduccioón
                            </td>
                        </tr>
                        <!-- Fin Sub sub-subtema -->

                        <!-- Sub-subtema con sub-indices, se agregan en forma de lista. -->
                        <tr>
                            <td>
                                I.2. Especies vulnerables a desastres naturales
                                <ul class="p-6 list-disc ">
                                    <li>manejo de descontaminación</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody><!--Fin Sub-subtemas -->
                </table>
            </div>
            <!-- Fin Subtema -->
            <!-- Subtema -->
            <h3>II. Introducción a la Rehabilitación de Fauna Silvestre</h3>
            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>
                        </tr>
                    </thead>
                    <tbody><!-- Sub-subtemas -->
                        <!-- Sub-subtema -->
                        <tr>
                            <td>
                                II.1 Historia introduccioón
                            </td>
                        </tr>
                        <!-- Fin Sub sub-subtema -->

                        <!-- Sub-subtema con sub-indices, se agregan en forma de lista. -->
                        <tr>
                            <td>
                                II.2. Especies vulnerables a desastres naturales
                                <ul class="p-6 list-disc ">
                                    <li>manejo de descontaminación</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody><!--Fin Sub-subtemas -->
                </table>
            </div>
            <!-- Fin Subtema -->
        </div>
        <!--********FIN DE SECCIÓN PARA CADA TEMA CON SUS SUBTEMAS********-->

    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

</section><!-- TERMINA LA SECCIÓN DEL TEMARIO -->

<!-- Este ejemoplo es para cuando se muestra en forma de tabla -->
<!-- TEMARIO SECCIÓN: -->
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
        </tbody>
    </table>
</section>


<!-- Start -->
<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2 class="md:text-3xl md:leading-normal">Inscripción</h2>
        </div>
        <div class="pasos">
            <div class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                <!--Start content-->
                <div class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="paso-n grid md:grid-cols-2">
                        <h3 class="md:text-right md:mr-8">Paso 1</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Solicita el formato de preregistro a:</h4>
                            <p><a href="mailto:cursosydiplomados@funam.mx" target="_blank" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">cursosydiplomados@funam.mx</a>
                            </p>
                        </div>
                    </div>

                    <div class="paso-n grid md:grid-cols-2 mt-10">
                        <h3 class="md:text-right md:mr-8">Paso 2</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Datos bancarios para depósito en sucursal,
                                practicajas, transferencia bancaria:</h4>
                            <p>Banco: CitiBanamex<br>Beneficiario: Fundación UNAM,
                                A.C.<br>Sucursal: 870<br>
                                Cuenta: 572529<br>Clabe: 00 21 80 08 70 05 72 52 92<br>Referencia: 829.411.100</p>

                            <p>En caso de que desees efectuarlo con tarjeta de
                                crédito y/o débito deberás acudir a las oficinas de Fundación UNAM en horario de
                                lunes a jueves de 9:30 a 17:30 y viernes de 9:30 a 14:30, ubicada en Calle
                                Pennsylvania 203, Col. Nápoles, Alcaldía Benito Juárez, C.P. 03810.</p>

                            <p>También puedes efectuarlo vía telefónica al call
                                center 55 53 400 904 o al teléfono 55 4575 1879</p>


                        </div>
                    </div>

                </div>
                <!--End content-->

            </div>
        </div>
        <p class="advertencia"><i class="uil uil-exclamation-circle"></i>Comunidad
            UNAM: En caso de formar parte de la Comunidad UNAM (alumnos, exalumnos, académicos, personal
            administrativo), deberás presentar una identificación que te acredite como tal.</p>
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
include '../../includes/templates/footer.php';
?>