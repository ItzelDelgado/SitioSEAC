<?php

//Funcion que imprime el codigo html del banner de un curso.
//@param $estado en que estado se encuentra, (pasados,enCurso,programados)
//@param $imagen_url la url que genera la imagen del banner, siempre se encuentran en assets/images/cursos/...
//@param $nombre_curso el nombre del curso
//@param $edicion la edicion del curso (también puede usarse para otra cosa)
//@param $pagina_principal_curso_url la url que redirecciona al html del curso, siempre va como cursos/NombredeCarpetadeCurso/Nombrecurso.php
//@param $fecha la fecha de dia de inicio y fin de curso.
//@param $descripcion_resumen un resumen de 30 palabras de la descripción del curso, generarlo con chat gpt.
//@param $dirigido_a a quien va dirigido
//@param $dias que dias de la semana se va a impartir
//@param $horas en que horario con formato 16-15 hrs, por ejemplo.
//@param $modalidad la modalidad del curso
//@param $precio_max el costo para externos
//@param $descuento la frase del 15% de descuento, si es que hay, si no, se pone la palabra "NO" en mayusculas.
//@param $ponentes = array(array("Nombre","EnlaceCurriculum")) un arreglo que almacena los nombres de ponentes y sus curriculums. Si solo hay uno, es necesario meterlo en doble array.
function banner_curso($estado, $imagen_url, $nombre_curso, $edicion, $pagina_principal_curso_url, $fecha, $descripcion_resumen, $dirigido_a, $dias, $horas, $modalidad, $precio_max, $descuento, $ponentes = array(array("Nombre", "EnlaceCurriculum")))
{
    $textocurso = "<div class=\"group curso $estado\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"../../assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";
    echo $textocurso;
    for ($row = 0; $row < count($ponentes); $row++) {
        echo "<a href=\"" . $ponentes[$row][1] . "\". target=\"_blank\">" . $ponentes[$row][0] . "</a>";
    }
    $textocurso2 = "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"curso_contenido\">
                            <a href=\"$pagina_principal_curso_url\">$nombre_curso</a>
                            <a href=\"$pagina_principal_curso_url\">$edicion</a>
                            <p class=\"curso_contenido-fecha\">$fecha</p>";
    echo $textocurso2;
    if ($descuento == 'NO') {
        echo "";
    } else {
        echo "<p class=\"curso_contenido-descuento\">15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060</p>";
    }

    $textocurso3 = "<p class=\"curso_contenido-descripcion\">$descripcion_resumen</p>
                            <p class=\"curso_contenido-subdescripcion\">
                                Dirigido a: $dirigido_a.
                            </p>
                            <a href=\"$pagina_principal_curso_url\" class=\"curso_contenido-button pt-4 btn btn-link\">Ver
                                curso</a>
                            <div class=\"curso_contenido-horario\">
                                <ul>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-calendar-alt\"></i>
                                    <span>$dias</span>
                                </li>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-clock\"></i>
                                    <span>$horas</span>
                                </li>
                                <li class=\"flex items-center\">
                                    <i class=\"uil uil-map-marker \"></i>
                                    <span>$modalidad</span>
                                </li>
                                </ul>
                            </div>
                            <div class=\"curso_contenido-precio\">
                                <div>
                                <span>\$$precio_max</span>
                                </div>
                                </div>
                            </div>
                        </div>";
    echo $textocurso3;
}


