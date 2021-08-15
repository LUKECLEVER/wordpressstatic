<?php
/**
 * Filters for body_class().
 *
 * @package Fell
 * @since   Fell 2.0
 */

/**
 * Add classes to the body depending on customize settings.
 *
 * @param  array $classes Body class names.
 *
 * @return array $classes Body class names.
 */
function fell_body_class( $classes ) {

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'right-sidebar' ) ) {
    $classes[] = 'has-right-sidebar';
  }

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'left-sidebar' ) ) {
    $classes[] = 'has-left-sidebar';
  }

  if ( is_home() || is_archive() ) {
    $classes[] = 'layout-' . esc_attr( get_theme_mod( 'content_layout', 'one-column' ) );
    $classes[] = 'content-view-' . esc_attr( get_theme_mod( 'content_view', 'excerpt' ) );
  }

  if ( get_theme_mod( 'fixed_header_menu', false ) ) {
    $classes[] = 'fixed-header-menu';
  }

  return $classes;

}
add_filter( 'body_class', 'fell_body_class' );
