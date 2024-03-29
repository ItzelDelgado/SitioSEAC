<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Introducción a la Programación en R y su Aplicación a la Inferencia Estadística (Curso I)";
$imagen_curso = "../../../assets/images/cursos/bg-CursoR.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "15a. Edición";
$fecha = "Del 3 de junio al 22 de julio del 2023";
$precio_unam = "4,000"; //No es necesario poner mxn
$precio_general = "5,000"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$dias = "Sabados"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "10:00 a 15:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "40"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "60"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "La mayoría de los fenómenos que se estudian en la biología, ecología, ciencias de la salud, ciencias sociales, ciencias ambientales, ingeniería etc., presentan una variabilidad natural inherente por lo que para su estudio y análisis es necesario usar técnicas cuantitativas y herramientas estadísticas. En particular la inferencia estadística ha jugado un papel muy importante en la prueba de hipótesis y análisis de datos. Debido a la complejidad de los fenómenos y la cantidad significante de datos que se recopilan en la actualidad, es necesario usar computadoras y software estadístico para facilitar las tareas de investigación. Aunque existen una cantidad importante de paquetes de software estadístico (SPSS, Statistica, Systat, Minitab, etc.), el paquete estadístico R se ha posicionado como uno de los paquetes estadísticos preferidos en la investigación. R es un lenguaje y medioambiente para el cómputo estadístico y gráficas. Es un software de acceso abierto y gratuito, basado en el lenguaje y medioambiente S desarrollado por Bell laboratorios. R provee una gran variedad de técnicas estadísticas (modelación linear y no linear, pruebas de estadística clásica, análisis de series de tiempo, clasificación, clustering….) y graficas. R se compila y corre en una variedad de sistemas operativos (Windows, Mac, Linux, etc.). Otra característica importante de R es su capacidad para expandir sus capacidades a través de la incorporación de paquetes desarrollados por un número importante de contribuyentes. Estas características confieren a R una gran flexibilidad y poder para realizar análisis estadísticos y gráficos por lo que es muy recomendable su aprendizaje y uso para estudiantes y científicos en la mayoría de las áreas de la ciencia. Para aquellos fenómenos complejos que requieren un enfoque cuantitativo en su análisis, el paquete estadístico R es la herramienta ideal en la investigación.";
$objetivo = "Aprender la programación y uso del paquete estadístico R y sus aplicaciones a la enseñanza y la investigación.";
$dirigido_a = "Biólogos, Oceanógrafos, Oceanólogos, economistas, físicos, matemáticos, estudiantes de postgrado, investigadores y profesionales en áreas multidisciplinarias.";
$requisitos = "Conocimientos básicos de estadística y calculo diferencial.";
$lugar = "Zoom o Meet"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$info_academica = "Dr. Jesús Jurado-Molina<br>
Correo electrónico: jjurado@uw.edu"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(array("Dr. Jesús Jurado Molina", "../../../assets/curriculums_docentes/JesusJuradoMolina.pdf"))
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
        <?php
        aplica_descuento_FUNAM($precio_unam, $precio_unam_descuento, $precio_general, $precio_general_descuento, $frase_descuento, $limite_fecha_descuento);
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
            <h3>I. Introducción al paquete estadístico R</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>I.1 Breve introducci&oacute;n hist&oacute;rica de Excel y RI.2 Descarga e instalaci&oacute;n de RI.3 El medioambiente R (interface de comandos en R y Rstudio)I.4 instalaci&oacute;n y descarga de paquetesI.5 Aspectos b&aacute;sicos de R<ul>
                            <li>&nbsp;Matem&aacute;ticas b&aacute;sicas&nbsp;</li>
                            <li>Tipos de variables</li>
                            <li>Tipos de datos</li>
                            <li>Vectores</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>II. Manipulaci&oacute;n de datos en R</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>II.1 Estructuras avanzadas de datos<ul>
                            <li>Matrices</li>
                            <li>Arreglos</li>
                            <li>data.frames</li>
                            <li>Objetos</li>
                        </ul>
                    </li>
                    <li>II.2 Lectura de datos<ul>
                            <li>Datos de archivos csv</li>
                            <li>Datos de archivos txt</li>
                            <li>Datos disponibles en R</li>
                            <li>Datos disponibles en paquetes e internet</li>
                        </ul>
                    </li>
                    <li>II.3 Graficaci&oacute;n en R<ul>
                            <li>Graficaci&oacute;n b&aacute;sica</li>
                            <li>Principios del an&aacute;lisis exploratorio de datos</li>
                            <li>Histogramas</li>
                            <li>Boxplots</li>
                            <li>Graficas de dispersi&oacute;n</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>III. Modelos estad&iacute;sticos e inferencia estad&iacute;stica en R</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>III.1 Distribuciones de probabilidad<ul>
                            <li>Distribuci&oacute;n binomial</li>
                            <li>Distribuci&oacute;n de Poisson</li>
                            <li>Distribuci&oacute;n Normal</li>
                            <li>Otras distribuciones</li>
                        </ul>
                    </li>
                    <li>III.2Inferencia estad&iacute;stica<ul>
                            <li>Resumen de estad&iacute;sticas</li>
                            <li>Correlaci&oacute;n y varianza</li>
                            <li>Prueba de Chi cuadrada</li>
                            <li>Prueba de t</li>
                            <li>Prueba de F</li>
                            <li>ANOVA</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <a class="formato-link mt-6" target="_blank" href="../../cursos/IntroduccionaLosCoralesFosiles/TEMARIOEXTENDIDO_IntroALosCoralesFosiles_1raEd.pdf">
        Temario extendido
    </a>
