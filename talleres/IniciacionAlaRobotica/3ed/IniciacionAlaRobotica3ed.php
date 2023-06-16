<?php
include '../../../includes/templates/header.php';
include '../../../includes/templates/funciones.php';
?>

<?php
$titulo_curso = "Iniciación a la Robótica";
$imagen_curso = "../../../assets/images/talleres/Robotica3ed.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "3ra. Edición";
$fecha = "Del 29 de julio al 26 de agosto de 2023";
$precio_unam = "4,000";
$precio_general = "4,200";
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx/es/262-taller-de-iniciacion-a-la-robotica";
$dias = "Sábado"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "10:00 a 13:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "15"; //No es necesario poner hrs
$modalidad = "Presencial";
$max_alumnos = "17"; //Cantidad de alumnos maxima
$min_alumnos = "10"; //Cantidad de alumnos minima
$descripcion = "La tecnología mecatrónica es de vital importancia en el desarrollo científico y tecnológico de cualquier sociedad moderna, se requiere de jóvenes dispuestos a expresar su creatividad e ingenio en áreas fuertemente inter e intradisciplinarias, para llevar a cabo proyectos que les permitan avanzar en la solución de problemas donde un sistema robótico puede desempeñarse igual o mejor que su contraparte humana.
El objetivo del presente taller es iniciar a jóvenes en el área de la robótica con el propósito de que adquieran o apliquen conocimientos en las ramas de electrónica, programación, mecánica y control y de que tengan la capacidad de crear sus propios sistemas mecatrónicos de forma autónoma e independiente. Que los participantes aprendan a organizarse y colaborar en un equipo de trabajo mediante una estructura jerárquica para la asignación de tareas y responsabilidades, así como a establecer y lograr metas a lo largo del proyecto. Que los alumnos se inicien en la participación en los diversos concursos de robótica a nivel nacional, lo cual les permitirá evaluar y comparar sus logros contra los de otras instituciones. Todo esto de forma extracurricular
.";
$objetivo = "Introducir a los participantes de forma práctica, sencilla y divertida en el área de robótica, adquiriendo en el proceso conocimientos básicos de programación y habilidades en electrónica.";
$dirigido_a = "Niños y adolescentes de 10 a 17 años.";
$requisitos = "No se requieren conocimientos previos.<br>
Los alumnos deberán traer por su cuenta Memoria flash USB, mínimo 8GB.<br>
Se requiere que el niño sea capaz de mantener la atención el tiempo que duren las clases y de resolver retos de acuerdo a su edad.";
$lugar = "Taller de Control y Electrónica ubicado en el edificio Tlahuizcalpan de la Facultad de Ciencias, UNAM."; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://docs.google.com/forms/d/e/1FAIpQLScX91zIr-vDChj3ng1QkZiED1hm31KBX76CsYcc_RkvzLIxDQ/viewform"; //Pegar el formato de inscripcion
$ponentes_principales_presentacion = array(array("Dra. Andrea Aburto, Coordinadora de la carrera de Física", "#"), array("Dra. Donaji Xóchitl Cruz López, Taller de Innovación, Facultad de Ciencias, UNAM", "#"))
//Es necesario poner el ../../ en las url de los curriculums, para acceder a la carpeta.
?>

