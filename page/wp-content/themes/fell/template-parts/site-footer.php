<?php
/**
 * Template part for displaying the site's main footer
 *
 * @package Fell
 * @since   Fell 2.0
 */

?>

<footer class="site-footer">

  <?php
  if ( has_nav_menu( 'social' ) ) {
    wp_nav_menu(
      array(
        'theme_location' => 'social',
        'menu_class'     => 'footer-social-menu social-menu',
        'container'      => false,
        'depth'          => 1,
      )
    );
  }
  ?>

  <?php
  if ( has_nav_menu( 'footer' ) ) {
    wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'menu_class'     => 'footer-menu',
        'container'      => false,
        'depth'          => 1,
      )
    );
  }
  ?>

  <div class="site-footer-info">
    <?php
    $fell_site_title = get_bloginfo( 'name' );

    printf(
      '<span>%1$s %2$s %3$s</span>',
      esc_html( get_theme_mod( 'footer_text', $fell_site_title ) ),
      get_theme_mod( 'footer_copyright', true ) ? '&copy;' : '',
      get_theme_mod( 'footer_year', true ) ? gmdate( 'Y' ) : '' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    );
    ?>

    <?php
    if ( get_theme_mod( 'footer_wordpress', true ) ) {
      printf(
        /* translators: %s = WordPress link */
        '<span>' . esc_html__( 'Proudly powered by %s', 'fell' ) . '</span>',
        '<a href="https://wordpress.org/">WordPress</a>'
      );
    }
    ?>

    <?php
    if ( get_theme_mod( 'footer_theme', true ) ) {
      $fell_theme_data = wp_get_theme();

      printf(
        /* translators: %s = Theme name */
        '<span>' . esc_html__( 'Theme: %s', 'fell' ) . '</span>',
        '<a href="' . esc_url( $fell_theme_data->get( 'ThemeURI' ) ) . '">' . esc_html( $fell_theme_data['Name'] ) . '</a>'
      );
    }
    ?>

  </div><!-- .site-footer-info -->

  <a href="#" id="scroll-to-top">
    <i class="fif fif-chevron"></i>
    <span class="screen-reader-text"><?php esc_html_e( 'Scroll to the top', 'fell' ); ?></span>
  </a>

</footer><!-- .site-footer -->
