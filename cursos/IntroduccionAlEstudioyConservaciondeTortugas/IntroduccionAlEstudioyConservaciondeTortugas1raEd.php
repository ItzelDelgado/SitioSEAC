<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Introducción al Estudio y Conservación de las Tortugas de México";
$imagen_curso = "../../../assets/images/cursos/bg-TortugasMexico.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "1ra. Edición";
$fecha = "Del 2 de mayo al 1 de junio de 2023";
$precio_unam = "3,000"; //No es necesario poner mxn
$precio_general = "3,600"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "100"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "18-04-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx";
$dias = "Lunes"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "16:00   a 19:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "30"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "60"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "Las Tortugas son vertebrados que se originaron hace más de 200 millones de años durante el período Triásico. Han sobrevivido a varias mega extinciones y sus patrones corporales han cambiado muy poco desde su aparición, pero desde que los seres humanos dominaron el planeta como especie hace aproximadamente un millón de años las poblaciones de muchas especies de tortugas disminuyeron drásticamente poniendo a muchas especies al borde de la extinción; alrededor del 40% de los taxa de tortugas (más de 300) se encuentran como vulnerables o en peligro de extinción; esto debido a un conjunto de factores causados por acciones humanas, como son la destrucción del hábitat y el uso no sustentable de estas especies.
En México existen casi 40 taxa de tortugas, de éstos muchos están amenazados de extinción (TFWTSG, UICN, NOM_ECOL-059, SEMARNAT 2010).
Estos animales son de gran importancia, tanto biológica como evolutivamente, así como parte de los ecosistemas.
En general son animales pobremente estudiados por lo que se conoce relativamente muy poco de su biología, estrategias reproductivas, conducta y relaciones poblacionales; esto resulta muy grave sobre todo en los taxa que se encuentran borde de la extinción.
Por eso que resulta de gran importancia capacitar biólogos, veterinarios y ecólogos en el conocimiento de la biología, ecología, técnicas de laboratorio, campo y manejo en cautiverio, así como las principales líneas de investigación que existen en la actualidad y el posible uso sustentable de algunas especies de tortugas. Para incrementar el conocimiento de estos animales y formular estrategias para la conservación, manejo y uso sustentable de las tortugas, sobre todo de las que están más amenazadas";
$objetivo = "Capacitar respecto a la biología, ecología, diversidad, técnicas de campo y manejo en cautiverio, así como en las estrategias para la conservación y uso sustentable de las tortugas mexicanas.";
$dirigido_a = "Biólogos, Médicos Veterinarios Zootecnistas, Ecólogos y disciplinas afines";
$requisitos = "Estudiantes y profesionales de las áreas químico biológicas y afines.";
$lugar = "Meet o Zoom"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/EAvs91kZkFJgReYz5"; //Pegar el formato de inscripcion
$info_academica = "Dra. Gracia Patricia González Porter<br>
Correo electrónico: graciapgp@gmail.com"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
$ponentes_principales_presentacion = array(array("Dra. Gracia Patricia González Porter. Especialista en Tortugas. <br>Unión Internacional para la Conservación de la Naturaleza (IUCN)", "../../../assets/curriculums_docentes/GraciaPatriciaGonzalesPor.pdf"))
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
            <h3>I. ¿Qué son las tortugas?</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>1.1. Rasgos anat&oacute;micos, reproductivos y ecol&oacute;gicos y gen&eacute;tica de
                        poblaciones.</li>
                    <li>1.2. Origen, evoluci&oacute;n y sistem&aacute;tica de las tortugas.</li>
                    <li>1.3 Reproducci&oacute;n en Tortugas (Diapausa y estivaci&oacute;n embrionaria),
                        determinaci&oacute;n sexual en tortugas (DST,DSG). (Discusi&oacute;n de
                        art&iacute;culos)<br />Estrategias ecol&oacute;gicas de las tortugas (historias de vida, costos,
                        uso de h&aacute;bitat, importancia ecol&oacute;gica en los ecosistemas)</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>II. Especies de tortugas dulceacuícolas de México</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>2.1. Familia Dermatemydidae</li>
                    <li>2.2. Familia Kinosterniddae (Staurotypinae, Kinosterninae)</li>
                    <li>2.3. Familia Trionychidae</li>
                    <li>2.4 Familia Emydidae</li>
                    <li>2.5 Familia Geomydidae</li>
                    <li>2.6 Famila Chelidridae</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>III. Especies de tortugas terrestres y marinas</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>3.1 Familia Testudinidae</li>
                    <li>3.2 Familia Dermochelydae</li>
                    <li>3.3 Familia Cheloniidae</li>
                    <li>3.4 Discusi&oacute;n de art&iacute;culos sobre tortugas marinas</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>IV. Crisis de Tortugas y accione de conservación</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>4.1. Principales amenazas y especies en peligro de extinci&oacute;n</li>
                    <li>4.2 Amenazas al h&aacute;bitat</li>
                    <li>4.3 Uso humano</li>
                    <li>4.4 Tr&aacute;fico ilegal de tortugas</li>
                    <li>4.5. Aplicaci&oacute;n de m&eacute;todos de evaluaci&oacute;n de riesgo (IUCN, NOM-059 y CITES)
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>V. Conservación de tortugas</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>5.1. Campamentos tortugueros y granjas<br />Proyectos productivos y UMAs</li>
                    <li>5.2 Pr&aacute;ctica (Crear un plan de manejo para UMA de tortugas)</li>
                    <li>5.3. Consideraciones gen&eacute;ticas para el manejo y conservaci&oacute;n de
                        tortugas<br />Discusi&oacute;n de art&iacute;culos</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VI. Técnicas de campo para el estudio de tortugas</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>6.1. Recorridos nocturnos en coche o a pie</li>
                    <li>6.2. M&eacute;todos de trampeo y dise&ntilde;o de sistemas de trampeo</li>
                    <li>6.3. Telemetr&iacute;a marcaje y recaptura</li>
                    <li>6.4. Sistemas de informaci&oacute;n geogr&aacute;fica.<br />Medici&oacute;n y fotograf&iacute;a
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VII. Colecciones científicas de referencia</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>7.1. Toma de datos y medidas est&aacute;ndar</li>
                    <li>7.2. M&eacute;todos de preparaci&oacute;n de ejemplares</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>VIII. Manejo en cautiverio de tortugas.</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>8.1. Manejo f&iacute;sico de tortugas y toma de medidas</li>
                    <li>8.2. Calidad del agua, limpieza de los encierros</li>
                    <li>8.3. Dieta alimentaci&oacute;n e higiene.</li>
                    <li>8.4 Bienestar de los organismos</li>
                    <li>8.5. Registros.</li>
                    <li>8.6. T&eacute;cnicas b&aacute;sicas de veterinaria para tortugas.<br />Practica con ejemplares
                        vivos y partes</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>IX. Nuevos conocimientos sobre tortugas</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>9.1. Vocalizaciones</li>
                    <li>9.2. Nuevas especies<br />
                        <ul>
                            <li>9.1.2. Dispersi&oacute;n de semillas por tortugas</li>
                            <li>9.1.3. Determinaci&oacute;n dl sexo.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo.
    <a class="formato-link mt-6" href="assets/pdf/formatos/FormatoPresentacionCursoo.docx"
        download="Documento-con-descripcion">
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