<?php
include '../../includes/templates/header.php';
?>

<?php

$titulo_curso = "Actualización Docente en Física.<br>Cursos con Opción a Diplomado.<br>
Diplomado de titulación en Física.";
$imagen_curso = "../../assets/images/diplomados/bg-DiplomadoFisica.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "Programa 2022-2023";
$fecha = "Del 19 de mayo de 2022 al 7 de diciembre de 2023";
$precio_unam = "1,200"; //No es necesario poner mxn
$precio_general = "1,500"; //No es necesario poner mxn
$dias = "Martes y/o jueves";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "16:00 a 20:00 hrs."; //Lo puedes poner en el formato que gustes. No debe ser mucha info. 
//Si es demasiada puedes agregar más detalles despues donde esta la sección de Requisitos, Horario y Lugar, 
//solo quitas la variable, puedes ver el ejemplo de Cursos en cuadernos de jupyter
$no_horas = "240"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "No hay un máximo."; //Cantidad de alumnos maxima
$min_alumnos = "5"; //Cantidad de alumnos minima
$descripcion = "Una de las tareas sustantivas del quehacer universitario es la docencia, la cual no puede desligarse de la investigación y la difusión del conocimiento. Considerando que en las licenciaturas del área de las ciencias físico-matemáticas y de las ingenierías no se suele contemplar en los planes de estudios asignaturas encaminadas a la formación de docentes expertos en la disciplina y tomando en cuenta la importancia que tiene el contar con profesores de Física que no sólo dominen la disciplina que enseñan, sino que también cuenten con las herramientas y recursos necesarios para guiar al estudiante durante todo el proceso de enseñanza-aprendizaje, planteando nuevas estrategias didácticas encaminadas a fomentar un aprendizaje significativo, en 2007 se empezó a impartir el “Programa de Actualización Docente en Física. Cursos con opción a Diplomado”.
Este diplomado está orientado a que los profesores de Física en activo, y los estudiantes de la licenciatura en Física interesados en la docencia, contextualicen la práctica docente dentro de una sociedad del conocimiento y la información, reconociendo a la Física como una de las ciencias que contribuye directamente a la transformación de la sociedad a través del desarrollo de nuevas teorías y tecnología.
En este diplomado, constituido por módulos de 20 hrs., que se impartirán en línea, se hace un recorrido por las grandes áreas de la Física, como son: la mecánica clásica, la termodinámica, el electromagnetismo y la física cuántica, así como por las nuevas áreas de investigación que actualmente se desarrollan.
En cada uno de los módulos se pretende que el participante valore la importancia de la actualización en la enseñanza de la disciplina, recorriendo además el camino de la planeación y ejecución de estrategias didácticas que posibiliten a los estudiantes analizar situaciones, se adapten a los cambios y aprendan de sus experiencias, desarrollando su creatividad, innovación y responsabilidad, de forma que alcancen aprendizajes para toda la vida y capacidad de afrontar la complejidad de su entorno.
Cabe mencionar que el Consejo Técnico de la Facultad de Ciencias, en su sesión del 29 de noviembre de 2006, acordó que el “Programa de Actualización Docente en Física. Cursos con Opción a Diplomado” pudiera ser utilizado por los estudiantes que así lo deseasen como opción de titulación, por Profundización y Ampliación del Conocimiento, para la Licenciatura en Física. Desde su inicio, este programa, conocido en forma coloquial como Diplomado de Titulación en Física, ha cumplido más que satisfactoriamente con su objetivo, pues a través de él se han titulado hasta el momento más de 65 Físicos que han considerado a la docencia como su actividad profesional principal.";
$objetivo = "Mejorar los conocimientos disciplinarios y aportar elementos didácticos que enriquezcan la práctica docente de los profesores de Física del nivel medio superior y de los alumnos de la Licenciatura en Física interesados en la docencia. El trabajo realizado en estos cursos, impartidos por expertos académicos en cada tema, permitirá a los asistentes reforzar sus bases teóricas y prácticas y conocer nuevas propuestas en didáctica de la Física, aplicables al trabajo cotidiano en el aula.";
$dirigido_a = "Estudiantes de la licenciatura en Física, interesados en la docencia, y profesores de Física de todos los niveles educativos.";
$requisitos = "Los profesores de educación media superior deberán poseer el título de Físico o licenciatura afín, o haber cubierto el 100% de los créditos de la licenciatura en Física o licenciatura afín.
<br>Los estudiantes de la Licenciatura en Física de la Facultad de Ciencias que deseen obtener el título a través de la modalidad de Ampliación y Profundización del Conocimiento deberán comprobar haber cubierto el 75% de los créditos de la licenciatura.";
$lugar = "El diplomado se impartirá en línea. En caso de necesitarse alguna reunión presencial se realizará en alguno de los salones de seminarios del Departamento de Física de la Facultad de Ciencias.
Las sesiones virtuales se impartirán en martes y/o jueves de 16:00 a 20:00 hrs"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/wwn996LgigXLKmsM6"; //Pegar el formato de inscripcion
$info_academica = "Dra. Mirna Villavicencio Torres <br>
mirnavt@ciencias.unam.mx, teléfono: 5622 8622 extensión 44717
<br>Dr. Ricardo Méndez Fragoso<br>
rich@ciencias.unam.mx, teléfono: 5622 4964" //Agregar el Nombre <br> correo, dando un br para saltar de linea.
?>

