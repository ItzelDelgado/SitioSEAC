<?php
  include './includes/templates/header.php';
?>

    <!-- Start Hero -->
    <section
        class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/slider/bg_ubicacion.webp')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mt-3 text-3xl leading-normal font-medium text-white">Ubicación</h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="relative">
        <div
            class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->>
    <div class="container flex flex-col mt-16" style="align-items: center;">
       <div>
            <h3 class="text-3xl font-semibold mb-6">Secretaría de Educación Abierta y Continua</h3>
            <p class="font-semibold">Edificio Tlahuizcalpan, 1er piso (saliendo del elevador a la izquierda).</p>
            <p>Facultad de Ciencias</p>
            <p>Universidad Nacional Autónoma de México</p> 
            <p>Circuito de la Investigación Científica, C.U., Alcaldía Coyoacán, C.P. 04510, Ciudad Universitaria, CDMX, México.</p>
            <div class="relative md:py-20 mt-5 overflow-hidden w-full">
                <h5 class="font-semibold mb-2">Mapa de la Facultad de Ciencias</h5>
                <iframe class="h-[200px] md:h-[500px] w-full" src="/assets/pdf/MAPA_FaC.pdf" frameborder="0"></iframe>
            </div>
            <div class="flex flex-col justify-center mt-10">
                <h5 class="font-semibold mb-2">Google Maps</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1119.3537139970863!2d-99.17906186381425!3d19.32397927655731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce000fdd96288f%3A0x1096af9b5b03d38d!2sFacultad%20de%20Ciencias%20UNAM!5e0!3m2!1ses!2smx!4v1678945988440!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
       </div>
    </div>

    <!-- End Hero -->


    <?php
    include './includes/templates/footer.php';
  ?>