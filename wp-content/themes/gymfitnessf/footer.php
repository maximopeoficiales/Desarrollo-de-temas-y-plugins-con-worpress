     <footer class="site-footer contenedor">
          <hr>
          <div class="contenido-footer">
               <!-- nav -->
               <?php
               $args = array(
                    "theme_location" => "menu_principal",
                    "container" => "nav",
                    "container_class" => "menu-principal",
               );
               wp_nav_menu($args)
               ?>
               <!-- nav -->
               <!-- https://developer.wordpress.org/reference/functions/get_bloginfo/ -->
               <p class="copyright">Todos los derechos reservados <?php echo get_bloginfo('name') . " " . date("Y") ?></p>
          </div>
     </footer>
     <!-- barra de wp_admin -->
     <?php wp_footer(); ?>
     </body>

     </html>