//Funcion que imprime el codigo html del banner de un diplomado.
//@param $estado en que estado se encuentra, (pasados,enCurso,programados)
//@param $imagen_url la url que genera la imagen del banner, siempre se encuentran en assets/images/diplomados/...
//@param $nombre_diplomado el nombre del diplomado
//@param $edicion la edicion del diplomado (también puede usarse para otra cosa)
//@param $pagina_principal_diplomado_url la url que redirecciona al html del diplomado, siempre va como diplomados/NombredeCarpetadediplomado/Nombrediplomado.php
//@param $fecha la fecha de dia de inicio y fin de diplomado.
//@param $descripcion_resumen un resumen de 30 palabras de la descripción del diplomado, generarlo con chat gpt.
//@param $dirigido_a a quien va dirigido
//@param $dias que dias de la semana se va a impartir
//@param $horas en que horario con formato 16-15 hrs, por ejemplo.
//@param $modalidad la modalidad del diplomado
//@param $precio_max el costo para externos
//@param $descuento la frase del 15% de descuento, si es que hay, si no, se pone la palabra "NO" en mayusculas.
//@param $ponentes = array(array("Nombre","EnlaceCurriculum")) un arreglo que almacena los nombres de ponentes y sus curriculums. Si solo hay uno, es necesario meterlo en doble array.
function banner_diplomado($estado, $imagen_url, $nombre_diplomado, $edicion, $pagina_principal_diplomado_url, $fecha, $descripcion_resumen, $dirigido_a, $dias, $horas, $modalidad, $precio_max, $ponentes = array(array("Nombre", "EnlaceCurriculum")))
{
    $textocurso = "<div class=\"group curso $estado\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"../../assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";
    echo $textocurso;
    for ($row = 0; $row < count($ponentes); $row++) {
        echo "<a href=\"" . $ponentes[$row][1] . "\". target=\"_blank\">" . $ponentes[$row][0] . "</a>";
    }
    $textocurso2 = "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"curso_contenido\">
                            <a href=\"$pagina_principal_diplomado_url\">$nombre_diplomado</a>
                            <a href=\"$pagina_principal_diplomado_url\">$edicion</a>
                            <p class=\"curso_contenido-fecha\">$fecha</p>
                            <p class=\"curso_contenido-descripcion\">$descripcion_resumen</p>
                            <p class=\"curso_contenido-subdescripcion\">
                                Dirigido a: $dirigido_a.
                            </p>
                            <a href=\"$pagina_principal_diplomado_url\" class=\"curso_contenido-button pt-4 btn btn-link\">Ver
                                diplomado</a>
                            <div class=\"curso_contenido-horario\">
                                <ul>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-calendar-alt\"></i>
                                    <span>$dias</span>
                                </li>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-clock\"></i>
                                    <span>$horas</span>
                                </li>
                                <li class=\"flex items-center\">
                                    <i class=\"uil uil-map-marker \"></i>
                                    <span>$modalidad</span>
                                </li>
                                </ul>
                            </div>
                            <div class=\"curso_contenido-precio\">
                                <div>
                                <span>\$$precio_max</span>
                                </div>
                                </div>
                            </div>
                        </div>";
    echo $textocurso2;
}

function banner_taller($estado, $imagen_url, $nombre_taller, $edicion, $pagina_principal_curso_url, $fecha, $descripcion_resumen, $dirigido_a, $dias, $horas, $modalidad, $precio_max, $ponentes = array(array("Nombre", "EnlaceCurriculum")))
{
    $textocurso = "<div class=\"group curso\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"../../assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";
    echo $textocurso;
    for ($row = 0; $row < count($ponentes); $row++) {
        echo "<a href=\"" . $ponentes[$row][1] . "\". target=\"_blank\">" . $ponentes[$row][0] . "</a>";
    }
    $textocurso2 = "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"curso_contenido\">
                            <a href=\"$pagina_principal_curso_url\">$nombre_taller</a>
                            <a href=\"$pagina_principal_curso_url\">$edicion</a>
                            <p class=\"curso_contenido-fecha\">$fecha</p>
                            <p class=\"curso_contenido-descripcion\">$descripcion_resumen</p>
                            <p class=\"curso_contenido-subdescripcion\">
                                Dirigido a: $dirigido_a.
                            </p>
                            <a href=\"$pagina_principal_curso_url\" class=\"curso_contenido-button pt-4 btn btn-link\">Ver
                                diplomado</a>
                            <div class=\"curso_contenido-horario\">
                                <ul>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-calendar-alt\"></i>
                                    <span>$dias</span>
                                </li>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-clock\"></i>
                                    <span>$horas</span>
                                </li>
                                <li class=\"flex items-center\">
                                    <i class=\"uil uil-map-marker \"></i>
                                    <span>$modalidad</span>
                                </li>
                                </ul>
                            </div>
                            <div class=\"curso_contenido-precio\">
                                <div>
                                <span>\$$precio_max</span>
                                </div>
                                </div>
                            </div>
                        </div>";
    echo $textocurso2;
}

