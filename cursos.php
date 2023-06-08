<?php

use function PHPSTORM_META\map;

include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_cursos.webp", "Cursos");
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
      //CURSO Introducción a los corales fósiles (Jurásico-Paleógeno)
      banner_curso(
        "programados",
        "assets/images/cursos/Introduccion-a-los-Corales-Fosiles.webp",
        "Introducción a los Corales Fósiles (Jurásico-Paleógeno)",
        "1ra. Edición",
        "cursos/IntroduccionaLosCoralesFosiles/IntroaLosCoralesFosilesJurasicoPaleogeno1raEd.php",
        "Del 19 al 23 de junio de 2023",
        "Introducir al alumno en el estudio de los corales fósiles
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

      <?php
      //CURSO Introducción a la programación en R y su aplicación a la inferencia estadística (Curso I). Edición 15
      banner_curso(
        "enCurso",
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

<?php
      //Curso Introducción a la divulgación de la ciencia. Sexta Edición
      banner_curso(
        "enCurso",
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
      // <!-- CURSO Diseño de cursos en cuadernos Jupyter interactivos con la plataforma MACTI-->
      banner_curso(
        "pasados",
        "assets/images/cursos/Cuadernos-Jupyter-Interactivos.webp",
        "Diseño de Cursos en Cuadernos Jupyter Interactivos con la Plataforma MACTI",
        "6ta. Edición",
        "cursos/DisenoDeCursosEnCuadernosJupyterconMACTI/diseno-de-cursos-en-cuadernos-jupyter-interactivos-con-la-plataforma-MACTI.php",
        "Del 1ro al 24 de junio de 2023",
        "El participante será capaz de aplicar diferentes metodologías de
          enseñanza para promover la interacción durante sus clases; además será capaz de diseñar cursos en temas de
          Ciencias e Ingeniería utilizando las herramientas tecnológicas interactivas que ofrece la plataforma MACTI",
        " Dirigido a: Académicos, profesores, comunicadores y todo aquel
          interesado en divulgar ideas científicas a público no
          especializado.",
        "Ju, Vi y Sa",
        "06-09h y 09-12h",
        "Virtual o Presencial",
        "$4,320",
        "NO",
        array(
          array("Dr. Luis Miguel de la Cruz Salas", "")
        )
      )
      ?>

      <?php
      banner_curso(
        "pasados",
        "assets/images/cursos/Programacion-de-Dispositivos-Moviles-con-Android.webp",
        "Programación de Dispositivos Móviles con Android",
        "1ra. Edición",
        "cursos/ProgramacionDispositivosMovilesconAndroid/ProgramacionDispositivosMovilesconAndroid1raEd.php",
        "Del 3 de mayo al 2 de junio de 2023",
        "Los dispositivos móviles son fundamentales en la vida moderna al
              proporcionar acceso inmediato a información. La programación de aplicaciones para dispositivos móviles es
              esencial para el desarrollo de software y ofrece un enorme potencial para los desarrolladores al abrir
              nuevas oportunidades de uso y usuarios.",
        "Dirigido a: Personas con interés en desarrollar aplicaciones para dispositivos móviles con conocimientos
              básicos de lenguaje Java y del lenguaje de marcado XML.",
        "Lu, Mi y Vi",
        "10-13h",
        "Virtual",
        "$4,320",
        "NO",
        array(
          array("M. en C. Gustavo Márquez Flores", "")
        )
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
      banner_curso(
        "pasados",
        "assets/images/cursos/bg-TortugasMexico.webp",
        "Introducción al Estudio y Conservación de Tortugas de México",
        "1ra. Edición",
        "cursos/IntroduccionAlEstudioyConservaciondeTortugas/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php",
        "Del 2 de mayo al 1 de junio de 2023",
        "Las tortugas son vertebrados que existen desde hace más de 200 millones
            de años, pero las acciones humanas han puesto al borde de la extinción a muchas especies. En México, casi
            40% de los taxa de tortugas están amenazados. Es importante capacitar a biólogos, veterinarios y ecólogos en
            su estudio y manejo para formular estrategias de conservación y uso sustentable.",
        "Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
            disciplinas afines.",
        "Ma y ju",
        "16-19h",
        "Virtual",
        "$3,600",
        "15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060",
        array(
          array("Dra. Gracia Patricia González Porter", "assets/curriculums_docentes/GraciaPatriciaGonzalesPor.pdf")
        )
      )
      ?>



      

      <?php
      // <!-- CURSO Rescate y rehabilitación de fauna silvestre. Sexta Edición-->
      banner_curso(
        "enCurso",
        "assets/images/cursos/bg-FaunaSilvestre.webp",
        "Rescate y Rehabilitación de Fauna Silvestre",
        "6ta. Edición",
        "cursos/RescateyRehabilitaciondeFaunaSilvestre/RescateyRehabilitaciondeFaunaSilvestre6taEd.php",
        "Del 17 abril al 26 junio del 2023",
        "Actividades antropogénicas y desastres naturales ponen en riesgo a
          especies de fauna silvestre en peligro de extinción. La IUCN y el WHSG han creado criterios para rescatar
          y rehabilitar a estos animales, por lo que biólogos y profesionales afines deben ampliar su campo de
          acción en su atención, rescate y rehabilitación.",
        "Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
          disciplinas afines.",
        "Lunes",
        "16-19h",
        "Virtual",
        "$3,200",
        "15% de descuento por concepto de pronto pago (hasta el 3 de abril) - $2,720",
        array(
          array("Dra. Rosalía Pastor Nieto", "assets/curriculums_docentes/RosaliaPastorNieto.pdf")
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
        "Alumnos de licenciatura (Biología y Geología) a partir del sexto semestre. Estudiantes de la
                  maestría y del doctorado, y maestros.",
        "P: Mie y vie<br>V: Sab",
        "19-21 y 10-13 hrs",
        "Hibrida",
        "800",
        "NO",
        array(array("Dr. Hannes Loeser", "assets/curriculums_docentes/HannesLoser.pdf"), array("Dr. Rafael Villanueva Olea", "assets/curriculums_docentes/RafaelVillanuevaOlea.pdf"))
      );
      ?>


      <?php
      // <!-- CURSO Estrategias de Educación ambiental para la sustentabilidad. Segunda Edición-->
      banner_curso(
        "pasados",
        "assets/images/cursos/bg-estrategias-edu-ambiental-para-sustentabilidad.webp",
        "Estrategias de Educación Ambiental Para la Sustentabilidad",
        "2da. Edición",
        "cursos/EstrategiasdeEduAmbientalParaSustentabilidad/EstrategiasdeEduAmbientalParaSustentabilidad2daEd.php",
        "Del 11 de marzo al 6 de mayo del 2023",
        "Es esencial diseñar intervenciones educativas que aborden la crisis
          socioecológica actual y fomenten la participación y el trabajo colaborativo. Se presentarán enfoques
          críticos y alternativas a la crisis de la modernidad, antecedentes y características de la educación
          ambiental, así como paradigmas educativos e investigación y diferentes aproximaciones metodológicas.",
        "Dirigido a: Todas aquellas personas
          interesadas en el campo de la Educación ambiental para la
          sustentabilidad y que quieran desarrollar estrategias
          educativas: educadoras, académicas, organizaciones de la
          sociedad civil, funcionarias, estudiantes.",
        "Sábado",
        "10-13h",
        "Híbrida",
        "$5,700",
        "NO",
        array(
          array("Dra. Irama Silvia Marisela Núñez Tancredi", "assets/curriculums_docentes/IramaMariselaNunezTancredi.pdf")
        )
      )
      ?>



      <?php
      banner_curso(
        "pasados",
        "assets/images/cursos/bg-Dibujo_de_la_naturaleza.webp",
        "Dibujo de la naturaleza",
        " 1ra. Edición",
        "/cursos/DibujoDeLaNaturaleza/DibujoDeLaNaturaleza1raEd.php",
        " Del 11 de abril al 15 de junio de 2023",
        "Hay pocos cursos en el mundo sobre dibujo científico y en nuestro país
            no hay escuelas para enseñarlo, a pesar de su uso creciente. El dibujo permite crear mundos coherentes con
            la realidad biológica y modelos científicos, y se deben dibujar con orden y atención al tema, composición
            artística y color. El color depende de la forma y se debe estudiar por separado para aplicarlo
            correctamente.",
        "Dirigido a: El taller está dirigido a biólogos, ilustradores,
            artistas plásticos, artistas visuales y toda aquella persona que
            cuente o no, con entrenamiento previo en el campo del dibujo de
            la naturaleza.",
        "Ma y Ju",
        "15-19h",
        "Presencial",
        "$6,000",
        "15% de descuento por concepto de pronto pago (hasta el 28 de marzo)",
        array(
          array("M. Aldi de Oyarzabal Salcedo", "assets/curriculums_docentes/AldideOyarzabalSal.pdf")
        )
      );

      ?>

      <?php
      //CURSO Estadística aplicada al diseño y análisis de estudios experimentales
      banner_curso(
        "pasados",
        "assets/images/cursos/bg-estadica-aplicada-diseño-est-exp.webp",
        "Estadística Aplicada al Diseño y Análisis de Estudios
        Experimentales",
        "7ma. Edición (Curso teórico - práctico)",
        "cursos/EstadisticaAplicadaalDiseno/EstadisticaEplicadaalDiseno7ed.php",
        "Del 4 de marzo al 27 de mayo de 2023",
        "Contrario a lo que se piensa, la estadística no es la última
        etapa de una investigación, sino más bien es parte fundamental
        de la planeación de ésta; sus objetivos, modelos a emplear y
        análisis a efectuar. Si se empleó la estadística de manera
        correcta, los resultados deberán responder a los objetivos.",
        "Profesionistas y
        estudiantes en el área de ciencias experimentales y de
        investigación.",
        "Sábado",
        "08-12 hrs",
        "Virtual",
        "5800",
        "NO",
        array(
          array("Dra. María de Lourdes Barbosa", "assets/curriculums_docentes/MaLourdesBarbosaSal.pdf"),
          array("Biol. María Guadalupe Camacho", "assets/curriculums_docentes/MaGuadalupeCamachoSan.pdf")
        )
      );
      ?>


      <?php
      //CURSO Bioestadística
      banner_curso(
        "pasados",
        "assets/images/cursos/bg-bioestadistica.webp",
        "Bioestadística",
        "16a. Edición",
        "cursos/Bioestadistica/Bioestadistica16.php",
        "Del 3 de marzo al 28 de abril de 2023",
        "Curso fundamental para aprender las bases teóricas más
        importantes y necesarias para el correcto procesamiento de la
        información. El curso está montado en el LMS de Moodle, lo que
        permite la interacción entre los alumnos y con el profesor.",
        "Estudiantes, profesionales del área
        químico-biológica, de la salud y áreas a fines (este curso, está
        dirigido básicamente a médicos, biólogos, enfermeros,
        psicólogos, trabajadores sociales).",
        "Lunes - Viernes",
        "17-20 hrs",
        "Virtual",
        "6000",
        "NO",
        array(
          array("M. en C. Jorge A. Moreno Hernández", "assets/curriculums_docentes/JorgeAMorenoHern.pdf"),
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

    </div> <!-- CIERRA EL DIV DE LOS CURSOS -->
  </div> <!-- CIERRA EL CONTENEDOR DE LOS CURSOS -->
</section><!--end section--> <!-- CIERRA LA SECCIÓN DE LOS CURSOS -->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>