<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_coloquios.jpg", "Coloquios");
?>
<!-- Fin de - Generamos el encabezado -->


<!-- COLOQUIOS -->

<div class="relative md:py-10 py-10">
  <div class="container">
    <div class="grid grid-cols-1 pb-8 text-center">
    </div>
    <div class="flex justify-center gap-4">
      <button class="bg-gray-50 p-2" id="programados">Programados</button>
      <button class="bg-gray-50 p-2" id="enCurso">En Proceso</button>
      <button class="bg-gray-50 p-2" id="pasados">Pasados</button>
    </div>
  </div>
</div>

<!-- COMIENZA Section-->
<section class="relative md:py-5 py-5 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
    
    <?php
      //Convocatoria. XIV Coloquio Estudiantil de Investigaciones con Protistas
      banner_coloquio(
        "programados",
        "assets/images/coloquios/iconoProtistas_2.jpg",
        "Convocatoria. XIV Coloquio Estudiantil de Investigaciones con Protistas",
        "Dedicado a la biodiversidad microscópica",
        "coloquios/Coloquio Estudiantil de Investigaciones con Protistas/ConvocatoriaColoquioProtistas2023.pdf",
        "18 y 19 de mayo del 2023",
        "",
        "Podrán participar estudiantes de cualquier institución educativa de nivel superior, Institutos,
        Universidades y Tecnológicos nacionales y extranjeros inscritos a materias afines a la
        Ficología, Protistología y Protozoología.",
        "Jueves y Viernes",
        "9-18 hrs",
        "Presencial",
        "0",
        "NO",
        array(array("Itzel Sigala Regalado", "#"), array("Margarita Reyes Santos", "#"))
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