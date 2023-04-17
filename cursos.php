<?php
include './includes/templates/header.php';
?>


<!-- Start Hero -->
<section class="relative table w-full py-36 bg-[url('../../assets/images/slider/bg_cursos.webp')] bg-center bg-no-repeat">
  <div class="absolute inset-0 bg-black opacity-75"></div>
  <div class="container">
    <div class="grid grid-cols-1 pb-8 text-center mt-10">
      <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">
        Cursos</h3>
    </div>
  </div>


</section><!--end section-->
<div class="relative">
  <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
    <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>
<!-- End Hero -->





<!-- CURSOS RECIENTES -->

<div class="relative md:py-10 py-10">
  <div class="container">
    <div class="grid grid-cols-1 pb-8 text-center">



    </div>
    
    <div class="flex justify-center gap-4">
      <button class="bg-gray-50 p-2" id="programados">Programados</button>
      <button class="bg-gray-50 p-2" id="enCurso">En Curso</button>
      <button class="bg-gray-50 p-2">Pasados</button>
    </div>
  </div>
</div>


<!-- COMIENZA Section-->
<section class="relative md:py-5 py-5 overflow-hidden">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">



      <!-- CURSO Bioestadística-->
      <div class="group curso enCurso">
        <div class="curso_imagen">
          <img src="assets/images/cursos/bioestadistica.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div>
                <a href="assets/curriculums_docentes/JorgeAMorenoHern.pdf" target="_blank">M. en C. Jorge A.
                  Moreno Hernández
                </a>
                <span>Maestro en Ciencias Biológicas</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/Bioestadistica16.php">
            Bioestadística</a>
          <a href="cursos/Bioestadistica16.php">16a. Edición</a>
          <p class="curso_contenido-fecha">
            Del 3 de marzo al 28 de abril de 2023
          </p>
          <p class="curso_contenido-descripcion">
            Curso fundamental para aprender las bases teóricas más
            importantes y necesarias para el correcto procesamiento de la
            información. El curso está montado en el LMS de Moodle, lo que
            permite la interacción entre los alumnos y con el profesor.
          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Estudiantes, profesionales del área
            químico-biológica, de la salud y áreas a fines (este curso, está
            dirigido básicamente a médicos, biólogos, enfermeros,
            psicólogos, trabajadores sociales).
          </p>
            <a href="cursos/Bioestadistica16.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lu - Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>17-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$6,000</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->





      <!-- CURSO Estadística aplicada al diseño y análisis de estudios
                experimentales-->
      <div class="group curso enCurso">
        <div class="curso_imagen">
          <img src="assets/images/cursos/estadistica-aplicada-diseño-est-exp.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/MaLourdesBarbosaSal.pdf" target="_blank">Dra. María de Lourdes
                  Barbosa
                </a>
                <span>Doctora en Ciencias Biológicas</span>
              </div>
              <div class="ml-3">
                <a href="assets/curriculums_docentes/MaGuadalupeCamachoSan.pdf" target="_blank">Biol. María Guadalupe
                  Camacho</a>
                <span>Licenciatura en Biología</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/EstadisticaAplicadaAlDiseñoyAnalisisDeEstudiosExperimentales17.php">
            Estadística aplicada al diseño y análisis de estudios
            experimentales</a>
          <a href="cursos/EstadisticaAplicadaAlDiseñoyAnalisisDeEstudiosExperimentales17.php">7ma. Edición</a>
          <p class="curso_contenido-fecha">
            Del 4 de marzo al 27 de mayo de 2023
          </p>
          <p class="curso_contenido-descripcion">
            Contrario a lo que se piensa, la estadística no es la última
            etapa de una investigación, sino más bien es parte fundamental
            de la planeación de ésta; sus objetivos, modelos a emplear y
            análisis a efectuar. Si se empleó la estadística de manera
            correcta, los resultados deberán responder a los objetivos.
          </p>
          <p class="curso_contenido-subdescripcion">
            Curso teórico - práctico.<br />Dirigido a: Profesionistas y
            estudiantes en el área de ciencias experimentales y de
            investigación.
          </p>
            <a href="cursos/EstadisticaAplicadaAlDiseñoyAnalisisDeEstudiosExperimentales17.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Sábado</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>08-12h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$5,800</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->







      <!-- CURSO Dibujo de la naturaleza-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/Dibujo_de_la_naturaleza.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div>
                <a href="assets/curriculums_docentes/AldideOyarzabalSal.pdf" target="_blank">M. Aldi de Oyarzabal Salcedo
                </a>
                <span>Maestro en Artes</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="/cursos/DibujoDeLaNaturaleza1raEd.php">
            Dibujo de la naturaleza
          </a>
          <a href="/cursos/DibujoDeLaNaturaleza1raEd.php">
            1ra. Edición
          </a>
          <p class="curso_contenido-fecha">
            Del 11 de abril al 15 de junio de 2023
          </p>
          <p class="curso_contenido-descuento">
            15% de descuento por concepto de pronto pago (hasta el 28 de marzo) - $5,100
          </p>
          <p class="curso_contenido-descripcion">Hay pocos cursos en el mundo sobre dibujo científico y en nuestro país
            no hay escuelas para enseñarlo, a pesar de su uso creciente. El dibujo permite crear mundos coherentes con
            la realidad biológica y modelos científicos, y se deben dibujar con orden y atención al tema, composición
            artística y color. El color depende de la forma y se debe estudiar por separado para aplicarlo
            correctamente.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: El taller está dirigido a biólogos, ilustradores,
            artistas plásticos, artistas visuales y toda aquella persona que
            cuente o no, con entrenamiento previo en el campo del dibujo de
            la naturaleza.
          </p>
          <a href="cursos/DibujoDeLaNaturaleza1raEd.php" target="_blank" class="curso_contenido-button btn btn-link">
            Ver curso
          </a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt"></i>
                <span>Ma y Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock"></i>
                <span>15-19h</span>
              </li>
              <li>
                <i class="uil uil-map-marker"></i>
                <span>Presencial</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$6,000</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->





      <!-- CURSO Estrategias de Educación ambiental para la sustentabilidad. Segunda Edición-->
      <div class="group curso enCurso">
        <div class="curso_imagen">
          <img src="assets/images/cursos/estrategias-edu-ambiental-para-sustentabilidad.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/IramaMariselaNunezTancredi.pdf" target="_blank">Dra. Irama Silvia
                  Marisela Núñez Tancredi
                </a>
                <span>Doctora en Ciencias</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/EstrategiasdeEduAmbientalParaSustentabilidad2daEd.php">
            Estrategias de educación ambiental para la sustentabilidad</a>
          <a href="cursos/EstrategiasdeEduAmbientalParaSustentabilidad2daEd.php">2da. Edición</a>
          <p class="curso_contenido-fecha">
            Del 11 de marzo al 6 de mayo del 2023
          </p>
          <p class="curso_contenido-descripcion">Es esencial diseñar intervenciones educativas que aborden la crisis
            socioecológica actual y fomenten la participación y el trabajo colaborativo. Se presentarán enfoques
            críticos y alternativas a la crisis de la modernidad, antecedentes y características de la educación
            ambiental, así como paradigmas educativos e investigación y diferentes aproximaciones metodológicas.</p>
          <p class="curso_contenido-subdescripcion">
            Curso - taller.<br />Dirigido a: Todas aquellas personas
            interesadas en el campo de la Educación ambiental para la
            sustentabilidad y que quieran desarrollar estrategias
            educativas: educadoras, académicas, organizaciones de la
            sociedad civil, funcionarias, estudiantes.
          </p>
            <a href="cursos/EstrategiasdeEduAmbientalParaSustentabilidad2daEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Sábado</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>10-13h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Híbrida</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$5,700</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO  Introducción a la divulgación de la ciencia. Sexta Edición-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/DivulgacionCiencia1.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="#" target="_blank">M. Patricia
                  Magaña Rueda
                </a>
                <a href="#" target="_blank">Dra.
                  Clementina Equihua Zamora
                </a>
                <a href="#" target="_blank">Bio. Paloma
                  Zubieta López
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">
            Introducción a la divulgación de la Ciencia</a>
          <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php">6ta. Edición</a>
          <p class="curso_contenido-fecha">
            Del 14 de abril al 12 de mayo del 2023
          </p>
          <p class="curso_contenido-descripcion">El curso busca introducir a los participantes las bases de la
            divulgación científica o comunicación pública de la ciencia, que es un área de trabajo que requiere
            formación académica, entendimiento de lo que la ciencia es y como funciona, así como las maneras de
            comunicarla al público de manera exitosa.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Académicos, profesores, comunicadores y todo aquel
            interesado en divulgar ideas científicas a público no
            especializado.
          </p>

            <a href="cursos/IntroduccionAlaDivulgacionDeLaCiencia6taED.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Viernes</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-20h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,600</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Rescate y rehabilitación de fauna silvestre. Sexta Edición-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/FaunaSilvestre.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/RosaliaPastorNieto.pdf" target="_blank">Dra. Rosalía Pastor
                  Nieto
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php">
            Rescate y rehabilitación de fauna silvestre</a>
          <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php">6ta. Edición</a>
          <p class="curso_contenido-fecha">
            Del 17 abril al 26 junio del 2023
          </p>
          <p class="curso_contenido-descuento">
            15% de descuento por concepto de pronto pago (hasta el 3 de abril) - $2,720
          </p>
          <p class="curso_contenido-descripcion">Actividades antropogénicas y desastres naturales ponen en riesgo a
            especies de fauna silvestre en peligro de extinción. La IUCN y el WHSG han creado criterios para rescatar
            y rehabilitar a estos animales, por lo que biólogos y profesionales afines deben ampliar su campo de
            acción en su atención, rescate y rehabilitación.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
            disciplinas afines.
          </p>

            <a href="cursos/RescateyRehabilitaciondeFaunaSilvestre6taEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lunes</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$3,200</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->
      <!-- CURSO Introducción al estudio y conservación de tortugas de México-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/TortugasMexico1.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-f.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/GraciaPatriciaGonzalesPor.pdf" target="_blank">Dra. Gracia Patricia
                  González Porter
                </a>
                <span>Especialista en tortugas</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php">
            Introducción al estudio y conservación de tortugas de México</a>
          <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php">1ra. Edición</a>
          <p class="curso_contenido-fecha">
            Del 2 de mayo al 1 de junio de 2023
          </p>
          <p class="curso_contenido-descuento">
            15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060
          </p>
          <p class="curso_contenido-descripcion">Las tortugas son vertebrados que existen desde hace más de 200 millones
            de años, pero las acciones humanas han puesto al borde de la extinción a muchas especies. En México, casi
            40% de los taxa de tortugas están amenazados. Es importante capacitar a biólogos, veterinarios y ecólogos en su
            estudio y manejo para formular estrategias de conservación y uso sustentable.</p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Médicos Veterinarios Zootecnistas y
            disciplinas afines.
          </p>

            <a href="cursos/IntroduccionAlEstudioyConservaciondeTortugas1raEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>

          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Ma y Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>16-19h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$3,600</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Introducción a la programación en R y su aplicación a la inferencia estadística (Curso I). Edición 15-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/CursoR.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/JesusJuradoMolina.pdf" target="_blank">Dr. Jesús Jurado
                  Molina</a>
                <span>Doctor en Pesquerías</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php">
            Introducción a la programación en R y su aplicación a la
            inferencia estadística I</a>
          <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php">15a. Edición</a>
          <p class="curso_contenido-fecha">
            Del 6 de mayo al 24 de junio de 2023
          </p>
          <p class="curso_contenido-descripcion">
            R: lenguaje de programación y framework de cómputo estadístico.
            Descubre cómo y por qué ésta herramienta te será de gran
            utilidad en la recopilación y ordenamiento de datos estadísticos
            al momento de realizar tu análisis científico de datos.
          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Oceanógrafos, Oceanólogos, economistas,
            físicos, matemáticos, estudiantes de postgrado, investigadores y
            profesionales en áreas multidisciplinarias.
          </p>
        
            <a href="cursos/IntroduccionAlaProgRyAplicAlinfereniciaEstadI_15aEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>
          
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Sábado</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>10-15h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$5,000</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Introducción a la estadística en la biología, 2da. Edición-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/EstadisticaEnBiologia1.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/AlejandroVillegasCastillo.pdf" target="_blank">Dr. Alejandro Villegas
                  Castillo</a>
                <span>Doctor en Ciencias Biológicas y de la Salud</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php">
            Introducción a la estadística en la biología</a>
          <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php">2da. Edición</a>
          <p class="curso_contenido-fecha">Sin definir</p>
          <p class="curso_contenido-descripcion">
            Tira el paradigma de la estadística como como una sola
            herramienta útil a tu disposición y piensa en ésta más bien como
            una caja de herramientas de utilidad para resolver una serie de
            problemáticas, identificando la utilidad y las limitaciones de
            cada una de las herramientas.
          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Estudiantes, profesionistas, tomadores de
            decisiones, manejadores de recursos, biólogos, ecólogos,
            administradores de áreas naturales, administradores de recursos
            naturales.
          </p>
          
            <a href="cursos/IntroduccionEstadisticaEnBiologia_2daEd.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>
          
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lu, Mi, Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>15-17h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,500</span>
            </div>
          </div>
        </div>
      </div>
      <!-- CURSO FIN -->

      <!-- CURSO Excel, uso y aplicaciones-->
      <div class="group curso programados">
        <div class="curso_imagen">
          <img src="assets/images/cursos/Excel1.webp" alt="" />
          <div class="curso_imagen-backgroud">
          </div>
          <div class="curso_imagen-data">
            <div>
              <img src="assets/images/instructores/usr-m.jpg" alt="" />
              <div class="ml-3">
                <a href="assets/curriculums_docentes/JesusJuradoMolina.pdf" target="_blank">Dr. Jesús Jurado
                  Molina</a>
                <span>Doctor en Pesquerías</span>
              </div>
            </div>
          </div>
        </div>
        <div class="curso_contenido">
          <a href="/cursos/ExcelUsoyAplicaciones.php">
            Excel, uso y aplicaciones</a>
          <a href="/cursos/ExcelUsoyAplicaciones.php">3ra. Edición</a>
          <p class="curso_contenido-fecha">Sin definir</p>
          <p class="curso_contenido-descripcion">
            Aprende una de las herramientas más útiles y versátiles del mercado: Excel. Este es un programa de hojas
            de cálculo que te permitirá hacer casi de todo: registros de ventas, tablas, gráficas, operaciones
            matemáticas, correlaciones, proyecciones, análisis estadísticos, y demás funciones útiles.

          </p>
          <p class="curso_contenido-subdescripcion">
            Dirigido a: Biólogos, Oceanógrafos, Contadores, Oceanólogos, economistas, físicos, matemáticos,
            estudiantes de postgrado, investigadores y profesionales en áreas multidisciplinarias
          </p>
          
            <a href="/cursos/ExcelUsoyAplicaciones.php" target="_blank" class="curso_contenido-button btn btn-link">Ver
              curso</a>
          
          <div class="curso_contenido-horario">
            <ul>
              <li class="mr-3">
                <i class="uil uil-calendar-alt "></i>
                <span>Lu y Ju</span>
              </li>
              <li class="mr-3">
                <i class="uil uil-clock "></i>
                <span>18-20:30h</span>
              </li>
              <li class="flex items-center">
                <i class="uil uil-map-marker "></i>
                <span>Virtual</span>
              </li>
            </ul>
          </div>
          <div class="curso_contenido-precio">
            <div>
              <span>$2,500</span>
            </div>
          </div>
        </div>
      </div>


    </div>


  </div>


</section><!--end section-->
<!-- FIN Section-->

<!-- CURSOS RECIENTES FIN -->

<?php
include './includes/templates/footer.php';
?>