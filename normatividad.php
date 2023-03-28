<?php
  include './includes/templates/header.php';
?>

    <!-- Start Hero -->
    <section
      class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/slider/bg_normatividad.webp')] bg-no-repeat bg-center"
    >
      <div class="absolute inset-0 bg-black opacity-75"></div>
      <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
          <h3 class="mt-3 text-3xl leading-normal font-medium text-white">
            Normatividad
          </h3>
        </div>
        <!--end grid-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
      <div
        class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900"
      >
        <svg
          class="w-full h-auto"
          viewBox="0 0 2880 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
            fill="currentColor"
          ></path>
        </svg>
      </div>
    </div>
    <!-- End Hero -->

    <div class="container">
      <h2 class="font-semibold mt-10">
        Reglamento General de Educación Continua.
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/ReglamentoGeneralEducacionContinua2016.pdf"
          download="ReglamentoGeneralEducacionContinua2016"
          >Bajar reglamento</a
        >
      </h2>
      <p>
        Aprobado por el Consejo Universitario en su sesión ordinaria del 18 de marzo de 2016.
      </p>
      <div class="relative md:py-20 mb-10 overflow-hidden mt-4">
        <iframe
          src="assets/pdf/formatos/ReglamentoGeneralEducacionContinua2016.pdf"
          frameborder="0"
          height="500px"
          width="100%"
        ></iframe>
      </div>
      <!-- <h2 class="font-semibold mb-4 mt-10">
        Lineamientos de Educación Continua
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/Lineamientos_de_EduContinua.pdf"
          download="Lineamientos_de_EduContinua"
          >Bajar formato</a
        >
      </h2>
      <div class="relative md:py-20 overflow-hidden">
        <iframe
          src="assets/pdf/formatos/Lineamientos_de_EduContinua.pdf"
          frameborder="0"
          height="500px"
          width="100%"
        ></iframe>
      </div>

      <h2 class="font-semibold mb-4 mt-10">
        Caracterización de las modalidades educativas - REDEC
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/Caracterización de las modalidades educativas - REDEC.pdf"
          download="Caracterizacion_de_las_modalidades_educativas-REDEC"
          >Bajar formato</a
        >
      </h2>
      <div class="relative md:py-20 overflow-hidden mb-10">
        <iframe
          src="assets/pdf/formatos/Caracterización de las modalidades educativas - REDEC.pdf"
          frameborder="0"
          height="500px"
          width="100%"
        ></iframe>
      </div> -->


    </div>

    <?php
    include './includes/templates/footer.php';
  ?>
