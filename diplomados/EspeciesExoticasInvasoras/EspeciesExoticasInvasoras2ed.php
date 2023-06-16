<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Especies Exóticas Invasoras (EEI)";
$imagen_curso = "../../../assets/images/diplomados/EspeciesExoticasInvasoras.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "2da. Edición";
$fecha = "Del 4 de septiembre al 1ro de diciembre del 2023";
$precio_unam = "13,500"; //No es necesario poner mxn
$precio_general = "11,000"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx";
$dias = "Lunes, miércoles y viernes";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "15:00 a 18:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "120"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "30"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "Después de la destrucción del hábitat, el impacto por las especies invasoras ha sido identificado como la segunda causa, a nivel global, de la pérdida de biodiversidad (Vitousek, 1996; Leung et al., 2002). Es por ello que este tema se ha convertido en prioritario en el contexto de la Convención de Diversidad Biológica (CDB). Una especie “invasora” es aquella especie exótica o trasladada (cualquier especie, subespecie o categoría infraespecífica), introducida accidental o intencionalmente fuera de su distribución natural actual o en el pasado —incluyendo sus gametos, semillas, huevos o propágulos— con capacidad de colonizar, invadir y persistir, y cuya introducción y dispersión amenace a la diversidad biológica causando daños al ambiente, a la economía y a la salud humana (Convención para la Diversidad Biológica, CDB; el Programa Global sobre Especies Invasoras, GISP, y la Non-indigenous Aquatic Nuisance Prevention and Control Act, 1990, EUA).
Las especies invasoras desplazan a las especies nativas de flora y fauna por competencia directa, depredación, transmisión de enfermedades, modificación del hábitat, alteración de la estructura de los niveles tróficos y sus condiciones biofísicas, y por la alteración en los regímenes de fuego. Las plantas invasoras acuáticas pueden causar la desecación de los cuerpos de agua, afectando drásticamente la ecología de los paisajes y de los ambientes locales. En ocasiones, las especies invasoras se hibridan con especies nativas alterándose así el pool génico original de las poblaciones nativas (Mooney y Cleland, 2001). Es por esta razón que la conservación de la biodiversidad en un país debe contemplar a la prevención, detección temprana, manejo, control, erradicación, concienciación pública, regulación y legislación, y la investigación sobre especies invasoras como una alta prioridad. Las especies invasoras, además, tienen un elevado potencial para afectar negativamente una serie de acciones de restauración ecológica, conservación y aprovechamiento sustentable de los recursos naturales (Chornesky et al., 2000). A manera de círculos viciosos, probablemente relacionados con sequías inusuales, muchas especies invasoras adaptadas al fuego contribuyen a promover regímenes anómalos de fuego e incendios catastróficos que, a su vez, afectan a la biodiversidad (Hiremath y Sundaram, 2005). Sin embargo, en México las acciones contra especies invasoras se han enfocado básicamente a aquellas que causan daños económicos a las actividades agrícolas y pecuarias, y han quedado prácticamente ignoradas las que afectan o pueden afectar a la biodiversidad terrestre, marina o dulceacuícola del país.";
$objetivo = "Que los asistentes comprendan los diferentes impactos negativos que causan las especies exóticas invasoras en los ecosistemas del país.";
$dirigido_a = "Estudiantes, profesionistas, tomadores de decisiones, manejadores de recursos, biólogos, ecólogos, administradores de áreas naturales, administradores de recursos naturales.";
$requisitos = "Licenciatura (90% de créditos)";
$lugar = "Meet y Moodle";
$formato_inscripcion = "https://forms.gle/LoADFn2RpwJ9fETg9"; //Pegar el formato de inscripcion
$info_academica = "Dr. Alejandro Villegas Castillo<br>
Correo electrónico: alejandrovillegas@ciencias.unam.mx"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(
    array("Dr. Alejandro Villegas Castillo", "../../assets/curriculums_docentes/AlejandroVillegasCastillo.pdf"),
    array("Dr. José Juan Flores Martínez", "../../assets/curriculums_docentes/JuanJoseFlores.pdf"),
    array("M. Ricardo Augusto Rodríguez Medina", "../../assets/curriculums_docentes/RicardoAugustoRodriguezMedina.pdf"),
    array("M. Marisol Gallardo Angeles", "../../assets/curriculums_docentes/MarisolGallardoAngeles.pdf"),
    array("M. Jordi Parpal Servole ", "../../assets/curriculums_docentes/JordiParpalServole.pdf"),
);
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
        <h3><b>Pago en 3 exibiciones:</b></h3>
        <?php
        aplica_descuento("4,000", $precio_unam_descuento, "5,000", $precio_general_descuento, $frase_descuento, $limite_fecha_descuento);
        ?>
        <ul class="list-disc pl-12">
            <li>1er. pago: antes del inicio del Diplomado</li>
            <li>2do. pago: antes del 1ro de octubre</li>
            <li>3er. pago: antes del 1ro de noviembre</li>
        </ul>

    </div>

