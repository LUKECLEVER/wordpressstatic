<?php
/**
 * Template for displaying the right sidebar widget area
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>

<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>

  <aside class="widget-area widget-area-sidebar widget-area-right-sidebar">
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
  </aside>

<?php endif; ?>
