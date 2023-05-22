<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_normatividad.webp", "Normatividad");
?>
<!-- Fin de - Generamos el encabezado -->

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
