<?php
include './includes/templates/header.php';
include './includes/templates/funciones.php';
?>

<!-- Generamos el encabezado -->
<?php
genera_encabezado_de_pagina("assets/images/pages/bg_impartirprograma.webp", "Normatividad");
?>
<!-- Fin de - Generamos el encabezado -->

    <div class="container">
      <h2 class="mb-3 mt-16 font-semibold">Estimado profesor:</h2>
      <p>
        Si tiene interés en impartir algún Curso, Diplomado o Taller
        especializado con temas de su dominio, lo invitamos a proponerlo a esta
        Secretaría entregando la documentación necesaria de acuerdo a los
        siguientes formatos:
      </p>

      <ul>
        <li> <h3 class="font-semibold mb-4 mt-10">
        Documento con descripción del curso, Taller o Diplomado.
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/FormatoPresentacionCursoo.docx"
          download="Documento-con-descripcion"
          >Bajar formato</a
        >
      </h3></li>
      <li><h3 class="font-semibold mb-4 mt-10">
        Curriculum Vitae
        <a
          class="text-indigo-600"
          href="assets/pdf/formatos/Formato_CV.docx"
          download="Documento-con-descripcion"
          >Bajar formato</a
        >
      </h3></li>
      </ul>
      
      <div class="mt-10 mb-10">
        <p class="font-semibold">
          Puede hacer llegar a esta Secretaría los documentos de alguna de las
          siguientes maneras:
        </p>
        <ul class="pl-4">
          <li>
            Correo electrónico:
            <a
              class="text-indigo-600"
              href="mailto:educontinua.inf@ciencias.unam.mx"
              >educontinua.inf@ciencias.unam.mx</a
            >
          </li>
          <li>
            Directamente en la Secretaría: 1er piso, Edificio Tlahuizcalpan
            (saliendo del elevador a la izquierda)
          </li>
        </ul>
      </div>
    </div>

    <?php
    include './includes/templates/footer.php';
  ?>