<?php
/* 
     Plugin Name: Gym Fitness - Widgets
     Plugin URI:
     Description: Añade widgets al sitio Gymfitness
     Version: 1.0.0
     Author Uri:
     Text Domain: gymfitness
*/
/* Previene que puedan ver este codigo  */
if (!defined('ABSPATH')) die();
/* https://codex.wordpress.org/Widgets_API EXAMPLE */
/**
 * Adds Foo_Widget widget.
 */
class Gimfit_Widget extends WP_Widget
{

     /**
      * Register widget with WordPress.
      */
     function __construct()
     {
          /* nombre y descripcion */
          parent::__construct(
               'foo_widget', // Base ID no cambiar este nombre genera bug
               esc_html__('Gimfit Clases', 'text_domain'), // Name
               array('description' => esc_html__('Agrega clases como widget', 'text_domain'),) // Args
          );
     }

     /**
      * Front-end display of widget.
      *
      * @see WP_Widget::widget()
      *
      * @param array $args     Widget arguments.
      * @param array $instance Saved values from database.
      */
     /* todo el front end que mostrara */
     public function widget($args, $instance)
     {
          echo $args['before_widget'];
          if (!empty($instance['title'])) {
               echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
          }
          /* si esta vacio dale 3  */
          $cantidad = ($instance['cantidad'] == "") ? 3 : $instance['cantidad'];

?>

          <ul>
               <?php
               $args = array(
                    'post_type' => 'gymfitness_clases',
                    'posts_per_page' => $cantidad,
                    'orderby' => 'rand',
               );
               $clases = new WP_Query($args);
               while ($clases->have_posts()) : $clases->the_post();
               ?>
                    <li class="clase-sidebar">
                         <div class="imagen">
                              <?php the_post_thumbnail('thumbnail'); ?>
                         </div>
                         <div class="contenido-clase">
                              <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                   <h3 class="texto-primario"><?php the_title(); ?></h3>
                              </a>
                              <?php
                              /* get_field es para obtener los campos de custom fields */
                              $hora_inicio = get_field('hora_inicio');
                              $hora_fin = get_field('hora_fin');
                              ?>
                              <!-- the_field le indicas el campo -->
                              <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
                         </div>
                    </li>
               <?php endwhile;
               wp_reset_query(); ?>
          </ul>
     <?php echo $args['after_widget'];
     }

     /**
      * Back-end widget form.
      *
      * @see WP_Widget::form()
      *
      * @param array $instance Previously saved values from database.
      */
     public function form($instance)
     {
          //crea el campo
          /* esc_html crea un valor escapando de los caracteres */
          $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('¿Cuantas clases deseas mostrar?', 'gymfitness');
     ?>
          <p>
               <!-- esc_attr se usa
          Siempre se usa cuando se escapan atributos HTML (especialmente valores de formulario) como alt , value , title , etc. Para escapar del valor de una traducción, use esc_attr __ () en su lugar; para escapar, traducir y hacer eco, use esc_attr_e () . -->
               <label for="<?php echo esc_attr($this->get_field_id('cantidad')); ?>">
                    <!-- esc_attr_e escribe traduce los caracteres especiales -->
                    <?php esc_attr_e('¿Cuantas clases deseas mostrar?', 'gymfitness'); ?>
               </label>
               <!-- get_field_name y get_field_id son exclusivos para wp_widget -->
               <input type="number" class="widefat" id="<?php echo esc_attr($this->get_field_id('cantidad')); ?>" name="<?php echo esc_attr($this->get_field_name('cantidad')); ?>" value="<?php echo esc_attr($cantidad) ?>">
          </p>
<?php
     }

     /**
      * Sanitize widget form values as they are saved.
      *
      * @see WP_Widget::update()
      *
      * @param array $new_instance Values just sent to be saved.
      * @param array $old_instance Previously saved values from database.
      *
      * @return array Updated safe values to be saved.
      */
     public function update($new_instance, $old_instance)
     {
          /* aqui se ponte tu campo para que se guarde en la bd  */
          $instance = array();
          $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']) : '';

          return $instance;
     }
} // class Foo_Widget

// register Foo_Widget widget
function register_gimfit_widget()
{
     register_widget('Gimfit_Widget');
}
add_action('widgets_init', 'register_gimfit_widget');
