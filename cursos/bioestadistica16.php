<?php
include '../includes/templates/header.php';
?>

<?php

$titulo_curso = "Bioestadística";
$imagen_curso = "../../assets/images/cursos/bg-bioestadistica.webp";
$edicion = "16a. Edición";
$fecha = "Del 3 de marzo al 28 de abril de 2023";
$precio_unam = "5,000";
$precio_general = "6,000";
$dias = "Lunes Jueves";
$horario = "17:00 a 20:00";
$no_horas = "50";
$modalidad = "Vía Meet y Moodle";
$max_alumnos = "30";
$min_alumnos = "15";
$descripcion = "Este curso fue diseñado para aportar bases teóricas y prácticas necesarios para el proceso de la información, el curso está montado en la plataforma educativa Moodle, la cual permite la interacción profesor-alumno, alumno-alumno, contar con los contenidos en diferentes formatos, textos, imágenes, videos, tutoriales, ejercicios necesarios y complementarios para el curso A través de esta interfase el asistente puede tomar las lecciones en línea, realizar las actividades (tareas y ejercicios evaluaciones), contar con retroalimentación, también la plataforma a través de diferentes herramientas permite la discusión y aportaciones de los asistentes y con ellos tener un aprendizaje colaborativo. Las lecciones están apoyadas con software educativo, propio y libre que brinda elementos teóricos y prácticos, del proceso de información. En las sesiones sincrónicas se revisan los temas de mayor complejidad y se hace la aclaración de dudas de los contenidos y materiales en línea.";
$objetivo = "La finalidad de este curso es aportar al asistente los conocimientos básicos de la teoría y la práctica necesarios para el adecuado proceso de la información, desde la generación o recolección de los datos, hasta la toma de decisiones a través de la descripción de la información, estimación de parámetros, y la adecuada aplicación de las pruebas de hipótesis.";
$dirigido_a = "Estudiantes, profesionales del área químico-biológica, de la salud y áreas a fines (este curso, está dirigido básicamente a médicos, biólogos, enfermeros, psicólogos, trabajadores sociales).";
$requisitos = "Licenciatura (mínimo 60% de créditos).";
$lugar = "Meet <br> Moodle <br> Abierto las 24horas";
$formato_inscripcion = "https://forms.gle/yA4Vr2xaF2QGzHf88";
$info_academica="M. en C. Jorge A. Moreno Hernández <br> Correo electrónico: jmh@ciencias.unam.mx"
?>


<!-- =========== PORTADA PRINCIPAL ========== -->

<section class="portada">
    <img src="../../assets/images/cursos/bg-bioestadistica.webp" alt="">
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
                    <a href="../assets/curriculums_docentes/JorgeAMorenoHern.pdf" target="_blank">M. en C. Jorge A. Moreno Hernández</a>
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
</section>

<!-- =========== FONDO OSCURO DE PORTADA PRINCIPAL ========== -->

<div class="relative">
    <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<!-- =========== DESCRIPCION DEL CURSO  ========== -->

<section class="oferta-academica md:py-20">
    <div class="container">
        <h2>Descripción</h2>
        <p><?php echo $descripcion ?></p>
        <h2>Objetivo</h2>
        <p><?php echo $objetivo ?></p>
        <h2>Dirigido a</h2>
        <p><?php echo $dirigido_a ?></p>
        <p class="text-red-600">
            Mín / Máx de alumnos: Mínimo 15, máximo 30.<br>
            La apertura del curso está sujeta al mínimo de inscritos.</p>
    </div>
</section>

<!-- =========== REQUISITOS, HORARIOS Y LUGAR DEL CURSO ========== -->

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
        <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="curso-costo-g">
                <h3>Público GENERAL</h3>
                <div>
                    <span>$</span>
                    <span><?php echo $precio_general ?></span>
                    <span>MXN</span>
                </div>
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

<!-- =========== TEMARIO DEL CURSO ========== -->