<!-- Se debe modificar la parte de los profes que viene abajo. -->
<!-- La parte más pesada es agregar el temario. Se puede usar ese o una tabla como la que normalmente creas, ya agregue estilos para que se adapten, ver ejemplo de primeros auxilios.-->
<!-- Start Hero -->
<section class="portada">
    <img src="<?php echo $imagen_curso?>" alt="Imagen del curso">
    <div class="portada-opacity"></div>
    <div class="container">
        <div class="portada-informacion">
            <span class="portada-informacion-pu">$<?php echo $precio_unam ?> /
                UNAM</span>
            <span class="portada-informacion-pg">$<?php echo $precio_general ?> /
                GENERAL</span>

            <!-- Si no tiene descuento se borra esta sección -->
            <p>Para quienes cursen el Programa como opción de titulación, el costo es de $12,000.00 si se pagan los 12 módulos en una sola exhibición</p>
            <!--Cierre de la sección de descuentos.-->

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
                    <a href="../../assets/curriculums_docentes/RosaliaPastorNieto.pdf" target="_blank">Dra. Rosalía Pastor Nieto</a>
                </div>
            </div>
            <!-- Fin de datos de profe -->
            <!-- FIN - PROFESORES QUE IMPARTEN -->
            <div class="fecha">
                <i class="uil uil-calendar-alt"></i>
                <span><?php echo $fecha ?></span>
                <span>El siguiente curso inicia 4 de mayo de 2023: Estrategias Didácticas para la Enseñanza de la Mecánica Cuántica.</span>
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
            Mín / Máx de alumnos: Mínimo <?php echo $min_alumnos ?>.<?php echo $max_alumnos ?>.<br>
            Para la apertura de un módulo es necesario contar con al menos 5 estudiantes inscritos.</p>
        <p class="mt-4"><b>Importante: se puede inscribir a partir de cualquiera de estos cursos, y completar las horas deseadas incluso en la edición siguiente de este Diplomado.</b></p>
        <h2>Características del programa</h2>
        <ul class="list-disc pl-12">
            <li>En cada curso se emitirá una constancia de acreditación.</li>
            <li>Quienes acrediten ocho cursos (160 horas-curso) con promedio mínimo de ocho en un lapso no mayor a 12 meses, obtendrán un <b>diploma de acreditación del Diplomado de Actualización Docente en Física.</b></li>
            <li>Los egresados de la Licenciatura en Física de la Facultad de Ciencias podrán obtener el título profesional por la <b>modalidad de titulación por Ampliación y Profundización del Conocimiento</b> acreditando con un promedio mínimo de 8.5 los cursos correspondientes a 240 horas de este diplomado (no necesariamente en orden consecutivo) y cumpliendo los requisitos académicos adicionales fijados para tal efecto por el Consejo Técnico de la Facultad de Ciencias, además del servicio social y la acreditación del idioma inglés.</li>
        </ul>
        <h2>Cuerpo docente y entidades participantes:</h2>
        <ul class="pl-12 list-decimal">
            <li>Dr. Francisco Nettel Rueda. Profesor Asociado C de TC, Facultad de Ciencias</li>
            <li>Dra. Patricia Goldstein Menache. Profesora Titular C de TC, Facultad de Ciencias</li>
            <li>Dra. Mirna Villavicencio Torres. Profesora Titular B de TC, Facultad de Ciencias</li>
            <li>Dra. Adriana Andraca Gómez. Profesor Asociado C de TC, Facultad de Ciencias</li>
            <li>Dr. Ricardo Méndez Fragoso. Profesor Titular B de TC, Facultad de Ciencias</li>
            <li>Dra. Roxana Mitzayé Del Castillo Vázquez. Profesor Asociado C de TC, Facultad de Ciencias</li>
            <li>Dr. Raúl Arturo Espejel Morales. Profesor Titular A de TC, Facultad de Ciencias</li>
            <li>Dra. Vicenta Sánchez Morales. Profesor Titular C de TC, Facultad de Ciencias</li>
            <li>Dr. Sergio Enrique Solís Nájera. Profesor Titular A de TC, Facultad de Ciencias</li>
            <li>Dr. Manuel Gerardo Quintana García. Profesor Titular A de TC, Facultad de Ciencias</li>
            <li>Dra. Karla Paola García Pelagio. Profesor Asociado C de TC, Facultad de Ciencias</li>
        </ul>
        <h2>Coordinadores académicos del programa:</h2>
        <p>Dra. Mirna Villavicencio Torres. Departamento de Física</p>
        <p>Dr. Ricardo Méndez Fragoso. Departamento de Física

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
                        <a class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Total: <?php echo $no_horas ?> horas <br> 60 sesiones virtuales en total
                            <br>12 cursos con una duración de 20 horas cada uno</a>
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
        <!-- Si el curso no tiene descuento, solo debe quitarse el p. -->
        <p class="text-red-600 max-w-xl mx-auto text-center">Para quienes cursen el Programa como opción de titulación, el costo es de $12,000.00 si se pagan los 12 módulos en una sola exhibición.
        </p>
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
                    <li><i class="uil uil-check-circle"></i>por módulo pesos para alumnos, exalumnos, personal y tesistas de la UNAM</li>
                </ul>

                <a href="#inscripcion" class="btn">Inscribirse</a>
            </div>
        </div>
    </div>

