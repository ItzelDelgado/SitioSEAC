<?php
include '../../../includes/templates/header.php';
include '../../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Derecho y Gestión Ambiental";
$imagen_curso = "../../../assets/images/diplomados/DerechoyGestionAmbientalParalaSustentabilidad.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "XXVII Edición";
$fecha = "Del 24 de febrero al 9 de junio del 2023.";
$precio_unam = "27,840"; //No es necesario poner mxn
$precio_general = "34,800"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "24,500"; //No es necesario poner mxn
$precio_general_descuento = "25,500"; //No es necesario poner mxn
$frase_descuento = "15% de descuento a quienes realicen el pago completo anticipado (en una sola exhibición) y 20% de descuento para alumnos vigentes de la UNAM."; //Frase del porcentaje de descuento
$limite_fecha_descuento = "09-06-2050"; //Formato date("dd-mm-Yyyy")
$link_pago_ceja = "http://www.ceja.org.mx/cursos.php?id_article=8716";
$dias = "Viernes y sábados"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "V: 16 - 20 hrs y S: 10 - 14 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "120"; //No es necesario poner hrs
$modalidad = "Virtual (con opció a presencial)";
$max_alumnos = "30"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$objetivo = "Contribuir a la formación de profesionales en el conocimiento y aplicación del derecho y la gestión ambiental bajo un enfoque interdisciplinario y desde un esquema tanto nacional como internacional con el propósito de avanzar en la comprensión de la cuestión ambiental y el desarrollo sustentable así como en el fortalecimiento de la conciencia ambiental.";
$dirigido_a = "Abogados, Biólogos (titulados o no), o cualquier profesionista inmerso en el área ya que hemos contado con la participación de Químicos, Arquitectos, etc, así como personas con interés general en la materia ambiental.";
$requisitos = "- Conocimiento básico de los temas.<br>
- Registrarse mediante el formulario de inscripción.<br>
- Realizar el pago correspondiente como se establece en la convocatoria.<br>
- En caso de ser estudiante o profesor de la UNAM, presentar copia vigente de credencial
y para estudiantes constancia de estudios.";
$lugar = "Secretaría de Educación Abierta y Continua de la Facultad de Ciencias, UNAM.";

//Es necesario poner el ../../../ en las url de los curriculums, para acceder a la carpeta.
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
                        <p>$frase_descuento</p>
                        <span class=\"portada-informacion-pu-red\">$precio_unam_descuento UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general_descuento GENERAL</span>";
            } else {

                echo "<span class=\"portada-informacion-pu\">$precio_unam UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general GENERAL</span>
                        <p>El pago de este diplomado puede hacerse en 3 exibiciones de:</p>
                        <span class=\"portada-informacion-pu-red\">4,000 UNAM</span>
                        <span class=\"portada-informacion-pg\">5,000 GENERAL</span>";
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
                    <p>
                        <?php echo $requisitos ?>
                    </p>
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
        <div class="curso-costo-g">
            <h3>POR CADA UNO DE LOS CINCO MÓDULOS</h3>

            <!-- PRECIO GENERAL-->
            <div>
                <span>$</span>
                <span>$6,960</span>
                <span>MXN + IVA</span>
            </div>
            <!-- FIN-PRECIO GENERAL -->
            <a href="#inscripcion" class="btn">Inscribirse</a>
        </div>

        <p class="mt-8 max-w-xl mx-auto text-center"><b>Nota importante:</b> Toda vez que este es un programa académico
            administrado por el Centro de Estudios Jurídicos y Ambientales, no se acepta nigún tipo de beca AAPAUNAM o
            STUNAM.</p>
    </div>

</section>



<!-- Este ejemoplo es para cuando se muestra en forma de indice. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<section class="temario container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <div> <!--Tema-->
            <h3>Módulo I. Ambiente y Derecho (Evolución e Instituciones)</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Juridificaci&oacute;n del ambiente</li>
                    <li>Derecho Internacional I: Or&iacute;genes, Desarrollo</li>
                    <li>Derecho Internacional II: Organismos y Foros</li>
                    <li>La LGEEPA, Instrumentos de Pol&iacute;tica Ambiental y Participaci&oacute;n Social</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>Módulo II. Instrumentos de Política Ambiental</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Ordenamiento Ecol&oacute;gico del Territorio</li>
                    <li>Instrumentos Econ&oacute;micos</li>
                    <li>Evaluaci&oacute;n de Impacto Ambiental I</li>
                    <li>Evaluaci&oacute;n de Impacto Ambiental II</li>
                    <li>Auditor&iacute;as y Sistemas de Administraci&oacute;n Ambiental I</li>
                    <li>Auditor&iacute;as y Sistemas de Administraci&oacute;n Ambiental II</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>Módulo III. Aprovechamiento de los Recursos Naturales</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Caracter&iacute;sticas e importancia del entorno natural y su regulaci&oacute;n</li>
                    <li>&Aacute;reas Naturales Protegidas: Marco Normativo, Pol&iacute;tica y Conservaci&oacute;n</li>
                    <li>Recursos forestales: Marco Normativo</li>
                    <li>Pesca, Acuacultura, Costas y Mares</li>
                    <li>Bioseguridad y Organismos Gen&eacute;ticamente Modificados</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>Módulo IV. Recursos Naturales y Contaminación</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Caracter&iacute;sticas e importancia del entorno natural y su regulaci&oacute;n</li>
                    <li>&Aacute;reas Naturales Protegidas: Marco Normativo, Pol&iacute;tica y Conservaci&oacute;n</li>
                    <li>Recursos forestales: Marco Normativo</li>
                    <li>Pesca, Acuacultura, Costas y Mares</li>
                    <li>Bioseguridad y Organismos Gen&eacute;ticamente Modificados</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>Módulo V. Pragmática Jurídico Ambiental</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Retos y perspectivas de la Administraci&oacute;n de Justicia Ambiental en M&eacute;xico</li>
                    <li>Responsabilidad Civil (seguros y fianzas)</li>
                    <li>Responsabilidad Administrativa</li>
                    <li>Inspecci&oacute;n y Vigilancia Ambiental</li>
                    <li>Responsabilidad Ambiental, LFRA</li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <a class="formato-link mt-6" target="_blank"
        href="../../../diplomados/DerechoyGestionAmbiental/XXVIIed/ProgramaDDyGA_XXVII.pdf">
        Temario detallado
    </a>
</section><!-- TERMINA LA SECCIÓN DEL TEMARIO -->


<!-- Start -->
<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2>Informes e inscripciones</h2>
        </div>

        <div class="pasos">
            <div
                class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                <p>Centro de Estudios Jurídicos y Ambientales, A. C.</p>
                <p>Teléfono: 55 33 30 12 25 al 27, extensión 107</p>
                <p>Sitio web: <a
                        class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out"
                        href="http://www.ceja.org.mx/">www.ceja.org.mx</a></p>
                <p>Correo electrónico: cursos@ceja.org.mx</p>

            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End -->



<?php
include '../../../includes/templates/footer.php';
?>