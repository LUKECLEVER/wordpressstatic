<?php
/**
 * Template for displaying widgets above the content
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>

<?php
if ( ! is_active_sidebar( 'above-content-one' )
  && ! is_active_sidebar( 'above-content-two' )
  && ! is_active_sidebar( 'above-content-three' )
) {
  return;
}
?>

<div class="widget-areas widget-areas-above-content">

  <?php if ( is_active_sidebar( 'above-content-one' ) ) : ?> 
    <div class="widget-area widget-area-above-content widget-area-above-content-one">
      <?php dynamic_sidebar( 'above-content-one' ); ?>
    </div><!-- .widget-area-above-content-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'above-content-two' ) ) : ?>
    <div class="widget-area widget-area-above-content widget-area-above-content-two">
      <?php dynamic_sidebar( 'above-content-two' ); ?>
    </div><!-- .widget-area-above-content-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'above-content-three' ) ) : ?>
    <div class="widget-area widget-area-above-content widget-area-above-content-three">
      <?php dynamic_sidebar( 'above-content-three' ); ?>
    </div><!-- .widget-area-above-content-three -->
  <?php endif; ?>

</div><!-- .widget-areas-above-content -->
