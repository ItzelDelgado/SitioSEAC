<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Docencia Científica<br>Taller Intensivo";
$imagen_curso = "../../../assets/images/talleres/taller-intensivo-de-docencia-cientifica.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "1ra. Edición";
$fecha = "Del 31 de julio al 2 de agosto de 2023";
$precio_unam = "750"; //No es necesario poner mxn
$precio_general = "1,000"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx/es/259-taller-intensivo-de-docencia-cientifica";
$dias = "Lunes, martes y miercoles";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "9:00 a 18:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "27"; //No es necesario poner hrs
$modalidad = "Presencial";
$max_alumnos = "20"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "El aprendizaje activo (active learning) es una perspectiva educativa centrada en el estudiante que busca hacer del aprendizaje un proceso cognitivo dinámico, estimulante y vivencial. A diferencia de otras “modas’ que han ido y venido en la práctica docente, en los últimos años, ha surgido una creciente literatura con evidencia científica que ha demostrado que el aprendizaje activo es - en general - una forma más efectiva, duradera y disfrutable de enseñar y aprender. En las últimas décadas, en universidades donde se ha priorizado la docencia basada en la evidencia, el active learning ha sobresalido como la práctica didáctica de mayor uso en el aprendizaje de las ciencias y las matemáticas (STEM) a nivel y superior. Desafortunadamente, en México la formación de profesores universitarios en las bases y herramientas de aprendizaje activo es nulo o muy limitado. Do-Ciencia es una naciente iniciativa constituida que busca llevar Talleres de aprendizaje activo basado en la evidencia a profesores y estudiantes de todo el país con el fin de transformar la docencia superior a través de herramientas basadas en la evidencia.";
$objetivo = "Que la/el participante conozca, discuta y aplique herramientas de aprendizaje activo basadas en la evidencia para la enseñanza de las ciencias.";
$dirigido_a = "Docentes de la Facultad de Ciencias.";
$requisitos = "Ser docente actualmente o en el futuro cercano y contar (o preparar) con el material y contenidos de una clase que ha dado o dará próximamente.";
$lugar = "Secretaría de Educación Abierta y Continua, 1er piso, Edificio Tlahizcalpan (al lado del elevador)"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/Lkf5ytaYcCqA88HL9"; //Pegar el formato de inscripcion
$info_academica = "Dra. America Nitxin Castañeda Sortibran<br>
Correo electrónico: nitxin@ciencias.unam.mx"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(array("Dr. Marcos Nahmad. Investigador titular,", "../../../assets/curriculums_docentes/MarcosNahmad.pdf"))
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
                        <p>15% de descuento por concepto de pronto pago (hasta el 3 de abril)</p>
                        <span class=\"portada-informacion-pu-red\">$precio_unam_descuento UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general_descuento GENERAL</span>";
            } else {

                echo "<span class=\"portada-informacion-pu\">$precio_unam UNAM</span>
                        <span class=\"portada-informacion-pg\">$precio_general GENERAL</span>";
            }

            ?>
            <h1><?php echo $titulo_curso ?></h1>
            <p class="text-indigo-600"><?php echo $edicion ?></p>
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
                        <a href="#" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Total: <?php echo $no_horas ?> horas</a>
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
            <h3>M&oacute;dulo 1: Introducci&oacute;n al aprendizaje basado en evidencias</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>1.1 La paradoja de la ense&ntilde;anza de las ciencias.</li>
                    <li>1.2 Diferencias entre ense&ntilde;anza tradicional y aprendizaje activo.</li>
                    <li>1.3 Evidencias de la efectividad del aprendizaje activo en el aula de la ciencias.<br /><br /></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 2: Introducci&oacute;n al&nbsp;<strong>PIE</strong>&nbsp;(Planeaci&oacute;n, Implementaci&oacute;n y Evaluaci&oacute;n en el aprendizaje activo). Planeaci&oacute;n de objetivos.</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>2.1 Prop&oacute;sito de la educaci&oacute;n y los procesos cognitivos.</li>
                    <li>2.2 Estructura del trabajo docente en base a objetivos.</li>
                    <li>2.3 La pir&aacute;mide taxon&oacute;mica de Bloom y los niveles cognitivos.</li>
                    <li></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 3:&nbsp;<strong>PIE:</strong>&nbsp;Planeaci&oacute;n. Dise&ntilde;o de actividades 1.</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>3.1. &iquest;Qu&eacute; es una actividad de aprendizaje activo? Caracter&iacute;sicas, duraci&oacute;n y formato.</li>
                    <li>3.2. Herramientas de aprendizaje activo.</li>
                    <li>3.3. Manos a la obra: Crea tus propias actividades.</li>
                    <li></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->

            <h3>M&oacute;dulo 4:&nbsp;<strong>PIE:</strong>&nbsp;Planeaci&oacute;n. Dise&ntilde;o de actividades 2.</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>4.1. Herramientas DIGITALES de aprendizaje activo.</li>
                    <li>4.2. Manos a la obra: Crea tus propias actividades.<br /><br /></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>I. Aquí va el tema</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>I.1 Aquí va el subtema.
                        <ul>
                            <li>sub sub tema</li>
                        </ul>
                    </li>
                    <li>I.2. Clasificación y aplicaciones de los dispositivos móviles.</a></li>
                    <li>I.3. Plataformas de programación para dispositivos móviles.</li>
                    <li>I.4. Presentación de la plataforma Android.</li>
                    <li>I.5. La plataforma Android, entorno, anatomía y las capas de su arquitectura..</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 5:&nbsp;<strong>PIE:</strong>&nbsp;Planeaci&oacute;n. Dise&ntilde;o de actividades 3. Espec&iacute;ficas por &aacute;rea</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>5.1. Herramientas de aprendizaje activo para las ciencias.</li>
                    <li>5.2 Aprendizaje basado en problemas (f&iacute;sica , matem&aacute;ticas, computaci&oacute;n)</li>
                    <li>5.3 Dise&ntilde;o de proyectos y pr&aacute;cticas de laboratorio independientes (f&iacute;sica, qu&iacute;mica, biolog&iacute;a)</li>
                    <li>3.3. Manos a la obra: Crea tus propias actividades.<br /><br /></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 6:&nbsp;<strong>PIE:</strong>&nbsp;Implementaci&oacute;n. Consideraciones y diversidad en el aula</h3>
            <div class="contenido">
                <h4>Temas</h4>

                <ul>
                    <li>6.1. &iquest;Para qui&eacute;n ense&ntilde;amos? La diversidad en el aprendizaje activo</li>
                    <li>6.2 Los personajes del aula</li>
                    <li>6.3 Taller de improvisaci&oacute;n<br /><br /></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 7:&nbsp;<strong>PIE:</strong>&nbsp;Implementaci&oacute;n. Taller de implementaci&oacute;n</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>7.1. Manos a la obra. Taller de implementaci&oacute;n<br /><br /></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 8:&nbsp;<strong>PIE:</strong>&nbsp;Evaluaci&oacute;n. Consideraciones y tipos de evaluaci&oacute;n</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>8.1. Tipos de evaluaci&oacute;n</li>
                    <li>8.2 Herramientas e instrumentos de evaluaci&oacute;n en el aprendizaje activo<br /><br /></li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>M&oacute;dulo 9:&nbsp;<strong>PIE:</strong>&nbsp;Evaluaci&oacute;n. Dise&ntilde;o e de instrumentos de evaluaci&oacute;n</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>9.1. Manos a la obra. Crea tus propias r&uacute;bricas e instrumentos de evaluaci&oacute;n formativa y sumativa</li>
                    <li>9.2 Integraci&oacute;n del PIE</li>
                    <li>9.3 Evaluaci&oacute;n del Taller y perspectivas</li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <!-- <a class="formato-link mt-6" target="_blank" href="../../cursos/IntroduccionaLosCoralesFosiles/TEMARIOEXTENDIDO_IntroALosCoralesFosiles_1raEd.pdf">
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