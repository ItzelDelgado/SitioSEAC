<?php
include './includes/templates/header.php';
?>


<!-- Carrusel -->
<section id="controls-carousel" class="relative" data-carousel="static">
  <div class="overflow-hidden relative h-screen inset-0">
    <!-- Imagenes del carrusel
      Se agregan desde el css, el tamaño que deben tener es ancho:1920px alto:480px
    máximo 160kb-->
    <!-- Diapositiva 1-->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="active">
      <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/bn-sustentabilidad.webp')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>
      <!--fin container-->
    </div>
    <!-- Diapositiva 1 FIN-->

    <!-- Diapositiva 2-->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
      <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/bg-tlacuache.jpg')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>

    </div>
    <!-- Diapositiva 2 FIN-->

    <!-- Diapositiva 3 -->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
      <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/bgTortuga.webp')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>

    </div>
    <!-- Diapositiva 3 FIN-->
    <!-- Diapositiva 4 -->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
      <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/BnProgramacion.webp')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>

    </div>
    <!-- Diapositiva 4 FIN-->
  </div>
  <!-- Botones carrusel -->
  <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none">
      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
      </svg>
      <span class="hidden">Siguiente</span>
    </span>
  </button>
  <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none">
      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
      <span class="hidden">Anterior</span>
    </span>
  </button>
  <!--Botones carrusel FIN-->
</section>

<!-- Carrusel FIN -->

<!-- CURSOS RECIENTES -->

<section class="relative md:py-10 py-10">
  <div class="container">
    <div class="grid grid-cols-1 text-center">
      <h3 class="mb-1 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
        Oferta Académica
      </h3>

      <p class="text-slate-400 max-w-xl mx-auto">
        Conoce nuestras actividades programadas.
      </p>
    </div>

  </div>
</section>

