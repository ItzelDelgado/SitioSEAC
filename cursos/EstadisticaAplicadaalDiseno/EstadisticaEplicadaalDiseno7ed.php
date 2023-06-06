<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Estadística Aplicada al Diseño y Análisis de Estudios Experimentales";
$imagen_curso = "../../../assets/images/cursos/bg-estadica-aplicada-diseño-est-exp.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "7a. Edición";
$fecha = "Del 4 de marzo al 27 de mayo del 2023";
$precio_unam = "4,800"; //No es necesario poner mxn
$precio_general = "5,800"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$dias = "Sabados (8 de abril no hay clase)"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "8:00 a 12:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "48"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "35"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "El diseño de experimentos es una rama de la estadística que se encarga de la planeación, y análisis estadístico de datos que son obtenidos como resultados en investigaciones científicas. De ahí que resulten una herramienta fundamental e indispensable en el quehacer científico. Contrario a lo que muchos investigadores piensan, la estadística no constituye la última etapa de una investigación, sino que toma un papel fundamental desde la planeación de la misma. El diseño de un experimento está en función de los objetivos a los cuales se desee llegar en una investigación. Dicho diseño deberá considerar todas las condiciones que se tengan presentes en cada realidad, para así poder determinar cuántos factores deben ser tomados en cuenta, los cuales pueden ser incluso más de los meros factores de interés, las variantes de los mismos que serán analizadas, y las combinaciones de éstas, dichas combinaciones, constituirán los tratamientos a analizar. El diseño experimental determina además la manera en que se asignan estos tratamientos a las unidades de estudio, o bien unidades experimentales. A cada diseño le corresponde un modelo y éste a su vez determina el análisis estadístico a efectuar. Los resultados de este análisis deberán dar respuesta a los objetivos de la investigación planteados desde un inicio. Es así como todas las etapas de una investigación están relacionadas, todas ellas son importantes para determinar la validez que pueda tener una investigación y sin que una de ellas se pueda desvincular de las demás.
A pesar de la gran importancia que tiene esta área de la estadística para las disciplinas científicas la mayoría de los planes de estudio de las diferentes licenciaturas dirigidas a la investigación científica, no cuentan con asignaturas en sus planes de estudio que proporcionen a los alumnos una sólida formación en esta área. Una limitante importante quizá sea la base matemática de cierto grado de complejidad, sobre la que se fundamentan y construyen dichos modelos experimentales, existiendo al parecer una desvinculación entre las disciplinas de formación en el área de las matemáticas con las áreas experimentales. No obstante una vez que la metodología estadística ha sido construida, basta conocer los fundamentos teóricos generales de ésta y la manera de interpretar los resultados, para poder convertirse en un usuario de la misma y así poder dar respuesta a un problema de la realidad que en determinado momento requiramos resolver.
Es por eso que este curso está dirigido a profesionistas y estudiantes que trabajen en el área de investigación científica, con especial énfasis en ciencias experimentales, con el objetivo de capacitarles en los aspectos generales de las metodologías estadísticas, que les permita hacer un uso adecuado de las mismas al momento de diseñar los estudios que vayan realizando y poder analizar la información procedente de los mismos, así como su interpretación.";
$objetivo = "Conocer los diferentes tipos de diseños experimentales utilizados más comúnmente en la realización de experimentos, así como su análisis estadístico.";
$dirigido_a = "Profesionistas y estudiantes en el área de ciencias experimentales y de investigación.";
$requisitos = "Conocimiento básico de conceptos de estadística. Laptop y memoria USB.";
$lugar = "Meet y Classroom"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$info_academica = "Dra. María de Lourdes Barbosa Saldaña<br> Correo electrónico: lulubs_12@yahoo.com.mx"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(
    array("Dra. María de Lourdes Barbosa", "../../assets/curriculums_docentes/MaLourdesBarbosaSal.pdf"),
    array("Biol. María Guadalupe Camacho", "../../assets/curriculums_docentes/MaGuadalupeCamachoSan.pdf")
)
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
            <h3>I. Introducci&oacute;n al lenguaje R</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>1.1 presentaci&oacute;n del curso</li>
                    <li>1.2 Instalaci&oacute;n de los programas R y Statistic</li>
                    <li>1.3 Sintaxis b&aacute;sica de lenguaje R (estad&iacute;stica descriptiva)</li>
                    <li>1.4 Manejo de archivos en Statistic (estad&iacute;stica descriptiva)</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>II. Pruebas de Hip&oacute;tesis</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>II.1 Introducci&oacute;n a las pruebas de hip&oacute;tesis.</li>
                    <li>II.2 Error tipo I y Error II</li>
                    <li>II.3 Hip&oacute;tesis estad&iacute;sticas</li>
                    <li>II.4 Pruebas de hip&oacute;tesis de un y dos colas</li>
                    <li>II.5 Pruebas de hip&oacute;tesis para una media</li>
                    <li>II.6 Prueba de hip&oacute;tesis para la diferencia entre dos medias de poblaciones
                        independientes y no independientes.</li>
                    <li>II.7 Prueba de hip&oacute;tesis par un cociente de dos varianzas.</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>III. Planeaci&oacute;n en el dise&ntilde;o de experimentos</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>3.1 Experimentos, principios b&aacute;sicos</li>
                    <li>3.2 Lineamientos generales en la planeaci&oacute;n de experimentos</li>
                    <li>3.3 Conceptos de validez interna y validez externa</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>IV. Modelo de ANOVA con un solo factor</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>4.1 Modelo de An&aacute;lisis de varianza de un criterio de clasificaci&oacute;n
                        <ul>
                            <li>4.1.1 An&aacute;lisis de varianza</li>
                            <li>4.1.2 Pruebas de hip&oacute;tesis</li>
                            <li>4.1.3 Pruebas de comparaci&oacute;n m&uacute;ltiples</li>
                            <li>4.1.4 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                    <li>4.2 Sesi&oacute;n pr&aacute;ctica</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>V. Modelos de bloques al azar</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>5.1 Dise&ntilde;o de bloques al azar
                        <ul>
                            <li>5.1.1 An&aacute;lisis de varianza</li>
                            <li>5.1.2 Pruebas de hip&oacute;tesis</li>
                            <li>5.1.3 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VI. Experimentos con 2 o m&aacute;s factores sin interacci&oacute;n</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>6.1 Dise&ntilde;o cuadro latino
                        <ul>
                            <li>6.1.1 An&aacute;lisis de varianza</li>
                            <li>6.1.2 Pruebas de hip&oacute;tesis</li>
                            <li>6.1.3 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                    <li>6.2 Dise&ntilde;o grecolatino
                        <ul>
                            <li>6.2.1 An&aacute;lisis de varianza</li>
                            <li>6.2.2 Pruebas de hip&oacute;tesis</li>
                            <li>6.2.3 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                    <li>6.3 Experimentos con factores de bloque.</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VII. Experimentos con 2 o m&aacute;s factores con interacci&oacute;n para factores fijos</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>7.1 Dise&ntilde;o factorial con 2 factores
                        <ul>
                            <li>7.1.1 Modelo estad&iacute;stico</li>
                            <li>7.1.2 Concepto de interacci&oacute;n</li>
                            <li>7.1.3An&aacute;lisis de varianza</li>
                            <li>7.1.4 Pruebas de hip&oacute;tesis</li>
                            <li>7.1.5 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                    <li>7.2. Dise&ntilde;o Factorial con 3 factores
                        <ul>
                            <li>7.2.1 Modelo estad&iacute;stico</li>
                            <li>7.2.2 Interacci&oacute;n de segundo orden</li>
                            <li>7.2.3 An&aacute;lisis de varianza</li>
                            <li>7.2.4 Pruebas de hip&oacute;tesis</li>
                            <li>7.2.5 Verificaci&oacute;n de supuestos</li>
                            <li>7.2.6. Ejemplo</li>
                        </ul>
                    </li>
                    <li>7.3 Experimentos con 2 o m&aacute;s factores con interacci&oacute;n para factores fijos</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VIII. Modelos con uno o m&aacute;s factores aleatorios</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>8.1 Modelos de efectos aleatorios
                        <ul>
                            <li>8.1.1 Definici&oacute;n</li>
                            <li>8.1.2 An&aacute;lisis de varianza</li>
                            <li>8.1.3 Componente de varianza</li>
                            <li>8.1.4 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>IX. Experimentos con factores fijos y factores aleatorios</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>9.1 Modelos de efectos mixtos
                        <ul>
                            <li>9.1.1 An&aacute;lisis de varianza</li>
                            <li>9.1.2 Pruebas de hip&oacute;tesis</li>
                            <li>9.1.3 Componente de varianza</li>
                            <li>9.1.4 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                    <li>9.2 Experimentos de efectos mixtos</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>X. Modelos de efectos anidados</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>10.1 Modelo de efectos anidados
                        <ul>
                            <li>10.1.1 An&aacute;lisis de varianza</li>
                            <li>10.1.2 Pruebas de hip&oacute;tesis</li>
                            <li>10.1.3 Componente de varianza</li>
                            <li>10.1.4 Verificaci&oacute;n de supuestos</li>
                        </ul>
                    </li>
                    <li>10.2 Modelos de efectos anidados</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>XI. MANOVA y Mediciones repetidas</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>11.1 Conceptos generales de MANOVA
                        <ul>
                            <li>11.1.2 Pruebas de hip&oacute;tesis</li>
                            <li>11.1.3 Supuestos del modelo</li>
                        </ul>
                    </li>
                    <li>11.2 Modelo de mediciones repetidas
                        <ul>
                            <li>11.2.1 Comparaci&oacute;n con el modelo de MANOVA</li>
                            <li>11.2.2 Pruebas de hip&oacute;tesis.</li>
                            <li>11.2.3 Supuestos del modelo</li>
                        </ul>
                    </li>
                    <li>11.3 MANOVA y Mediciones repetidas</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>XII. Regresi&oacute;n lineal simple</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>12.1 Modelo de regresi&oacute;n lineal simple.
                        <ul>
                            <li>12.1.1 Pruebas de hip&oacute;tesis de par&aacute;metros del modelo</li>
                            <li>12.1.2 ANOVA del modelo de regresi&oacute;n y pruebas de hip&oacute;tesis del modelo
                            </li>
                            <li>12.1.3 Supuestos del modelo.</li>
                        </ul>
                    </li>
                    <li>12.2 Regresi&oacute;n lineal simple</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>XIII. ANCOVA</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>13.1 Modelo de ANCOVA
                        <ul>
                            <li>13.1.2 An&aacute;lisis de varianza de un ANCOVA</li>
                            <li>13.1.3 Pruebas de hip&oacute;tesis en un ANCOVA.</li>
                            <li>13.1.4. Supuestos del modelo de ANCOVA</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <!-- <a class="formato-link mt-6" href="assets/pdf/formatos/FormatoPresentacionCursoo.docx"
            download="Documento-con-descripcion">
            Temario extendido
        </a> -->
