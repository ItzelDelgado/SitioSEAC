<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Diseño de Cursos en Cuadernos Jupyter Interactivos con la Plataforma MACTI";
$imagen_curso = "../../assets/images/cursos/Cuadernos-Jupyter-Interactivos.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "1ra. Edición";
$fecha = "Del 1ro al 24 de junio de 2023";
$precio_unam = "3,600"; //No es necesario poner mxn
$precio_general = "4,320"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx";
$dias = "Jueves, viernes y sábado"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "Ju-vi: 18 - 21 hrs y Sab: 9 - 12 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "36"; //No es necesario poner hrs
$modalidad = "Semipresencial o virtual";
$max_alumnos = "15"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "En el marco del proyecto “MACTI: Modelación Computacional y Enseñanza”, se ha desarrollado una plataforma que integra tecnologías para apoyar la enseñanza y el aprendizaje de conceptos teóricos de diversas asignaturas de licenciaturas de Ciencias e Ingeniería. Mediante el uso adecuado de esta plataforma, es posible diseñar contenidos pedagógicos en cuadernos interactivos (Jupyter Notebooks) los cuales se pueden revisar, modificar y resolver a través de un navegador web, de tal forma que no es necesaria la instalación de ningún software en dispositivos locales (computadoras o móviles). Estos contenidos se combinan con un sistema gestor del aprendizaje (Moodle) con el objetivo de organizar la información en un solo lugar y permitir una evaluación automática con realimentación para el estudiante y facilitando el trabajo del profesor. Todo lo anterior agrega prácticas a distancia a asignaturas que tradicionalmente se imparten de manera teórica. En este curso se promueve el uso del Pensamiento Computacional para afrontar y resolver problemas complejos, junto con las metodologías de enseñanza de Aula Invertida y Aprendizaje Basado en Problemas/Proyectos.";
$objetivo = "	El participante será capaz de aplicar diferentes metodologías de enseñanza para promover la interacción durante sus clases; además será capaz de diseñar cursos en temas de Ciencias e Ingeniería utilizando las herramientas tecnológicas interactivas que ofrece la plataforma MACTI";
$dirigido_a = "Planta docente (profesores y ayudantes) de Escuelas y Facultades en donde se imparten licenciaturas de Ciencias e Ingeniería.";
$requisitos = "<ul class= \"list-disc\"><li>Los participantes deberán traer Laptop o tablet con navegador web. Para los participantes en línea, se sugiere tener dos equipos, uno para ver la presentación de los instructores (por ejemplo, conectarse por celular) y otra para realizar los ejercicios (por ejemplo, una laptop).</li>
<li>Conocimientos básicos de computación, particularmente uso de navegador web.</li>
<li>De preferencia, ser profesor o ayudante en alguna Escuela o Facultad en donde se impartan licenciaturas de Ciencias e Ingeniería</li>";
$lugar = "Presencial en el Aula del Futuro del Instituto de Geofísica. <br>En línea por medio de Zoom. <br><b>Nota:</b> Los jueves y viernes se podrán conectar los participantes que se inscriban en la modalidad en línea por medio de la plataforma Zoom. Las sesiones de los sábados serán en línea para todos los participantes. Todas las sesiones serán sincrónicas."; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/4EoKa43nJEimX8gT7"; //Pegar el formato de inscripcion
$info_academica = "Dr. Luis Miguel De la Cruz Salas
<br>Correo electrónico: luiggi@igeofisica.unam.mx"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(array("Dr. Luis Miguel de la Cruz Salas, Instituto de Geofísica", "../../assets/curriculums_docentes/LuisMdeLaCruz.pdf"), array("Mtro. Miguel Angel Pérez León, Facultad de Ciencias", "../../assets/curriculums_docentes/MiguelPerezLeon.pdf"), array("Ing. Juan Eduardo Murrieta León, Instituto de Ciencias Nucleares", "../../assets/curriculums_docentes/EduardoMurrietaLeon.pdf"));
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
    <div
        class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
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
                    <?php echo $requisitos ?>
                    <div class="mt-5">
                        <a href="#" data-type="iframe"
                            class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
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
                        <a href="#"
                            class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Total:
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
        <?php
        aplica_descuento($precio_unam, $precio_unam_descuento, $precio_general, $precio_general_descuento, $frase_descuento, $limite_fecha_descuento);
        ?>
    </div>

</section>



