<?php
include '../../includes/templates/header.php';
include '../../includes/templates/funciones.php';
?>


<?php

$titulo_curso = "Solución de problemas, TIC e investigación didáctica";
$imagen_curso = "../../../assets/images/diplomados/Solucion_problemas_tic.jpg"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "<b>Diplomado IV</b><br> Forma parte del programa de Diplomados para el bachillerato: La Matemática del Bachillerato. Un enfoque integral.";
$fecha = "Del 18 de abril al 31 de agosto de 2023";
$precio_unam = "1,000"; //No es necesario poner mxn
$precio_general = "2,000"; //No es necesario poner mxn
//Si no tiene descuento, favor de poner NO en precio_unam_descuento.
//ej: $precio_unam_descuento = "NO";
$precio_unam_descuento = "NO"; //No es necesario poner mxn
$precio_general_descuento = "2,720"; //No es necesario poner mxn
$frase_descuento = "15% de descuento por concepto de pronto pago (hasta el 3 de
abril)"; //Frase del porcentaje de descuento
$limite_fecha_descuento = "31-05-2023"; //Formato date("dd-mm-Yyyy")
$link_plaza_prometeo = "https://tienda.fciencias.unam.mx/es/254-diplomado-iv-solucion-de-problemas-tic-e-investigacion-didactica";
$dias = "Martes y jueves"; //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "17:00 a 19:00 hrs"; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "124"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "40"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "El proceso de enseñanza-aprendizaje de las matemáticas es complejo y como toda actividad humana de interés, es objeto de análisis y estudio constante para mejorarlo. Ya que el bachillerato es el último nivel de formación general previo al ingreso a niveles de profundización y especialización, las preguntas: ¿Cómo enseñar las matemáticas?, ¿Qué conocimientos debe tener el egresado del bachillerato?, ¿Por qué estudiar matemáticas? resultan fundamentales. Una propuesta dirigida a fortalecer la educación matemática requiere adoptar una postura sobre estas cuestiones. Como está escrito en [1]: “Las matemáticas son parte fundamental de la cultura y permean toda actividad humana”, por esta razón su enseñanza debe reflejar el desarrollo científico y cultural de la sociedad. La enseñanza de reglas y procedimientos rutinarios debe ser resultado de una actividad dirigida a comprenderlos a través de la resolución de problemas, como nos muestra la historia de la ciencia.
Por otra parte, la transmisión de alta calidad del conocimiento requiere de la reflexión y participación de los docentes en actividades dirigidas a mantener una práctica docente actualizada y con contenidos curriculares que favorezcan “el pensamiento crítico, la disposición para el análisis y la reflexión, el interés por saber y aplicar los conocimientos para resolver problemas”, [1] . Por esta razón, conviene que en este proceso participen los más diversos grupos de académicos cuyas experiencias y actividades resulten de interés para la docencia.
Con este fin, a lo largo de mucho tiempo, académicos del departamento de matemáticas han colaborado con profesores del bachillerato en diversos proyectos; el ejemplo más reciente de esto es el que inicia en 2019, cuando la Facultad de Ciencias (FC) y la Escuela Nacional Preparatoria (ENP) acuerdan un proyecto de colaboración para el mejoramiento de la enseñanza de la matemática. Desde entonces, se trabaja en un seminario conjunto con exposiciones periódicas que han sido útiles para un mejor conocimiento de las necesidades y de las tareas enfocadas a cubrirlas.
Un medio de actualización permanente es el programa de especialización que ofrece la Facultad de Ciencias, en el que se abordan aspectos didácticos y contenidos. Sin embargo, es necesario modificar su estructura para que sea más flexible y permita una mayor participación de la planta docente del bachillerato. Así, los diplomados semipresenciales que faciliten la participación de diversos académicos en distintas modalidades son una vía que se prevé exitosa.
Bajo estas consideraciones se han elaborado 4 diplomados para cubrir el contenido de la matemática del bachillerato con una perspectiva que permita una visión integrada tanto de la génesis de las ideas como de los procedimientos de cálculo y análisis que se han creado como producto del estudio de la forma y el número.";
$objetivo = "Fortalecer la formación disciplinaria de los profesores a través del conocimiento de herramientas de resolución de problemas, de tecnologías y de didáctica, que permitan mejorar la actitud de los estudiantes hacia el conocimiento matemático y reforzar su pensamiento matemático.";
$dirigido_a = "Profesores del bachillerato.";
$requisitos = "<b>Requisitos de ingreso:</b> Tener una licenciatura en matemáticas, matemática educativa o alguna disciplina afín.<br><b>Requisitos de permanencia: </b>No más tres inasistencias continuas.<br><b>Requisitos de egreso: </b>Cumplir con los requisitos de permanencia y haber aprobado las evaluaciones.<br><b>Equipo de cómputo y software requerido: </b>Zoom, Geogebra, Mathematica, Moodle, Aplicaciones de Google.";
$lugar = "Meet o Zoom.";
$formato_inscripcion = "https://docs.google.com/forms/d/e/1FAIpQLSfY_v91E4wgF9AlFiXJmRE9zA-MfLxQeCJju76TnMUKzqXDdg/viewform"; //Pegar el formato de inscripcion
$info_academica = "M. En C. Clara Vidrio<br>
claravidrio0@gmail.com"; //Agregar el Nombre <br> correo, dando un br para saltar de linea.
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
        <h2>Presentación del programa de Diplomados para el bachillerato</h2>
        <h3>Diplomados para el Bachillerato<br>
            La Matemática del Bachillerato<br>
            Un enfoque integral</h3>
        <p>
            <?php echo $descripcion ?>
        </p>
        <ul class="pl-12 list-decimal mt-4">
            <li><a href="http://www.educontinua.fciencias.unam.mx/SiteNuevo/Cursos/DiplomadosBachillerato/Intro.php">Diplomado
                    I: Geometr&iacute;a, Teor&iacute;a de n&uacute;meros y &Aacute;lgebra;</a></li>
            <li><a
                    href="http://www.educontinua.fciencias.unam.mx/SiteNuevo/Cursos/DiplomadosBachillerato/Dipl_II/Intro.php">Diplomado
                    II: Matem&aacute;ticas discretas, Geometr&iacute;a anal&iacute;tica;</a></li>
            <li>Diplomado III: El infinito y el C&aacute;lculo, Probabilidad y Estad&iacute;stica;</li>
            <li>Diplomado IV: Taller de problemas, TIC, Taller de investigaci&oacute;n did&aacute;ctica.</li>
        </ul>

        <p class="mt-10">Con base en lo anterior se presenta el Diplomado IV.</p>





        <h2>Diplomado IV.
            Solución de problemas, TIC e investigación didáctica</h2>
        <p>El presente diplomado consta de tres módulos:</p>
        <div class="mt-4">

            <p class="font-bold">Módulo 1: Taller de problemas</p>
            <div class="pl-4">
                <p class="font-semibold mt-4">Justificaci&oacute;n</p>
                <p>Dentro de la labor docente, en ocasiones
                    se enfrenta la
                    situaci&oacute;n de tener que resolver problemas matem&aacute;ticos que no han sido vistos antes.
                    Esto
                    puede suceder al estudiar nuevo material para preparar un curso, al preparar tareas para los
                    estudiantes
                    o incluso al discutir con estudiantes avanzados algunos problemas de concursos
                    matem&aacute;ticos.<br />Para resolver estos problemas con &eacute;xito, se necesita un buen
                    conocimiento de la teor&iacute;a necesaria en su soluci&oacute;n. Sin embargo, no siempre es
                    inmediato
                    qu&eacute; resultados te&oacute;ricos usar. Un estudio sistem&aacute;tico de heur&iacute;sticas de
                    resoluci&oacute;n de problemas permite decidir acciones concretas que llevan a la resoluci&oacute;n
                    de
                    un problema matem&aacute;tico, como explorar casos particulares, hacer una figura o dividir en
                    casos.<br />La literatura con respecto a heur&iacute;sticas es amplia, y en ocasiones es complicado
                    encontrar ejemplos concretos que se puedan llevar al aula para una materia en espec&iacute;fico.
                    Este
                    m&oacute;dulo est&aacute; dise&ntilde;ado de modo que tanto las t&eacute;cnicas como los ejemplos
                    elegidos se puedan usar de manera directa en las asignaturas matem&aacute;ticas a nivel bachillerato
                    con
                    temas de &aacute;lgebra y de geometr&iacute;a.</p>
                <p class="font-semibold mt-4">Objetivos espec&iacute;ficos del
                    m&oacute;dulo</p>
                <ul class="list-disc pl-12">
                    <li>Introducir el concepto de heur&iacute;stica</li>
                    <li>Presentar un estudio sistem&aacute;tico de 5 heur&iacute;sticas</li>
                    <li>Identificar y usar dichas heur&iacute;sticas en la resoluci&oacute;n de problemas</li>
                    <li>Elaborar material did&aacute;ctico que los profesores puedan usar en su pr&aacute;ctica docente
                    </li>
                </ul>
                <p class="font-semibold mt-4">Cuerpo docente y entidades participantes:</p>
                <ul class="list-disc pl-12">
                    <li>Dr. Leonardo Ignacio Mart&iacute;nez Sandoval, Depto. Matem&aacute;ticas. Coordinador</li>
                    <li>Mat. Carla Abigail Anaya Monta&ntilde;o. Instructora</li>
                    <li>M. en D. Tania Azucena Chicalote Jim&eacute;nez, Depto. Matem&aacute;ticas. Instructora</li>
                </ul>
                <p class="font-semibold mt-4">Procesos de evaluación</p>
                <p>Para cada heurística habrá los siguientes entregables:</p>
                <ul class="list-decimal pl-12">
                    <li>Entregable te&oacute;rico</li>
                    <li>Mini-cuestionario</li>
                    <li>Entregable de problemas a resolver</li>
                    <li>Foro de reflexi&oacute;n final</li>
                </ul>

            </div>
            <p class="font-bold mt-4">Módulo 2: Tecnologías de la Información y la Comunicación (TICs)</p>
            <div class="pl-4">
                <p class="font-semibold mt-4">Justificaci&oacute;n</p>
                <p>Desde la antigüedad, el ser humano ha buscado la manera de crear diversas herramientas que le
                    permitan llevar a cabo sus actividades. Más aún, el uso de estos dispositivos le han servido no
                    sólo
                    para realizar actividades cotidianas sino para analizar, representar, estudiar y resolver
                    problemas
                    cada vez más complejos. La sociedad actual no puede ser ajena a esto, los dispositivos actuales
                    son
                    herramientas tecnológicas que nos permiten descubrir y explorar los objetos y problemas desde
                    diversos enfoques y a velocidades antes inimaginables.
                    No podemos negar que los cambios constantes y vertiginosos que enfrenta la sociedad impregnan la
                    labor docente dentro de las instituciones, por lo que adquiere relevante importancia que los
                    docentes obtengan destreza y experiencia en el uso de las herramientas tecnológicas actuales y
                    acordes al tipo de conocimientos y aprendizajes que desean desarrollar en sus alumnos y dentro
                    de su
                    práctica docente.</p>
                <p class="font-semibold mt-4">Objetivos espec&iacute;ficos del
                    m&oacute;dulo</p>
                <ul class="list-disc pl-12">
                    <li>Conocer diversas herramientas tecnológicas para el desarrollo de aprendizajes matemáticos.
                    </li>
                    <li>Integrar el uso de las tecnológicas y las heurísticas para la resolución de problemas.</li>
                    <li>Elaborar actividades didácticas que impliquen el uso de tecnologías y que los profesores
                        puedan
                        usar en su práctica docente</li>
                </ul>
                <p class="font-semibold mt-4">Cuerpo docente y entidades participantes:</p>
                <ul class="list-disc pl-12">
                    <li>Dr. Leonardo Ignacio Mart&iacute;nez Sandoval, Depto. Matem&aacute;ticas. Coordinador</li>
                    <li>M. en D. Tania Azucena Chicalote Jim&eacute;nez, Depto. Matem&aacute;ticas. Instructora</li>
                </ul>
                <p class="font-semibold mt-4">Procesos de evaluación</p>
                <p>Para cada práctica se elaborarán los siguientes:</p>
                <ul class="list-decimal pl-12">
                    <li>Resoluci&oacute;n de la pr&aacute;ctica</li>
                    <li>An&aacute;lisis del uso de la tecnolog&iacute;a dentro de la resoluci&oacute;n de la
                        pr&aacute;ctica.</li>
                    <li>Reflexi&oacute;n de c&oacute;mo podr&iacute;a integrarse el uso de la tecnolog&iacute;a
                        presentada dentro de su pr&aacute;ctica docente.</li>
                    <li>Propuesta y an&aacute;lisis de una pr&aacute;ctica para aplicar en su pr&aacute;ctica docente.
                    </li>
                    <li>Coevaluaci&oacute;n</li>
                </ul>

            </div>
            <p class="font-bold mt-4">Módulo 3 Taller de investigación didáctica</p>
            <div class="pl-4">
                <p class="font-semibold mt-4">Justificaci&oacute;n</p>
                <p>Hasta ahora, los profesores han desarrollado distintas habilidades matemáticas, tecnológicas y de
                    resolución de problemas, en el transcurso de este diplomado y de otros de la serie “La Matemática
                    del Bachillerato - Un enfoque integral”. El objetivo de este último módulo es que los profesores
                    puedan poner en práctica estos conocimientos y puedan identificar distintas situaciones docentes, de
                    la vida cotidiana y de la ciencia en donde se usan.</p>
                <p class="font-semibold mt-4">Objetivos espec&iacute;ficos del
                    m&oacute;dulo</p>
                <ul class="list-disc pl-12">
                    <li>Conocer, a partir de pláticas de distintos asesores, una gran variedad de situaciones
                        científicas, docentes y cotidianas en las que es posible usar herramientas matemáticas.</li>
                    <li>Desarrollar un reporte de investigación en donde discutan con profundidad alguna de las
                        situaciones descritas, y cómo las matemáticas juegan un papel importante en ella..</li>
                    <li> Replicar las situaciones discutidas en el aula, sobre todo aquella en la cual decidió
                        profundizar mediante su reporte de investigación.</li>
                </ul>
                <p class="font-semibold mt-4">Cuerpo docente y entidades participantes:</p>
                <P>Se invitará a distintos docentes del Departamento de Matemáticas y de la Facultad de Ciencias de la
                    UNAM para presentar pláticas sobre situaciones científicas, docentes y cotidianas en las que es
                    posible usar herramientas matemáticas:</P>
                <ul class="list-disc pl-12">
                    <li>Dr. Leonardo Ignacio Mart&iacute;nez Sandoval, Depto. Matem&aacute;ticas. Coordinador</li>
                    <li>M. en D. Tania Azucena Chicalote Jim&eacute;nez, Depto. Matem&aacute;ticas. Instructora</li>
                    <li>M. en C. Francisco Struck Ch&aacute;vez, Departamento de Matem&aacute;ticas. Conferencista</li>
                    <li>Dr. Manuel Falconi Maga&ntilde;a, Departamento de Matem&aacute;ticas. Conferencista</li>
                    <li>Mat. Laura Pastrana Ram&iacute;rez, Departamento de Matem&aacute;ticas. Conferencista</li>
                    <li>Mat. Julio C&eacute;sar Guevara Bravo, Departamento de Matem&aacute;ticas. Conferencista</li>
                </ul>
                <p class="font-semibold mt-4">Procesos de evaluación</p>
                <ul class="list-decimal pl-12">
                    <li>Asistencia a las pl&aacute;ticas</li>
                    <li>Elaboraci&oacute;n de reporte de investigaci&oacute;n</li>
                    <li>Presentaci&oacute;n de reporte de investigaci&oacute;n</li>
                </ul>
            </div>
        </div>
        <h2>Justificación General del Diplomado</h2>
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
            <h3>MÓDULO I.- Taller de problemas (42 horas)</h3>
            <p>Coordinador: Dr. Leonardo Ignacio Martínez Sandoval</p>
            <p>Fecha: Del 18 de abril al 23 de mayo de 2023</p>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Introducci&oacute;n a Heur&iacute;sticas
                        <ul>
                            <li>Heur&iacute;sticas en la vida cotidiana</li>
                            <li>Identificaci&oacute;n de heur&iacute;sticas</li>
                        </ul>
                    </li>
                    <li>Buscar un patr&oacute;n
                        <ul>
                            <li>Planteamiento de la heur&iacute;stica</li>
                            <li>Problemas ejemplo</li>
                            <li>Resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Notaci&oacute;n efectiva
                        <ul>
                            <li>Planteamiento de la heur&iacute;stica</li>
                            <li>Problemas ejemplo</li>
                            <li>Resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Hacer una figura
                        <ul>
                            <li>Planteamiento de la heur&iacute;stica</li>
                            <li>Problemas ejemplo</li>
                            <li>Resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Aprovechar la simetr&iacute;a
                        <ul>
                            <li>Planteamiento de la heur&iacute;stica</li>
                            <li>Problemas ejemplo</li>
                            <li>Resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Modificar el problema
                        <ul>
                            <li>Planteamiento de la heur&iacute;stica</li>
                            <li>Problemas ejemplo</li>
                            <li>Resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>MÓDULO II.- Tecnologías de la Información y la Comunicación (TICs) (42 horas)</h3>
            <p>Coordinador: M. en D. Tania Azucena Chicalote Jiménez</p>
            <p>Fecha: Del 25 de mayo al 29 de junio de 2023</p>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Introducci&oacute;n a TIC
                        <ul>
                            <li>Herramientas tecnol&oacute;gicas para la ense&ntilde;anza-aprendizaje GeoGebra</li>
                            <li>Geogebra y la resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Mathematica
                        <ul>
                            <li>Mathematica y la resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Excel/Google Sheets
                        <ul>
                            <li>Excel y la resoluci&oacute;n de problemas</li>
                        </ul>
                    </li>
                    <li>Propuesta did&aacute;ctica con TIC
                        <ul>
                            <li>Presentaci&oacute;n de propuestas did&aacute;cticas con el uso de TIC</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--fin de tema-->
        <div> <!--Tema-->
            <h3>MÓDULO III.- Taller de investigación didáctica (40 horas)</h3>
            <p>Coordinador: Dr. Leonardo Ignacio Martínez Sandoval</p>
            <p>Fecha: Del 1 de agosto al 31 de agosto de 2023</p>
            <div class="contenido">
                <h4>Temas</h4>
                <ul>
                    <li>Se dar&aacute;n algunas conferencias para orientar a los profesores para que escojan
                        alg&uacute;n tema de investigaci&oacute;n, y elijan un asesor para desarrollar el tema a
                        profundidad, por ejemplo:
                        <ul>
                            <li>Introducci&oacute;n a M&oacute;dulo 3 y expectativas de trabajo y evaluaci&oacute;n. 2
                                horas.<br /> Ponentes: Leonardo Ignacio Mart&iacute;nez Sandoval y Tania Azucena
                                Chicalote Jim&eacute;nez</li>
                            <li>Uso did&aacute;ctico de la teor&iacute;a de gr&aacute;ficas en el aula. 8 horas<br />
                                Ponente: Laura Pastrana Ram&iacute;rez</li>
                            <li>Uso del c&aacute;lculo en diversas situaciones de la ciencia. 8 horas<br /> Ponente:
                                Manuel Falconi Maga&ntilde;a</li>
                            <li>Algunos usos did&aacute;cticos de la geometr&iacute;a. 8 horas<br /> Ponente: Francisco
                                Struck Ch&aacute;vez</li>
                            <li>Aplicaciones de la teor&iacute;a de n&uacute;meros. 8 horas<br /> Ponente: Julio
                                C&eacute;sar Guevara Bravo</li>
                            <li>Presentaci&oacute;n de reportes de investigaci&oacute;n. 6 horas<br /> Ponentes: Tania
                                Azucena Chicalote Jim&eacute;nez y Leonardo Ignacio Mart&iacute;nez Sandoval</li>
                        </ul>
                    </li>
            </div>
        </div><!--fin de tema-->
    </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS -->

    <!-- Por si hay temario extendido (pdf), si no, favor de comentarlo. -->
    <!-- <a class="formato-link mt-6" target="_blank"
        href="../../../diplomados/SoluciondeProblemasTICeInvestigacionDidactica/TEMARIOEXTENDIDO_DipIVSolucionProblemasTIC.pdf">
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