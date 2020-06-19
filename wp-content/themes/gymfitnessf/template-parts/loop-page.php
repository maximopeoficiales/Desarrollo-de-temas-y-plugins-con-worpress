<?php while (have_posts()) : the_post(); ?>
     <h1 class="texto-primario text-center"><?php the_title() ?></h1>
     <?php
     if (has_post_thumbnail()) {
          /* string nombre de el tamaño asignado */
          the_post_thumbnail("post", array('class' => "imagen_destacada"));
     } else {
          /*  echo "No hay foto descriptiva"; */
     }
     ?>
     <!-- EN CASOS SEA DE GYMFITNESS CLASS -->
     <?php
     if (get_post_type() === "gymfitness_clases") {
          $hora_inicio = get_field('hora_inicio');
          $hora_fin = get_field('hora_fin'); ?>
          <p class="informacion-clase"><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
     <?php } ?>



     <?php the_content() ?>
     <!-- <div class="extras">
                    <p>Escrito por <b><?php the_author() ?></b></p>
                    <p>Fecha: <b><?php the_date() ?></b></p>
               </div> -->
<?php endwhile ?>