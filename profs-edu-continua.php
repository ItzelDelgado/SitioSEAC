<?php
  include './includes/templates/header.php';
?>

    <!-- Start Hero -->
    <section
      class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/slider/bg_impartirprograma.webp')] bg-no-repeat bg-center"
    >
      <div class="absolute inset-0 bg-black opacity-75"></div>
      <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
          <h3 class="mt-3 text-3xl leading-normal font-medium text-white">
            Impartir programa académico en la Secretaría de Educación Abierta y
            Continua
          </h3>
        </div>
        
      </div>
      
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
      <p class="mb-3 mt-16 font-semibold">Estimado profesor:</p>
      <p>
        Si tiene interés en impartir algún curso, Diplomado o Taller
        especializado con temas de su dominio, lo invitamos a proponerlo a esta
        Secretaría entregando la documentación necesaria de acuerdo a los
        siguientes formatos:
      </p>
      <h2 class="font-semibold mb-10 mt-10">
        Documento con descripción del curso, Taller o Diplomado.
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/Fromato cursos_final.pdf"
          download="Documento-con-descripcion"
          >Bajar formato</a
        >
      </h2>
      <div class="relative md:py-20 overflow-hidden">
        <iframe
          src="assets/pdf/formatos/Fromato cursos_final.pdf"
          frameborder="0"
          height="500px"
          width="100%"
        ></iframe>
      </div>
      <h2 class="font-semibold mb-10 mt-10">
        Rubrica para evaluación.
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/comite.pdf"
          download="rubrica-para-evaluacion"
          >Bajar formato</a
        >
      </h2>
      <div class="relative md:py-20 overflow-hidden">
        <iframe
          src="assets/pdf/formatos/comite.pdf"
          frameborder="0"
          height="500px"
          width="100%"
        ></iframe>
      </div>
      <div class="mt-10 mb-10">
        <p class="font-semibold">
          Puede hacer llegar a esta Secretaría los documentos de alguna de las
          siguientes maneras:
        </p>
        <ul class="pl-4">
          <li>
            Correo electrónico:
            <a
              class="text-indigo-600"
              href="mailto:educontinua.inf@ciencias.unam.mx"
              >educontinua.inf@ciencias.unam.mx</a
            >
          </li>
          <li>
            Directamente en la Secretaría: 1er piso, Edificio Tlahuizcalpan
            (saliendo del elevador a la izquierda)
          </li>
        </ul>
      </div>
    </div>

    <?php
    include './includes/templates/footer.php';
  ?>