<!-- Se debe modificar la parte de los profes que viene abajo. -->
<!-- La parte más pesada es agregar el temario. Se puede usar ese o una tabla como la que normalmente creas, ya agregue estilos para que se adapten, ver ejemplo de primeros auxilios.-->
<!-- Start Hero -->
<section class="portada">
    <img src="<?php echo $imagen_curso ?>" alt="Imagen del curso">
    <div class="portada-opacity"></div>
    <div class="container">
        <div class="portada-informacion">
            <?php
            $fechaActual = strtotime(date("d-m-Y"));
            $fecha_lim_desc = strtotime($limite_fecha_descuento);
            #Si tiene descuento y la fecha de hoy es menor a la fecha de descuento 
            if ($precio_unam_descuento != 'NO' && $fechaActual <= $fecha_lim_desc) {
                echo "<span class=\"portada-informacion-pu\">$precio_unam UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general GENERAL</span>
                        <p>15% de descuento por concepto de pronto pago (hasta el 3 de abril)</p>
                        <span class=\"portada-informacion-pu-red\">$precio_unam_descuento UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general_descuento GENERAL</span>";
            } else {

                echo "<span class=\"portada-informacion-pu\">$precio_unam UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general GENERAL</span>";
            }

            ?>
            <h1>
                <?php echo $titulo_curso ?>
            </h1>
            <p class="text-indigo-600">
                <?php echo $edicion ?>
            </p>
            <!-- Genera el contenedor con los datos del profesor, es decir, la foto, el nombre y el enlace del curriculum. -->
            <!-- Si hay mas de un profe, se debe copiar todo el contenedor, para cada uno. -->
            <!-- PROFESORES QUE IMPARTEN -->
            <!-- Datos de Profe -->

            <?php
            g_ponentes_princi_pres($ponentes_principales_presentacion);
            ?>

            <!-- Fin de datos de profe -->
            <!-- FIN - PROFESORES QUE IMPARTEN -->
            <div class="fecha">
                <i class="uil uil-calendar-alt"></i>
                <span>
                    <?php echo $fecha ?>
                </span>
            </div>

        </div>
    </div>

    <div class="datos">
        <ul>
            <li>
                <i class="uil uil-calendar-alt"></i>
                <span>
                    <?php echo $dias ?>
                </span>
            </li>

            <li>
                <i class="uil uil-bell-school"></i>
                <span>
                    <?php echo $horario ?>
                </span>
            </li>

            <li>
                <i class="uil uil-clock"></i>
                <span>
                    <?php echo $no_horas ?> horas
                </span>
            </li>

            <li>
                <i class="uil uil-map-marker"></i>
                <span>
                    <?php echo $modalidad ?>
                </span>
            </li>

            <li>
                <i class="uil uil-user-circle"></i>
                <span>Máx.
                    <?php echo $max_alumnos ?> / Min.
                    <?php echo $min_alumnos ?>
                </span>
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
        <p>
            <?php echo $descripcion ?>
        </p>
        <h2>Objetivo</h2>
        <p>
            <?php echo $objetivo ?>
        </p>
        <p class="font-semibold mt-4">Objetivos específicos</p>
        <ul class="list-disc pl-12">
            <li>Comprender conceptos y componentes básicos de electrónica: resistencia, corriente, motor, let, sensor,
                etc.
            </li>
            <li>Medir con multímetro corrientes, voltajes, resistencias, etc.</li>
            <li>Ensamblar las partes mecánicas de un robot.</li>
            <li>Conectar los componentes electrónicos que permitan el funcionamiento de un robot.</li>
            <li>Aprender y aplicar comandos básicos de arduino que permitan programar y controlar un robot con a lo más
                tres funcionalidades: evasor de obstáculos, seguidor de línea, minisumo.</li>
        </ul>
        <h2>Dirigido a</h2>
        <p>
            <?php echo $dirigido_a ?>
        </p>
        <p class="text-red-600 mt-4">
            Mín / Máx de alumnos: Mínimo
            <?php echo $min_alumnos ?>, máximo
            <?php echo $max_alumnos ?>.<br>
            La apertura del curso está sujeta al mínimo de inscritos.
        </p>
        <h2>Cuerpo docente y responsables académicos</h2>
        <P>Debido a la naturaleza del taller, los conocimientos de los instructores son aquellos que hayan adquirido previamente en las cátedras relacionadas con robótica impartidas en la Facultad de Ciencias.</P>
        <p class="font-semibold mt-4">Profesores que imparten las materias de Robótica en la Facultad de Ciencias:</p>
        <ul class="list-disc pl-12">
            <li>Dr. Fernando &Aacute;ngeles Uribe, Coordinador del Taller de Control y Electr&oacute;nica de la Facultad de Ciencias, (T&eacute;cnico Acad&eacute;mico Titular C del Instituto de Astronom&iacute;a, UNAM)</li>
            <li>Dra. Donaj&iacute; X&oacute;chitl, Cruz L&oacute;pez (T&eacute;cnico Acad&eacute;mico Titular A de la Facultad de Ciencias, UNAM)</li>
            <li>M. en I. Valente V&aacute;zquez Vel&aacute;zquez (Profesor de Asignatura A de la Facultad de Ciencias, UNAM)</li>
            <li>M. en C. Jos&eacute; Luis del R&iacute;o Vald&eacute;s, (T&eacute;cnico Acad&eacute;mico Asociado C de la Facultad de Ciencias, UNAM)</li>
            <li>L. en C.C Luis Alberto Ram&iacute;rez Bermudez, (Profesor de Asignatura A de la Facultad de Ciencias,UNAM)</li>
            <li>M. en C. Jes&uacute;s Antonio Rosas Guti&eacute;rrez (Profesor de Asignatura A de la Facultad de Ciencias,UNAM)</li>
        </ul>
        <p class="font-semibold mt-4">Instructores:</p>
        <ul class="list-disc pl-12">
            <li>L en C. C. Ricardo López López Profesor de Asignatura Facultad de Ciencias</li>
        </ul>
        <!-- Kit  -->
        <a class="formato-link mt-6" target="_blank" href="../../../talleres/IniciacionAlaRobotica/3ed/IniciacionAlaRobotica3ED-Kit.pdf">
        Kit y material de apoyo para los alumnos
        </a>

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
                    <p>
                        <?php echo $requisitos ?>
                    </p>
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
                    <p>
                        <?php echo $horario ?>
                    </p>
                    <p>
                        <?php echo $dias ?>
                    </p>
                    <div class="mt-5">
                        <a href="#" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Total:
                            <?php echo $no_horas ?> horas
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <i class="uil uil-map-marker"></i>
                </div>

                <div>
                    <h3>Lugar</h3>
                    <p>
                        <?php echo $lugar ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Para el area de pagos -->
    <div class="curso-costo container">
        <h2 class="md:text-3xl md:leading-normal">Costo</h2>
        <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="curso-costo-g">
                <h3>Público GENERAL</h3>

                <!-- PRECIO GENERAL-->
                <div>
                    <span>$</span>
                    <span><?php echo $precio_general?></span>
                    <span>MXN</span>
                </div>
                <!-- FIN-PRECIO GENERAL -->
                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>
            <div class="curso-costo-g">
                <h3>Comunidad UNAM</h3>
                <div>
                    <span>$</span>
                    <span><?php echo $precio_unam?></span>
                    <span>MXN</span>
                </div>
                <ul>
                    <li><i class="uil uil-check-circle"></i>Alumnos UNAM e incorporadas</li>
                    <li><i class="uil uil-check-circle"></i>Hijos de personal UNAM</li>
                </ul>
                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>
        </div>
    </div>

