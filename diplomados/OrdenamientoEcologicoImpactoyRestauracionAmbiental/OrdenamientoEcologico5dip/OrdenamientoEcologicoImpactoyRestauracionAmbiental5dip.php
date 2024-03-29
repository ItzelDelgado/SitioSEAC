<?php
include '../../../includes/templates/header.php';
include '../../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Ordenamiento Ecológico, Impacto y Restauración Ambiental";
$imagen_curso = "../../../assets/images/diplomados/diplomado-de-ordenamiento-ecologico.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "Quinto Diplomado";
$fecha = "Del 21 de agosto de 2023 al 17 de abril de 2024";
$precio_unam = "20,000"; //No es necesario poner mxn
$precio_general = "22,500"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx/es/261-ordenamiento-ecologico";
$dias = "Lunes y miércoles"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "16:00 a 20:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "240"; //No es necesario poner hrs
$modalidad = "Híbrida";
$max_alumnos = "25"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "El diplomado está diseñado para impartirse en tres módulos estrechamente relacionados: Ordenamiento Ecológico, Impacto Ambiental y Restauración Ambiental.<br>
El Ordenamiento Ecológico del Territorio es un instrumento de política ambiental, diseñado para caracterizar, diagnosticar y proponer formas de utilización del espacio territorial y sus recursos naturales, siempre bajo el enfoque de uso racional y diversificado y con el consenso de la población. Su objetivo es regular o inducir el uso del suelo y las actividades productivas, a fin de lograr la protección del medio ambiente y la preservación y el aprovechamiento sustentable de los recursos naturales a partir del análisis de las tendencias de deterioro y las potencialidades de aprovechamiento de los mismos.<br>
El ordenamiento ecológico, determina las obras o actividades a realizar (las cuales se someten a evaluación de impacto). El ordenamiento dicta la viabilidad de un proyecto. Si un programa o un plan parcial de ordenamiento no son compatibles con el proyecto de ordenamiento autorizado, la autoridad desecha el trámite.br>
La Evaluación de Impacto Ambiental es un instrumento fundamental de la política ambiental, que ha permitido plantear opciones de desarrollo compatibles con la preservación del medio ambiente y la conservación de los recursos naturales. Es una de las herramientas esenciales para prevenir, mitigar daños al medio ambiente y restaurar los recursos renovables del país. Su relación con el ordenamiento ecológico es precisamente que el primer instrumento define las actividades que pueden realizarse en un sitio determinado e indica los criterios que se deben seguir, así como su nivel de intensidad.<br>
El ordenamiento ecológico y la Evaluación de Impacto Ambiental, involucran a un grupo multidisciplinario de profesionistas y técnicos, así como el manejo y análisis de datos de manera multifactorial.<br>
El Diplomado culmina con el módulo de Restauración Ambiental, el cual es un tema fundamental. El ordenamiento tiene entre sus políticas la de Restauración Ambiental y establece estrategias, lineamientos, criterios de regulación y usos permitidos y no permitidos y compatibles y no compatibles.<br>
El módulo de restauración ambiental aborda temas como la Restauración Sintética, la relación entre la ecología de poblaciones y la restauración. Además, enfatiza sobre el papel de la experiencia básica en la restauración y experiencias de restauración en cuencas.<br>
Como corolario del Diplomado se analizan algunas estrategias que apoyan al mantenimiento de la biodiversidad, al mejor aprovechamiento de los recursos como son: azoteas y muros verdes, algunas estrategias de cultivos alternativos, relación de los espacios verdes en las ciudades y finalmente se trata sobre medidas inmediatas y mediatas tomadas en una comunidad después de un huracán en Costa Rica.<br><br>Los temas abordados en el Diplomado han adquirido mayor importancia en los últimos años. La enseñanza de estos temas puede contribuir a un mejor conocimiento sobre la orientación del gasto público, el emplazamiento geográfico de las actividades productivas y la definición de modalidades de uso de los recursos y servicios ambientales, es decir, su implementación aporta elementos para la solución de algunos de los problemas ambientales del país.
Es necesario contar con cuadros de personal altamente capacitado que elabore y evalúe estudios de ordenamiento ambiental y manifestaciones de impacto ambiental utilizando nuevas tecnologías como lo son el uso de la Teledetección y de los Sistemas de Información Geográfica.";
$objetivo = "Desarrollar habilidades en los participantes para elaborar e interpretar un ordenamiento ecológico, así como para entender cómo se evalúa un estudio de impacto ambiental, y conocer algunas estrategias de restauración de los hábitats terrestres y marinos.";
$dirigido_a = "Personas interesadas en la planeación territorial, manejo sustentable, conservación y restauración de los recursos naturales (campo de conocimiento: Biología, Ciencias de la Tierra, Geografía, Economía, Arquitectura, Derecho, Planeación Territorial, Desarrollo Sustentable o áreas afines).";
$requisitos = "Tener una licenciatura o equivalente en el área de Biología, Ciencias de la Tierra, Geografía, Economía. Arquitectura, Derecho, Planeación Territorial, Desarrollo Sustentable o áreas afines.";
$lugar = "El Diplomado será semipresencial. La mayoría de las clases serán a distancia vía Zoom, pero algunas sesiones sean presenciales porque se requiera hacer discusiones o trabajos en equipos, sin embargo, ser dará la opción de que aquel participante que no pueda asistir tome la clase a distancia.";
$formato_inscripcion = "https://docs.google.com/forms/d/e/1FAIpQLSfaNvqVSbIkeQ4VHwZ2PVobVSY8mTxlKDrPvBHRMuEckAYkLQ/viewform"; //Pegar el formato de inscripcion
$info_academica = "Dra. María Concepción García Aguirre<br>
Correo electrónico: galapagos@ciencias.unam.mx
"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
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
                        <span class=\"portada-informacion-pu-red\">7,000 UNAM</span>
                        <span class=\"portada-informacion-pg\">8,000 GENERAL</span>";
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
        <h2>Impartido por:</h2>
        <ul class="pl-12 list-decimal">
            <li><a target="_blank" href="../../../assets/curriculums_docentes/MariaConcepcionGarciaAguirre.pdf">Dra. María Concepción
                    García Aguirre. Profesora de asignatura, Facultad de Ciencias, UNAM</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/MarisolGallardoAngeles.pdf">Dra. Marisol Anglés Hernández.
                    Investigadora, Instituto de Investigaciones Jurídicas, UNAM</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/JorgeRobertoBlancoMartinez.pdf">Dr. V&iacute;ctor Manuel
                    Vel&aacute;zquez Aguilar. Profesor / investigador. FC-UNAM</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/RogelioCorona.pdf">Dr. Rogelio Corona Nuñez. Profesor de
                    asignatura. Ciencias de la Tierra. Fac de Ciencias.</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/CarloAlejandroDLunaFuentes.pdf"> M. en G. Carlo Alejandro
                    D’Luna Fuentes. Profesor de Geografía, SUA y de la Universidad de Guerrero</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/EduardoGonzalezHernandez.pdf">Lic. en Planificación para
                    el Desarrollo Agropecuario (PDA) Eduardo González Hernández, Consultor independiente</a></li>
            <li><a target="_blank"href="../../../assets/curriculums_docentes/MarianaHernandezApolinar.pdf">Dra. Mariana Hernández
                    Apolinar. Técnico Académico, Lab. Ecología de Poblaciones, Fac. Ciencias</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/MariaSilviaIriarteVivarBalderrama.pdf">Dra. María Silvia
                    Iriarte Vivar Balderrama, Profesora de asignatura, Facultad de Ciencias, UNAM</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/PedroEloyMendozaHernandez.pdf">Dr. Pedro Eloy Mendoza
                    Hernández, Técnico Académico, Lab. Ecología de Poblaciones, Fac. Ciencias</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/FernandoOlivoAranda.pdf">M. en C. Fernando Olivo Aranda.
                    Profesor de asignatura, Facultad de Arquitectura, UNAM</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/TamaraGuadalupeOsornoSanchez.pdf">Dra. Tamara Guadalupe
                    Osorno Sánchez. Profesora de Tiempo Completo. Facultad de Ciencias Naturales Universidad Autónoma de
                    Querétaro</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/AlejandroPelaezGoycochea.pdf">Biólogo Alejandro Peláez
                    Goycochea. Consultor de OE, Universidad Autónoma del Estado de Morelos</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/JoseLuisPerezDamian.pdf">Geógrafo José Luis Pérez Damián.
                    Consultor independiente</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/TalinaRuizRodriguez.pdf">M. en C. Talina Ruíz Rodríguez.
                    Analista Ambiental, Teo Consultora Ambiental, S.C.</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/IreneSanchezGallen.pdf">Dra. Irene Sánchez Gallén. Técnico
                    Académico Titular C, Ecología del Suelo, Fac. de Ciencias, UNAMe</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/LeobardoTerpanAcuna.pdf">M. en Estudios Regionales, Medio
                    Ambiente y Desarrollo Leobardo Terpán Acuña. Profesor de asignatura, Facultad de Ciencias, UNAM</a>
            </li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/RicardoVazquezPerales.pdf">Dr. Ricardo Vázquez Perales.
                    Consultor independiente</a></li>
            <li><a target="_blank" href="../../../assets/curriculums_docentes/RodrigoCelisGarcia.pdf">M en Gestión y Autitorías
                    Ambientales Rodrigo Celis García</a></li>
        </ul>
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
        <h3 class="mt-10"><b>PAGO POR MÓDULO</b> (3 módulos: el pago debe realizarse antes de que inicie el módulo
            correspondiente):</h3>
        <?php
        aplica_descuento("7,000", $precio_unam_descuento, "8,000", $precio_general_descuento, $frase_descuento, $limite_fecha_descuento);
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
            <h3>MÓDULO I.- ORDENAMIENTO ECOLÓGICO</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Introducci&oacute;n</li>
                    <li>Visi&oacute;n Internacional del OE.El caso de la escalera n&aacute;utica</li>
                    <li>Planeaci&oacute;n del Territorio</li>
                    <li>Procedimiento general para la elaboraci&oacute;n de un OE</li>
                    <li>Bases Jur&iacute;dicas del OE</li>
                    <li>Sistemas complejos y ecolog&iacute;a del Paisaje</li>
                    <li>Fuentes de informaci&oacute;n y cartograf&iacute;a</li>
                    <li>Delimitaci&oacute;n del &aacute;rea de estudio (Integraci&oacute;n y diferenciaci&oacute;n
                        territorial)</li>
                    <li>Modelo digital del terreno</li>
                    <li>-An&aacute;lisis del cambio de cobertura vegetal y de uso del suelo</li>
                    <li>Reconocimiento de actividades sectoriales y de sus intereses en el territorio</li>
                    <li>C&aacute;lculo y mapeo de suficiencia de red vial Hgo</li>
                    <li>Valoraci&oacute;n econ&oacute;mica de los RN y An&aacute;lisis multicriterio</li>
                    <li>Diagn&oacute;stico, identificaci&oacute;n y an&aacute;lisis de los conflictos, definici&oacute;n
                        de h&aacute;bitats cr&iacute;ticos. Participaci&oacute;n social</li>
                    <li>An&aacute;lisis de riesgos</li>
                    <li>Pron&oacute;stico</li>
                    <li>Definici&oacute;n de las unidades de gesti&oacute;n ambiental (UGAS)</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>MÓDULO II.- IMPACTO AMBIENTAL</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Visi&oacute;n general del Deterioro Ambiental</li>
                    <li>Aspectos jur&iacute;dicos del impacto ambiental. Responsabilidad por el da&ntilde;o ambiental
                    </li>
                    <li>Uso de Gu&iacute;as metodol&oacute;gicas</li>
                    <li>Cap&iacute;tulo 3 y 4 de Gu&iacute;as metodol&oacute;gicas</li>
                    <li>Casos de remediaci&oacute;n</li>
                    <li>Evaluaci&oacute;n de impacto ambiental</li>
                    <li>Caso: carretera y Caso: Pemex</li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>MÓDULO III.- RESTAURACIÓN AMBIENTAL</h3>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Introducci&oacute;n a la Restauraci&oacute;n Ambiental</li>
                    <li>Restauraci&oacute;n sint&eacute;tica</li>
                    <li>Ecolog&iacute;a de poblaciones y la restauraci&oacute;n</li>
                    <li>Experiencias de ciencia b&aacute;sica en la restauraci&oacute;n ecol&oacute;gica</li>
                    <li>Restauraci&oacute;n de cuencas</li>
                    <li>Ecotecnolog&iacute;as en la restauraci&oacute;n ambiental y la sustentabilidad</li>
                    <li>Azoteas y muros verdes</li>
                    <li>Cultivos alternativos</li>
                </ul>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <a class="formato-link mt-6" target="_blank"
        href="../../../diplomados/OrdenamientoEcologicoImpactoyRestauracionAmbiental/OrdenamientoEcologico5dip/TEMARIOEXTENDIDO_5DipOrdenamientoEcologico.pdf">
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

