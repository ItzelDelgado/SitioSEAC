<?php
include '../includes/templates/header.php';
?>

<?php

$titulo_curso = "Estadística aplicada al diseño y análisis de estudios experimentales";
$imagen_curso = "../../assets/images/cursos/bg-estadica-aplicada-diseño-est-exp.webp";
$edicion = "7ma. Edición";
$fecha = "Del 4 de marzo al 27 de mayo del 2023";
$precio_unam = "4,800";
$precio_general = "5,800";
$dias = "Sábado";
$horario = "8:00 a 12:00";
$no_horas = "48";
$modalidad = "Virtual";
$max_alumnos = "35";
$min_alumnos = "15";
$descripcion = "El diseño de experimentos es una rama de la estadística que se encarga de la planeación, y análisis estadístico de datos que son obtenidos como resultados en investigaciones científicas. De ahí que resulten una herramienta fundamental e indispensable en el quehacer científico. Contrario a lo que muchos investigadores piensan, la estadística no constituye la última etapa de una investigación, sino que toma un papel fundamental desde la planeación de la misma. El diseño de un experimento está en función de los objetivos a los cuales se desee llegar en una investigación. Dicho diseño deberá considerar todas las condiciones que se tengan presentes en cada realidad, para así poder determinar cuántos factores deben ser tomados en cuenta, los cuales pueden ser incluso más de los meros factores de interés, las variantes de los mismos que serán analizadas, y las combinaciones de éstas, dichas combinaciones, constituirán los tratamientos a analizar. El diseño experimental determina además la manera en que se asignan estos tratamientos a las unidades de estudio, o bien unidades experimentales. A cada diseño le corresponde un modelo y éste a su vez determina el análisis estadístico a efectuar. Los resultados de este análisis deberán dar respuesta a los objetivos de la investigación planteados desde un inicio. Es así como todas las etapas de una investigación están relacionadas, todas ellas son importantes para determinar la validez que pueda tener una investigación y sin que una de ellas se pueda desvincular de las demás. A pesar de la gran importancia que tiene esta área de la estadística para las disciplinas científicas la mayoría de los planes de estudio de las diferentes licenciaturas dirigidas a la investigación científica, no cuentan con asignaturas en sus planes de estudio que proporcionen a los alumnos una sólida formación en esta área. Una limitante importante quizá sea la base matemática de cierto grado de complejidad, sobre la que se fundamentan y construyen dichos modelos experimentales, existiendo al parecer una desvinculación entre las disciplinas de formación en el área de las matemáticas con las áreas experimentales. No obstante una vez que la metodología estadística ha sido construida, basta conocer los fundamentos teóricos generales de ésta y la manera de interpretar los resultados, para poder convertirse en un usuario de la misma y así poder dar respuesta a un problema de la realidad que en determinado momento requiramos resolver. Es por eso que este curso está dirigido a profesionistas y estudiantes que trabajen en el área de investigación científica, con especial énfasis en ciencias experimentales, con el objetivo de capacitarles en los aspectos generales de las metodologías estadísticas, que les permita hacer un uso adecuado de las mismas al momento de diseñar los estudios que vayan realizando y poder analizar la información procedente de los mismos, así como su interpretación.";
$objetivo = "Conocer los diferentes tipos de diseños experimentales utilizados más comúnmente en la realización de experimentos, así como su análisis estadístico.";
$dirigido_a = "Profesionistas y estudiantes en el área de ciencias experimentales y de investigación.";
$requisitos = "Estudiantes y profesionales de las áreas químico biológicas y afines.";
$lugar = "Vía Meet y Classroom";
$info_academica = "Dra. María de Lourdes Barbosa Saldaña o <br> Biol. María Guadalupe Camacho Sánchez"
?>

