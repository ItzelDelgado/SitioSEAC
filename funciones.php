<?php
function banner_curso($imagen_url,$nombre_curso,$edicion,$pagina_principal_curso_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$descuento,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
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
                            <a href=\"$pagina_principal_curso_url\" target=\"_blank\" class=\"curso_contenido-button btn btn-link\">Ver
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

function banner_diplomado($imagen_url,$nombre_diplomado,$edicion,$pagina_principal_curso_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
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
                            <a href=\"$pagina_principal_curso_url\">$nombre_diplomado</a>
                            <a href=\"$pagina_principal_curso_url\">$edicion</a>
                            <p class=\"curso_contenido-fecha\">$fecha</p>
                            <p class=\"curso_contenido-descripcion\">$descripcion_resumen</p>
                            <p class=\"curso_contenido-subdescripcion\">
                                Dirigido a: $dirigido_a.
                            </p>
                            <a href=\"$pagina_principal_curso_url\" target=\"_blank\" class=\"curso_contenido-button btn btn-link\">Ver
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

function banner_taller($imagen_url,$nombre_taller,$edicion,$pagina_principal_curso_url,$fecha, $descripcion_resumen,$dirigido_a,$dias,$horas,$modalidad,$precio_max,$ponentes = array(array("Nombre","EnlaceCurriculum"))){
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
                            <a href=\"$pagina_principal_curso_url\" target=\"_blank\" class=\"curso_contenido-button btn btn-link\">Ver
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

?>