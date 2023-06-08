<?php
include '../../../includes/templates/header.php';
include '../../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Diplomado en Tecnologías Cuánticas<br>Aprobado como opción de Titulación para la carrera de Física por el Consejo Técnico de la Facultad de Ciencias, UNAM";
$imagen_curso = "../../../assets/images/diplomados/TecnologiasCuanticas.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "1ra. Edición";
$fecha = "Del 7 de agosto del 2023 al 20 de septiembre del 2024";
$precio_unam = "12,000"; //No es necesario poner mxn
$precio_general = "15,000"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx";
$dias = "Martes y jueves";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "16:00 a 18:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "240"; //No es necesario poner hrs
$modalidad = "Híbrida";
$max_alumnos = "30"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "El avance tecnológico ha representado grandes beneficios para la sociedad, sobre todo en el avance en las telecomunicaciones, computadoras más veloces, nuevas fuentes de energía, extracción de minerales para transformarlos en productos con valor agregado, etc. En todos los casos, recientemente se han incorporado tecnologías que requieren un manejo especial por parte de personal altamente especializado. Tal es el caso de sistemas con altos grados de precisión en las mediciones a nivel de instrumentación. Las apuestas mexicanas de las tecnologías cuáticas son: gravimetría atómica, circuitos ópticos integrados, imagenología cuántica y criptografía cuántica. Para ello se requiere de personal especializado que puedan manjar dichas tecnologías o servir como puente entre la parte científica y los usuarios finales que no tienen porque tener conocimientos en el área especializada. Hoy en día, en México hay una comunidad científica en pleno crecimiento en el área de tecnologías cuánticas que busca realizar aplicaciones y para ello se requiere que estudiantes de física, y áreas afines, tengan conocimientos especializados en el uso de las nuevas tecnologías cuánticas que se han desarrollado, tanto para trabajar en el ámbito académico, pero sobre todo en las potenciales aplicaciones a la industria y sociedad. Con esto último en mente, el presente diplomado permitirá formar la primera generación de alumnos especializados en el manejo de tecnologías cuánticas. La estructura para tomar los módulos es:
    - Módulos I, VI y IX son obligatorios.
    - Escoger un módulo de las siguientes parejas: (II ó III), (IV ó V) y (VII ó VIII)
    Con ello el alumno obtendrá las herramientas necesarias para interaccionar con la comunidad científica especializada y los usuarios finales que utilizan de alguna u otra manera las tecnologías cuánticas que se han desarrollado en años recientes en el país.
    ";
