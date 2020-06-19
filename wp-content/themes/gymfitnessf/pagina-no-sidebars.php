<?php
/* comentario necesario para se agrega al momento de elegir template */
/* Template Name: Contenido Centrado- Sin Sidebars */
?>
<?php get_header() ?>
<!-- el Loop -->
<main class="contenedor pagina seccion no-sidebar">
     <div class="contenido-principal">
          <?php get_template_part('template-parts/loop-page');  ?>
     </div>
</main>
<?php get_footer() ?>