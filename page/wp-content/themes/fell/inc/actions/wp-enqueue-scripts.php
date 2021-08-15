<?php
/**
 * The wp_enqueue_scripts hook.
 *
 * @package Fell
 * @since   Fell 2.0
 */

/**
 * Enqueue scripts, styles and fonts
 */
function fell_scripts() {

  $theme_version = wp_get_theme()->get( 'Version' );

  /* Font Lora from google */
  wp_enqueue_style(
    'fell-fonts',
    'https://fonts.googleapis.com/css?family=Lora:400,400i,500,500i,600,600i,700,700i',
    false,
    $theme_version
  );

  /* Fell icon font */
  wp_enqueue_style(
    'fell-icon-font',
    get_template_directory_uri() . '/assets/fonts/fell-icon-font/fell-icon-font.css',
    false,
    $theme_version
  );

  /* Theme stylesheet */
  wp_enqueue_style(
    'fell-style',
    get_stylesheet_uri(),
    false,
    $theme_version
  );

  /* Theme JavaScript */
  wp_enqueue_script(
    'fell-script',
    get_template_directory_uri() . '/assets/js/functions.js',
    false,
    $theme_version,
    true
  );

  /* Comment-reply script */
  if ( ! is_admin() && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  /* Custom styles */
  $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'fell-cover-image' );

  $options = array(
    '#' . get_background_color(),
    get_theme_mod( 'color_bg_alt', '#202020' ),
    get_theme_mod( 'color_text', '#666666' ),
    get_theme_mod( 'color_text_alt', '#FFFFFF' ),
    get_theme_mod( 'color_anchor', '#1e73be' ),
    is_singular() && $thumbnail_url ? $thumbnail_url : get_custom_header()->url,
  );

  $css = '
    :root {
      --background-color:     %1$s; 
      --background-color-alt: %2$s;
      --text-color:           %3$s;
      --text-color-alt:       %4$s;
      --anchor-color:         %5$s;
    }

    .site-header {
      background-image: url( %6$s );
    }
  ';

  wp_add_inline_style( 'fell-style', vsprintf( $css, $options ) );

}
add_action( 'wp_enqueue_scripts', 'fell_scripts' );
