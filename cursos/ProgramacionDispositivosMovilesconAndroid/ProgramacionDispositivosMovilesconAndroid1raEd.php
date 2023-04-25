<?php
include '../../includes/templates/header.php';
?>

<?php

$titulo_curso = "Programación de Dispositivos Móviles con Android";
$imagen_curso = "../../assets/images/cursos/bg-FaunaSilvestre.webp"; //Agregar imagen del curso, tamaño forzoso de 19
$edicion = "1ra. Edición";
$fecha = "Del 3 de mayo al 2 de junio de 2023";
$precio_unam = "3,600"; //No es necesario poner mxn
$precio_general = "4,320"; //No es necesario poner mxn
$dias = "Lunes, miercoles y viernes";  //Puedes poner Lunes, Martes, Miercoles, Jueves y Viernes.
$horario = "10:00 a 13:00"; //No es necesario poner hrs
$no_horas = "36"; //No es necesario poner hrs
$modalidad = "Virtual";
$max_alumnos = "60"; //Cantidad de alumnos maxima
$min_alumnos = "15"; //Cantidad de alumnos minima
$descripcion = "El mundo civilizado moderno sería ininteligible sin los dispositivos móviles que poseemos. Nuestro acceso a datos e información de manera expedita resulta ya indispensable para nuestra vida cotidiana y es en buena medida a través de los dispositivos móviles que esto está garantizado. Es por ello que la programación de aplicaciones para dispositivos móviles cobra singular relevancia para aquellos dedicados al desarrollo de software. Todo un enorme potencial de usos y usuarios se abre al desarrollador de aplicaciones móviles.";
$objetivo = "El objetivo del curso es aprender a desarrollar aplicaciones en dispositivos móviles como teléfonos celulares, tablets, handhelds, y consolas de juegos en la plataforma Android 13.";
$dirigido_a = "Personas con interés en desarrollar aplicaciones para dispositivos móviles con conocimientos básicos de lenguaje Java y del lenguaje de marcado XML.";
$requisitos = "Los alumnos deberán traer una laptop.
Tener conocimientos básicos de programación en Java. <br> <b>Especificaciones mínimas del equipo y paquetería a utilizar:</b><br>
    Laptop 14 pulgadas - Intel Core i5 o AMD Ryzen™ 7 - 8 GB RAM – Disco duro de 512 SSD Microsoft office – Adobe Acrobat - Java version 8 – Android Studio";
$lugar = "Zoom"; //El lugar donde se va a impartir, si son varios, agregar todos y separar con <br>
$formato_inscripcion = "https://forms.gle/wwn996LgigXLKmsM6"; //Pegar el formato de inscripcion
$info_academica="M. en C. Gustavo Márquez Flores<br>
Correo electrónico: gmarquez@ciencias.unam.mx" //Agregar el Nombre <br> correo, dando un br para saltar de linea.
?>

<!-- Se debe modificar la parte de los profes que viene abajo. -->
<!-- La parte más pesada es agregar el temario. Se puede usar ese o una tabla como la que normalmente creas, ya agregue estilos para que se adapten, ver ejemplo de primeros auxilios.-->
<!-- Start Hero -->
<section class="portada">
    <img src="../../assets/images/cursos/bg-FaunaSilvestre.webp" alt="">
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
                    <a href="../../assets/curriculums_docentes/GustavoMarquezFlores.pdf" target="_blank">M. en C. Gustavo Márquez Flores</a>
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
        <!-- Si el curso no tiene descuento, solo debe quitarse el p. -->
        
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
<section class="temario container">
    <h2>Temario</h2>
    <div class="secciones grid md:grid-cols-2 grid-cols-1">
        <!-- ******SECCIÓN PARA CADA TEMA CON SUS SUBTEMAS *****-->
        <div>
            <h3>I. Introducción</h3>
            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> I.1 Dispositivos Móviles.</td>
                        </tr>

                        <tr>
                            <td>I.2. Clasificación y aplicaciones de los dispositivos móviles.</a></td>
                        </tr>

                        <tr>
                            <td>I.3. Plataformas de programación para dispositivos móviles.</td>
                        </tr>

                        <tr>
                            <td>I.4. Presentación de la plataforma Android.</td>
                        </tr>
                        <tr>
                            <td>I.5. La plataforma Android, entorno, anatomía y las capas de su arquitectura..</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--********FIN DE SECCIÓN PARA CADA TEMA CON SUS SUBTEMAS********-->
        
        <div>
            <h3>II. Programación</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Temas
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                II.1 Instalación y configuración del entorno de desarrollo (Android Studio y SDK Android).
                            </td>
                        </tr>

                        <tr>
                            <td>
                                II.2. Elementos esenciales en la creación de aplicaciones Android.
      - Activity, Context y Ciclos de vida de Activities
                            </td>
                        </tr>
                        <tr>
                            <td>
                                II.3. Interfaz de usuario.
      - Layouts, recursos, ActionBar, menús, listas, popups, webview, fragmentos, pestañas, etc.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                II.4. Gestión de la navegación y la comunicación entre las distintas interfaces.
      - Material Design, Toolbar, CardView, notificaciones Android Wear.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                II.5. Interfaces Personalizadas.
      - Gestión de temas, animaciones, tipografía.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                II.6. Gestión de los distintos eventos de usuario.
      - Clicks y rotación.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>III. Gestión de la fragmentación de la plataforma</h3>
            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>III.1. Versiones de Android, tamaño y resolución de pantallas, diferencias en el hardware.
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>IV. Almacenamiento y recuperación de Datos</h3>

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
                                Servicios web, gestión de la conectividad, parsing Xml / Json.
      - Shared Preferences, archivos, base de datos SQLite.
                            </td>
                        </tr>

                        <tr>
                            <td>IV.2.
                            Compartir datos con otras aplicaciones.
      - Content Provider, Intent.
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


        <div>
            <h3>V. Mapas digitales y localización</h3>

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
                            Google Maps, localización (GPS), conversión posición/dirección.
                            </td>
                        </tr>
                        <tr>
                            <td>V.2.
                            Uso de servicios Android.
                            </td>
                        </tr>
                        <tr>
                            <td>V.3.
                            Conectividad (WIFI).
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>VI. Métodos de acceso a las diferentes funcionalidades de un dispositivo Android.</h3>
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
                            Llamadas, sms, cámara, acelerómetro, Bluetooth.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h3>VII. Publicación y comercialización</h3>

            <div class="contenido">
                <table>
                    <thead>
                        <tr>
                            <th>Temas</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>VII.1.
                            Proteger el código fuente.
                            </td>
                        </tr>


                        <tr>
                            <td>VII.2.
                            Comercialización de aplicaciones.
                            </td>
                        </tr>

                </table>
            </div>
        </div>

        </div> <!-- TERMINA EL CONTENEDOR DE LOS SUBTEMAS --> 
    
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
                        <p class="text-slate-400 dark:text-gray-400"><?php echo $info_academica?> 
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