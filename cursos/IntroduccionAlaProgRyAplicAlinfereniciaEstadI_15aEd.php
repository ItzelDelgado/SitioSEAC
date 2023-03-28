<?php
  include './includes/templates/header.php';
?>

    <!-- Start Hero -->
    <section
        class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/cursos/bg-CursoR.webp')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <span class="bg-green-600 text-white text-xs font-bold px-2.5 py-0.5 rounded w-fit mx-auto h-5">$4,000 /
                    UNAM</span>
                <span class="bg-blue-900 text-white text-xs font-bold px-2.5 py-0.5 rounded w-fit mx-auto h-5">$5,000 /
                    GENERAL</span>
                <h3 class="mt-3 text-3xl leading-normal font-medium text-white">Introducción a la programación en R y su
                    aplicación a la inferencia estadística I</h3>
                <p class="text-indigo-600">15a. Edición</p>
                <div class="flex items-center mx-auto mt-3">
                    <img src="../assets/images/instructores/usr-m.jpg"
                        class="h-10 w-10 rounded-full shadow-md dark:shadow-gray-800" alt="">
                    <a href="/assets/curriculums_docentes/JesusJuradoMolina.pdf"
                        class="font-semibold text-white block ml-3 hover:text-indigo-600" target="_blank">Dr. Jesús
                        Jurado Molina</a>
                </div>

                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <i class="uil uil-calendar-alt text-lg text-white align-middle"></i>
                    <span class=" text-white text-base font-bold px-2.5 py-0.5 rounded w-fit mx-auto h-5">Del 6 de mayo
                        al 24 de junio de 2023</span>
                </div>

            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                <!-- <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="index-course.php">Techwind</a></li>
                   <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a href="course-listing.php">Courses</a></li>
                    <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">Web Development</li> -->

                <li class="inline-block items-center mt-2 mx-3">
                    <i class="uil uil-calendar-alt text-white align-middle"></i>
                    <span class="text-white/60 ml-1">Sábado</span>
                </li>

                <li class="inline-block items-center mt-2 mx-3">
                    <i class="uil uil-bell-school text-white align-middle"></i>
                    <span class="text-white/60 ml-1">10-15 h</span>
                </li>

                <li class="inline-block items-center mt-2 mx-3">
                    <i class="uil uil-clock text-white align-middle"></i>
                    <span class="text-white/60 ml-1">40 horas</span>
                </li>

                <li class="inline-block items-center mt-2 mx-3">
                    <i class="uil uil-map-marker text-white align-middle"></i>
                    <span class="text-white/60 ml-1">Vía Zoom o Meet</span>
                </li>

                <li class="inline-block items-center mt-2 mx-3">
                    <i class="uil uil-user-circle text-white align-middle"></i>
                    <span class="text-white/60 ml-1">Máx. 60 / Min. 15</span>
                </li>

                <li class="inline-block items-center mt-2 mx-3">
                    <i class="uil uil-shopping-cart text-white align-middle text-green-600"></i>
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
    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="container">
            <div class="grid grid-cols-1">
                <h5 class="text-2xl font-semibold mb-5">Descripción</h5>

                <p class="mb-3">La mayoría de los fenómenos que se estudian en la biología, ecología, ciencias de la
                    salud, ciencias sociales, ciencias ambientales, ingeniería etc., presentan una variabilidad natural
                    inherente por lo que para su estudio y análisis es necesario usar técnicas cuantitativas y
                    herramientas estadísticas. En particular la inferencia estadística ha jugado un papel muy importante
                    en la prueba de hipótesis y análisis de datos. Debido a la complejidad de los fenómenos y la
                    cantidad significante de datos que se recopilan en la actualidad, es necesario usar computadoras y
                    software estadístico para facilitar las tareas de investigación. Aunque existen una cantidad
                    importante de paquetes de software estadístico (SPSS, Statistica, Systat, Minitab, etc.), el paquete
                    estadístico R se ha posicionado como uno de los paquetes estadísticos preferidos en la
                    investigación. R es un lenguaje y medioambiente para el cómputo estadístico y gráficas. Es un
                    software de acceso abierto y gratuito, basado en el lenguaje y medioambiente S desarrollado por Bell
                    laboratorios. R provee una gran variedad de técnicas estadísticas (modelación linear y no linear,
                    pruebas de estadística clásica, análisis de series de tiempo, clasificación, clustering….) y
                    graficas. R se compila y corre en una variedad de sistemas operativos (Windows, Mac, Linux, etc.).
                    Otra característica importante de R es su capacidad para expandir sus capacidades a través de la
                    incorporación de paquetes desarrollados por un número importante de contribuyentes. Estas
                    características confieren a R una gran flexibilidad y poder para realizar análisis estadísticos y
                    gráficos por lo que es muy recomendable su aprendizaje y uso para estudiantes y científicos en la
                    mayoría de las áreas de la ciencia. Para aquellos fenómenos complejos que requieren un enfoque
                    cuantitativo en su análisis, el paquete estadístico R es la herramienta ideal en la investigación.
                </p>
            </div><!--end grid-->


            <div class="grid grid-cols-1">
                <h6 class="text-2xl font-semibold mb-5 mt-6">Objetivo</h6>

                <p class=" mb-3">Aprender la programación y uso del paquete estadístico R y sus aplicaciones a la
                    enseñanza y la investigación.
                </p>
            </div><!--end grid-->



            <div class="grid grid-cols-1">
                <h6 class="text-2xl font-semibold mb-5 mt-6">Dirigido a</h6>

                <p class=" mb-3">Biólogos, Oceanógrafos, Oceanólogos, economistas, físicos, matemáticos, estudiantes de
                    postgrado, investigadores y profesionales en áreas multidisciplinarias.
                </p>

                <p class="text-red-600 mb-3">
                    Mín / Máx de alumnos: Mínimo 15, máximo 60.<br>
                    La apertura del curso está sujeta al mínimo de inscritos.</p>

            </div><!--end grid-->


            <!-- <div class="grid md:grid-cols-2 grid-cols-1 mt-6 gap-[30px]">
                <img src="../assets/images/cursos/intro-estadistica-bio01.jpg" class="rounded-md shadow" alt="">

                <div class="relative">
                    <img src="../assets/images/cursos/intro-estadistica-bio02.jpg" class="rounded-md shadow" alt="">
                </div>
            </div> -->
        </div>
    </section>




    <!-- Start Section-->
    <section class="relative md:py-14 py-8">

        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-1 gap-[30px]">


                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-check-square"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Requisitos</h5>
                        <p class="text-slate-400 mt-3">Conocimientos básicos de estadística y calculo diferencial</p>

                        <div class="mt-5">
                            <a href="#" data-type="iframe"
                                class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">
                            </a>
                        </div>
                    </div>
                </div>


                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-calendar-alt"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Horario</h5>
                        <p class="text-slate-400 mt-3">Sábado.<br>
                            Horario: 10:00 a 15:00 hrs.</p>

                        <div class="mt-5">
                            <a href="#"
                                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Total:
                                40 horas</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-map-marker"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Lugar</h5>
                        <p class="text-slate-400 mt-3">Modalidad virtual</p>

                        <div class="mt-5">
                            <a href="#"
                                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Vía
                                Zoom o Meet</a>
                        </div>
                    </div>
                </div>


            </div><!--end grid-->
        </div><!--end container-->





        <div class="container mt-20">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Costo</h3>

                <p class="text-slate-400 max-w-xl mx-auto"></p>
            </div><!--end grid-->

            <div class="grid grid-cols-1">


                <div id="StarterContent" class="">

                    <div class="grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]">
                        <div
                            class="group border-b-[3px] dark:border-gray-700 p-6 py-8 hover:border-indigo-600 dark:hover:border-indigo-600 transition-all duration-500 ease-in-out hover:scale-105 relative overflow-hidden shadow dark:shadow-gray-800 rounded-md bg-gray-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900 h-fit">
                            <h6 class="font-bold uppercase mb-5 text-gray-800">Publico GENERAL</h6>

                            <div class="flex mb-5">
                                <span class="text-xl font-semibold">$</span>
                                <span class="price text-4xl font-semibold mb-0">5,000</span>
                                <span class="text-xl font-semibold self-end mb-1">MXN</span>
                            </div>


                            <a href="#inscripcion"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Inscribirse</a>
                        </div>


                        <div
                            class="group border-b-[3px] dark:border-gray-700 p-6 py-8 hover:border-indigo-600 dark:hover:border-indigo-600 transition-all duration-500 ease-in-out hover:scale-105 relative overflow-hidden shadow dark:shadow-gray-800 rounded-md bg-gray-50 dark:bg-slate-800 hover:bg-white dark:hover:bg-slate-900 h-fit">
                            <h6 class="font-bold uppercase mb-5 text-red-600">Comunidad UNAM</h6>

                            <div class="flex mb-5">
                                <span class="text-xl font-semibold">$</span>
                                <span class="price text-4xl font-semibold mb-0">4,000</span>
                                <span class="text-xl font-semibold self-end mb-1">MXN</span>
                            </div>

                            <ul class="list-none text-slate-400">
                                <li class="mb-1 flex"><i
                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>Alumnos, exalumnos
                                    y personal de la UNAM</li>
                                <li class="mb-1 flex"><i
                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>También aplica
                                    para afiliados a Fundación UNAM</li>
                                <li class="mb-1 flex"><i
                                        class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>Para este curso
                                    las inscripciones son a través de Fundación UNAM: consulta aquí el Proceso de
                                    inscripción y formas de pago para este curso</li>
                                <li class="mb-1 flex"><i
                                        class="uil uil-exclamation-circle text-red-600 text-xl mr-2"></i>Toda vez que
                                    este es un programa académico administrado por Fundación UNAM, AC no se acepta
                                    ningún tipo de beca AAPAUNAM o STUNAM.</li>
                            </ul>

                            <a href="#inscripcion"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Inscribirse</a>
                        </div>


                    </div><!--end grid-->
                </div>


            </div>
        </div><!--end container-->





    </section>




    <section class="relative">

        <div class="container">
            <div class="grid grid-cols-1 mt-8">
                <h5 class="text-2xl font-semibold mb-5">Temario</h5>
            </div>

            <div class="grid md:grid-cols-2 grid-cols-1 pt-6 gap-[30px]">
                <div>
                    <h5 class="text-lg uppercase font-semibold mb-5">I. Introducción al paquete estadístico R </h5>

                    <div
                        class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <table class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="px-4 py-5">Temas</th>
                                    <th class="px-4 py-5 text-right"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i> I.1 Breve introducción
                                        histórica de Excel y R</td>
                                    <td class="p-4 text-right"></td>
                                </tr>

                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i> I.2 Descarga e instalación de
                                        R </td>
                                    <td class="p-4 text-right"></td>
                                </tr>

                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i> I.3 El medioambiente R
                                        (interface de comandos en R y Rstudio)</td>
                                    <td class="p-4 text-right"></td>
                                </tr>

                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i> I.4 Instalación y descarga de
                                        paquetes</td>
                                    <td class="p-4 text-right"></td>
                                </tr>

                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i> I.4 Aspectos básicos de R
                                        <ul class="p-6 list-disc ">
                                            <li>Matemáticas básicas</li>
                                            <li>Tipos de variables</li>
                                            <li>Tipos de datos</li>
                                            <li>Vectores</li>
                                        </ul>
                                    </td>
                                    <td class="p-4 text-right"></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <h5 class="text-lg uppercase font-semibold mb-5">II. Manipulación de datos en R </h5>

                    <div
                        class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <table class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="px-4 py-5">Temas</th>
                                    <th class="px-4 py-5 text-right"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i>II.1 Estructuras avanzadas de
                                        datos
                                        <ul class="p-6 list-disc ">
                                            <li>Matrices</li>
                                            <li>Arreglos</li>
                                            <li>data.frames</li>
                                            <li>Objetos</li>
                                        </ul>
                                    </td>
                                    <td class="p-4 text-right"></td>
                                </tr>

                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i>II.2 Lectura de datos
                                        <ul class="p-6 list-disc ">
                                            <li>Datos de archivos csv</li>
                                            <li>Datos de archivos txt</li>
                                            <li>Datos disponibles en R</li>
                                            <li>Datos disponibles en paquetes e internet</li>
                                        </ul>
                                    </td>
                                    <td class="p-4 text-right"></i></td>
                                </tr>


                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i>II.3 Graficación en R
                                        <ul class="p-6 list-disc ">
                                            <li>Graficación básica</li>
                                            <li>Principios del análisis exploratorio de datos</li>
                                            <li>Histogramas</li>
                                            <li>Boxplots</li>
                                            <li>Graficas de dispersión</li>
                                        </ul>
                                    </td>
                                    <td class="p-4 text-right"></i></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    <h5 class="text-lg uppercase font-semibold mb-5">III. Modelos estadísticos e inferencia estadística
                        en R</h5>

                    <div
                        class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <table class="w-full text-left">
                            <thead>
                                <tr>
                                    <th class="px-4 py-5">Temas</th>
                                    <th class="px-4 py-5 text-right"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i>III.1 Distribuciones de
                                        probabilidad
                                        <ul class="p-6 list-disc ">
                                            <li>Distribución binomial</li>
                                            <li>Distribución de Poisson</li>
                                            <li>Distribución Normal</li>
                                            <li>Otras distribuciones</li>

                                        </ul>
                                    </td>
                                    <td class="p-4 text-right"></td>
                                </tr>

                                <tr class="border-t border-gray-100 dark:border-gray-700">
                                    <td class="p-4"><i class="uil uil-clipboard-alt"></i>III.2 Inferencia estadística
                                        <ul class="p-6 list-disc ">
                                            <li>Resumen de estadísticas</li>
                                            <li>Correlación y varianza</li>
                                            <li>Prueba de Chi cuadrada</li>
                                            <li>Prueba de t</li>
                                            <li>Prueba de F</li>
                                            <li>ANOVA</li>

                                        </ul>
                                    </td>
                                    <td class="p-4 text-right"></td>
                                </tr>




                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="inscripcion">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Inscripción</h3>

                <p class="text-slate-400 max-w-xl mx-auto">.</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 mt-4 mb-10">
                <div
                    class="relative after:content-[''] after:absolute after:top-0 md:after:right-0 md:after:left-0 after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                    <!--Start content-->
                    <div
                        class="ml-8 md:ml-0 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600 md:after:mx-auto md:after:right-0 md:after:left-0 after:-left-9 before:content-[''] before:absolute md:before:mx-auto md:before:right-0 md:before:left-0 before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                        <div class="grid md:grid-cols-2">
                            <div class="md:text-right md:mr-8 relative">

                                <h5 class="my-2 font-semibold text-lg">Paso 1</h5>
                                <h6 class="text-slate text-sm mb-0"></h6>
                            </div>

                            <div class="float-left text-left md:ml-8 mt-6 md:mt-0">
                                <h5 class="title mb-1 font-semibold">Solicita el formato de preregistro a:</h5>
                                <p class="mt-1 mb-0 text-slate-400"><a href="mailto:cursosydiplomados@funam.mx"
                                        target="_blank"
                                        class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">cursosydiplomados@funam.mx</a>
                                </p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 mt-10">
                            <div class="md:text-right md:mr-8 relative">

                                <h5 class="my-2 font-semibold text-lg">Paso 2</h5>
                                <h6 class="text-slate text-sm mb-0"></h6>
                            </div>

                            <div class="float-left text-left md:ml-8 mt-6 md:mt-0">
                                <h5 class="title mb-1 font-semibold">Datos bancarios para depósito en sucursal,
                                    practicajas, transferencia bancaria:</h5>
                                <p class="mt-1 mb-0 text-slate-400">Banco: CitiBanamex<br>Beneficiario: Fundación UNAM,
                                    A.C.<br>Sucursal: 870<br>
                                    Cuenta: 572529<br>Clabe: 00 21 80 08 70 05 72 52 92<br>Referencia: 829.411.100</p>

                                <p class="mt-4 mb-0 text-slate-400">En caso de que desees efectuarlo con tarjeta de
                                    crédito y/o débito deberás acudir a las oficinas de Fundación UNAM en horario de
                                    lunes a jueves de 9:30 a 17:30 y viernes de 9:30 a 14:30, ubicada en Calle
                                    Pennsylvania 203, Col. Nápoles, Alcaldía Benito Juárez, C.P. 03810.</p>

                                <p class="mt-4 mb-0 text-slate-400">También puedes efectuarlo vía telefónica al call
                                    center 55 53 400 904 o al teléfono 55 4575 1879</p>


                            </div>
                        </div>



                    </div>
                    <!--End content-->

                </div>
            </div><!--end grid-->
            <p class="mt-10 text-center"><i class="uil uil-exclamation-circle text-red-600 text-xl mr-2"></i>Comunidad
                UNAM: En caso de formar parte de la Comunidad UNAM (alumnos, exalumnos, académicos, personal
                administrativo), deberás presentar una identificación que te acredite como tal.</p>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->






    <div class="container">
        <div class="grid grid-cols-1 mt-16 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">¿Necesitas ayuda?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Contáctanos</p>
        </div><!--end grid-->

        <div id="accordion-collapse" data-accordion="collapse" class="grid md:grid-cols-2 grid-cols-1 md:gap-[30px]">

            <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                <h2 class="text-base font-semibold" id="info-admin-col">
                    <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left"
                        data-accordion-target="#info-admin" aria-expanded="false" aria-controls="info-admin">
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
                        <p class="text-slate-400 dark:text-gray-400">Fundación UNAM
                            <br>
                            Sitio web: <a class="text-cyan-600 underline"
                                href="http://www.fundacionunam.org.mx/educacion-continua"
                                target="_blank">www.fundacionunam.org.mx/educacion-continua</a><br>
                            WhatsApp: 55-4575-1879<br>
                            Correo electrónico: cursosydiplomados@funam.mx<br>
                            Correo electrónico: educontinua.of@ciencias.unam.mx
                        </p>
                    </div>
                </div>
            </div>



            <div>






                <div class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden mt-4">
                    <h2 class="text-base font-semibold" id="info-acad-col">
                        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left"
                            data-accordion-target="#info-acad" aria-expanded="true" aria-controls="info-acad">
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
                            <p class="text-slate-400 dark:text-gray-400">Dr. Jesús Jurado-Molina<br>
                                Correo electrónico: jjurado@uw.edu</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!--end grid-->







    <!--

            <div class="container md:mt-24 mt-16">
                <div class="md:flex justify-center">
                    <div class="lg:w-2/3 text-center">
                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold mb-6">Subscribe our weekly subscription</h3>

                        <p class="text-slate-400 max-w-xl mx-auto">Add some text to explain benefits of subscripton on your services. We'll send you the best of our blog just once a weekly.</p>

                        <div class="mt-8">
                            <div class="text-center subcribe-form">
                                <form class="relative mx-auto max-w-xl">
                                    <input type="email" id="subemail" name="name" class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-gray-100 dark:border-gray-700" placeholder="Enter your email id..">
                                    <button type="submit" class="btn absolute top-[2px] right-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subcribe Now</button>
                                </form>
                            </div>
                        </div>
-->



    </div>
    </div>
    </div><!--end container-->
    </section><!--end section-->
    <!-- End Section-->

    <?php
    include './includes/templates/footer.php';
  ?>