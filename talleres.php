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
    <div class="flex justify-center gap-4">
      <button class="bg-gray-50 p-2" id="programados">Programados</button>
      <button class="bg-gray-50 p-2" id="enCurso">En proceso</button>
      <button class="bg-gray-50 p-2" id="pasados">Pasados</button>
    </div>
  </div>
</div>

<!-- COMIENZA Section-->
<section class="relative md:py-5 py-5 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">



    </div> <!-- CIERRA EL DIV DE LOS CURSOS -->
  </div> <!-- CIERRA EL CONTENEDOR DE LOS CURSOS -->
</section><!--end section--> <!-- CIERRA LA SECCIÓN DE LOS CURSOS -->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>