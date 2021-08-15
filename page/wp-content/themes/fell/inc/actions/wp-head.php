<?php
/**
 * The wp_head hook
 *
 * @package Fell
 * @since   Fell 2.0
 */

/**
 * The wp_head hook
 */
function fell_wp_head() {
  // Pingback.
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}
add_action( 'wp_head', 'fell_wp_head' );
