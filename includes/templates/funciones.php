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
function banner_curso($estado,$imagen_url,$nombre_curso,$edicion,$pagina_principal_curso_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$descuento,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
    $textocurso = "<div class=\"group curso $estado\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";                                
    echo $textocurso;
    for ($row = 0; $row < count($ponentes);$row++) {
        echo "<a href=\"".$ponentes[$row][1]."\". target=\"_blank\">".$ponentes[$row][0]."</a>";
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
    if($descuento == 'NO'){
        echo "";
    }else{ echo "<p class=\"curso_contenido-descuento\">15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060</p>";}                       
                           
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
function banner_diplomado($estado,$imagen_url,$nombre_diplomado,$edicion,$pagina_principal_diplomado_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
    $textocurso = "<div class=\"group curso $estado\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";                                
    echo $textocurso;
    for ($row = 0; $row < count($ponentes);$row++) {
        echo "<a href=\"".$ponentes[$row][1]."\". target=\"_blank\">".$ponentes[$row][0]."</a>";
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

function banner_taller($estado,$imagen_url,$nombre_taller,$edicion,$pagina_principal_curso_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
    $textocurso = "<div class=\"group curso\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";                                
    echo $textocurso;
    for ($row = 0; $row < count($ponentes);$row++) {
        echo "<a href=\"".$ponentes[$row][1]."\". target=\"_blank\">".$ponentes[$row][0]."</a>";
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
function banner_coloquio($estado,$imagen_url,$nombre_curso,$edicion,$pagina_principal_curso_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$descuento,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
    $textocurso = "<div class=\"group curso $estado\">
                        <div class=\"curso_imagen\">
                            <div class=\"curso_imagen_adapter\">
                                <img src=\"$imagen_url\" alt=\"Imagen del curso\" />
                            </div>
                            <div class=\"curso_imagen-backgroud\"></div>
                            <div class=\"curso_imagen-data\">
                                <div>
                                    <img src=\"assets/images/instructores/usr-f.jpg\" alt=\" \" />
                                    <div class=\"ml-3\">";                                
    echo $textocurso;
    for ($row = 0; $row < count($ponentes);$row++) {
        echo "<a href=\"".$ponentes[$row][1]."\". target=\"_blank\">".$ponentes[$row][0]."</a>";
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
    if($descuento == 'NO'){
        echo "";
    }else{ echo "<p class=\"curso_contenido-descuento\">15% de descuento por concepto de pronto pago (hasta el 18 de abril) - $3,060</p>";}                       
                           
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


?>