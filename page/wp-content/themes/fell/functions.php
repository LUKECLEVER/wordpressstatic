<?php
/**
 * Theme functions and definitions
 *
 * @package Fell
 * @since   Fell 1.0
 */

if ( ! function_exists( 'fell_setup' ) ) {

  /**
   * Set up theme defaults and registers support for various WordPress features
   */
  function fell_setup() {
    /* Support for translation files */
    load_theme_textdomain( 'fell', get_template_directory() . '/languages' );

    /* Main content width */
    if ( ! isset( $content_width ) ) {
      $content_width = 1024;
    }

    /*
     * Register support for various WordPress features
     */

    /* https://codex.wordpress.org/Automatic_Feed_Links */
    add_theme_support( 'automatic-feed-links' );

    /* https://codex.wordpress.org/Title_Tag */
    add_theme_support( 'title-tag' );

    /* https://codex.wordpress.org/Theme_Logo */
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-tagline' ),
      )
    );

    /* https://codex.wordpress.org/Post_Thumbnails */
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'fell-cover-image', 1500, 250, true );
    add_image_size( 'fell-featured-image', 1000, 600, true );

    /* https://codex.wordpress.org/Custom_Backgrounds */
    add_theme_support(
      'custom-background',
      array(
        'default-color' => 'FFFFFF',
      )
    );

    /* https://codex.wordpress.org/Theme_Markup */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );

    /* https://codex.wordpress.org/Post_Formats */
    add_theme_support(
      'post-formats',
      array(
        'aside',
        'gallery',
        'link',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
      )
    );

    /* https://codex.wordpress.org/Custom_Headers */
    add_theme_support(
      'custom-header',
      array(
        'default-image'  => '%s/assets/images/landscape.jpg',
        'random-default' => false,
        'width'          => 1500,
        'height'         => 1000,
        'flex-height'    => false,
        'flex-width'     => false,
        'header-text'    => false,
        'uploads'        => true,
      )
    );

    add_theme_support( 'wp-block-styles' );

    add_theme_support( 'align-wide' );

    add_theme_support( 'responsive-embeds' );

    register_default_headers(
      array(
        'header_image_name' => array(
          'url'           => '%s/assets/images/landscape.jpg',
          'thumbnail_url' => '%s/assets/images/landscape-thumbnail.jpg',
          'description'   => _x( 'header_image', 'Header Image', 'fell' ),
        ),
      )
    );

    /* Navigation */
    register_nav_menus(
      array(
        'header' => __( 'Header', 'fell' ),
        'social' => __( 'Social links', 'fell' ),
        'footer' => __( 'Footer', 'fell' ),
      )
    );

  }
  add_action( 'after_setup_theme', 'fell_setup' );

}

// Actions.
require_once get_template_directory() . '/inc/actions.php';

// Filters.
require_once get_template_directory() . '/inc/filters.php';

// Theme functions.
require_once get_template_directory() . '/inc/theme-functions.php';
