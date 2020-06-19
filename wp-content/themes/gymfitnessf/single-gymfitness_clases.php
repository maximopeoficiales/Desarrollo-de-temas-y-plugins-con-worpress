<?php
/* comentario necesario para se agrega al momento de elegir template */
?>
<?php get_header(); ?>
<!-- el Loop -->
<main class="contenedor pagina seccion con-sidebar">
     <div class="contenido-principal">
          <?php get_template_part('template-parts/loop-page');  ?>
     </div>
     <?php get_sidebar('clases'); ?>
</main>
<?php get_footer(); ?>