$objetivo = "Reconocer e identificar los fundamentos y funcionamiento de las tecnologías cuánticas relacionadas con la metrología, gravimetría e información cuántica.
<br> Operar y manipular los experimentos básicos relacionados con la generación de dispositivos que se utilizan en las aplicaciones de las tecnologías cuánticas.";
$dirigido_a = "	Estudiantes de los últimos semestres y egresados de licenciatura en física y/o áreas afines.";
$requisitos = "Alumnos de los últimos 3 semestres de alguna licenciatura en física, o afín.
<br>Alumnos con licenciatura terminada en el área de física, o afín, que no tengan título y no hayan pasado más de 3 años desde que terminó de cubrir las materias de su licenciatura.
<br>Alumnos egresados de física o área afín con título.
<br>En todos los casos se pedirá promedio mínimo de 8.";
$lugar = "Múltiples instalaciones dependiendo del módulo UNAM, UASLP, BUAP, CINVESTAV, ITEMS, UAS, CICESE. La forma de impartición será híbrida. Para los módulos teóricos (I, II, III, IV, VI y IX) será en línea y para los módulos experimentales las sesiones serán presenciales (Módulos V, VII y VIII). Los módulos que son presenciales el alumno escogerá un asesor y la sede para trabajar y desarrollar el experimento que proponga alguno de los ponentes en dicho módulo."; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/VCEAUh6AU8meU1gJ9"; //Pegar el formato de inscripcion
$info_academica = "Dra. Rosalía Pastor Nieto <br> Correo electrónico: rosalia.pastor@gmail.com"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(array("Dr. Ricardo Méndez Fragoso, Facultad de Ciencias, UNAM. (Coordinador de las actividades ante la SEAyC)", "#"), array("Dr. Santiago Francisco Caballero Benítez, Instituto de Física, UNAM.", "#"), array("Dra. Georgina Angélica Olivares Rentería, Investigadora independiente.", "#"), array("Dr. John Alexander Franco Villafañe, UASLP.", "#"), array("Dr. Dorilián López Mago, ITEMS.", "#"), array("Dr. Luis Manuel Arévalo Aguilar, BUAP.", "#"));
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
        <h2>Coordinado por:</h2>
        <p>En una primera edición el diplomado será impartido en la UNAM, pero en un mediano plazo, éste será impartido en conjunto con diferentes instituciones. La coordinación general se realizará desde la Facultad de Ciencias, pero cada institución participante contará con un coordinador local para servir de enlace con alumnos y profesores que imparten el diplomado. La lista de coordinadores es la siguiente:</p>
        <ul class="pl-12 list-disc">
            <li>Dr. Ricardo M&eacute;ndez Fragoso, Facultad de Ciencias, UNAM. (Coordinador de las actividades ante la SEAyC)</li>
            <li>Dr. Santiago Francisco Caballero Ben&iacute;tez, Instituto de F&iacute;sica, UNAM.</li>
            <li>Dra. Georgina Ang&eacute;lica Olivares Renter&iacute;a, Investigadora independiente.</li>
            <li>Dr. John Alexander Franco Villafa&ntilde;e, UASLP.</li>
            <li>Dr. Dorili&aacute;n L&oacute;pez Mago, ITEMS.</li>
            <li>Dr. Luis Manuel Ar&eacute;valo Aguilar, BUAP.</li>
        </ul>
        <h2>Cuerpo docente y entidades participantes:</h2>
        <ul class="pl-12 list-decimal">
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_EduardoGomezGarcia.pdf">Dr. Eduardo G&oacute;mez Garc&iacute;a. Profesor / investigador. UASLP</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_FernandoRamirezMartinez.pdf">Dr. Fernando Ram&iacute;rez Mart&iacute;nez. Profesor / investigador. ICN-UNAM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_VictorManuelVelazquezAguilar.pdf">Dr. V&iacute;ctor Manuel Vel&aacute;zquez Aguilar. Profesor / investigador. FC-UNAM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_PabloBarberisBlostein.pdf">Dr. Pablo Barberis Blostein. Profesor / investigador. IIMAS-UNAM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_SantiagoCaballeroBenitez.pdf">Dr. Santiago Caballero Ben&iacute;tez. Profesor / investigador. IF-UNAM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_KarinaGarayPalmett.pdf">Dra. Karina Garay Palmett. Profesora / investigadora. CICESE</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_KarinaJimenezGarcia.pdf">Dra. Karina Jim&eacute;nez Garc&iacute;a. Profesora / investigadora. CINVESTAV-Qro</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_NeilVladimirCorzoTrejo.pdf">Dr. Neil Vladimir Corzo Trejo. Profesor / investigador. CINVESTAV-Qro</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CVDanielSahagunSanchez.pdf">Dr. Daniel Sahag&uacute;n S&aacute;nchez. Profesor / investigador. IF-UNAM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_VictorManuelValenzuelaJimenez.pdf">Dr. V&iacute;ctor Manuel Valenzuela Jim&eacute;nez. Profesor / investigador. UAS</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_RicardoMendezFragoso.pdf">Dr. Ricardo M&eacute;ndez Fragoso. Profesor / investigador. FC-UNAM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_LuisManuelArevaloAguilar.pdf">Dr. Luis Manuel Ar&eacute;valo Aguilar. Profesor / investigador. BUAP</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_JohnAlexanderFrancoVillafane.pdf">Dr. John Alexander Franco Villafa&ntilde;e. Profesor / investigador. UASLP</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_DorilianLopezMago.pdf">Dr. Dorili&aacute;n L&oacute;pez Mago. Profesor / investigador. ITESM</a></li>
            <li><a href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/curriculums/CV_GeorginaOlivaresRenteria.pdf">Dra. Georgina Olivares Renter&iacute;a. Profesora / investigadora. Independiente</a></li>
        </ul>
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
            <div class="contenido">
                <ul>
                    <li>I. Introducción a la cuántica avanzada
                    </li>
                    <li>II. Tecnologías cuánticas</li>
                    <li>III. Información cuántica</li>
                    <li>IV. Métodos para simulación computacional de sistemas cuánticos</li>
                    <li>V. Integración de sistemas de control aplicado a sistemas cuánticos</li>
                    <li>VI. Proyecto o prototipo unificador terminal</li>
                    <li>VII. Introducción a la infraestructura de laboratorios avanzados de manipulación cuántica</li>
                    <li>VIII. Taller de láseres y óptica, taller de espectroscopia y física atómica</li>
                    <li>IX. Proyecto o prototipo unificador terminal</li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <a class="formato-link mt-6" target="_blank" href="../../../diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/TEMARIOEXTENDIDO_TecnologiasCuanticas1ed.pdf">
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
include '../../../includes/templates/footer.php';
?>