<!-- ******************EN ESTA SECCION SE PONEN LAS MINIATURAS DE LOS CURSOS**************************-->
<!-- COMIENZA Section-->
<section class="relative md:py-5 pb-5 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
      

    <!-- ********EJEMPLO DE MINIATURA PARA CURSO********-->
    <!-- <div class="group curso">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-DivulgacionCiencia.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="#" target="_blank">M. Patricia
                  Magaña Rueda
                </a>
                <a href="#" target="_blank">Dra.
                  Clementina Equihua Zamora
                </a>
                <a href="#" target="_blank">Bio. Paloma
                  Zubieta López
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">
            Introducción a la divulgación de la Ciencia</a>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">6ta. Edición</a>
          <p class="curso_contenido-fecha">
            Del 14 de abril al 12 de mayo del 2023
          </p>
          <p class="curso_contenido-descripcion">El curso busca introducir a los participantes las bases de la
            divulgación científica o comunicación pública de la ciencia, que es un área de trabajo que requiere
            formación académica, entendimiento de lo que la ciencia es y como funciona, así como las maneras de
            comunicarla al público de manera exitosa.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Académicos, profesores, comunicadores y todo aquel
            interesado en divulgar ideas científicas a público no
            especializado.
          </p>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Viernes</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,600</span>
            </div>
          </div>
        </div>
      </div> -->
      <!-- CURSO FIN -->
      
      <!-- CURSO  Introducción a la divulgación de la ciencia. Sexta Edición-->
      <div class="group curso">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-DivulgacionCiencia.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="#" target="_blank">M. Patricia
                  Magaña Rueda
                </a>
                <a href="#" target="_blank">Dra.
                  Clementina Equihua Zamora
                </a>
                <a href="#" target="_blank">Bio. Paloma
                  Zubieta López
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">
            Introducción a la divulgación de la Ciencia</a>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">6ta. Edición</a>
          <p class="curso_contenido-fecha">
            Del 14 de abril al 12 de mayo del 2023
          </p>
          <p class="curso_contenido-descripcion">El curso busca introducir a los participantes las bases de la
            divulgación científica o comunicación pública de la ciencia, que es un área de trabajo que requiere
            formación académica, entendimiento de lo que la ciencia es y como funciona, así como las maneras de
            comunicarla al público de manera exitosa.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Académicos, profesores, comunicadores y todo aquel
            interesado en divulgar ideas científicas a público no
            especializado.
          </p>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Viernes</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,600</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Rescate y rehabilitación de fauna silvestre. Sexta Edición-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-FaunaSilvestre.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/RosaliaPastorNieto.pdf" target="_blank">Dra. Rosalía Pastor
                  Nieto
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php">
            Rescate y rehabilitación de fauna silvestre</a>
          <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php">6ta. Edición</a>
          <p class="curso_contenido-fecha">
            Del 17 abril al 26 junio del 2023
          </p>
          <p class="curso_contenido-descuento">
            15% de descuento por concepto de pronto pago (hasta el 3 de abril) - $2,720
          </p>
          <p class="curso_contenido-descripcion">Actividades antropogénicas y desastres naturales ponen en riesgo a
            especies de fauna silvestre en peligro de extinción. La IUCN y el WHSG han creado criterios para rescatar
            y rehabilitar a estos animales, por lo que biólogos y profesionales afines deben ampliar su campo de
            acción en su atención, rescate y rehabilitación.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
            disciplinas afines.
          </p>

          <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lunes</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$3,200</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->
      <!-- CURSO Introducción al estudio y conservación de tortugas de México-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-TortugasMexico.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/GraciaPatriciaGonzalesPor.pdf" target="_blank">Dra. Gracia Patricia
                  González Porter
                </a>
                <span>Especialista en tortugas</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php">
            Introducción al estudio y conservación de tortugas de México</a>
          <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php">1ra. Edición</a>
          <p class="curso_contenido-fecha">
            Del 2 de mayo al 1 de junio de 2023
          </p>
          <p class="curso_contenido-descuento">
            15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060
          </p>
          <p class="curso_contenido-descripcion">Las tortugas son vertebrados que existen desde hace más de 200 millones
            de años, pero las acciones humanas han puesto al borde de la extinción a muchas especies. En México, casi
            40% de los taxa de tortugas están amenazados. Es importante capacitar a biólogos, veterinarios y ecólogos en su
            estudio y manejo para formular estrategias de conservación y uso sustentable.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
            disciplinas afines.
          </p>

          <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Ma y Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$3,600</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Introducción a la programación en R y su aplicación a la inferencia estadística (Curso I). Edición 15-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-CursoR.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/JesusJuradoMolina.pdf" target="_blank">Dr. Jesús Jurado
                  Molina</a>
                <span>Doctor en Pesquerías</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php">
            Introducción a la programación en R y su aplicación a la
            inferencia estadística I</a>
          <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php">15a. Edición</a>
          <p class="curso_contenido-fecha">
            Del 6 de mayo al 24 de junio de 2023
          </p>
          <p class="curso_contenido-descripcion">
            R: lenguaje de programación y framework de cómputo estadístico.
            Descubre cómo y por qué ésta herramienta te será de gran
            utilidad en la recopilación y ordenamiento de datos estadísticos
            al momento de realizar tu análisis científico de datos.
          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Oceanógrafos, Oceanólogos, economistas,
            físicos, matemáticos, estudiantes de postgrado, investigadores y
            profesionales en áreas multidisciplinarias.
          </p>

          <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Sábado</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>10-15h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$5,000</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Introducción a la estadística en la biología, 2da. Edición-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-EstadisticaEnBiologia1.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/AlejandroVillegasCastillo.pdf" target="_blank">Dr. Alejandro Villegas
                  Castillo</a>
                <span>Doctor en Ciencias Biológicas y de la Salud</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php">
            Introducción a la estadística en la biología</a>
          <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php">2da. Edición</a>
          <p class="curso_contenido-fecha">Fechas por definir</p>
          <p class="curso_contenido-descripcion">
            Tira el paradigma de la estadística como como una sola
            herramienta útil a tu disposición y piensa en ésta más bien como
            una caja de herramientas de utilidad para resolver una serie de
            problemáticas, identificando la utilidad y las limitaciones de
            cada una de las herramientas.
          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Estudiantes, profesionistas, tomadores de
            decisiones, manejadores de recursos, biólogos, ecólogos,
            administradores de áreas naturales, administradores de recursos
            naturales.
          </p>

          <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lu, Mi, Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>15-17h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,500</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Excel, uso y aplicaciones-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/bg-Excel1.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/JesusJuradoMolina.pdf" target="_blank">Dr. Jesús Jurado
                  Molina</a>
                <span>Doctor en Pesquerías</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="/cursos/ExcelUsoyAplicaciones.php">
            Excel, uso y aplicaciones</a>
          <a href="/cursos/ExcelUsoyAplicaciones.php">3ra. Edición</a>
          <p class="curso_contenido-fecha">Fechas por definir</p>
          <p class="curso_contenido-descripcion">
            Aprende una de las herramientas más útiles y versátiles del mercado: Excel. Este es un programa de hojas
            de cálculo que te permitirá hacer casi de todo: registros de ventas, tablas, gráficas, operaciones
            matemáticas, correlaciones, proyecciones, análisis estadísticos, y demás funciones útiles.

          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Oceanógrafos, Contadores, Oceanólogos, economistas, físicos, matemáticos,
            estudiantes de postgrado, investigadores y profesionales en áreas multidisciplinarias
          </p>

          <a href="/cursos/ExcelUsoyAplicaciones.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lu y Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>18-20:30h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,500</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>
<!--end section-->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>