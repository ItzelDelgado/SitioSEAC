<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Carrusel -->
<?php
//Mandamos a llamar la función para generar el carrusel
//@param recibe un arreglo con la url de las imagenes que queremos ir desplegando en el carrusel
//Las imagenes deben estar en 1920px por 480px de máximo 160kb para que se ajusten y no se deformen.
  genera_carrusel(array("assets/images/slider/bg_carrusel/bn-sustentabilidad.webp",
                        "assets/images/slider/bg_carrusel/bg-tracuache.jpg",
                        "assets/images/slider/bg_carrusel/bgTortuga.webp",
                        "assets/images/slider/bg_carrusel/BnProgramacion.webp",
                        "assets/images/slider/bg_carrusel/carrusel_fisicacuantica.jpg"
                      ));
?>
<!-- Carrusel FIN -->

<!-- PROGRAMAS ACADEMICOS RECIENTES -->

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

  </div>
</section>

<!-- ******************EN ESTA SECCION SE PONEN LAS MINIATURAS DE LOS CURSOS**************************-->
<!-- COMIENZA Section-->
<section class="relative md:py-5 pb-5 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">


      <!-- **********************************************************EJEMPLO DE MINIATURA PARA CURSO************************************************************-->

      <!-- ***********************************************EJEMPLO DE MINIATURA DIPLOMADO**************************************************-->

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

      <?php
      //Curso Introducción a la divulgación de la ciencia. Sexta Edición
      banner_curso(
        "programados",
        "assets/images/cursos/Introduccion-a-la-divulgacion-de-la-Ciencia.webp",
        "Curso de Introducción a la Divulgación de la Ciencia",
        "6ta. Edición",
        "cursos/IntroduccionAlaDivulgacionDeLaCiencia/IntroduccionAlaDivulgacionDeLaCiencia6taED.php",
        "Del 2 al 30 de junio del 2023",
        "El curso busca introducir a los participantes las bases de la
                  divulgación científica o comunicación pública de la ciencia, que es un área de trabajo que requiere
                  formación académica, entendimiento de lo que la ciencia es y como funciona, así como las maneras de
                  comunicarla al público de manera exitosa.",
        "Académicos, profesores, comunicadores y todo aquel
                  interesado en divulgar ideas científicas a público no
                  especializado.",
        "Viernes",
        "16:00 - 20:00 hrs",
        "Virtual por Zoom",
        "2,600",
        "NO",
        array(array("M. en C. Patricia Magaña Rueda", "#"), array("Dra. Clementina Equihua Zamora", "#"), array("Bio. Paloma Zubieta López", "#"))
      );
      ?>

      <?php
      //CURSO Introducción a la programación en R y su aplicación a la inferencia estadística (Curso I). Edición 15
      banner_curso(
        "programados",
        "assets/images/cursos/bg-CursoR.webp",
        "Introducción a la Programación en R y su Aplicación a la Inferencia Estadística",
        "(Curso I). Edición 15",
        "cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadistica/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php",
        "Del 3 de junio al 22 de julio del 2023",
        "R: lenguaje de programación y framework de cómputo estadístico.
                  Descubre cómo y por qué ésta herramienta te será de gran
                  utilidad en la recopilación y ordenamiento de datos estadísticos
                  al momento de realizar tu análisis científico de datos.",
        "Biólogos, Oceanógrafos, Oceanólogos, economistas,
                  físicos, matemáticos, estudiantes de postgrado, investigadores y
                  profesionales en áreas multidisciplinarias.",
        "Sábado",
        "10-15 hrs",
        "Virtual por Meet",
        "5,000",
        "NO",
        array(array("Dr. Jesús Jurado Molina", "assets/curriculums_docentes/JesusJuradoMolina.pdf"))
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
        array(
          array("Dra. Mirna Villavicencio Torres. Departamento de Física", "#"),
          array("Dr. Ricardo Méndez Fragoso. Departamento de Física
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
        "cursos/PrimerosAuxilios/PrimerosAuxilios2daEd.php",
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
      //CURSO Introducción a los corales fósiles (Jurásico-Paleógeno)
      banner_curso(
        "programados",
        "assets/images/cursos/Introduccion-a-los-Corales-Fosiles.webp",
        "Introducción a los Corales Fósiles (Jurásico-Paleógeno)",
        "1ra. Edición",
        "cursos/IntroduccionaLosCoralesFosiles/IntroaLosCoralesFosilesJurasicoPaleogeno1raEd.php",
        "Del 19 al 23 de junio de 2023",
        "ntroducir al alumno en el estudio de los corales fósiles
                  post-paleozoicos, a través del estudio de aspectos morfológicos, de su clasificación y taxonomía, de su
                  preparación en el laboratorio e interpretación de su biología.",
        "Alumnos de licenciatura (Biología y Geología) a partir del sexto semestre. Estudiantes de la
                  maestría y del doctorado, y maestros.",
        "Lunes-Viernes",
        "10-13 y 15-17 hrs<br>(5h por sesión)",
        "Presencial",
        "800",
        "NO",
        array(array("Dr. Hannes Loeser", "assets/curriculums_docentes/HannesLoser.pdf"), array("Dr. Rafael Villanueva Olea", "assets/curriculums_docentes/RafaelVillanuevaOlea.pdf"))
      );
      ?>

      <!-- Diplomado en Tecnologías Cuánticas-->
      <?php
      banner_diplomado(
        "programados",
        "assets/images/diplomados/TecnologiasCuanticas.jpg",
        "Diplomado en Tecnologías Cuánticas",
        "Aprobado como opción de Titulación para la carrera de Física por el Consejo Técnico de la Facultad de Ciencias, UNAM.",
        "diplomados/ActualizacionDocenteenFisica/ActualizacionDocenteEnFisica22-23.php",
        "Del 7 de agosto del 2023 al 20 de septiembre del 2024.",
        "El avance tecnológico ha beneficiado a la sociedad en telecomunicaciones, computadoras, energía y minerales. En México, hay una comunidad científica creciente en tecnologías cuánticas, y este diplomado formará especialistas en su manejo y aplicación en industria y sociedad.",
        "Estudiantes de los últimos semestres y egresados de licenciatura en física y/o áreas afines.",
        "Martes y Jueves",
        "16-18hrs",
        "Híbrida",
        "15,000",
        array(
          array("Dr. Ricardo Méndez", "#"),
          array("Dr. Santiago Francisco Caballero","#"),
          array("Dra. Georgina Angélica Olivares","#"),
          array("Dr. John Alexander Franco","#"),
          array("Dr. Dorilián López","#"),
          array("Dr. Luis Manuel Arévalo","#")
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