<!-- Start Hero -->
<section class="portada">
    <img src="../../assets/images/cursos/bg-estadica-aplicada-diseño-est-exp.webp" alt="">
    <div class="portada-opacity"></div>
    <div class="container">
        <div class="portada-informacion">
            <span class="portada-informacion-pu">$<?php echo $precio_unam ?> /
                UNAM</span>
            <span class="portada-informacion-pg">$<?php echo $precio_general ?> /
                GENERAL</span>
            <h1><?php echo $titulo_curso ?></h1>
            <p class="text-indigo-600"><?php echo $edicion ?></p>
            <div class="profesor">
                <div>
                    <img src="../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../assets/curriculums_docentes/MaLourdesBarbosaSal.pdf" target="_blank">Dra. María de Lourdes Barbosa Saldaña</a>
                </div>
            </div>
            <div class="profesor">
                <div>
                    <img src="../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../assets/curriculums_docentes/MaGuadalupeCamachoSan.pdf" target="_blank">Biol. María Guadalupe Camacho Sánchez</a>
                </div>
            </div>

            <div class="fecha">
                <i class="uil uil-calendar-alt"></i>
                <span><?php echo $fecha ?></span>
            </div>

        </div>
    </div>

    <div class="datos">
        <ul>
            <!-- <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index-course.php">Techwind</a></li>
                   <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="course-listing.php">Courses</a></li>
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Web Development</li> -->

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

        <p></p>

        <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="curso-costo-g">
                <h3>Público GENERAL</h3>

                <div class="flex mb-5">
                    <span>$</span>
                    <span><?php echo $precio_general ?></span>
                    <span>MXN</span>
                </div>


                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>


            <div class="curso-costo-g">
                <h3>Comunidad UNAM</h3>

                <div class="flex mb-5">
                    <span>$</span>
                    <span><?php echo $precio_unam ?></span>
                    <span>MXN</span>
                </div>

                <ul>
                    <li><i class="uil uil-check-circle"></i>Alumnos, exalumnos, personal y tesistas de la UNAM. Aplica también afiliados a Fundación UNAM</li>
                    <li><i class="uil uil-check-circle"></i>También aplica
                        para afiliados a Fundación UNAM</li>

                    <li><i class="uil uil-exclamation-circle"></i>Toda vez que este es un programa académico administrado por Fundación UNAM, AC no se acepta ningún tipo de beca AAPAUNAM o STUNAM.</li>
                </ul>

                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>
        </div>
    </div>





</section>




<section class="temario md:py-24 container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <div>
            <h3>I. INTRODUCCIÓN A LENGUAJE R</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> I.1
                                Presentación del curso</td>

                        </tr>

                        <tr>
                            <td>I.2. Instalación de los programas R y Statistic</td>

                        </tr>

                        <tr>
                            <td>I.3.
                                Sintaxis básica de lenguaje R (estadística descriptiva)</td>

                        </tr>

                        <tr>
                            <td>I.4.
                                Manejo de archivos en Statistic (estadística descriptiva)</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>II. Pruebas de Hipótesis
                </h5>

                <div class="contenido">
                    <table>
                        <thead>
                            <tr>
                                <th>Temas</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td> II.1 Introducción a las pruebas de hipótesis
                                </td>

                            </tr>

                            <tr>
                                <td>II.2 Error tipo I y Error II
                                </td>

                            </tr>


                            <tr>
                                <td>II.3 Hipótesis estadísticas
                                </td>

                            </tr>

                            <tr>
                                <td>II.4 Pruebas de hipótesis de un y dos colas
                                </td>

                            </tr>
                            <tr>
                                <td>II.5 Pruebas de hipótesis para una media
                                </td>

                            </tr>
                            <tr>
                                <td>II.6 Prueba de hipótesis para la diferencia entre dos medias de poblaciones independientes y no independientes
                                </td>

                            </tr>
                            <tr>
                                <td><a class="">II.7 Prueba de hipótesis par un cociente de dos varianzas
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>

        <div>
            <h3>III. Planeación en el diseño de experimentos</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>III.1.
                                Experimentos, principios básicos
                            </td>

                        </tr>

                        <tr>
                            <td>III.2.
                                Lineamientos generales en la planeación de experimentos
                            </td>

                        </tr>

                        <tr>
                            <td>III.3.
                                Conceptos de validez interna y validez externa
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div>
            <h3>IV. Modelo de ANOVA con un solo factor, para efectos fijos</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>IV.1.
                                Modelo de Análisis de varianza de un criterio de clasificación
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza</li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Pruebas de comparación múltiples</li>
                                    <li>Verificación de supuestos</li>
                                </ul>
                            </td>

                        </tr>

                        <tr>
                            <td>IV.2.
                                Modelo de ANOVA con un solo factor
                                <ul class="p-6 list-disc ">
                                    <li>Sesión práctica</li>
                                </ul>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>V. Modelo de ANOVA con un solo factor, para efectos fijos</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>V.1.
                                Diseño de bloques al azar
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza</li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Verificación de supuestos</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>VI. Experimentos con 2 o más factores sin interacción</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>VI.1.
                                Diseño cuadro latino
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza</li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Verificación de supuestos </li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>VI.2.
                                Diseño grecolatino
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza</li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Verificación de supuestos </li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>VI.3.
                                Experimentos con factores de bloque
                                <ul class="p-6 list-disc ">
                                    <li>Sesión práctica</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>VII. Experimentos con 2 o más factores con interacción para factores fijos</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>VII.1.
                                Diseño factorial con 2 factores
                                <ul class="p-6 list-disc ">
                                    <li>Modelo estadístico</li>
                                    <li>Concepto de interacción</li>
                                    <li>Análisis de varianza </li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Verificación de supuestos </li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>VII.2.
                                Diseño Factorial con 3 factores
                                <ul class="p-6 list-disc ">
                                    <li>Modelo estadístico</li>
                                    <li>Interacción de segundo orden</li>
                                    <li>Análisis de varianza </li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Verificación de supuestos</li>
                                    <li>Ejemplo </li>
                                </ul>
                            </td>

                        </tr>

                        <tr>
                            <td>VII.3.
                                Modelos factoriales
                                <ul class="p-6 list-disc ">
                                    <li>Sesión práctica</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>VIII. Modelos con uno o más factores aleatorios</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>VIII.1.
                                Modelos de efectos aleatorios
                                <ul class="p-6 list-disc ">
                                    <li>Definición</li>
                                    <li>Análisis de varianza</li>
                                    <li>Componente de varianza </li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Verificación de supuestos</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>IX. Experimentos con factores fijos y factores aleatorios</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>IX.1.
                                Modelos de efectos mixtos
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza</li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Componente de varianza</li>
                                    <li>Verificación de supuestos</li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>IX.2.
                                Experimentos de efectos mixtos
                                <ul class="p-6 list-disc ">
                                    <li>Sesión práctica</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>X. Modelos de efectos anidados</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>X.1.
                                Modelo de efectos anidados
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza</li>
                                    <li>Pruebas de hipótesis</li>
                                    <li>Componente de varianza</li>
                                    <li>Verificación de supuestos</li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>X.2.
                                Sesión práctica
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>XI. MANOVA y Mediciones repetidas</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>XI.1.
                                Conceptos generales de MANOVA
                                <ul class="p-6 list-disc ">
                                    <li>Pruebas de hipótesis</li>
                                    <li>Supuestos del modelo</li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>XI.2.
                                Modelo de mediciones repetidas
                                <ul class="p-6 list-disc ">
                                    <li>Pruebas de hipótesis</li>
                                    <li>Supuestos del modelo</li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>XI.3.
                                Sesión práctica
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>XII. Regresión lineal simple</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>XII.1.
                                Modelo de regresión lineal simple
                                <ul class="p-6 list-disc ">
                                    <li>Pruebas de hipótesis de parámetros del modelo</li>
                                    <li>ANOVA del modelo de regresión y pruebas de hipótesis del modelo</li>
                                    <li>Supuestos del modelo</li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <td>XII.2.
                                Sesión práctica
                                <ul class="p-6 list-disc ">
                                    <li>Pruebas de hipótesis</li>
                                    <li>Supuestos del modelo</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>XIII. ANCOVA</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>XIII.1.
                                Modelo de ANCOVA
                                <ul class="p-6 list-disc ">
                                    <li>Análisis de varianza de un ANCOVA</li>
                                    <li>Pruebas de hipótesis en un ANCOVA</li>
                                    <li>Supuestos del modelo de ANCOVA</li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>




