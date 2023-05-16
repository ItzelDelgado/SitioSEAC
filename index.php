<?php
include './includes/templates/header.php';
include 'funciones.php';
?>

<!-- Carrusel -->
<section id="controls-carousel" class="relative" data-carousel="static">
  <div class="overflow-hidden relative h-screen inset-0">
    <!-- Imagenes del carrusel
      Se agregan desde el css, el tamaño que deben tener es ancho:1920px alto:480px
    máximo 160kb-->
    <!-- Diapositiva 1-->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="active">
      <div
        class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/bn-sustentabilidad.webp')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>
      <!--fin container-->
    </div>
    <!-- Diapositiva 1 FIN-->

    <!-- Diapositiva 2-->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
      <div
        class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/bg-tlacuache.jpg')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>

    </div>
    <!-- Diapositiva 2 FIN-->

    <!-- Diapositiva 3 -->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
      <div
        class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/bgTortuga.webp')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>

    </div>
    <!-- Diapositiva 3 FIN-->
    <!-- Diapositiva 4 -->
    <div class="flex items-center justify-center transition-all duration-700 ease-in-out" data-carousel-item="">
      <div
        class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/slider/BnProgramacion.webp')] bg-top bg-no-repeat">
      </div>
      <div class="absolute inset-0 z-2"></div>
      <div class="container z-3">
      </div>

    </div>
    <!-- Diapositiva 4 FIN-->
  </div>
  <!-- Botones carrusel -->
  <button type="button"
    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
    data-carousel-prev="">
    <span
      class="inline-flex justify-center items-center w-8 h-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none">
      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
      </svg>
      <span class="hidden">Siguiente</span>
    </span>
  </button>
  <button type="button"
    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
    data-carousel-next="">
    <span
      class="inline-flex justify-center items-center w-8 h-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none">
      <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
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


      <!-- **********************************************************EJEMPLO DE MINIATURA PARA CURSO************************************************************-->

      <!-- ***********************************************EJEMPLO DE MINIATURA DIPLOMADO**************************************************-->

    
      <?php
      //Curso Introducción a la divulgación de la ciencia. Sexta Edición
      banner_curso("assets/images/cursos/Introduccion-a-la-divulgacion-de-la-Ciencia.webp",
                  "Curso de Introducción a la Divulgación de la Ciencia",
                  "6ta. Edición",
                  "cursos/IntroduccionAlaDivulgacionDeLaCiencia/IntroduccionAlaDivulgacionDeLaCiencia6taED.php",
                  "Del 2 al 30 de junio del 2023",
                  "El curso busca introducir a los participantes las bases de la
                  divulgación científica o comunicación pública de la ciencia, que es un área de trabajo que requiere
                  formación académica, entendimiento de lo que la ciencia es y como funciona, así como las maneras de
                  comunicarla al público de manera exitosa.",
                  "Académicos, profesores, comunicadores y todo aquel
                  interesado en divulgar ideas científicas a público no
                  especializado.",
                  "Viernes",
                  "16:00 - 20:00 hrs",
                  "Virtual por Zoom",
                  "2,600",
                  "NO",
                  array (array("M. en C. Patricia Magaña Rueda", "#"),array("Dra. Clementina Equihua Zamora", "#"),array("Bio. Paloma Zubieta López", "#")));
      ?>

      <?php
      //CURSO Introducción a la programación en R y su aplicación a la inferencia estadística (Curso I). Edición 15
      banner_curso("assets/images/cursos/bg-CursoR.webp",
                  "Introducción a la Programación en R y su Aplicación a la Inferencia Estadística",
                  "(Curso I). Edición 15",
                  "cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadistica/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php",
                  "Del 3 de junio al 22 de julio del 2023",
                  "R: lenguaje de programación y framework de cómputo estadístico.
                  Descubre cómo y por qué ésta herramienta te será de gran
                  utilidad en la recopilación y ordenamiento de datos estadísticos
                  al momento de realizar tu análisis científico de datos.",
                  "Biólogos, Oceanógrafos, Oceanólogos, economistas,
                  físicos, matemáticos, estudiantes de postgrado, investigadores y
                  profesionales en áreas multidisciplinarias.",
                  "Sábado",
                  "10:00 - 15:00 hrs",
                  "Virtual por Meet",
                  "5,000",
                  "NO",
                  array (array("Dr. Jesús Jurado Molina", "assets/curriculums_docentes/JesusJuradoMolina.pdf")));
      ?>

      <!-- DIPLOMADO Diplomado de titulación en Física: actualización docente.2022-2023-->
      <?php
      banner_diplomado("assets/images/diplomados/DiplomadoFisica.webp",
                  "Diplomado de Titulación en Física: Actualización docente.",
                  "Programa 2022-2023<br><br><b>Cursos con Opción a Diplomado.</b><br><br>Diplomado aprobado como opción de titulación para la carrera de Física en la Facultad de Ciencias. ",
                  "diplomados/ActualizacionDocenteenFisica/ActualizacionDocenteEnFisica22-23.php",
                  "Del 19 de mayo de 2022 al 7 de diciembre de 2023<br><b>Siguiente curso: El calentamiento global: Un punto de vista termodinámico. Inicia 15 de junio de 2023.</b>",
                  "El Programa de Actualización Docente en Física es un diplomado en línea para profesores activos y estudiantes de física interesados en la docencia. Los módulos incluyen áreas de la física y nuevas investigaciones, así como estrategias didácticas para un aprendizaje significativo y adaptación al entorno. Este programa también puede ser utilizado como opción de titulación para la Licenciatura en Física. Hasta el momento, ha graduado a más de 65 físicos comprometidos con la enseñanza.",
                  "Estudiantes de la licenciatura en Física, interesados en la docencia, y profesores de Física de todos los niveles educativos.",
                  "Martes y/o Jueves",
                  "16:00 a 20:00 hrs.",
                  "Virtual",
                  "18,000",
                  array (array("Dra. Mirna Villavicencio Torres. Departamento de Física", "#"),array("Dr. Ricardo Méndez Fragoso. Departamento de Física
                  ", "#")));
      ?>
      <?php
      banner_curso("assets/images/cursos/bg-primeros-auxilios.webp",
                  "Primeros Auxilios, RCP y Uso de DAE",
                  "1ra. Edición",
                  "cursos/PrimerosAuxilios/PrimerosAuxilios1raEd.php",
                  "2, 4, 9 y 11 de mayo de 2023",
                  "La atención rápida y eficiente en caso de accidentes o enfermedades agudas es crucial para reducir los riesgos de secuelas. Una comunidad capacitada en primeros auxilios fortalece los vínculos sociales y ayuda a construir resiliencia. Los cuidados cardiacos y los primeros auxilios deben seguir los últimos estándares aprobados por la evidencia médica. El curso está diseñado para el público en general, ofreciendo información teórica y práctica.",
                  "Todo público",
                  "Martes y Jueves",
                  "9:00-12:00 horas",
                  "Presencial",
                  "800",
                  "NO",
                  array (array("M. en C. Julio Alejandro Prieto Sagredo, TUM-A", "assets/curriculums_docentes/JulioPrieto.pdf"),array("P. de M. Tabaré Merino Sánchez", "assets/curriculums_docentes/TabareMerinoSanchez.pdf")));
      ?>


      <!-- DIPLOMADO Diplomado IV: Solución de problemas, TIC e investigación didáctica-->
      <div class="group curso">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/Investigacion-Didactica.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="#" target="_blank">M. En C. Clara Vidrio
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">
            Solución de Problemas, TIC e Investigación Didáctica</a>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">Diplomado IV</a>
          <p class="curso_contenido-fecha">
            Del 18 de abril al 31 de agosto de 2023
          </p>
          <p class="curso_contenido-descripcion">La enseñanza de matemáticas requiere análisis constante para mejorarla
            y adoptar una postura sobre cómo enseñar, qué conocimientos debe tener el egresado y por qué estudiarlas.
            Los docentes deben reflexionar y participar en actividades actualizadas que favorezcan el pensamiento
            crítico. La colaboración entre la Facultad de Ciencias y la Escuela Nacional Preparatoria busca mejorar la
            enseñanza a través de programas de especialización y diplomados. </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Profesores de bachillerato.
          </p>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php" target="_blank"
            class="curso_contenido-button btn btn-link">Ver
            diplomado</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Ma y Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>17-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,000</span>
            </div>
          </div>
        </div>
      </div>
      <!-- DIPLOMADO FIN -->

     <?php
     //Curso Estudio y monitoreo de fauna silvestre
      banner_curso("assets/images/cursos/bg-primeros-auxilios.webp",
                  "Primeros Auxilios, RCP y Uso de DAE",
                  "1ra. Edición",
                  "cursos/PrimerosAuxilios/PrimerosAuxilios1raEd.php",
                  "2, 4, 9 y 11 de mayo de 2023",
                  "La atención rápida y eficiente en caso de accidentes o enfermedades agudas es crucial para reducir los riesgos de secuelas. Una comunidad capacitada en primeros auxilios fortalece los vínculos sociales y ayuda a construir resiliencia. Los cuidados cardiacos y los primeros auxilios deben seguir los últimos estándares aprobados por la evidencia médica. El curso está diseñado para el público en general, ofreciendo información teórica y práctica.",
                  "Todo público",
                  "Martes y Jueves",
                  "9:00-12:00 horas",
                  "Presencial",
                  "800",
                  "NO",
                  array (array("M. en C. Julio Alejandro Prieto Sagredo, TUM-A", "assets/curriculums_docentes/JulioPrieto.pdf"),array("P. de M. Tabaré Merino Sánchez", "assets/curriculums_docentes/TabareMerinoSanchez.pdf")));
      ?>
      
  
      

      <!-- CURSO Diseño de cursos en cuadernos Jupyter interactivos con la plataforma MACTI-->
      <div class="group curso">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/Cuadernos-Jupyter-Interactivos.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="#" target="_blank">Dr. Luis Miguel de la Cruz Salas
                </a>
                <a href="#" target="_blank">Mtro. Miguel Angel Pérez León
                </a>
                <a href="#" target="_blank">Ing. Juan Eduardo Murrieta León
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a
            href="cursos/DisenoDeCursosEnCuadernosJupyterconMACTI/diseno-de-cursos-en-cuadernos-jupyter-interactivos-con-la-plataforma-MACTI.php">
            Diseño de Cursos en Cuadernos Jupyter Interactivos con la Plataforma MACTI</a>
          <a
            href="cursos/DisenoDeCursosEnCuadernosJupyterconMACTI/diseno-de-cursos-en-cuadernos-jupyter-interactivos-con-la-plataforma-MACTI.php">6ta.
            Edición</a>
          <p class="curso_contenido-fecha">
            Del 1ro al 24 de junio de 2023
          </p>
          <p class="curso_contenido-descripcion">El participante será capaz de aplicar diferentes metodologías de
            enseñanza para promover la interacción durante sus clases; además será capaz de diseñar cursos en temas de
            Ciencias e Ingeniería utilizando las herramientas tecnológicas interactivas que ofrece la plataforma MACTI
          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Académicos, profesores, comunicadores y todo aquel
            interesado en divulgar ideas científicas a público no
            especializado.
          </p>
          <a href="cursos/DisenoDeCursosEnCuadernosJupyterconMACTI/diseno-de-cursos-en-cuadernos-jupyter-interactivos-con-la-plataforma-MACTI.php"
            target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Ju, Vi y Sa</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>06-09h</span>
                <span>09-12h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual o Presencial</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$4,320</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Introducción a los corales fósiles (Jurásico-Paleógeno)-->
      <div class="group curso">
        <div class="curso_imagen">
          <div class="curso_imagen_adapter">
            <img src="assets/images/cursos/Introduccion-a-los-Corales-Fosiles.webp" alt="" />
          </div>
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="#" target="_blank">Dr. Hannes Loeser
                </a>
                <a href="#" target="_blank">Dr. Rafael Villanueva Olea
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionaLosCoralesFosiles/IntroaLosCoralesFosilesJurasicoPaleogeno1raEd.php">
            Introducción a los Corales Fósiles (Jurásico-Paleógeno)</a>
          <a href="cursos/IntroduccionaLosCoralesFosiles/IntroaLosCoralesFosilesJurasicoPaleogeno1raEd.php">1ra.
            Edición</a>
          <p class="curso_contenido-fecha">
            Del 19 al 23 de junio de 2023
          </p>
          <p class="curso_contenido-descripcion">Introducir al alumno en el estudio de los corales fósiles
            post-paleozoicos, a través del estudio de aspectos morfológicos, de su clasificación y taxonomía, de su
            preparación en el laboratorio e interpretación de su biología.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a:Alumnos de licenciatura (Biología y Geología) a partir del sexto semestre. Estudiantes de la
            maestría y del doctorado, y maestros.
          </p>
          <a href="cursos/IntroduccionaLosCoralesFosiles/IntroaLosCoralesFosilesJurasicoPaleogeno1raEd.php"
            target="_blank" class="curso_contenido-button btn btn-link">Ver
            curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lu - Vi</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>10-13h 15-17h (5h por sesión)</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$800</span>
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
                <a href="assets/curriculums_docentes/AlejandroVillegasCastillo.pdf" target="_blank">Dr. Alejandro
                  Villegas
                  Castillo</a>
                <span>Doctor en Ciencias Biológicas y de la Salud</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionEstadisticaEnBiologia/IntroduccionEstadisticaEnBiologia_2daEd.php">
            Introducción a la Estadística en la Biología</a>
          <a href="cursos/IntroduccionEstadisticaEnBiologia/IntroduccionEstadisticaEnBiologia_2daEd.php">2da.
            Edición</a>
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

          <a href="cursos/IntroduccionEstadisticaEnBiologia/IntroduccionEstadisticaEnBiologia_2daEd.php" target="_blank"
            class="curso_contenido-button btn btn-link">Ver
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
          <a href="/cursos/ExcelUsoyAplicaciones/ExcelUsoyAplicaciones.php">
            Excel, Uso y Aplicaciones</a>
          <a href="/cursos/ExcelUsoyAplicaciones/ExcelUsoyAplicaciones.php">3ra. Edición</a>
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

          <a href="/cursos/ExcelUsoyAplicaciones/ExcelUsoyAplicaciones.php" target="_blank"
            class="curso_contenido-button btn btn-link">Ver
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
      </div><!-- CURSO FIN -->

      

    </div> <!-- CIERRA EL DIV DE LOS CURSOS-->
  </div><!-- CIERRA EL CONTENEDOR-->
</section><!-- TERMINA SECCIÓN -->
<!--end section-->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>