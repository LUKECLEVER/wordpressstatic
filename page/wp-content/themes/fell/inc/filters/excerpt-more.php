<?php
/**
 * Filters for escerpt_more().
 *
 * @package Fell
 * @since   Fell 2.0
 */

/**
 * Adds custom "Read more" element
 *
 * @param string $more_string Read more string.
 *
 * @return string
 */
function fell_excerpt_more( $more_string ) {
  if ( is_admin() ) {
    return $more_string;
  }

  return sprintf(
    '...<a class="read-more-link button" href="%1$s">%2$s</a>',
    esc_url( get_permalink( get_the_ID() ) ),
    esc_html__( 'Read more', 'fell' )
  );
}
add_filter( 'excerpt_more', 'fell_excerpt_more' );