<!-- Start -->
<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2 class="md:text-3xl md:leading-normal">Inscripción</h2>
            <p>.</p>
        </div>

        <div class="pasos">
            <div class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                <!--Start content-->
                <div class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="paso-n grid md:grid-cols-2">
                        <h3 class="md:text-right md:mr-8">Paso 1</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Solicita el formato de preregistro a:</h4>
                            <p><a href="mailto:cursosydiplomados@funam.mx" target="_blank" class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">cursosydiplomados@funam.mx</a></p>
                        </div>
                    </div>

                    <div class="paso-n grid md:grid-cols-2 mt-10">
                        <h3 class="md:text-right md:mr-8">Paso 2</h3>

                        <div class="md:ml-8 md:mt-0">
                            <h4>Datos bancarios para depósito en sucursal, practicajas, transferencia bancaria:</h4>
                            <p>Banco: CitiBanamex<br>Beneficiario: Fundación UNAM, A.C.<br>Sucursal: 870<br>
                                Cuenta: 572529<br>Clabe: 00 21 80 08 70 05 72 52 92<br>Referencia: 829.411.100</p>

                            <p>En caso de que desees efectuarlo con tarjeta de crédito y/o débito deberás acudir a las oficinas de Fundación UNAM en horario de lunes a jueves de 9:30 a 17:30 y viernes de 9:30 a 14:30, ubicada en Calle Pennsylvania 203, Col. Nápoles, Alcaldía Benito Juárez, C.P. 03810.</p>

                            <p>También puedes efectuarlo vía telefónica al call center 55 53 400 904 o al teléfono 55 4575 1879</p>


                        </div>
                    </div>
                </div>
                <!--End content-->
            </div>
        </div>
        <p class="advertencia"><i class="uil uil-exclamation-circle"></i>Comunidad UNAM: En caso de formar parte de la Comunidad UNAM (alumnos, exalumnos, académicos, personal administrativo), deberás presentar una identificación que te acredite como tal.</p>
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