</section>



<!-- Este ejemoplo es para cuando se muestra en forma de indice. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<!-- TEMARIO SECCIÓN: LOS <h3> son temas principales y los <li> son subtemas. -->
<section class="temario container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <div> <!--Tema-->
            <h3>MÓDULO I</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>I.Marco conceptual y conceptos básicos
                        <ul>
                            <li>I.1 Conceptos de especie, especie ex&oacute;tica, especie invasora</li>
                            <li>I.2 Conceptos de ecolog&iacute;a y gen&eacute;tica</li>
                            <li>I.3 Ecosistemas de M&eacute;xico y servicios ecosist&eacute;micos</li>
                        </ul>
                    </li>
                    <li>II. Especies Exóticas Invasoras reportadas para México<ul>
                            <li>II.1 Invertebrados</li>
                            <li>II.2 Peces</li>
                            <li>II.3 Anfibios</li>
                            <li>II.4 Reptiles</li>
                            <li>II.5 Aves</li>
                            <li>II.6 Mam&iacute;feros</li>
                        </ul>
                    </li>
                    <li>III. Impacto de las EEI en los servicios ecosistémicos
                        <ul>
                            <li>III.1 Impacto de EEI en servicios de soporte</li>
                            <li>III.2 Impacto de EEI en servicios de abastecimiento</li>
                            <li>III.3 Impacto de EEI en servicios de regulaci&oacute;n</li>
                            <li>III.4 Impacto de EEI en servicios culturales</li>
                        </ul>
                    </li>
                    <li>IV. Técnicas de evaluación y monitoreo de EEI
                        <ul>
                            <li>IV.1 Modelos de distribuci&oacute;n</li>
                            <li>IV.2 Modelos poblacionales</li>
                            <li>IV.3 Modelos gen&eacute;ticos</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>MÓDULO II</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>V. Protocolos para EEI
                        <ul>
                            <li>V.1 Protocolos de detecci&oacute;n temprana EEI</li>
                            <li>V.2 Protocolos de control de EEI</li>
                            <li>V.3 Protocolos de erradicaci&oacute;n de EEI</li>
                        </ul>
                    </li>
                    <li>VI. Uso del Marco Lógico para diseño de programas con EEI<ul>
                            <li>VI.1 Marco l&oacute;gico: breve introducci&oacute;n</li>
                            <li>VI.2 Dise&ntilde;o de &aacute;rbol de problemas y &aacute;rbol de objetivos</li>
                            <li>VI.3 Dise&ntilde;o de indicadores</li>
                        </ul>
                    </li>
                    <li>VII. Estrategia Nacional de EEI
                        <ul>
                            <li>VII.1 Presentaci&oacute;n de la estrategia nacional para el combate de EEI en M&eacute;xico</li>
                            <li>VII.2 Base de datos de EEI de CONABIO y su utilidad</li>
                        </ul>
                    </li>
                    <li>VIII.<ul>
                            <li>VIII.1 Aplicaci&oacute;n Digital Naturalista y Enciclo Vida como herramientas de registro de EEI</li>
                            <li>VII.2 Estudio de caso: El pez diablo en el R&iacute;o Hondo y el Pez Le&oacute;n, ambos en Quintana Roo.</li>
                        </ul>
                    </li>
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
include '../../includes/templates/footer.php';
?>