<?php
include '../../includes/templates/header.php';
?>

<?php

$titulo_curso = "Introducción a los Corales Fósiles (Jurásico-Paleógeno)";
$imagen_curso = "../../assets/images/cursos/bg-FaunaSilvestre.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "1ra. Edición";
$fecha = "Del 19 al 23 de junio de 2023";
$precio_unam = "500"; //No es necesario poner mxn
$precio_general = "800"; //No es necesario poner mxn
$dias = "Lunes a Viernes";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "De 10 a 13 y de 15 a 17 hrs (5 horas en cada sesión)"; //No es necesario poner hrs
$no_horas = "25"; //No es necesario poner hrs
$modalidad = "Presencial";
$max_alumnos = "25"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "Los corales son un grupo de cnidarios caracterizados por presentar un hábito de vida sésil bentónico, una alimentación por filtración y son característicos de ambientes marinos de baja profundidad, donde normalmente, se encuentran en simbiosis con algas zooxantheladas que les aportan nutrientes, debido a su capacidad fotosintética. Por otro lado, las algas reciben protección contra las condiciones difíciles del medio, de parte de estos.
En especial, el orden de los corales post-paleozóicos (Scleractinia) aparece desde el Triásico medio hasta la actualidad. En el registro fósil, el orden está en rocas de aguas someras de manera abundante. En México existen ricos depósitos de estos fósiles desde el límite Triásico/Jurásico hasta el Neógeno. Debido al complicado proceso de preparación del material, su morfología compleja y la riqueza de taxones, muy poca gente trabaja con este grupo. Pero los corales fósiles pueden ofrecer mucha información sobre el clima y otros aspectos ambientales del pasado y ayudar a entender procesos actuales del calentamiento global.
El curso da una introducción al orden Scleractinia y consiste principalmente en dos partes: en 15 horas se habla de la morfología, sistemática, historia de la investigación, y los métodos para tratar estos fósiles.
En 10 horas, cada alumno va a tratar una muestra de coral fósil desde la preparación en el taller hasta la determinación taxonómica. Así aprenderán los alumnos las técnicas para trabajar con este grupo.";
$objetivo = "Introducir al alumno en el estudio de los corales fósiles post-paleozoicos, a través del estudio de aspectos morfológicos, de su clasificación y taxonomía, de su preparación en el laboratorio e interpretación de su biología.";
$dirigido_a = "Alumnos de licenciatura (Biología y Geología) a partir del sexto semestre. Estudiantes de la maestría y del doctorado, y maestros.";
$requisitos = "El curso requiere conocimientos básicos de conceptos de paleontología, principalmente de paleo-ambientes y de estratigrafía. Los participantes deberán tener conocimientos de los diferentes niveles taxonómicos (qué es una especie, qué es un género), y conocimientos básicos en zoología, así como sistemática y evolución. Se recomienda que los estudiantes de licenciatura (biología, geología) al menos hayan cursado el 6to. semestre de sus carreras.";
$lugar = "Taller de Paleobiología, Facultad de Ciencias, UNAM"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/FQULscTpSsuGPRau5"; //Pegar el formato de inscripcion
$info_academica = "Dr. Hannes Loeser<br>
Correo electrónico: loeser@paleotax.de<br>Dr. Rafael Villanueva Olea<br>
Correo electrónico: rafael.villa@ciencias.unam.mx" //Agregar el Nombre <br> correo, dando un br para saltar de linea.
?>

<!-- Se debe modificar la parte de los profes que viene abajo. -->
<!-- La parte más pesada es agregar el temario. Se puede usar ese o una tabla como la que normalmente creas, ya agregue estilos para que se adapten, ver ejemplo de primeros auxilios.-->
<!-- Start Hero -->
<section class="portada">
    <img src="../../assets/images/cursos/Introduccion-a-los-Corales-Fosiles.webp" alt="">
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
            <!-- Datos de Profe -->
            <div class="profesor">
                <div>
                    <img src="../../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../../assets/curriculums_docentes/HannesLoser.pdf" target="_blank">Dr. Hannes Loeser, UNAM/IGL</a>
                </div>
            </div>
            <!-- Fin de datos de profe -->
            <!-- Datos de Profe -->
            <div class="profesor">
                <div>
                    <img src="../../assets/images/instructores/usr-m.jpg" alt="">
                </div>
                <div>
                    <a href="../../assets/curriculums_docentes/RafaelVillanuevaOlea.pdf" target="_blank">Dr. Rafael Villanueva Olea, UNAM</a>
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
        <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="curso-costo-g">
                <h3>Público GENERAL</h3>

                <!-- PRECIO GENERAL-->
                <div>
                    <span>$</span>
                    <span><?php echo $precio_general ?></span>
                    <span>MXN</span>
                </div>
                <!-- FIN-PRECIO GENERAL -->

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
                <th> &nbsp; </th>
                <th>

                    10-11:30h / 11:45-13:00h
                    <br>
                    Teoría
                </th>
                <th>

                    15:00-17:00h
                    <br>
                    Práctica
                </th>
            </tr>
            <tr>
                <td>

                    Lunes <br>
                    19 de Junio
                </td>
                <td>

                    Introducción <br>
                    Intención del curso <br>
                    Aspectos históricos <br>
                    Sistemática y clasificación <br>
                </td>
                <td>

                    Equipo de laboratorio <br>
                    Examinación de muestras con el microscopio
                </td>
            </tr>
            <tr>
                <td>


                    Martes <br>
                    20 de Junio
                </td>
                <td>

                    Morfología (observación de láminas delgadas con corales)
                </td>
                <td>

                    Preparación de las muestras: <br>
                    Cortes orientados y superficies pulidas <br>
                    Examinar las muestras con el microscopio
                </td>
            </tr>
            <tr>
                <td>


                    Miércoles <br>
                    21 de Junio
                </td>
                <td>

                    Métodos <br>
                    (programas de computación para medir, tratar imágenes, preparar láminas)
                </td>
                <td>

                    Preparación de acetatos <br>
                    Pegar muestras para láminas delgadas <br>
                    Examinar los acetatos con el microscopio
                </td>
            </tr>
            <tr>
                <td>

                    Jueves <br>
                    22 de Junio
                </td>
                <td>

                    Taxonomía <br>
                    (observación de láminas delgadas)
                </td>
                <td>

                    Preparación de láminas delgadas <br>
                    Examinar las láminas con el microscopio
                </td>
            </tr>
            <tr>
                <td>

                    Viernes <br>
                    23 de Junio
                </td>
                <td>

                    Paleoecología <br>
                    Paleobiogeografía <br>
                    Los materiales del curso
                </td>
                <td>

                    Determinación de las muestras hasta el nivel de género
                </td>
            </tr>
        </tbody>
    </table>
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
include '../../includes/templates/footer.php';
?>