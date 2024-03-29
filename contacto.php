<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_contacto.webp","Contacto");
?>
<!-- Fin de - Generamos el encabezado -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            <div class="text-center px-6 mt-6">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-phone"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Teléfono</h5>
                    <p class="text-slate-400 mt-3">¿Tienes dudas? Llámanos, estamos para resolver todas tus
                        preguntas.</p>

                    <div class="mt-5">
                        <a href="tel:5556225386" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">55
                            5622•5386</a><br>
                        <a href="tel:5556664789" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">55
                            5666•4789</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-envelope"></i>
                </div>

                <div class="content mt-7 flex flex-col items-center">
                    <h5 class="title h5 text-xl font-medium">Correo electrónico</h5>
                    <p class="text-slate-400 mt-3">O escríbenos. Responderemos tus dudas a la brevedad.</p>

                    <div class="mt-5">
                        <a href="mailto:educontinua.of@ciencias.unam.mx" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">educontinua.of@ciencias.unam.mx</a><br>
                    </div>
                    <div class="mt-5">
                        <a href="mailto:educontinua.inf@ciencias.unam.mx" class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">educontinua.inf@ciencias.unam.mx</a>
                    </div>
                </div>
            </div>

            <div class="text-center px-6 mt-6">
                <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                    <i class="uil uil-map-marker"></i>
                </div>

                <div class="content mt-7">
                    <h5 class="title h5 text-xl font-medium">Ubicación</h5>
                    <p class="text-slate-400 mt-3">Facultad de Ciencias <br> Primer piso, Edificio Tlahuizcalpan.
                        <hr> <br> Circuito de la Investigación Científica, C.U.,
                        Alcaldía Coyoacán, C.P. 04510,
                        Ciudad Universitaria, CDMX, México
                    </p>
                    <div class="mt-5">
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.31560704463476!2d-99.1791591169055!3d19.32364899129661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce000fe11ac691%3A0xbcf4f9a132854e7e!2sTlahuizcalpan!5e0!3m2!1ses-419!2smx!4v1675189960246!5m2!1ses-419!2smx" data-type="iframe" class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Ver
                            en Google Maps</a>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <h5 class="text-2xl font-semibold mb-5 mt-16 text-center">Siguenos en nuestras redes sociales</h5>
            <div class="flex justify-center gap-6 mt-10">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z" />
                    </svg>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path d="M0 0v24h24v-24h-24zm18.862 9.237c.208 4.617-3.235 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.079-4.03 3.198-4.03.944 0 1.797.398 2.396 1.037.748-.147 1.451-.42 2.085-.796-.245.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.44.656-.997 1.234-1.638 1.697z" />
                    </svg>
                </div>
                <div class="bg-black" style="width: 40px;">
                    <div class="flex justify-center h-full">
                        <svg style="color: white; width: 30px;" id="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z" fill="white"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Formulario contacto

            <div class="container md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-7 md:col-span-6">
                        <img src="assets/images/contact.svg" alt="">
                    </div>

                    <div class="lg:col-span-5 md:col-span-6 mt-8 md:mt-0">
                        <div class="lg:ml-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                                <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                    <p class="mb-0" id="error-msg"></p>
                                    <div id="simple-msg"></div>
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-left">
                                                <label for="name" class="font-semibold">Your Name:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="lg:col-span-6 mb-5">
                                            <div class="text-left">
                                                <label for="email" class="font-semibold">Your Email:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="grid grid-cols-1">
                                        <div class="mb-5">
                                            <div class="text-left">
                                                <label for="subject" class="font-semibold">Your Question:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="book" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <input name="subject" id="subject" class="form-input pl-11" placeholder="Subject :">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="mb-5">
                                            <div class="text-left">
                                                <label for="comments" class="font-semibold">Your Comment:</label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                                                    <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            Fin formulario contacto-->
</section><!--end section-->
<!-- End Section-->



<?php
include './includes/templates/footer.php';
?>