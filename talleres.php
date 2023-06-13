<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_talleres.jpg", "Talleres");
?>
<!-- Fin de - Generamos el encabezado -->

<!-- CURSOS RECIENTES -->

<div class="relative md:py-10 py-10">
  <div class="container">
    <div class="grid grid-cols-1 pb-8 text-center">
    </div>
    <div class="flex justify-center">
      <button class="bg-gray-50 p-1 w-32" id="programados">Programados</button>
      <button class="bg-gray-50 p-1 w-32" id="enCurso">En Proceso</button>
      <button class="bg-gray-50 p-1 w-32" id="pasados">Pasados</button>
    </div>
  </div>
</div>


<!-- COMIENZA Section-->
<section class="relative md:py-5 py-5 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">

    <?php
      //Taller Intensivo de Docencia Científica
      banner_taller(
        "programados",
        "assets/images/talleres/taller-intensivo-de-docencia-cientifica.jpg",
        "Docencia Científica",
        "1ra. Edición - Taller Intensivo",
        "talleres/TallerIntensivodeDocenciaCientifica/TallerIntensivodeDocenciaCientifica1ed.php",
        "Del 31 de julio al 2 de agosto de 2023",
        "El aprendizaje activo es una perspectiva educativa centrada en el estudiante, respaldada por evidencia científica, que busca mejorar la enseñanza y el aprendizaje. En México, la formación en este enfoque es limitada, pero la iniciativa Do-Ciencia busca cambiar eso a través de talleres basados en la evidencia.",
        "Docentes de la Facultad de Ciencias",
        "Lunes-Miercoles",
        "9:00 - 18:00 hrs",
        "Presencial",
        "1,000",
        "NO",
        array(array("Dr. Marcos Nahmad", "assets/curriculums_docentes/MarcosNahmad.pdf"))
      );
      ?>


    </div> <!-- CIERRA EL DIV DE LOS CURSOS -->
  </div> <!-- CIERRA EL CONTENEDOR DE LOS CURSOS -->
</section><!--end section--> <!-- CIERRA LA SECCIÓN DE LOS CURSOS -->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>