//Funcion que imprime el codigo html del banner de un curso.
//@param $estado en que estado se encuentra, (pasados,enCurso,programados)
//@param $imagen_url la url que genera la imagen del banner, siempre se encuentran en assets/images/cursos/...
//@param $nombre_curso el nombre del curso
//@param $edicion la edicion del curso (también puede usarse para otra cosa)
//@param $pagina_principal_curso_url la url que redirecciona al html del curso, siempre va como cursos/NombredeCarpetadeCurso/Nombrecurso.php
//@param $fecha la fecha de dia de inicio y fin de curso.
//@param $descripcion_resumen un resumen de 30 palabras de la descripción del curso, generarlo con chat gpt.
//@param $dirigido_a a quien va dirigido
//@param $dias que dias de la semana se va a impartir
//@param $horas en que horario con formato 16-15 hrs, por ejemplo.
//@param $modalidad la modalidad del curso
//@param $precio_max el costo para externos
//@param $descuento la frase del 15% de descuento, si es que hay, si no, se pone la palabra "NO" en mayusculas.
//@param $ponentes = array(array("Nombre","EnlaceCurriculum")) un arreglo que almacena los nombres de ponentes y sus curriculums. Si solo hay uno, es necesario meterlo en doble array.
function banner_coloquio($estado, $imagen_url, $nombre_curso, $edicion, $pagina_principal_curso_url, $fecha, $descripcion_resumen, $dirigido_a, $dias, $horas, $modalidad, $precio_max, $descuento, $ponentes = array(array("Nombre", "EnlaceCurriculum")))
{
    $textocurso = "<div class=\"group curso $estado\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"../../assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";
    echo $textocurso;
    for ($row = 0; $row < count($ponentes); $row++) {
        echo "<a href=\"" . $ponentes[$row][1] . "\". target=\"_blank\">" . $ponentes[$row][0] . "</a>";
    }
    $textocurso2 = "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"curso_contenido\">
                            <a href=\"$pagina_principal_curso_url\">$nombre_curso</a>
                            <a href=\"$pagina_principal_curso_url\">$edicion</a>
                            <p class=\"curso_contenido-fecha\">$fecha</p>";
    echo $textocurso2;
    if ($descuento == 'NO') {
        echo "";
    } else {
        echo "<p class=\"curso_contenido-descuento\">15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060</p>";
    }

    $textocurso3 = "<p class=\"curso_contenido-descripcion\">$descripcion_resumen</p>
                            <p class=\"curso_contenido-subdescripcion\">
                                Dirigido a: $dirigido_a.
                            </p>
                            <a href=\"$pagina_principal_curso_url\" class=\"curso_contenido-button pt-4 btn btn-link\">Ver
                                coloquio</a>
                            <div class=\"curso_contenido-horario\">
                                <ul>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-calendar-alt\"></i>
                                    <span>$dias</span>
                                </li>
                                <li class=\"mr-3\">
                                    <i class=\"uil uil-clock\"></i>
                                    <span>$horas</span>
                                </li>
                                <li class=\"flex items-center\">
                                    <i class=\"uil uil-map-marker \"></i>
                                    <span>$modalidad</span>
                                </li>
                                </ul>
                            </div>
                            <div class=\"curso_contenido-precio\">
                                <div>
                                <span>\$$precio_max</span>
                                </div>
                                </div>
                            </div>
                        </div>";
    echo $textocurso3;
}

//Función para generar el carrusel
//@param recibe un arreglo con la url de las imagenes que queremos ir desplegando en el carrusel
//Las imagenes deben estar en 1920px por 480px de máximo 160kb para que se ajusten y no se deformen.
function genera_carrusel($imagenes_url = array("assets/images/slider/bn-sustentabilidad.webp"))
{
    //Carrusel
    $textocarrusel = "<section id=\"controls-carousel\" class=\"relative\" data-carousel=\"static\">
      <div class=\"overflow-hidden relative h-screen inset-0\">";
    echo $textocarrusel;
    for ($img = 0; $img < count($imagenes_url); $img++) {
        //<!-- Diapositiva-->
        echo "<div class=\"imagen-carrusel\" data-carousel-item=\"active\">
                <img src=\"$imagenes_url[$img]\" alt=\"Imagen de carrusel\">
            </div>";
    }
    $botones_carrusel = "
      <button type=\"button\"
        class=\"flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none\"
        data-carousel-prev=\"\">
        <span
          class=\"inline-flex justify-center items-center w-8 h-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none\">
          <svg class=\"w-4 h-4 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
            xmlns=\"http://www.w3.org/2000/svg\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 19l-7-7 7-7\"></path>
          </svg>
          <span class=\"hidden\">Siguiente</span>
        </span>
      </button>
      <button type=\"button\"
        class=\"flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none\"
        data-carousel-next=\"\">
        <span
          class=\"inline-flex justify-center items-center w-8 h-8 rounded-full border border-white hover:border-indigo-600 hover:bg-indigo-600 group-focus:outline-none\">
          <svg class=\"w-4 h-4 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"
            xmlns=\"http://www.w3.org/2000/svg\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\"></path>
          </svg>
          <span class=\"hidden\">Anterior</span>
        </span>
      </button>
      <!--Botones carrusel FIN-->
    </section>
    ";
    echo $botones_carrusel;
}