</section><!-- TERMINA LA SECCIÓN DEL TEMARIO -->


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
                            <h4>Datos bancarios para depósito en sucursal, practicajas, transferencia bancaria:</h4>

                            <p>Banco: CitiBanamex<br>Beneficiario: Fundación UNAM, A.C.<br>Sucursal: 870<br>
                                Cuenta: 572529<br>Clabe: 00 21 80 08 70 05 72 52 92<br>Referencia: 829.411.100</p>

                            <p>En caso de que desees efectuarlo con tarjeta de crédito y/o débito deberás acudir a las
                                oficinas de Fundación UNAM en horario de lunes a jueves de 9:30 a 17:30 y viernes de
                                9:30 a 14:30, ubicada en Calle Pennsylvania 203, Col. Nápoles, Alcaldía Benito Juárez,
                                C.P. 03810.</p>

                            <p>También puedes efectuarlo vía telefónica al call center 55 53 400 904 o al teléfono 55
                                4575 1879</p>


                        </div>
                    </div>
                </div>
                <!--End content-->
            </div>
        </div>
        <p class="advertencia"><i class="uil uil-exclamation-circle"></i>Comunidad UNAM: En caso de formar parte de la
            Comunidad UNAM (alumnos, exalumnos, académicos, personal administrativo), deberás presentar una
            identificación que te acredite como tal.</p>
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
                        <p class="text-slate-400 dark:text-gray-400"><span class="font-semibold">Secretaría de Educación Abierta y Continua,
                                Facultad de Ciencias, UNAM.</span><br>
                            Sitio web: <a class="text-cyan-600 underline" href="http://www.educontinua.fciencias.unam.mx" target="_blank">www.educontinua.fciencias.unam.mx</a><br>
                            Edificio Tlahuizcalpan, 1er piso (saliendo del elevador a la izquierda).<br>
                            Teléfono: 56 66 47 89 y 56 22 53 86<br>
                            Correo electrónico: educontinua.of@ciencias.unam.mx</p>
                        <p class="text-slate-400 dark:text-gray-400 mt-4"><span class="font-semibold">Fundación UNAM</span><br>
                            Sitio web:<a class="text-cyan-600 underline" href="https://www.fundacionunam.org.mx/" target="_blank"> www.fundacionunam.org.mx/educacion-continua</a>
                            Correo electrónico: cursosydiplomados@funam.mx
                            Correo electrónico: educacioncontinua@ciencias.unam.mx
                            WhatsApp: 55-4575-1879
                        </p>
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