<!-- Start Section-->
<section class="oferta-academica-2">
    <div class="container">
        <h2>Requisitos de egreso. Evaluación</h2>
        <p>Requisitos de egreso</p>
        <ul class="list-disc pl-12">
            <li>El asistente deber&aacute; cumplir con el 80% de asistencia.</li>
            <li>Calificaci&oacute;n aprobatoria de 8.0</li>
            <li>Caso de becarios calificaci&oacute;n aprobatoria de 9.0</li>
            <li>Adem&aacute;s, al menos una evaluaci&oacute;n que d&eacute; evidencia del aprovechamiento del
                participante</li>
            <li>En el caso de Diplomados todo lo anterior por m&oacute;dulo.</li>
        </ul>
        <h2>Actividades adicionales para la evaluación:
        </h2>
        <ul class="list-decimal pl-12">
            <li>Reporte de las siguientes pr&aacute;cticas:
                <ul class="pl-12">
                    <li>a) Regionalizaci&oacute;n: a partir de las im&aacute;genes mostradas, definir el tipo de
                        regi&oacute;n y las caracter&iacute;sticas de la Misma</li>
                    <li>b) Cambio de cobertura vegetal y uso del suelo</li>
                    <li>c) C&aacute;lculo y mapeo del coeficiente de red vial de la zona metropolitana de Tulancingo,
                        Hgo.</li>
                    <li>d) Valoraci&oacute;n y an&aacute;lisis multicriterio de recursos naturales</li>
                    <li>e) Definici&oacute;n de Unidades de Gesti&oacute;n Ambiental</li>
                    <li>g) An&aacute;lisis de matrices e identificaci&oacute;n valoraci&oacute;n de impactos ambientales
                    </li>
                </ul>
            </li>
            <li>Entrega de 2 controles de lecturas:
                <ul class="pl-12">
                    <li>a) Restore, regenerate, revegetate: Restoring ecological processes, ecosystems and landscapes in
                        a changing world</li>
                    <li>b) Restauraci&oacute;n sint&eacute;tica</li>
                </ul>
            </li>
            <li>Entrega por equipo de propuesta de:
                <ul class="pl-12">
                    <li>a) Restauraci&oacute;n</li>
                    <li>b) Dise&ntilde;o y gesti&oacute;n de superficies naturadas</li>
                </ul>
            </li>
            <li>Tres cuestionarios a casa (uno por cada m&oacute;dulo)</li>
            <li>Un trabajo semestral en equipo y su presentaci&oacute;n de forma escrita y oral.</li>
        </ul>
    </div>
</section>

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
include '../../../includes/templates/footer.php';
?>