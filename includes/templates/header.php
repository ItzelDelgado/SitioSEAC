<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>SEAC - Secretaría de Educación Abierta y Continua</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Secretaría de Educación Abierta y Continua - Facultad de Ciencias" />
  <meta name="keywords"
    content="cursos, educación, continua, facultad, ciencias, biología, física, computación, matemáticas" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />

  <!-- Css -->
  <link href="../assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet" />
  <link href="../assets/libs/tobii/css/tobii.min.css" rel="stylesheet" />
  <!-- Main Css -->
  <link href="../assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/icons.css" />
  <link rel="stylesheet" href="../assets/css/tailwind.css" />
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
  <!-- Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>
  </div>
  <!-- Loader Fin -->

    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
      <div class="container">
          <!-- Logo container-->
          <a class="logo pl-0" href="../index.php">
              <span class="inline-block dark:hidden">
                  <img src="../assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                  <img src="../assets/images/logo-light.png" class="l-light" height="24" alt="">
              </span>
              <img src="../assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
          </a>

          <!-- End Logo container-->
          <div class="menu-extras">
              <div class="menu-item">
                  <!-- Mobile menu toggle-->
                  <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                      <div class="lines">
                          <span></span>
                          <span></span>
                          <span></span>
                      </div>
                  </a>
                  <!-- End mobile menu toggle-->
              </div>
          </div>

          <div id="navigation">
              <!-- Navigation Menu-->
              <ul class="navigation-menu nav-light">
                  <li><a href="../index.php" class="sub-menu-item">Inicio</a></li>
                  <li class="has-submenu parent-parent-menu-item">
                      <a href="javascript:void(0)">Oferta académica</a><span class="menu-arrow"></span>
                      <ul class="submenu">
                          <li class="has-submenu parent-menu-item"><a href="../cursos.php"> Cursos </a><span
                                  class=""></span></li>
                          <li class="has-submenu parent-menu-item"><a href="../diplomados.php"> Diplomados</a><span
                                  class=""></span></li>
                          <li class="has-submenu parent-menu-item"><a href="../talleres.php">Talleres</a><span
                                  class=""></span></li>
                      </ul>
                  </li>

                  <li class="has-submenu parent-parent-menu-item">
                      <a href="javascript:void(0)">Inscripción</a><span class="menu-arrow"></span>
                      <ul class="submenu">
                          <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Inscripción</a><span
                                  class="submenu-arrow"></span>
                              <ul class="submenu">
                                  <li><a href="../Inscripcion_EduContinua.php" class="sub-menu-item">EDUCACIÓN
                                          CONTINUA</a></li>
                                  <li><a href="Inscripcion_Convenios.php" class="sub-menu-item">CONVENIOS</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="has-submenu parent-parent-menu-item">
                      <a href="javascript:void(0)">PROFESORES</a><span class="menu-arrow"></span>
                      <ul class="submenu">
                          <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">IMPARTIR
                                  PROGRAMA</a><span class="submenu-arrow"></span>
                              <ul class="submenu">
                                  <li><a href="../profs-edu-continua.php" class="sub-menu-item">EDUCACIÓN
                                          CONTINUA</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="has-submenu parent-parent-menu-item">
                      <a href="javascript:void(0)">NOSOTROS</a><span class="menu-arrow"></span>
                      <ul class="submenu">
                          <li class="has-submenu parent-menu-item"><a href="../equipo.php">PRESENTACIÓN</a><span
                                  class=""></span></li>
                          <li class="has-submenu parent-menu-item"><a
                                  href="../normatividad.php">NORMATIVIDAD</a><span class=""></span></li>
                          <li class="has-submenu parent-menu-item"><a href="../ubicacion.php">UBICACIÓN</a><span
                                  class=""></span></li>
                          <li class="has-submenu parent-menu-item"><a href="../contacto.php">CONTACTO</a><span
                                  class=""></span></li>
                      </ul>
                  </li>
                  <li><a href="../contacto.php" class="sub-menu-item">Contacto</a></li>




              </ul><!--end navigation menu-->
          </div><!--end navigation-->
      </div><!--end container-->
  </nav><!--end header-->
  <!-- End Navbar -->
