<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <!-- llama a los stylos css -->
     <?php wp_head() ?>
</head>

<body>
     <header class="site-header">
          <div class="contenedor">
               <div class="barra-navegacion">
                    <div class="logo">
                         <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="img logo">
                    </div>
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
               </div>
          </div>
     </header>