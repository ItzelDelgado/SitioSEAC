<?php
  include './includes/templates/header.php';
?>


  <!-- Start Hero -->
  <section
    class="relative table w-full py-36 bg-[url('../../assets/images/slider/bg_diplomados.webp')] bg-center bg-no-repeat">
    <div class="absolute inset-0 bg-black opacity-75"></div>
    <div class="container">
      <div class="grid grid-cols-1 pb-8 text-center mt-10">
        <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">
          Diplomados</h3>
      </div><!--end grid-->
    </div><!--end container-->


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





  <!-- CURSOS RECIENTES -->

  <div class="relative md:py-10 py-10">
    <div class="container">
      <div class="grid grid-cols-1 pb-8 text-center">



      </div>
      <!--end grid-->
      <div class="flex justify-center gap-4">
        <button class="bg-gray-50 p-2" id="programados">Programados</button>
        <button class="bg-gray-50 p-2" id="enCurso">En Curso</button>
        <button class="bg-gray-50 p-2">Pasados</button>
      </div>
    </div>
  </div>


  <!-- COMIENZA Section-->
  <section class="relative md:py-5 py-5 overflow-hidden">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">

        <!--DIPLOMADO INICIO-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden enCurso">
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
        </div>
        <!-- DIPLOMADO FIN -->
        
        <!-- DIPLOMADO Diplomado de titulación en Física: actualización docente.2022-2023-->
        <div
          class="group relative rounded-md shadow hover:shadow-lg dark:shadow-gray-800 duration-500 ease-in-out overflow-hidden programados">
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

      </div><!--end grid-->

    </div><!--end container-->


  </section><!--end section-->
  <!-- FIN Section-->

  <!-- CURSOS RECIENTES FIN -->

  <?php
    include './includes/templates/footer.php';
  ?>