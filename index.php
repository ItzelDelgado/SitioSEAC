
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
        <!--end container-->
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
        <!--end container-->
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
        <!--end container-->
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
      <!--end grid-->
    </div>
  </section>

  <!-- COMIENZA Section-->
  <section class="relative md:py-5 pb-5 overflow-hidden">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
        <!-- CURSO ejemplo-->
        <!-- <div
            class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden"
          >
            <div class="relative overflow-hidden">
              <img
                src="assets/images/cursos/c3.jpg"
                class="group-hover:scale-110 duration-500 ease-in-out"
                alt=""
              />
              <div
                class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"
              ></div>
              <div
                class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"
              >
                <div class="pb-4 pl-4 flex items-center">
                  <img
                    src="assets/images/instructores/usr-f.jpg"
                    class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto"
                    alt=""
                  />
                  <div class="ml-3">
                    <a
                      href="http://www.educontinua.fciencias.unam.mx/SiteNuevo/Cursos/R/DraBarbosa_CorrelacionRegresionLineal/CV_DraBarbosa.pdf"
                      class="font-semibold text-white block hover:text-indigo-600"
                      target="_blank"
                      >Dra. María de Lourdes Barbosa Saldaña
                    </a>
                    <span class="text-white/70 text-sm"
                      >Doctora en Ciencias Biológicas</span
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="content p-6 relative">
              <a
                href="r-16.php"
                class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer"
              >
                R: correlación, regresión lineal y modelos lineales</a
              >
              <a
                href="course-detail.php"
                class="text-sm font-thin block text-red-600"
                >1ra. Edición</a
              >
              <p class="text-sm block text-indigo-600 mt-2">
                Del 14 de febrero al 23 de mayo de 2023
              </p>
              <p class="text-slate-400 mt-3 mb-4">
                Los modelos lineales son una herramienta de gran utilidad para
                el análisis y la interpretación de datos. La idea es poder
                analizar la correlación de una serie de variables y modelar
                estas relaciones para llegar así a modelos más eficientes.
              </p>
              <p
                class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4"
              >
                Curso teórico - práctico.<br />
                Dirigido a: Profesionistas y estudiantes en el área de ciencias
                experimentales y de investigación.
              </p>
              <p>
                <a
                  href="cursos/intro-r-inferencia-est-1-15a.php"
                  target="_blank"
                  class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out"
                  >Ver curso</a
                >
              </p>
              <ul
                class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400"
              >
                <li class="flex items-center mr-3">
                  <i
                    class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"
                  ></i>
                  <span>Martes</span>
                </li>
                <li class="flex items-center mr-3">
                  <i
                    class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"
                  ></i>
                  <span>17-20h</span>
                </li>
                <li class="flex items-center">
                  <i
                    class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"
                  ></i>
                  <span>Virtual</span>
                </li>
              </ul>
              <div
                class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"
              >
                <div
                  class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white"
                >
                  <span class="font-semibold">$5,000</span>
                </div>
              </div>
            </div>
          </div> -->
        <!-- CURSO FIN -->
        <!-- ----------------------Los anteriores son ejemplos------------------------------- -->
        <!-- DIPLOMADO Derecho y Gestión Ambiental -->
        <!-- <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/c3.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out"></div>
          </div>
          <div class="content p-6 relative">
            <a href="bioestadistica-16.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Derecho y Gestión Ambiental</a>
            <a href="course-detail.php" class="text-sm font-thin block text-red-600">XXVII Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 24 de febrero al 9 de junio del 2023
            </p>
            <p class="text-slate-400 mt-3 mb-4">
              Enfocado a contribuir a la formación de profesionales en el
              conocimiento y aplicación del derecho y la gestión ambiental
              bajo un enfoque interdisciplinario y desde un esquema tanto
              nacional como internacional con el propósito de avanzar en la
              comprensión de la cuestión ambiental y el desarrollo sustentable
              así como en el fortalecimiento de la conciencia ambiental.
            </p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Diplomado. <br />Dirigido a: Abogados, Biólogos (titulados o
              no), o cualquier profesionista inmerso en el área ya que hemos
              contado con la participación de Químicos, Arquitectos, etc, así
              como personas con interés general en la materia ambiental
            </p>
            <p>
              <a href="cursos/intro-r-inferencia-est-1-15a.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                diplomado</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Vie y Sáb</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>16 - 20h <br />
                  10 - 14h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$34,800</span>
              </div>
            </div>
          </div>
        </div> -->
        <!-- DIPLOMADO FIN -->

        <!-- CURSO Bioestadística-->
        <!-- <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/c3.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-m.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/JorgeAMorenoHern.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">M. en C. Jorge A.
                    Moreno Hernández
                  </a>
                  <span class="text-white/70 text-sm">Maestro en Ciencias Biológicas</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/Bioestadistica16.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Bioestadística</a>
            <a href="course-detail.php" class="text-sm font-thin block text-red-600">16a. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 3 de marzo al 28 de abril de 2023
            </p>
            <p class="text-slate-400 mt-3 mb-4">
              Curso fundamental para aprender las bases teóricas más
              importantes y necesarias para el correcto procesamiento de la
              información. El curso está montado en el LMS de Moodle, lo que
              permite la interacción entre los alumnos y con el profesor.
            </p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Estudiantes, profesionales del área
              químico-biológica, de la salud y áreas a fines (este curso, está
              dirigido básicamente a médicos, biólogos, enfermeros,
              psicólogos, trabajadores sociales).
            </p>
            <p>
              <a href="cursos/Bioestadistica16.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Lu - Ju</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>17-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$6,000</span>
              </div>
            </div>
          </div>
        </div> -->
        <!-- CURSO FIN -->

        <!-- CURSO Estadística aplicada al diseño y análisis de estudios
                experimentales-->
        <!-- <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/c3.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/MaLourdesBarbosaSal.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dra. María de Lourdes
                    Barbosa
                  </a>
                  <span class="text-white/70 text-sm">Doctora en Ciencias Biológicas</span>
                </div>
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/MaGuadalupeCamachoSan.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Biol. María Guadalupe
                    Camacho</a>
                  <span class="text-white/70 text-sm">Licenciatura en Biología</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/EstadisticaAplicadaAlDiseñoyAnalisisDeEstudiosExperimentales17.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Estadística aplicada al diseño y análisis de estudios
              experimentales</a>
            <a href="course-detail.php" class="text-sm font-thin block text-red-600">7ma. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 4 de marzo al 27 de mayo de 2023
            </p>
            <p class="text-slate-400 mt-3 mb-4">
              Contrario a lo que se piensa, la estadística no es la última
              etapa de una investigación, sino más bien es parte fundamental
              de la planeación de ésta; sus objetivos, modelos a emplear y
              análisis a efectuar. Si se empleó la estadística de manera
              correcta, los resultados deberán responder a los objetivos.
            </p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Curso teórico - práctico.<br />Dirigido a: Profesionistas y
              estudiantes en el área de ciencias experimentales y de
              investigación.
            </p>
            <p>
              <a href="cursos/EstadisticaAplicadaAlDiseñoyAnalisisDeEstudiosExperimentales17.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Sábado</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>08-12h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$5,800</span>
              </div>
            </div>
          </div>
        </div> -->
        <!-- CURSO FIN -->

        <!-- CURSO Dibujo de la naturaleza-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/Dibujo_de_la_naturaleza.webp" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/AldideOyarzabalSal.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">M. Aldi de Oyarzabal
                    Salcedo
                  </a>
                  <span class="text-white/70 text-sm">Maestro en Artes</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="/cursos/DibujoDeLaNaturaleza1raEd.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Dibujo de la naturaleza</a>
            <a href="/cursos/DibujoDeLaNaturaleza1raEd.php" class="text-sm font-thin block text-red-600">1ra. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 11 de abril al 15 de junio de 2023
            </p>
            <p class="text-sm block font-bold text-red-600 mt-2">
              15% de descuento por concepto de pronto pago (hasta el 28 de marzo) - $5,100
            </p>
            <p class="text-slate-400 mt-3 mb-4">Hay pocos cursos en el mundo sobre dibujo científico y en nuestro país
              no hay escuelas para enseñarlo, a pesar de su uso creciente. El dibujo permite crear mundos coherentes con
              la realidad biológica y modelos científicos, y se deben dibujar con orden y atención al tema, composición
              artística y color. El color depende de la forma y se debe estudiar por separado para aplicarlo
              correctamente.</p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: El taller está dirigido a biólogos, ilustradores,
              artistas plásticos, artistas visuales y toda aquella persona que
              cuente o no, con entrenamiento previo en el campo del dibujo de
              la naturaleza.
            </p>
            <p>
              <a href="cursos/DibujoDeLaNaturaleza1raEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Ma y Ju</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>15-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Presencial</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$6,000</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->

        <!-- CURSO Estrategias de Educación ambiental para la sustentabilidad. Segunda Edición-->
        <!-- <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/c3.jpg" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/IramaMariselaNunezTancredi.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dra. Irama Silvia
                    Marisela Núñez Tancredi
                  </a>
                  <span class="text-white/70 text-sm">Doctora en Ciencias</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/EstrategiasdeEduAmbientalParaSustentabilidad2daEd.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Estrategias de educación ambiental para la sustentabilidad</a>
            <a href="course-detail.php" class="text-sm font-thin block text-red-600">2da. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 11 de marzo al 6 de mayo del 2023
            </p>
            <p class="text-slate-400 mt-3 mb-4">Es esencial diseñar intervenciones educativas que aborden la crisis
              socioecológica actual y fomenten la participación y el trabajo colaborativo. Se presentarán enfoques
              críticos y alternativas a la crisis de la modernidad, antecedentes y características de la educación
              ambiental, así como paradigmas educativos e investigación y diferentes aproximaciones metodológicas.</p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Curso - taller.<br />Dirigido a: Todas aquellas personas
              interesadas en el campo de la Educación ambiental para la
              sustentabilidad y que quieran desarrollar estrategias
              educativas: educadoras, académicas, organizaciones de la
              sociedad civil, funcionarias, estudiantes.
            </p>
            <p>
              <a href="cursos/EstrategiasdeEduAmbientalParaSustentabilidad2daEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Sábado</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>10-13h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Híbrida</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$5,700</span>
              </div>
            </div>
          </div>
        </div> -->
        <!-- CURSO FIN -->

        <!-- CURSO  Introducción a la divulgación de la ciencia. Sexta Edición-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/DivulgacionCiencia1.webp" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="#" class="font-semibold text-white block hover:text-indigo-600" target="_blank">M. Patricia
                    Magaña Rueda
                  </a>
                  <a href="#" class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dra.
                    Clementina Equihua Zamora
                  </a>
                  <a href="#" class="font-semibold text-white block hover:text-indigo-600" target="_blank">Bio. Paloma
                    Zubieta López
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Introducción a la divulgación de la Ciencia</a>
            <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php" class="text-sm font-thin block text-red-600">6ta. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 14 de abril al 12 de mayo del 2023
            </p>
            <p class="text-slate-400 mt-3 mb-4">El curso busca introducir a los participantes las bases de la
              divulgación científica o comunicación pública de la ciencia, que es un área de trabajo que requiere
              formación académica, entendimiento de lo que la ciencia es y como funciona, así como las maneras de
              comunicarla al público de manera exitosa.</p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Académicos, profesores, comunicadores y todo aquel
              interesado en divulgar ideas científicas a público no
              especializado.
            </p>
            <p>
              <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Viernes</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>16-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$2,600</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->

        <!-- CURSO Rescate y rehabilitación de fauna silvestre. Sexta Edición-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/FaunaSilvestre.webp" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/RosaliaPastorNieto.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dra. Rosalía Pastor
                    Nieto
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Rescate y rehabilitación de fauna silvestre</a>
            <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php" class="text-sm font-thin block text-red-600">6ta. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 17 abril al 26 junio del 2023
            </p>
            <p class="text-sm block font-bold text-red-600 mt-2">
              15% de descuento por concepto de pronto pago (hasta el 3 de abril) - $2,720
            </p>
            <p class="text-slate-400 mt-3 mb-4">Actividades antropogénicas y desastres naturales ponen en riesgo a
              especies de fauna silvestre en peligro de extinción. La IUCN y el WHSG han creado criterios para rescatar
              y rehabilitar a estos animales, por lo que biólogos y profesionales afines deben ampliar su campo de
              acción en su atención, rescate y rehabilitación.</p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
              disciplinas afines.
            </p>
            <p>
              <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Lunes</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>16-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$3,200</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->
        <!-- CURSO Introducción al estudio y conservación de tortugas de México-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/TortugasMexico1.webp" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/GraciaPatriciaGonzalesPor.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dra. Gracia Patricia
                    González Porter
                  </a>
                  <span class="text-white/70 text-sm">Especialista en tortugas</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Introducción al estudio y conservación de tortugas de México</a>
            <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php" class="text-sm font-thin block text-red-600">1ra. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 2 de mayo al 1 de junio de 2023
            </p>
            <p class="text-sm block font-bold text-red-600 mt-2">
              15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060
            </p>
            <p class="text-slate-400 mt-3 mb-4">Las tortugas son vertebrados que existen desde hace más de 200 millones
              de años, pero las acciones humanas han puesto al borde de la extinción a muchas especies. En México, casi
              40% de los taxa de tortugas están amenazados. Es importante capacitar a biólogos, veterinarios y ecólogos en su
              estudio y manejo para formular estrategias de conservación y uso sustentable.</p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
              disciplinas afines.
            </p>
            <p>
              <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Ma y Ju</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>16-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$3,600</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->

        <!-- CURSO Introducción a la programación en R y su aplicación a la inferencia estadística (Curso I). Edición 15-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/CursoR.webp" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-m.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/JesusJuradoMolina.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dr. Jesús Jurado
                    Molina</a>
                  <span class="text-white/70 text-sm">Doctor en Pesquerías</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Introducción a la programación en R y su aplicación a la
              inferencia estadística I</a>
            <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php" class="text-sm font-thin block text-red-600">15a. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 6 de mayo al 24 de junio de 2023
            </p>
            <p class="text-slate-400 mt-3 mb-4">
              R: lenguaje de programación y framework de cómputo estadístico.
              Descubre cómo y por qué ésta herramienta te será de gran
              utilidad en la recopilación y ordenamiento de datos estadísticos
              al momento de realizar tu análisis científico de datos.
            </p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Biólogos, Oceanógrafos, Oceanólogos, economistas,
              físicos, matemáticos, estudiantes de postgrado, investigadores y
              profesionales en áreas multidisciplinarias.
            </p>
            <p>
              <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Sábado</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>10-15h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$5,000</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->

        <!-- DIPLOMADO Diplomado de titulación en Física: actualización docente.2022-2023-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/diplomados/DiplomadoFisica.webp" class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-f.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                  <div class="ml-3">
                    <a href="#" class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dra. Mirna Villavicencio Torres
                    </a>
                    <a href="#" class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dr. Ricardo Méndez Fragoso
                    </a>
                  </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="diplomados/ActualizacionDocenteenFisica22-23.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Actualización Docente en Física</a>
            <a href="diplomados/ActualizacionDocenteenFisica22-23.php" class="text-sm font-thin block text-red-600">Programa 2022-2023 - Diplomado de titulación</a>
            <p class="text-sm block text-indigo-600 mt-2">
              Del 19 de mayo de 2022 al 7 de diciembre de 2023
            </p>
            <p class="text-sm block font-semibold text-red-600 mt-2">
              Cursos con Opción a Diplomado
            </p>
            <p class="text-sm block font-semibold text-indigo-600 mt-2">
              El siguiente curso inicia el 16 de marzo 2023: Temas Selectos de Computación.
            </p>
            <p class="text-slate-400 mt-3 mb-4">El Programa de Actualización Docente en Física es un diplomado en línea para profesores activos y estudiantes de física interesados en la docencia. Los módulos incluyen áreas de la física y nuevas investigaciones, así como estrategias didácticas para un aprendizaje significativo y adaptación al entorno. Este programa también puede ser utilizado como opción de titulación para la Licenciatura en Física. Hasta el momento, ha graduado a más de 65 físicos comprometidos con la enseñanza.</p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Estudiantes de la licenciatura en Física, interesados en la docencia, y profesores de Física de todos los niveles educativos.
            </p>
            <p>
              <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                diplomado</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Ma y/o Ju</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>16-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$18,000</span>
              </div>
            </div>
          </div>
        </div>
        <!-- DIPLOMADO FIN -->

        <!-- CURSO Introducción a la estadística en la biología, 2da. Edición-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/EstadisticaEnBiologia1.webp"
              class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-m.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/AlejandroVillegasCastillo.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dr. Alejandro Villegas
                    Castillo</a>
                  <span class="text-white/70 text-sm">Doctor en Ciencias Biológicas y de la Salud</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Introducción a la estadística en la biología</a>
            <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php" class="text-sm font-thin block text-red-600">2da. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">Sin definir</p>
            <p class="text-slate-400 mt-3 mb-4">
              Tira el paradigma de la estadística como como una sola
              herramienta útil a tu disposición y piensa en ésta más bien como
              una caja de herramientas de utilidad para resolver una serie de
              problemáticas, identificando la utilidad y las limitaciones de
              cada una de las herramientas.
            </p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Estudiantes, profesionistas, tomadores de
              decisiones, manejadores de recursos, biólogos, ecólogos,
              administradores de áreas naturales, administradores de recursos
              naturales.
            </p>
            <p>
              <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Lu, Mi, Ju</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>15-17h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$2,500</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->

        <!-- CURSO Excel, uso y aplicaciones-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden">
          <div class="relative overflow-hidden">
            <img src="assets/images/cursos/Excel1.webp"
              class="group-hover:scale-110 duration-500 ease-in-out" alt="" />
            <div class="absolute inset-0 bg-slate-900/50 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
            </div>
            <div class="absolute left-0 bottom-0 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div class="pb-4 pl-4 flex items-center">
                <img src="assets/images/instructores/usr-m.jpg"
                  class="h-12 w-12 rounded-full shadow-md dark:shadow-gray-800 mx-auto" alt="" />
                <div class="ml-3">
                  <a href="assets/curriculums_docentes/JesusJuradoMolina.pdf"
                    class="font-semibold text-white block hover:text-indigo-600" target="_blank">Dr. Jesús Jurado
                    Molina</a>
                  <span class="text-white/70 text-sm">Doctor en Pesquerías</span>
                </div>
              </div>
            </div>
          </div>
          <div class="content p-6 relative">
            <a href="/cursos/ExcelUsoyAplicaciones.php"
              class="text-lg font-bold block hover:text-red-600 duration-500 ease-in-out mt-2 cursor-pointer">
              Excel, uso y aplicaciones</a>
            <a href="/cursos/ExcelUsoyAplicaciones.php" class="text-sm font-thin block text-red-600">3ra. Edición</a>
            <p class="text-sm block text-indigo-600 mt-2">Sin definir</p>
            <p class="text-slate-400 mt-3 mb-4">
              Aprende una de las herramientas más útiles y versátiles del mercado: Excel. Este es un programa de hojas
              de cálculo que te permitirá hacer casi de todo: registros de ventas, tablas, gráficas, operaciones
              matemáticas, correlaciones, proyecciones, análisis estadísticos, y demás funciones útiles.

            </p>
            <p class="text-neutral-500 mt-3 mb-4 text-sm border-t border-gray-100 dark:border-gray-800 pt-4">
              Dirigido a: Biólogos, Oceanógrafos, Contadores, Oceanólogos, economistas, físicos, matemáticos,
              estudiantes de postgrado, investigadores y profesionales en áreas multidisciplinarias
            </p>
            <p>
              <a href="/cursos/ExcelUsoyAplicaciones.php" target="_blank"
                class="btn btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                curso</a>
            </p>
            <ul class="pt-4 border-t border-gray-100 dark:border-gray-800 flex items-center list-none text-slate-400">
              <li class="flex items-center mr-3">
                <i class="uil uil-calendar-alt text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Lu y Ju</span>
              </li>
              <li class="flex items-center mr-3">
                <i class="uil uil-clock text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>18-20:30h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker text-base leading-none mr-2 text-slate-900 dark:text-white"></i>
                <span>Virtual</span>
              </li>
            </ul>
            <div class="absolute -top-7 right-3 z-1 opacity-0 group-hover:opacity-100 duration-500 ease-in-out">
              <div
                class="flex justify-center items-center w-16 h-16 bg-white dark:bg-slate-900 rounded-full shadow-lg dark:shadow-gray-800 text-red-600 dark:text-white">
                <span class="font-semibold">$2,500</span>
              </div>
            </div>
          </div>
        </div>
        <!-- CURSO FIN -->
      </div>
      <!--end grid-->
    </div>
    <!--end container-->
  </section>
  <!--end section-->
  <!-- FIN Section-->

  <!-- CURSOS RECIENTES FIN -->

  <?php
    include './includes/templates/footer.php';
  ?>