<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_inscripcion_convenios.webp", "Proceso de Pago e Incripción a los
Programas Académicos Impartidos en Convenio con otras Instancias");
?>
<!-- Fin de - Generamos el encabezado -->

<!-- Start Section-->
<section class="oferta-academica md:py-20">
    <div class="container">
        <div class="grid grid-cols-1">
            <p class="mb-3">Con la finalidad de promover la actualización, capacitación, perfeccionamiento y
                superación de conocimiento por medio de actos académicos con tópicos relativos a las carreras que se
                imparten en la Facultad, la Secretaría de Educación Continua imparte cursos, diplomados, talleres,
                conferencias y más, en colaboración con otras instituciones, donde <b>el proceso de inscripción</b>
                depende de cada uno, y <b>se especifica en la descripción</b> de este.</p>
        </div>
    </div>
</section>


<!-- Start -->
<section class="relative bg-gray-50 dark:bg-slate-800 mb-16 pt-12" id="inscripcion">
    <div class="container">
        <div class="grid grid-cols-1 text-center">
            <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2"></h6>
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Inscripción</h3>

            <p class="text-slate-400 max-w-xl mx-auto">.</p>
        </div>

        <div class="pb-16 grid grid-cols-1 mt-4 mb-10">
            <!-- <h5 class="my-2 font-semibold text-lg">BUCEO UNAM</h5> -->
            <div class="flex flex-wrap md:flex-nowrap justify-center my-2 items-center gap-4">
                <img class="w-48" src="./assets/images/equipo-de-ciencias-unam.png" alt="">
                <h5 class="title mb-1" ><span class="font-semibold">Para mayores informes sobre el proceso de inscripción y pago:</span>
                    <ol class="pl-10" style="list-style-type:circle;">
                        <li>Dra. Norma Angélica Corado Nava</li>
                        <li>Teléfono: 5554133379</li>
                        <li>Correo electrónico: contacto@buceocientifico.org</li>
                        <li>Correo electrónico: ebc@ciencias.unam.mx</li>
                    </ol>
                </h5>
            </div>
            <!-- <h5 class="my-2 mt-10 font-semibold text-lg">CEJA</h5> -->
            <div class="flex flex-wrap md:flex-nowrap justify-center my-2 items-center gap-4">
                <img class="w-48" src="./assets/images/ceja.jpeg" alt="">
                <h5 class="title mb-1"> <span class="font-semibold">Para mayores informes sobre el proceso de inscripción y pago:</span>
                    <ol class="pl-10" style="list-style-type:circle;">
                        <li>Centro de Estudios Jurídicos y Ambientales, A. C.</li>
                        <li>Montecito 38, Col Nápoles, of 15, piso 35, CDMX</li>
                        <li>Teléfono: 33 30 12 25 al 27, extensión 107</li>
                        <li>Sitio web: <a class="font-semibold text-indigo-600 hover:text-red-600 after:bg-indigo-600" href="http://www.ceja.org.mx/">www.ceja.org.mx</a></li>
                        <li>Correo electrónico: cursos@ceja.org.mx</li>
                    </ol>
                </h5>
            </div>

            <!-- <h5 class="my-2 mt-10 font-semibold text-lg">FUNDACIÓN UNAM</h5> -->
            <div class="flex flex-wrap md:flex-nowrap justify-center my-2 mt-10 items-center gap-12">
                <img class="w-48 mb-2" src="./assets/images/fundacion-unam.png" alt="">
                <h5 class="title mb-1"><span class="font-semibold">Para mayores informes sobre el proceso de inscripción y pago:</span>
                    <ol class="pl-10" style="list-style-type:decimal;">
                        <li>Se solicita el formato de preregistro al programa académico de interés al siguiente correo:
                            cursosydiplomados@funam.mx</li>
                        <li>Datos bancarios para depósito en sucursal, practicajas, transferencia bancaria:
                            <ol class="pl-10" style="list-style: circle;">
                                <li>Banco: CitiBanamex</li>
                                <li>Beneficiario: Fundación UNAM, A.C.</li>
                                <li>Sucursal: 870</li>
                                <li>Cuenta: 572529</li>
                                <li>Clabe: 00 21 80 08 70 05 72 52 92</li>
                                <li>Referencia: 829.411.100</li>
                            </ol>
                            <p class="mt-2"> En caso de que se desee efectuarlo con tarjeta de crédito y/o débito se deberá acudir a las oficinas de Fundación UNAM en horario de lunes a jueves de 9:30 a 17:30 y viernes de 9:30 a 14:30, ubicada en Calle Pennsylvania 203, Col. Nápoles, Alcaldía Benito Juárez, C.P. 03810.</p>
                            <p>También se puede efectuar vía telefónica al call center 55 53 400 904 o al teléfono 55 4575 1879
                            <p>Comunidad UNAM: En caso de formar parte de la Comunidad UNAM (alumnos, exalumnos, académicos, personal administrativo), se deberá presentar una identificación VIGENTE que acredite como tal.
                            </p>
                            </p>
                        </li>
                    </ol>
                </h5>
            </div>
        </div>
    </div>
</section><!--end section-->
<!-- End -->

<?php
include './includes/templates/footer.php';
?>