</section>



<!-- Este ejemoplo es para cuando se muestra en forma de tabla -->
<!-- TEMARIO SECCIÓN: -->
<section class="temario-tabla container">
    <h2>Temario</h2>
    <table border="1" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td class="text-white" bgcolor="#003d64">
                    <p align="center"><strong>
                            Nombre del curso <br>
                            y contenidos generales</strong></p>
                </td>

                <td class="text-white" bgcolor="#003d64">
                    <p align="center"><strong>
                            Instructor</strong></p>
                </td>

                <td class="text-white" bgcolor="#003d64">
                    <p align="center"><strong>
                            Fechas de impartición </strong></p>
                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>
                            I. La Enseñanza de la Mecánica Clásica <br>
                        </strong> <br>

                        I.1. Leyes de movimiento<br>
                        a) Cinemática<br>
                        b) Dinámica<br>
                        c) El oscilador armónico<br>
                        I.2. Trabajo y Energía<br>
                        a) Definiciones y leyes de conservación. <br>
                        b) Diagramas de energía<br>
                        I.3. Gravitación <br>
                        a) Ley de gravitación universal <br>
                        b) El concepto de campo gravitacional y potencial gravitacional <br>
                        c) Principio de equivalencia galileano <br>
                        I.4. Una mirada a la Mecánica Analítica <br>
                        a) Introducción mínima al principio variacional de Hamilton <br>

                    </p>
                </td>

                <td>
                    <p align="center"> Dr. Francisco Nettel Rueda </p>
                </td>
                <td>
                    <p>19 y 26 de mayo: 2, 9 y 16 de junio de 2022 </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            II. Didáctica de la Física utilizando experiencias de la vida cotidiana <br>
                        </strong> <br>

                        II.1 La enseñanza y la práctica docente en contexto. <br>
                        II.2 Hacia un aprendizaje significativo de la Física a través de la enseñanza situada <br>
                        II.3 Estrategias didácticas para la enseñanza de la física <br>
                        II.4 Elaboración de secuencias didácticas utilizando: <br>
                        a) El electromagnetismo en nuestro día a día. Algunos conceptos básicos y sus aplicaciones en el desarrollo de la tecnología que tenemos a nuestro alcance <br>
                        b) La Termodinámica en nuestra vida cotidiana. Sus leyes y aplicaciones en la vida y la generación de energía. <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Patricia Goldstein Menache y
                        Dra. Mirna Villavicencio Torres
                    </p>
                </td>
                <td>
                    <p>
                        28 de julio: 4, 11 18, y 25 de agosto de 2022
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>
                            III. Estrategias Didácticas para la Enseñanza de la Termodinámica <br>
                        </strong> <br>

                        III.1 Repaso de conceptos utilizados en Termodinámica <br>
                        a) Calor y Temperatura (Ley cero) <br>
                        b) Conservación de la Energía (Primera Ley) <br>
                        c) Procesos permitidos por la Segunda Ley de la Termodinámica <br>
                        d) Cambios de Estado <br>
                        III.2. Más allá de la Termodinámica Clásica <br>
                        a) Termodinámica conectada con otras áreas de la Física <br>
                        b) Termodinámica y otras áreas del conocimiento. <br>
                        III.3 Enseñanza de la Termodinámica. <br>
                        a) Demostraciones que faciliten la comprensión de los conceptos en Termodinámica <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Adriana Andraca Gómez
                    </p>
                </td>
                <td>
                    <p>
                        8, 22 y 29 de septiembre; 6 y 13 de octubre de 2022
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            IV. Enseñanza de la Física utilizando problemas integrados en la Ciencia. <br>
                        </strong> <br>

                        IV. 1 Planteamiento de proyectos científico <br>
                        a) Enfoque de los problemas científicos disciplinarios vs multidisciplinarios. <br>
                        b) Solución de problemas integrados de mecánica, electromagnetismo y termodinámica. <br>
                        IV.2 Uso de las TIC’s en la enseñanza de la Física <br>
                        a) Plataforma Jupyter, Arduino y RaspberryPi en experimentos y simulaciones en Física <br>
                        b) Utilización de plataformas digitales en la exposición de experimentos. <br>
                        c) Experimentos integrados utilizando las TIC’s. Plataformas como Google-Classroom y Moodle. <br>
                        IV.3 Generación proyectos con experimentos de Física con impacto en la enseñanza de las ciencias. <br>


                    </p>
                </td>

                <td>
                    <p align="center">
                        Dr. Ricardo Méndez Fragoso
                    </p>
                </td>
                <td>
                    <p>
                        27 de octubre; 3, 10, 17 y 24 de noviembre de 2022
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            V. Física de Materiales <br>
                        </strong> <br>

                        V.1 Introducción a la Física de Materiales <br>
                        a) Tipos de materiales <br>
                        V.2 Estructura, arreglo y movimiento de átomos <br>
                        a) Estructura Cristalina <br>
                        b) Simetría Cristalina <br>
                        c) Difracción de onda y red recíproca <br>
                        V.3 Electrones en sólidos <br>
                        a) Aproximación de amarre fuerte <br>
                        b) Teorema de Bloch <br>
                        c) Aproximación de electrón libre <br>
                        d) Transporte electrónico <br>
                        V.4 Vibraciones de red y propiedades térmicas de los materiales <br>
                        a) Calor específico <br>
                        b) Fonones <br>
                        c) Transporte térmico <br>
                        V.5 Introducción a la química de materiales <br>
                        a) Enlace químico e Interacciones moleculares <br>
                        b) Periodicidad e Hibridación <br>
                        c) Teoría de orbitales moleculares <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Roxana Mitzayé Del Castillo Vázquez
                    </p>
                </td>
                <td>
                    <p>
                        8 y 15 de diciembre de 2022; 5, 12 y 19 de enero de 2023
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            VI. Estrategias didácticas para la enseñanza del electromagnetismo <br>
                        </strong> <br>

                        VI.1. Carga eléctrica. <br>
                        a) Conservación y cuantización de la carga. <br>
                        b) Transferencia de carga. <br>
                        VI. 2. Interacción electrostática. <br>
                        a) Ley de Coulomb <br>
                        b) Campo Eléctrico <br>
                        c) Energía Potencial eléctrica y Diferencia de potencial. <br>
                        VI.3. La Ley de Gauss. <br>
                        a) Conductores, Aislantes y Semiconductores. <br>
                        b) Jaula de Faraday. Transistores. <br>
                        VI.4. Corriente eléctrica. <br>
                        a) Capacitancia. <br>
                        b) Resistencia. <br>
                        c) Ley de Ohm. <br>
                        d) Efecto Joule. Potencia eléctrica. <br>
                        e) Circuitos eléctricos. <br>
                        VI.6. Transformación de la energía. VI.7. Campo Magnético. Fuerza de Lorentz. <br>
                        VI.8. Ley de Ampere. Ferromagnetismo. Paramagnetismo. Diamagnetismo. Electroimanes y levitación magnética. <br>
                        VI.9. Inducción magnética. Ley de Faraday. Ley de Lenz <br>
                        VI.10. Generación de energía eléctrica. Motores, Generadores, Transformadores <br>
                        VI.11. Ondas electromagnéticas y sus aplicaciones <br>
                        VI.12. El electromagnetismo como generador de las ideas cuánticas y de la relatividad especial <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Mirna Villavicencio Torres
                    </p>
                </td>
                <td>
                    <p>
                        2, 9, 16 y 23 de febrero; 2 de marzo de 2023
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            VII. Temas Selectos de Computación <br>
                        </strong> <br>

                        VII.1 Introducción a la Programación <br>
                        a) Manejo de listas, tuplas y diccionarios. <br>
                        b) Condicionales if, modificadores de flujo for y while <br>
                        c) Definición y evaluación de funciones. <br>
                        VII.2 Métodos de análisis de datos (Resultados estadísticos, mínimos cuadrados, etc.) <br>
                        VII.3 Métodos numéricos: <br>
                        a) Evaluación numérica de integrales definidas <br>
                        b) Solución de sistemas de ecuaciones. <br>
                        c) Solución de ecuaciones no lineales. <br>
                        d) Solución de ecuaciones diferenciales. <br>
                        VII.4 Herramientas de visualización. <br>
                        a) Visualización de sólidos 3D. <br>
                        b) Animación. <br>
                        c) Integración de métodos numéricos para la simulación y visualización de sistemas dinámicos. <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dr. Raúl Arturo Espejel Morales
                    </p>
                </td>
                <td>
                    <p>
                        16, 23 y 30 de marzo; 13 y 20 de abril de 2023
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            VIII. Estrategias Didácticas para la Enseñanza de la Mecánica Cuántica. <br>
                        </strong> <br>

                        VIII.1 Antecedentes de la Mecánica Cuántica <br>
                        a) Descripción semi-clásica de la luz. <br>
                        b) Naturaleza atómica de la materia. <br>
                        c) Dualidad onda-partícula. <br>
                        VIII. 2 Mecánica Cuántica <br>
                        a) Postulados de la Mecánica Cuántica. <br>
                        b) Problemas típicos en la Mecánica Cuántica. <br>
                        c) Mecánica Cuántica en la actualidad (aplicaciones) <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Vicenta Sánchez Morales
                    </p>
                </td>
                <td>
                    <p>
                        4, 11, 18 y 25 de mayo; 1 de junio de 2023
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            IX. El calentamiento global: Un punto de vista termodinámico. <br>
                        </strong> <br>

                        IX.1 Un repaso a la Termodinámica de equilibrio: Ley Cero y Primera Ley de la Termodinámica. Sistemas abiertos y cerrados. <br>
                        IX.2 Máquinas térmicas. La Segunda Ley de la Termodinámica. Reversibilidad e irreversibilidad. <br>
                        IX.3 El efecto invernadero y su modificación <br>
                        IX.4 Las cuatro revoluciones industriales: Del siglo XVIII al siglo XXI. Generación de energía útil <br>
                        IX.5 Evidencias del calentamiento global en nuestro planeta debido al forzamiento antropogénico: Observatorio de Mauna Loa <br>
                        IX.6 Posibles escenarios en el futuro <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Patricia Goldstein Menache
                    </p>
                </td>
                <td>
                    <p>
                        15, 22 y 29 de junio; 27 de julio y 3 de agosto de 2023
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            X. Electrónica en la enseñanza de la Física <br>
                        </strong> <br>

                        X.1 Conceptos Básicos <br>
                        a) Ley de Ohm <br>
                        b) Análisis de Circuitos <br>
                        c) Circuito de estados transitorios. Circuitos RC, RL y RLC <br>
                        X.2 Física del estado sólido de semiconductores <br>
                        a) Diodo <br>
                        b) LED <br>
                        c) Transistores <br>
                        X.3 Amplificadores Operacionales <br>
                        X.4 Electrónica Digital <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dr. Sergio Enrique Solís Nájera
                    </p>
                </td>
                <td>
                    <p>
                        15, 22 y 29 de agosto; 4 y 11 de septiembre de 2023
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>

                            XI. Historia de la Física <br>
                        </strong> <br>

                        XI.1 El saber frente a la ciencia <br>
                        a) El Saber frente a la Ciencia: <br>
                        b) La Tradición Oral. <br>
                        c) El fenómeno humano. Sociedades de cazadores y recolectores. Su tecnología y sus mitos. <br>
                        d) Las primeras sociedades agrícolas y ganaderas. Su tecnología y mitos. <br>
                        e) Las primeras ciudades: Civilización. Tecnología y mitos fundacionales: La Religión como orden del Mundo. <br>
                        f) La Escritura: tecnología de la palabra. <br>
                        XI.2 Movimiento <br>
                        a) El cosmos: Astronomía en sociedades primitivas y civilizaciones antiguas. <br>
                        b) Los filósofos griegos y el problema del movimiento. <br>
                        c) Arquímedes, la escuela de Alejandría. <br>
                        d) El Calendario: Lunar y Solar. <br>
                        e) Ptolomeo. El Almagesto. <br>
                        f) La navegación, las rutas comerciales y los viajes de descubrimiento. <br>
                        g) La Iglesia y el problema del Calendario. <br>
                        h) Modelo Heliocéntrico de Copérnico. <br>
                        i) La supernova de 1572 y Tycho Brahe. <br>
                        j) Johannes Kepler. <br>
                        k) Galileo, la experimentación, el telescopio y la formulación del movimiento. <br>
                        l) El problema de los fluidos y el vacío: Pascal, los Bernoulli, Torricelli <br>
                        m) Newton, Leibniz, Hooke, Huygens: la invención de la Física. <br>
                        XI.3 Calor <br>
                        a) La transformación de la materia: los cuatro elementos. <br>
                        b) La Alquimia. <br>
                        c) La termometría. Escalas termométricas. <br>
                        d) Lavoisier y Rumford: el fin del calórico. <br>
                        e) La máquina de vapor: el calor y el trabajo mecánico. <br>
                        f) La eficiencia de las máquinas térmicas. <br>
                        g) La conservación de la energía: Joule y Meyer. <br>
                        h) De los gases: Boyle, Newton, Boltzmann. <br>
                        i) La Matematización de la Termodinámica: Kelvin, Clausius, Gibbs, Caratheodory, Planck <br>
                        XI.4 IV. Electromagnetismo <br>
                        a) La electrostática y el magnetismo: Bacon y Gilbert. La Botella de Leyden y la carga eléctrica. <br>
                        b) Conductores y aislantes. <br>
                        c) Coulomb y la Fuerza Eléctrica: la acción a distancia. <br>
                        d) Del flujo de carga: la corriente eléctrica. <br>
                        e) La electricidad animal y la electricidad mineral: Galvani y Volta. <br>
                        f) El campo eléctrico y el campo magnético. Ley de Ampere y Ley de Faraday. <br>
                        g) Las ecuaciones de Maxwell y la radiación electromagnética. <br>
                        XI.5 Materia <br>
                        a) La luz: onda y partícula. <br>
                        b) Postulado de De Broglie. <br>
                        c) La Teoría Especial de la Relatividad. <br>
                        d) Experimento de la doble rendija. <br>
                        e) El átomo y el electrón: Modelos atómicos. <br>
                        f) El nacimiento de la Mecánica Cuántica. <br>
                        g) Interpretaciones de la Mecánica Cuántica. <br>
                        h) La Radioactividad. La Física Nuclear. <br>
                        i) Las partículas sub atómicas y las simetrías. <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dr. Manuel Gerardo Quintana García
                    </p>
                </td>
                <td>
                    <p>
                        28 de septiembre; 5, 12, 19 y 26 de octubre de 2023.
                    </p>

                </td>
            </tr>


            <tr>
                <td>

                    <p><strong>
                            XII. Introducción a la Física Biomédica <br>
                        </strong> <br>
                        XII.1 Antecedentes y su relación con la Física Medica <br>
                        XII.2 Física de detrás de los dispositivos médicos de uso común <br>
                        XII.3 Aplicaciones médicas <br>
                        XII.4 Aplicaciones Industriales <br>
                        XII.5 Ejemplos en casos clínicos <br>

                    </p>
                </td>

                <td>
                    <p align="center">
                        Dra. Karla Paola García Pelagio
                    </p>
                </td>
                <td>
                    <p>
                        9, 16,23, 30 de noviembre y 7 de diciembre de 2023
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<!-- Start Section-->
<section class="oferta-academica">
    <div class="container">
        <h2>Acreditación de los cursos</h2>
        <p>Para acreditar cualquiera de los cursos y tener derecho a la constancia correspondiente será necesario cumplir con los siguientes requisitos:</p>
        <ul class="list-disc pl-12">
            <li><b>Académicos:</b> <br>Asistir puntualmente al 100% de las sesiones del curso.<br>
                Obtener calificación mínima aprobatoria de siete.</li>
            <li><b>Administrativos:</b><br> Inscribirse al curso en las fechas y horarios estipulados. <br>
                Haber cubierto la cuota correspondiente al curso.</li>
        </ul>
        <h2>Acreditación del diplomado</h2>
        <p>Para acreditar el Diplomado de actualización docente en Física es necesario cumplir con los siguientes requisitos:</p>
        <ul class="list-disc pl-12">
            <li><b>Académicos:</b> <br>Aprobar un mínimo de ocho cursos en un periodo no mayor a 12 meses.<br>
                Obtener un promedio general mínimo de ocho en los cursos aprobados.</li>
            <li><b>Administrativos:</b><br> Haber cubierto los pagos de los cursos tomados en el programa.<br></li>
        </ul>
        <h2><b>Los egresados de la licenciatura en Física de la Facultad de Ciencias podrán obtener el título profesional </b>al cumplir con los siguientes requisitos:</h2>
        <p>Para acreditar el Diplomado de actualización docente en Física es necesario cumplir con los siguientes requisitos:</p>
        <ul class="list-disc pl-12">
            <li><b>Académicos:</b> <br>Aprobar con un promedio mínimo de 8.5 general los cursos correspondientes a 240 hrs (no necesariamente en orden consecutivo)<br>
                100% de los créditos de la licenciatura<br>Trabajo de Servicio Social concluido<br>Aprobado el examen de inglés</li>
        </ul>
    </div>
</section>

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