</section><!-- TERMINA LA SECCIÓN DEL TEMARIO -->


<!-- Start -->
<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2 class="md:text-3xl md:leading-normal">Inscripción</h2>
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
                            <h4>Solicita el formato de preregistro a:</h4>
                            <p><a href="mailto:cursosydiplomados@funam.mx" target="_blank"
                                    class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">cursosydiplomados@funam.mx</a>
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
                        <p class="text-slate-400 dark:text-gray-400"><span class="font-semibold">Secretaría de Educación
                                Abierta y Continua,
                                Facultad de Ciencias, UNAM.</span><br>
                            Sitio web: <a class="text-cyan-600 underline"
                                href="http://www.educontinua.fciencias.unam.mx"
                                target="_blank">www.educontinua.fciencias.unam.mx</a><br>
                            Edificio Tlahuizcalpan, 1er piso (saliendo del elevador a la izquierda).<br>
                            Teléfono: 56 66 47 89 y 56 22 53 86<br>
                            Correo electrónico: educontinua.of@ciencias.unam.mx</p>
                        <p class="text-slate-400 dark:text-gray-400 mt-4"><span class="font-semibold">Fundación
                                UNAM</span><br>
                            Sitio web:<a class="text-cyan-600 underline" href="https://www.fundacionunam.org.mx/"
                                target="_blank"> www.fundacionunam.org.mx/educacion-continua</a>
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