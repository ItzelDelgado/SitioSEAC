<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Carrusel -->
<?php
//Mandamos a llamar la función para generar el carrusel

//@param recibe un arreglo con la url de las imagenes que queremos ir desplegando en el carrusel
//Las imagenes deben estar en 1920px por 480px de máximo 160kb para que se ajusten y no se deformen.
genera_carrusel(
  array(
    "assets/images/slider/bg_carrusel/bn-sustentabilidad.webp",
    "assets/images/slider/bg_carrusel/bg-tracuache.jpg",
    "assets/images/slider/bg_carrusel/bgTortuga.webp",
    "assets/images/slider/bg_carrusel/BnProgramacion.webp",
    "assets/images/slider/bg_carrusel/carrusel_fisicacuantica.jpg"
  )
);
?>
<!-- Carrusel FIN -->

<!-- PROGRAMAS ACADEMICOS RECIENTES -->

<section class="relative md:py-10 py-10">
  <div class="container">
    <div class="grid grid-cols-1 text-center">
      <h2>
        Oferta Académica
      </h2>

      <p>
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

      <?php
      //Primeros Auxilios, RCP y uso de DAE. Segunda Edición
      banner_curso(
        "programados",
        "assets/images/cursos/bg-primeros-auxilios.webp",
        "Primeros Auxilios, RCP y uso de DAE",
        "2da. Edición",
        "cursos/PrimerosAuxilios/2daEd/PrimerosAuxilios2daEd.php",
        "17 y 24 de junio de 2023",
        "La atención rápida y eficiente en caso de accidentes o enfermedades
        agudas es crucial para reducir los riesgos de secuelas. Una comunidad capacitada en primeros auxilios
        fortalece los vínculos sociales y ayuda a construir resiliencia. Los cuidados cardiacos y los primeros
        auxilios deben seguir los últimos estándares aprobados por la evidencia médica. El curso está diseñado para
        el público en general, ofreciendo información teórica y práctica.",
        "Todo público.",
        "Sábado",
        "9-15 hrs",
        "Presencial",
        "1300",
        "NO",
        array(array("M. en C. Julio A. Prieto Sagredo", "assets/curriculums_docentes/JulioPrieto.pdf"), array("P. de M. Tabaré Merino Sánchez", "assets/curriculums_docentes/TabareMerinoSanchez.pdf"))
      );
      ?>
      <?php
      //Curso Estudio y monitoreo de fauna silvestre
      banner_curso(
        "programados",
        "assets/images/cursos/MapacheFaunaSilvestre.jpg",
        "Curso Estudio y Monitoreo de Fauna Silvestre",
        "",
        "cursos/EstudioyMonitoreodeFaunaSilvestre/EstudioyMonitoreodeFaunaSilvestre.php",
        "Del 19 al 23 de junio del 2023",
        "El curso ofrece aprendizaje directo de técnicas de estudio y conservación de fauna silvestre tropical. Los participantes podrán observar, investigar y comunicar aspectos básicos de la fauna. Los instructores brindarán información para combinar teoría y experiencia en el campo, desarrollando habilidades para futuros profesionales.",
        "Estudiantes, profesionistas, tomadores de decisiones, manejadores de recursos, biólogos, ecólogos, administradores de áreas naturales, administradores de recursos naturales.",
        "Lunes - Viernes",
        "9-14 y 15-18 hrs",
        "Presencial",
        "6500",
        "NO",
        array(array("Dr. Alejandro Villegas Castillo", "#"), array("Lic. Sol de Mayo Mejenes López", "#"), array("Dr. José juan Flores Martínez", "#"))
      );
      ?>

      <?php
      //Taller de robotica. ed 3
      banner_taller(
        "programados",
        "assets/images/talleres/Robotica3ed.jpg",
        "Iniciación a la Robótica",
        "3ra. Edición",
        "talleres/IniciacionAlaRobotica/3ed/IniciacionAlaRobotica3ed.php",
        "Del 29 de julio al 26 de agosto de 2023",
        "¡Construye tu propio robot!<br>
        Serás guiado por expertos en robótica y programación de la Facultad de Ciencias de la U.N.A.M.
        Estudiarás y aplicarás principios de electrónica, programación y mecánica que serán las herramientas para que construyas un robot que podrás llevarte a tu casa terminando el curso.
        <br>Se llevará a cabo una competencia de robots.",
        "Niños y adolescentes de 10 a 17 años",
        "Sábados",
        "10-13hrs",
        "Presencial",
        "4,200",
        "NO",
        array(array("Dra. Andrea Aburto, Coordinadora de la Carrera de Física", "#"),
        array("Dra. Donaji Xóchitl Cruz López","#"))
      );
      ?>

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
        "9-18hrs",
        "Presencial",
        "1,000",
        "NO",
        array(array("Dr. Marcos Nahmad", "assets/curriculums_docentes/MarcosNahmad.pdf"))
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

      <?php
      //Curso Introducción a Python
      banner_curso(
        "programados",
        "assets/images/cursos/introduccion-a-python.jpg",
        "Introducción a Python",
        "1ra. Edición",
        "cursos/IntroduccionaPython/IntroduccionaPython1ed.php",
        "Del 9 de agosto al 26 de agosto del 2023",
        "Python es un lenguaje de programación que se ha vuelto muy popular en los últimos años debido a su facilidad de aprendizaje y a su amplia gama de aplicaciones. En particular, Python es muy popular en el ámbito de la ciencia de datos, ya que tiene una gran cantidad de bibliotecas y herramientas que son muy útiles para el análisis de datos y la creación de modelos predictivos.",
        "Egresados de Matemáticas, Física, Matemáticas Aplicadas, Actuaría, Ingenierías o cualquier profesionista con un conocimiento en álgebra lineal y cálculo diferencial e integral",
        "P: Mie y vie<br>V: Sab",
        "19-21 y 10-13 hrs",
        "Hibrida",
        "800",
        "NO",
        array(array("Candidato a Doctor Sergio Iker Martínez Juárez", "assets/curriculums_docentes/IkerMartinez.pdf"))
      );
      ?>

      <!-- DIPLOMADO Diplomado Ordenamiento ecologico-->
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

      <!-- DIPLOMADO Especies Exoticas Invasoras-->
      <?php
      banner_diplomado(
        "programados",
        "assets/images/diplomados/EspeciesExoticasInvasoras.jpg",
        "Especies Exóticas Invasoras (EEI)",
        "Diplomado 2da. Edición",
        "diplomados/EspeciesExoticasInvasoras/EspeciesExoticasInvasoras2ed.php",
        "Del 4 de septiembre al 1ro de diciembre del 2023.",
        "Las especies invasoras son la segunda causa global de pérdida de biodiversidad después de la destrucción del hábitat. Desplazan a las especies nativas, alteran los ecosistemas acuáticos y pueden hibridarse con especies nativas. La conservación de la biodiversidad debe incluir medidas de prevención, detección, manejo y control de especies invasoras. En México, las acciones se han centrado en especies que afectan la agricultura, ignorando las implicaciones para la biodiversidad.",
        "Estudiantes, profesionistas, tomadores de decisiones, manejadores de recursos, biólogos, ecólogos, administradores de áreas naturales, administradores de recursos naturales.",
        "Lunes, miércoles y viernes.",
        "15-18 hrs",
        "Virtual",
        "13,500",
        "NO",
        array(
          array("Dr. Alejandro Villegas Castillo", "assets/curriculums_docentes/AlejandroVillegasCastillo.pdf"),
          array("Dr. José Juan Flores Martínez", "assets/curriculums_docentes/JuanJoseFlores.pdf"),
          array("M. Ricardo Augusto Rodríguez Medina", "assets/curriculums_docentes/RicardoAugustoRodriguezMedina.pdf"),
          array("M. Marisol Gallardo Angeles", "assets/curriculums_docentes/MarisolGallardoAngeles.pdf"),
          array("M. Jordi Parpal Servole ", "assets/curriculums_docentes/JordiParpalServole.pdf"),
        )
      );
      ?>
      <?php
      //Introducción a la Estadística en la Biología
      banner_curso(
        "programados",
        "assets/images/cursos/bg-EstadisticaEnBiologia1.webp",
        "Introducción a la Estadística en la Biología",
        "2da. Edición",
        "cursos/IntroduccionEstadisticaEnBiologia/IntroduccionEstadisticaEnBiologia_2daEd.php",
        "Fechas por definir de 2023",
        "Tira el paradigma de la estadística como como una sola
        herramienta útil a tu disposición y piensa en ésta más bien como
        una caja de herramientas de utilidad para resolver una serie de
        problemáticas, identificando la utilidad y las limitaciones de
        cada una de las herramientas.",
        "Estudiantes, profesionistas, tomadores de
        decisiones, manejadores de recursos, biólogos, ecólogos,
        administradores de áreas naturales, administradores de recursos
        naturales.",
        "Lunes, Miercoles y Jueves",
        "15-17hrs",
        "Virtual",
        "2500",
        "NO",
        array(array("Dr. Alejandro Villegas Castillo", "assets/curriculums_docentes/AlejandroVillegasCastillo.pdf"))
      );
      ?>


    </div> <!-- CIERRA EL DIV DE LOS CURSOS-->
  </div><!-- CIERRA EL CONTENEDOR-->
</section><!-- TERMINA SECCIÓN -->
<!--end section-->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>