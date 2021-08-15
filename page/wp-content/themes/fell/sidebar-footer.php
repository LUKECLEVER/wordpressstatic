<?php
/**
 * Template for displaying widgets in the footer
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>

<?php
if ( ! is_active_sidebar( 'footer-one' )
  && ! is_active_sidebar( 'footer-two' )
  && ! is_active_sidebar( 'footer-three' )
) {
  return;
}
?>

<div class="widget-areas widget-areas-footer">

  <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
    <div class="widget-area widget-area-footer widget-area-footer-one">
      <?php dynamic_sidebar( 'footer-one' ); ?>
    </div><!-- .widget-area-footer-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
    <div class="widget-area widget-area-footer widget-area-footer-two">
      <?php dynamic_sidebar( 'footer-two' ); ?>
    </div><!-- .widget-area-footer-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
    <div class="widget-area widget-area-footer widget-area-footer-three">
      <?php dynamic_sidebar( 'footer-three' ); ?>
    </div><!-- .widget-area-footer-three -->
  <?php endif; ?>

</div><!-- .widget-areas-footer -->
