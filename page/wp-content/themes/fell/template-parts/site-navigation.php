<?php
/**
 * Template part for displaying the site's main navigation
 *
 * @package Fell
 * @since   Fell 2.0
 */

?>

<?php
if ( ! has_nav_menu( 'header' ) && ! has_nav_menu( 'social' ) ) {
  return;
}
?>

<nav class="site-header-nav">

  <input type="checkbox" id="header-nav-toggle" />

  <label for="header-nav-toggle" class="header-nav-toggle-label">
    <span></span>
    <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'fell' ); ?></span>
  </label><!-- .header-nav-toggle-label -->

  <div class="header-nav-menus-container">
    <?php
    if ( has_nav_menu( 'header' ) ) {
      wp_nav_menu(
        array(
          'theme_location' => 'header',
          'menu_class'     => 'header-menu',
          'container'      => false,
        )
      );
    }
    ?>

    <?php
    if ( has_nav_menu( 'social' ) ) {
      ?>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'social',
          'menu_class'     => 'header-social-menu social-menu',
          'container'      => false,
          'depth'          => 1,
        )
      );
    }
    ?>
  </div><!-- header-nav-menus-container -->

</nav><!-- .site-main-nav -->