</section>



<!-- Este ejemoplo es para cuando se muestra en forma de indice. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<section class="temario container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <div> <!--Tema-->
            <div class="contenido">
                <ul>
                    <li>&iquest;Qu&eacute; es la rob&oacute;tica?
                        <ul>
                            <li>Demostraciones pr&aacute;cticas con el material existente.</li>
                        </ul>
                    </li>
                    <li>Elementos de los robots
                        <ul>
                            <li>Mec&aacute;nica</li>
                            <li>Electr&oacute;nica</li>
                            <li>Programaci&oacute;n</li>
                            <li>Control</li>
                        </ul>
                    </li>
                    <li>Microcontroladores
                        <ul>
                            <li>Conceptos b&aacute;sicos, Blink</li>
                        </ul>
                    </li>
                    <li>Programaci&oacute;n en Arduino (Scratch para ni&ntilde;os, C++ para j&oacute;venes)
                        <ul>
                            <li>Estructura de datos</li>
                            <li>Salida y entrada de datos, control de flujo</li>
                        </ul>
                    </li>
                    <li>Electr&oacute;nica b&aacute;sica
                        <ul>
                            <li>Componentes b&aacute;sicos: resistencias, LEDs.</li>
                            <li>Conceptos de energ&iacute;a, corriente, voltaje.</li>
                            <li>Ley de Ohm</li>
                            <li>Cuidados</li>
                        </ul>
                    </li>
                    <li>Equipo de medici&oacute;n
                        <ul>
                            <li>Conceptos b&aacute;sicos de medici&oacute;n con mult&iacute;metro</li>
                        </ul>
                    </li>
                    <li>Motores y actuadores
                        <ul>
                            <li>Motores de corriente directa y servomotores</li>
                        </ul>
                    </li>
                    <li>Sensores
                        <ul>
                            <li>Sensores: infrarrojo y ultras&oacute;nico</li>
                        </ul>
                    </li>
                    <li>Evasi&oacute;n de obst&aacute;culos
                        <ul>
                            <li>Programaci&oacute;n</li>
                        </ul>
                    </li>
                    <li>Seguimiento de l&iacute;nea
                        <ul>
                            <li>Programaci&oacute;n</li>
                        </ul>
                    </li>
                    <li>Sumo
                        <ul>
                            <li>Programaci&oacute;n</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <!-- <a class="formato-link mt-6" target="_blank" href="../../../cursos/PrimerosAuxilios/2daEd/PrimerosAuxilios2daEd-TemarioExtendido.pdf">
        Temario extendido
    </a> -->
</section><!-- TERMINA LA SECCIÓN DEL TEMARIO -->


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
                            <p><a href=<?php echo $link_plaza_prometeo ?> target="_blank" class="formato-link">tienda.fciencias.unam.mx</a>
                            </p>
                        </div>
                    </div>

                    <div class="paso-n grid md:grid-cols-2 mt-10">
                        <h3 class="md:text-right md:mr-8">Paso 2</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Registrarse en este formato de inscripción</h4>
                            <p>(únicamente si usted ya hizo el pago)</p>
                            <p><a href=<?php echo $formato_inscripcion ?> target="_blank" class="formato-link">Formato
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

    </div>
</div>

<?php
include '../../../includes/templates/footer.php';
?>