<section class="temario md:py-24 container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <div>
            <h3>I. INTRODUCCIÓN A LA ESTADÍSTICA</h3>
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
                                Concepto e importancia de Estadística y Bioestadística.</td>
                        </tr>
                        <tr>
                            <td>I.2. Error,
                                precisión y exactitud. Poblaciones y muestras.</td>
                        </tr>
                        <tr>
                            <td>I.3.
                                Criterios de inclusión, exclusión y eliminación.</td>
                        </tr>
                        <tr>
                            <td>I.4.
                                Conceptos de población y muestra. Parámetros y estadísticos.</td>
                        </tr>
                        <tr>
                            <td> I.5. Tipos
                                de variables y escalas de medición.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>II. ESTADÍSTICA DESCRIPTIVA</h3>
            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> II.1
                                Representaciones gráficas de un conjunto de datos: Diagramas de barras.
                                Pictogramas, Gráficas circulares, Diagrama tallo y hoja. Diagrama de tallo
                                hoja y espejo, Diagrama de caja. Histograma. Polígono de frecuencias.
                                Diagramas x, y
                            </td>
                        </tr>
                        <tr>
                            <td>II.2.
                                Descripción de variables numéricas: Medidas de tendencia central. Medidas de
                                dispersión
                            </td>
                        </tr>
                        <tr>
                            <td>II.3. Regla
                                empírica y teorema de Tchebyshev
                            </td>
                        </tr>
                        <tr>
                            <td>II.4.
                                Descripción de variables categóricas: tasas, razones, proporciones y
                                porcentajes.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>III. PROBABILIDAD</h3>
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
                                Conceptos: Fenómenos deterministas y estocásticos. Espacio muestral,
                                experimentos, eventos </td>
                        </tr>
                        <tr>
                            <td>III.2.
                                Métodos de conteo Combinación y permutaciones </td>
                        </tr>
                        <tr>
                            <td>III.3.
                                Conceptos de probabilidad clásica y frecuentista </td>
                        </tr>
                        <tr>
                            <td>III.4.
                                Leyes de probabilidad: Ley de la adición, Ley del producto </td>
                        </tr>
                        <tr>
                            <td>III.5.
                                Cálculo de probabilidades </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>IV. INFERENCIA ESTADÍSTICA</h3>
            <div class="contenido">
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-5">Temas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i></i>
                                IV.1.
                                Concepto de inferencia estadística </td>
                        </tr>
                        <tr>
                            <td>IV.2.
                                Clasificación de la estadística: según tipo de variable </td>
                        </tr>
                        <tr>
                            <td>IV.3.
                                Clasificación de la estadística: según número de variables </td>
                        </tr>
                        <tr>
                            <td>IV.3.
                                Clasificación de la estadística: según número de variables </td>
                        </tr>
                        <tr>
                            <td>IV.4.
                                Estimación puntual y de intervalo </td>
                        </tr>
                        <tr>
                            <td>IV.5.
                                Intervalos de confianza </td>
                        </tr>
                        <tr>
                            <td>IV.6.
                                Pruebas de hipótesis</td>
                        </tr>
                        <tr>
                            <td>IV.7.
                                Procedimiento para la realización de pruebas de hipótesis </td>
                        </tr>
                        <tr>
                            <td>IV.8.
                                Procedimiento para la realización de pruebas paramétricas </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>V. INTRODUCCIÓN A LOS MODELOS ESTADÍSTICOS LINEALES</h3>
            <div class="contenido">
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-4 py-5">Temas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>V.1.
                                Introducción a los modelos estadísticos lineales </td>
                        </tr>
                        <tr>
                            <td>V.2.
                                Modelos de regresión. Conceptos básicos. Supuestos. Aplicaciones
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- =========== INSCRIPCION DEL CURSO ========== -->

<section class="inscripcion md:py-24" id="inscripcion">
    <div class="container">
        <div class="titulo">
            <h2 class="md:text-3xl md:leading-normal">Inscripción</h2>
            <p>.</p>
        </div>
        <div class="pasos">
            <div class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                <div class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                    <div class="paso-n grid md:grid-cols-2">
                        <h3 class="md:text-right md:mr-8">Paso 1</h3>
                        <div class="md:ml-8 md:mt-0">
                            <h4>Realizar el pago en línea mediante "Plaza
                                Prometeo", la tienda de la Facultad de Ciencias</h4>
                            <p>
                                <a href="https://tienda.fciencias.unam.mx" target="_blank">tienda.fciencias.unam.mx</a>
                            </p>
                        </div>
                    </div>

                    <div class="paso-n grid md:grid-cols-2 mt-10">
                        <h3 class="md:text-right md:mr-8">Paso 2</h3>
                        <div class="md:ml-8 md:mt-0">
                            <h4 class="title mb-1 font-semibold">Registrarse en este formato de inscripción</h4>
                            <p>(únicamente si usted ya hizo el pago)</p>
                            <p>
                                <a href=<?php echo $formato_inscripcion ?> target="_blank">Formato
                                    de inscripción</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="advertencia">
            <i class="uil uil-exclamation-circle"></i>
            En caso de cancelación, procederá la devolución de lo pagado con los criterios administrativos de la Facultad de
            Ciencias.
        </p>
    </div>
</section>

<!-- =========== NECESITAS AYUDA ========== -->

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
                        <p class="text-slate-400 dark:text-gray-400"><?php echo $info_academica?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include '../includes/templates/footer.php';
?>