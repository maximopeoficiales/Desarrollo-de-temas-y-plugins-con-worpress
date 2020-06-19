<!-- el archivo se llama page-nuestras-clases para asignar este template com slug -->
<?php get_header() ?>
<!-- el Loop -->
<main class="contenedor pagina seccion no-sidebar">
     <div class="text-center">
          <?php get_template_part('template-parts/loop-page');  ?>
          <?php gymfit_lista_clases(); ?>
     </div>
</main>
<?php get_footer() ?>