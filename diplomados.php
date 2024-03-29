<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_diplomados.webp", "Diplomados");
?>
<!-- Fin de - Generamos el encabezado -->


<!-- DIPLOMADOS RECIENTES -->

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

      <!-- DIPLOMADO Ordenamiento ecologico-->
      <?php
      banner_diplomado(
        "programados",
        "assets/images/diplomados/diplomado-de-ordenamiento-ecologico.jpg",
        "Ordenamiento Ecológico, Impacto y Restauración Ambiental",
        "Quinto Diplomado",
        "diplomados/OrdenamientoEcologicoImpactoyRestauracionAmbiental/OrdenamientoEcologico5dip/OrdenamientoEcologicoImpactoyRestauracionAmbiental5dip.php",
        "Del 21 de agosto de 2023 al 17 de abril de 2024",
        "El Ordenamiento Ecológico del Territorio es un instrumento de política ambiental, diseñado para caracterizar, diagnosticar y proponer formas de utilización del espacio territorial y sus recursos naturales, siempre bajo el enfoque de uso racional y diversificado y con el consenso de la población. El ordenamiento ecológico, determina las obras o actividades a realizar (las cuales se someten a evaluación de impacto). ",
        "Personas interesadas en la planeación territorial, manejo sustentable, conservación y restauración de los recursos naturales (campo de conocimiento: Biología, Ciencias de la Tierra, Geografía, Economía, Arquitectura, Derecho, Planeación Territorial, Desarrollo Sustentable o áreas afines)",
        "Lunes y miercoles",
        "16-20 hrs",
        "Hibrida",
        "22,500",
        "Pago por módulo (3 módulos: el pago debe realizarse antes de que inicie el módulo correspondiente). $8,000",
        array(
          array("Dra. María Concepción García Aguirre", "assets/curriculums_docentes/MariaConcepcionGarciaAguirre.pdf"),
          array(
            "Más...
                  ",
            "#"
          )
        )
      );
      ?>

      <!-- Diplomado en Tecnologías Cuánticas-->
      <?php
      banner_diplomado(
        "programados",
        "assets/images/diplomados/TecnologiasCuanticas.jpg",
        "Diplomado en Tecnologías Cuánticas",
        "Aprobado como opción de Titulación para la carrera de Física por el Consejo Técnico de la Facultad de Ciencias, UNAM.",
        "diplomados/TecnologiasCuanticas/TecnologiasCuanticas1ed/TecnologiasCuanticas1ed.php",
        "Del 7 de agosto del 2023 al 20 de septiembre del 2024.",
        "El avance tecnológico ha beneficiado a la sociedad en telecomunicaciones, computadoras, energía y minerales. En México, hay una comunidad científica creciente en tecnologías cuánticas, y este diplomado formará especialistas en su manejo y aplicación en industria y sociedad.",
        "Estudiantes de los últimos semestres y egresados de licenciatura en física y/o áreas afines.",
        "Martes y Jueves",
        "16-18hrs",
        "Híbrida",
        "15,000",
        "NO",
        array(
          array("Dr. Ricardo Méndez", "#"),
          array("Dr. Santiago Francisco Caballero", "#"),
          array("Dra. Georgina Angélica Olivares", "#"),
          array("Dr. John Alexander Franco", "#"),
          array("Dr. Dorilián López", "#"),
          array("Dr. Luis Manuel Arévalo", "#")
        )
      );
      ?>
      <!-- DIPLOMADO Diplomado IV: Solución de problemas, TIC e investigación didáctica-->
      <?php
      banner_diplomado(
        "enCurso",
        "assets/images/diplomados/Solucion_problemas_tic.jpg",
        "Solución de Problemas, TIC e Investigación Didáctica",
        "Diplomado IV - Forma parte del programa de Diplomados para el Bachillerato: La Matemática del Bachillerato. Un enfoque integral",
        "diplomados/SoluciondeProblemasTICeInvestigacionDidactica/SoluciondeProblemas_TICeInvestigDidactica.php",
        "Del 7 de agosto del 2023 al 20 de septiembre del 2024.",
        "La enseñanza de matemáticas requiere análisis constante para mejorarla
        y adoptar una postura sobre cómo enseñar, qué conocimientos debe tener el egresado y por qué estudiarlas.
        Los docentes deben reflexionar y participar en actividades actualizadas que favorezcan el pensamiento
        crítico. La colaboración entre la Facultad de Ciencias y la Escuela Nacional Preparatoria busca mejorar la
        enseñanza a través de programas de especialización y diplomados.",
        "Profesores de bachillerato.",
        "Martes y Jueves",
        "17-19hrs",
        "Virtual",
        "2,000",
        "NO",
        array(
          array("M. En C. Clara Vidrio", "#")
        )
      );
      ?>

      <!-- DIPLOMADO Diplomado de titulación en Física: actualización docente.2022-2023-->
      <?php
      banner_diplomado(
        "programados",
        "assets/images/diplomados/bg-DiplomadoFisica.webp",
        "Diplomado de Titulación en Física: Actualización docente.",
        "Programa 2022-2023<br><br><b>Cursos con Opción a Diplomado.</b><br><br>Diplomado aprobado como opción de titulación para la carrera de Física en la Facultad de Ciencias. ",
        "diplomados/ActualizacionDocenteenFisica/ActualizacionDocenteEnFisica22-23.php",
        "Del 19 de mayo de 2022 al 7 de diciembre de 2023<br><b>Siguiente curso: El calentamiento global: Un punto de vista termodinámico. Inicia 15 de junio de 2023.</b>",
        "El Programa de Actualización Docente en Física es un diplomado en línea para profesores activos y estudiantes de física interesados en la docencia. Los módulos incluyen áreas de la física y nuevas investigaciones, así como estrategias didácticas para un aprendizaje significativo y adaptación al entorno. Este programa también puede ser utilizado como opción de titulación para la Licenciatura en Física. Hasta el momento, ha graduado a más de 65 físicos comprometidos con la enseñanza.",
        "Estudiantes de la licenciatura en Física, interesados en la docencia, y profesores de Física de todos los niveles educativos.",
        "Martes y/o Jueves",
        "16-20 hrs",
        "Virtual",
        "18,000",
        "NO",
        array(
          array("Dra. Mirna Villavicencio Torres. Departamento de Física", "#"),
          array(
            "Dr. Ricardo Méndez Fragoso. Departamento de Física
                  ",
            "#"
          )
        )
      );
      ?>

      <!-- DIPLOMADO Diplomado IV: Solución de problemas, TIC e investigación didáctica-->
      <?php
      banner_diplomado(
        "pasados",
        "assets/images/diplomados/DerechoyGestionAmbientalParalaSustentabilidad.jpg",
        "Diplomado en Derecho y Gestión Ambiental",
        "XXVII Edición",
        "diplomados/DerechoyGestionAmbiental/XXVIIed/DerechoyGestionAmbiental.php",
        "Del 24 de febrero al 9 de junio del 2023.",
        "Contribuir a la formación de profesionales en el conocimiento y aplicación del derecho y la gestión ambiental bajo un enfoque interdisciplinario y desde un esquema tanto nacional como internacional con el propósito de avanzar en la comprensión de la cuestión ambiental y el desarrollo sustentable así como en el fortalecimiento de la conciencia ambiental.",
        "Abogados, Biólogos (titulados o no), o cualquier profesionista inmerso en el área ya que hemos contado con la participación de Químicos, Arquitectos, etc, así como personas con interés general en la materia ambiental.",
        "Viernes y Sábado",
        "V: 16 - 20 hrs, S: 10 - 14 hrs",
        "Virtual<br>(opción a presencial)",
        "34,800",
        "15% de descuento a quienes realicen el pago completo anticipado (en una sola exhibición) y 20% para alumnos vigentes de la UNAM.",
        array(
          array("Centro de Estudios Jurídicos y Ambientales, A. C.", "http://www.ceja.org.mx/")
        )
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