<!-- Este ejemoplo es para cuando se muestra en forma de indice. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<section class="temario container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <div> <!--Tema-->
            <h3>I. Introducción</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>I.1 Encuadre y presentaci&oacute;n del curso.</li>
                    <li>I.2 Visita guiada a la plataforma MACTI</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>II. Herramientas para el uso de MACTI</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>II.1 Moodle.</li>
                    <li>II.2 Descripci&oacute;n del ambiente Jupyter Notebook.</li>
                    <li>II.3 Python b&aacute;sico.</li>
                    <li>II.4 Git y GitHub.</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>III. Diseño de cuadernos interactivos</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>III.1 Numpy.</li>
                    <li>III.2 Matplotlib.</li>
                    <li>III.3 Pandas.</li>
                    <li>III.4 SimPy.</li>
                    <li>III.5 Creaci&oacute;n de interactivos con ipywidgets.</li>
                    <li>III.6 Creaci&oacute;n de animaciones.</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>IV. Iniciando en la plataforma</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>IV.1 Registrarse en la plataforma.</li>
                    <li>IV.2 Generar un curso y su identificador.</li>
                    <li>IV.3 Vincular los cuadernos interactivos.</li>
                    <li>IV.4 Requerimientos para registrar a estudiantes.</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>V. Evaluación formativa y sumativa</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>V.1
                        &iquest;Qu&eacute; es NBGrader?</li>
                    <li>V.2 Uso b&aacute;sico de evaluaci&oacute;n con NBGrader.</li>
                    <li style="background: white;">V.3 Evaluaci&oacute;n para el aprendizaje (formativa).
                        <ul>
                            <li>V.3.1 Ejercicios dentro de los cuadernos interactivos.</li>
                            <li>V.3.2 Quizzes en Moodle.</li>
                        </ul>
                    </li>
                    <li>V.4 Evaluaci&oacute;n del aprendizaje (sumativa).
                        <ul>
                            <li>V.4.1 Tareas.</li>
                            <li>V.4.2 Ex&aacute;menes.</li>
                            <li>V.4.3 R&uacute;bricas.</li>
                            <li>V.4.4 Listas de cotejo.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VI. Metodologías de enseñanza</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Metodolog&iacute;as de ense&ntilde;anza</li>
                    <li>1 Definici&oacute;n de un tema a desarrollar por cada participante.</li>
                    <li>2 Planteamiento del tema mediante Aula Invertida (AI).
                        <ul>
                            <li>2.1 Pre-clase</li>
                            <li>2.2 Clase.</li>
                            <li>2.3 Post-clase</li>
                        </ul>
                    </li>
                    <li style="background: white;">V.3
                            Soluci&oacute;n de ejercicios mediante Pensamiento Computacional (PC).
                        <ul>
                            <li style="background: white;">VI.3.1
                                    Descomposici&oacute;n.</li>
                            <li style="background: white;">VI.3.2
                                    Reconocimiento de patrones.</li>
                            <li style="background: white;">VI.3.3
                                    Abstracci&oacute;n.</li>
                            <li style="background: white;">VI.3.4
                                    Algoritmos.</li>
                        </ul>
                    </li>
                    <li style="background: white;">
                            VI.4 Aprendizaje
                            basado en problemas/proyectos (ABP).
                        <ul>
                            <li style="background: white;">VI.4.1
                                    Definici&oacute;n de un proyecto para complementar el aprendizaje.</li>
                            <li style="background: white;">VI.4.2
                                    Soluci&oacute;n del proyecto y creaci&oacute;n de materiales para el
                                    profesor.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <a class="formato-link mt-6" href="assets/pdf/formatos/FormatoPresentacionCursoo.docx"
        download="Documento-con-descripcion">
        Temario extendido
    </a>
</section><!-- TERMINA LA SECCIÓN DEL TEMARIO -->


<!-- Start -->
<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2>Inscripción</h2>
        </div>

        <div class="pasos">
            <div
                class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                <!--Start content-->
                <div
                    class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="paso-n grid md:grid-cols-2">
                        <h3 class="md:text-right md:mr-8">Paso 1</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Realizar el pago en línea mediante "Plaza
                                Prometeo", la tienda de la Facultad de Ciencias</h4>
                            <p><a href=<?php echo $link_plaza_prometeo ?> target="_blank"
                                    class="formato-link">tienda.fciencias.unam.mx</a>
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
    <div class="informacion grid md:grid-cols-2 grid-cols-1 mt-8 md:gap-[30px]" id="accordion-collapse"
        data-accordion="collapse">
        <div>
            <div>
                <h2 id="info-admin-col">
                    <button type="button" data-accordion-target="#info-admin" aria-expanded="false"
                        aria-controls="info-admin">
                        <span>Información administrativa</span>
                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="info-admin" class="hidden" aria-labelledby="info-admin-col">
                    <div class="p-5">
                        <p class="text-slate-400 dark:text-gray-400">Secretaría de Educación Abierta y Continua,
                            Facultad de Ciencias, UNAM.<br>
                            Sitio web: <a class="text-cyan-600 underline"
                                href="http://www.educontinua.fciencias.unam.mx"
                                target="_blank">www.educontinua.fciencias.unam.mx</a><br>
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
                    <button type="button" data-accordion-target="#info-acad" aria-expanded="true"
                        aria-controls="info-acad">
                        <span>Información académica</span>
                        <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="info-acad" class="hidden" aria-labelledby="info-acad-col">
                    <div class="p-5">
                        <p class="text-slate-400 dark:text-gray-400">
                            <?php echo $info_academica ?>
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