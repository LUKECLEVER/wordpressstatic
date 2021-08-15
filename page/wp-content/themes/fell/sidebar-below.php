<?php
/**
 * Template for displaying widgets below the content
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>

<?php
if ( ! is_active_sidebar( 'below-content-one' )
  && ! is_active_sidebar( 'below-content-two' )
  && ! is_active_sidebar( 'below-content-three' )
) {
  return;
}
?>

<div class="widget-areas widget-areas-below-content">

  <?php if ( is_active_sidebar( 'below-content-one' ) ) : ?>
    <div class="widget-area widget-area-below-content widget-area-below-content-one">
      <?php dynamic_sidebar( 'below-content-one' ); ?>
    </div><!-- .widget-area-below-content-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'below-content-two' ) ) : ?>
    <div class="widget-area widget-area-below-content widget-area-below-content-two">
      <?php dynamic_sidebar( 'below-content-two' ); ?>
    </div><!-- .widget-area-below-content-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'below-content-three' ) ) : ?>
    <div class="widget-area widget-area-below-content widget-area-below-content-three">     
      <?php dynamic_sidebar( 'below-content-three' ); ?>
    </div><!-- .widget-area-below-content-three -->
  <?php endif; ?>

</div> <!-- .widget-areas-below-content -->
