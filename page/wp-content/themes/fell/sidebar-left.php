<?php
/**
 * Template for displaying the left sidebar widget area
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>

<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>

  <aside class="widget-area widget-area-sidebar widget-area-left-sidebar">
    <?php dynamic_sidebar( 'left-sidebar' ); ?>
  </aside>

<?php endif; ?>