function genera_encabezado_de_pagina($imagen_url, $titulo_de_pagina)
{
    $textogenera_encabezado = "<section class=\"portada\">
  <img src=\"$imagen_url\" alt=\"Imagen de encabezado de page\">
  <div class=\"portada-opacity\"></div>
  <div class=\"container\">
    <div class=\"portada-informacion\" style=\"padding-top: 13rem;\">
      <h1>$titulo_de_pagina</h1>
    </div>
  </div>
</section>
<div class=\"relative\">
  <div
    class=\"shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900\">
    <svg class=\"w-full h-auto\" viewBox=\"0 0 2880 48\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
      <path d=\"M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z\" fill=\"currentColor\"></path>
    </svg>
  </div>
</div>";
    echo $textogenera_encabezado;
}

function g_ponentes_princi_pres($ponentes = array(array("Nombre", "EnlaceCurriculum")))
{
    for ($row = 0; $row < count($ponentes); $row++) {
        echo "<div class=\"profesor\">
            <div>
                <img src=\"../../../assets/images/instructores/usr-m.jpg\" alt=\"Img instructor\">
            </div>
            <div>
                <a href=\"" . $ponentes[$row][1] . "\". target=\"_blank\">" . $ponentes[$row][0] . "</a>
            </div>
            </div>";
    }
}

function aplica_descuento($precio_unam, $precio_unam_descuento, $precio_general, $precio_general_descuento, $frase_descuento, $limite_fecha_descuento)
{
    $fechaActual = strtotime(date("d-m-Y"));
    $fecha_lim_desc = strtotime($limite_fecha_descuento);
    if ($precio_unam_descuento != 'NO' && $fechaActual <= $fecha_lim_desc) {
        echo "<p class=\"text-red-600 max-w-xl mx-auto text-center\">15% de descuento por concepto de pronto pago (hasta el 3 de
        abril)</p>
    <div class=\"grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]\">
        <div class=\"curso-costo-g\">
            <h3>Público GENERAL</h3>

            <!-- PRECIO GENERAL-->
            <div>
                <span>$</span>
                <span style=\"text-decoration: line-through;\">$precio_general</span>
                <span>MXN</span>
            </div>
            <!-- FIN-PRECIO GENERAL -->
            <!-- PRECIO GENERAL CON DESCUENTO-->
            <div>
                <span>$</span>
                <span class=\"price text-4xl font-semibold mb-0\">$precio_general_descuento</span>
                <span>MXN</span>
            </div>
            <!-- FIN - PRECIO GENERAL  CON DESCUENTO-->
            <a href=\"#inscripcion\" class=\"btn\">Inscribirse</a>
        </div>
        <div class=\"curso-costo-g\">
            <h3>Comunidad UNAM</h3>
            <div>
                <span>$</span>
                <span style=\"text-decoration: line-through;\">$precio_unam</span>
                <span>MXN</span>
            </div>
            <!-- PRECIO UNAM CON DESCUENTO-->
            <div>
                <span>$</span>
                <span class=\"price text-4xl font-semibold mb-0\">$precio_unam_descuento</span>
                <span>MXN</span>
            </div>
            <!-- FIN PRECIO UNAM CON DESCUENTO-->
            <ul>
                <li><i class=\"uil uil-check-circle\"></i>Alumnos, exalumnos
                    y personal de la UNAM</li>
                <li><i class=\"uil uil-check-circle\"></i>También aplica
                    para afiliados a Fundación UNAM</li>
            </ul>
            <a href=\"#inscripcion\" class=\"btn\">Inscribirse</a>
        </div>
    </div>";

    } else {
        echo "
    <div class=\"grid lg:grid-cols-2 md:grid-cols-2 mt-8 gap-[30px]\">
        <div class=\"curso-costo-g\">
            <h3>Público GENERAL</h3>

            <!-- PRECIO GENERAL-->
            <div>
                <span>$</span>
                <span>$precio_general</span>
                <span>MXN</span>
            </div>
            <!-- FIN-PRECIO GENERAL -->
            <a href=\"#inscripcion\" class=\"btn\">Inscribirse</a>
        </div>
        <div class=\"curso-costo-g\">
            <h3>Comunidad UNAM</h3>
            <div>
                <span>$</span>
                <span>$precio_unam</span>
                <span>MXN</span>
            </div>
            <ul>
                <li><i class=\"uil uil-check-circle\"></i>Alumnos, exalumnos
                    y personal de la UNAM</li>
                <li><i class=\"uil uil-check-circle\"></i>También aplica
                    para afiliados a Fundación UNAM</li>
            </ul>
            <a href=\"#inscripcion\" class=\"btn\">Inscribirse</a>
        </div>
    </div>";
    }
}

?>