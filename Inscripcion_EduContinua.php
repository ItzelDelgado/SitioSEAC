<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg-intro-est-bio-2.jpg", 
                            "Proceso de Pago e Inscripción a los Programas Académicos Impartidos por la SEAC");
?>
<!-- Fin de - Generamos el encabezado -->

    <!-- Start Section-->
    <section class="oferta-academica md:py-20">
        <div class="container">
            <div class="grid grid-cols-1">
                <p class="mb-3">Si es de tu elección cursar un programa académico impartido por la Secretaría de Educación Abierta y Continua, debes seguir lo siguientes pasos:</p>
            </div>
        </div>
    </section>


    <!-- Start -->
    <section class="relative bg-gray-50 dark:bg-slate-800 mb-16 pt-12" id="inscripcion">
        <div class="container">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Inscripción</h3>
            </div>

            <div class="grid grid-cols-1 mt-4 mb-10">
                <div
                    class="relative after:content-[''] after:absolute after:top-0  after:w-px after:h-full md:after:m-auto after:border-l-2 after:border-dashed after:border-gray-200 dark:after:border-gray-700 ml-3 md:ml-0">
                    <!--Start content-->
                    <div
                        class="ml-8 relative after:content-[''] after:absolute after:top-[9px] after:rounded-full after:z-10 after:w-2.5 after:h-2.5 after:bg-indigo-600  after:-left-9 before:content-[''] before:absolute  before:-left-11 before:rounded-full before:z-10 before:border-2 before:border-dashed before:border-gray-200 dark:before:border-gray-700 before:top-0 before:w-7 before:h-7 before:bg-white dark:before:bg-slate-900">
                        <div class="grid md:grid-cols-1">
                            <div class="md:mr-8 relative">

                                <h5 class="my-2 font-semibold text-lg">Paso 1</h5>
                                <h6 class="text-slate text-sm mb-0"></h6>
                            </div>

                            <div class="float-left text-left md:ml-8 mt-6 md:mt-0">
                                <h5 class="title mb-1">Si el programa académico no es gratuito, es necesario <b>realizar primero el pago de este</b>, por medio de las siguientes opciones:</h5>
                                <ol class="pl-10"style = "list-style-type: lower-alpha;"> 
                                    <li>
                                        De forma <b>presencial</b> en la <a href="https://www.fciencias.unam.mx/institucion/personal/organizacion/depto-contabilidad-presupuest" target="_blank" class="font-bold text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">ventanilla del Departamento de Contabilidad</a>(abierta de 9 a 14 y de 17 a 19 hrs), ubicado en PB, edificio "P" de la Facultad de Ciencias. Se puede hacer el pago en efectivo o con tarjeta bancaria; de débito o crédito, excepto American Express.<br>Debe tomar en cuenta las siguientes observaciones:
                                        <ul class = "pl-10"style= "list-style-type:lower-roman;">
                                            <li>Se le entrega un ticket como comprobante de pago. Si requiere factura debe indicarlo <b>antes</b> de pagar, pues una vez expedido el ticket no podrá cambiarse. </li>
                                            <li>Si es trabajador o estudiante de la UNAM,  debe mostrar credencial <b>vigente</b> al pagar para tener derecho al precio preferencial.</li>
                                            <li>Si es tesista de la UNAM, mostrar registro de tesis o carta de asesor <b>vigente</b> para tener derecho al precio preferencial.</li>
                                            <li>Si es afiliado a Fundación UNAM, mostrar su credencial de afiliado <b>vigente</b> al pagar para tener derecho al precio preferencial.</li>
                                        </ul>
                                    <li> <b>En línea</b>, a través de la <a href="https://tienda.fciencias.unam.mx"
                                        target="_blank"
                                        class="font-bold btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">Plaza Prometeo</a>, la tienda virtual de la Facultad de Ciencias; dirigirse al menú y desplegar la opción de Cursos y Eventos, dar click en Facultad de Ciencias,  la cual se despliega a la izquierda de la  página, posteriormente seleccionar el programa de interés. Se puede hacer el pago <b>con tarjeta bancaria</b>; de débito o crédito, excepto American Express, o <b>generar ficha de depósito. </b><br>Debe tomar en cuenta las siguientes observaciones:
                                        <ul class = "pl-10"style= "list-style-type:lower-roman;">
                                            <li>En Plaza Prometeo tiene la opción de pagar un precio preferente, por ello es necesario que en el respectivo formulario del programa académico suba el comprobante <b>vigente</b> que avale el derecho al descuento (credencial, copia de registro de tesis o carta de tutor, etc.).</li>
                                            <li>Es necesario verificar que el comprobante de pago que se sube al llenar el formulario sea el correcto, es decir, sea el <b>ticket con código de barras</b> o la <b>factura emitida por la UNAM.</b></li>
                                        </ul>
                                    </li>
                                    <li>Pago <b>interdependencias(UNAM)</b>, consulta el <a href="/assets/pdf/formatos/ParaPagosInterdependencias.pdf"
                                        target="_blank"
                                        class="font-bold btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">documento guía</a>.</li>
                                    <li>Pago <b>por parte de la Facultad de Ciencias</b>, consulta el <a href="/assets/pdf/formatos/ParaPagosFacultad.pdf"
                                            target="_blank"
                                            class="font-bold btn-link text-indigo-600 hover:text-red-600 after:bg-indigo-600 duration-500 ease-in-out">documento guía</a>.</li>
                                </ol>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-1 mt-10">
                            <div class=" md:mr-8 relative">

                                <h5 class="my-2 font-semibold text-lg">Paso 2</h5>
                                <h6 class="text-slate text-sm mb-0"></h6>
                            </div>

                            <div class="float-left text-left md:ml-8 mt-6 md:mt-0">
                                <h5 class="title mb-1">Una vez hecho lo anterior, se debe <b>contestar correctamente el formulario de inscripción</b> que <b>se especifica en cada uno de los programas académicos</b>, utilizado para generar la constancia al término de este; donde se piden los datos del alumno, el comprobante de pago generado respectivamente y en dado caso el comprobante vigente de descuento (credencial, copia de registro de tesis o carta de tutor, etc.). Es importante llenarlo correctamente, ya que una vez emitida la constancia, no se puede modificar.</h5>
                            </div>
                        </div>

                    </div>
                    <!--End content-->

                </div>
            </div>
            <p class="mt-10 pb-16 text-center"><i class="uil uil-exclamation-circle text-red-600 text-xl mr-2"></i>En caso de
                cancelación, procederá la devolución de lo pagado con los criterios administrativos de la Facultad de
                Ciencias.</p>
        </div>
    </section><!--end section-->
    <!-- End -->


    </div>
    </div>
    </div>
    </section><!--end section-->
    <!-- End Section-->

    <?php
    include './includes/templates/footer.php';
  ?>