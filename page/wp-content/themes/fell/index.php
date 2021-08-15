<?php
/**
 * Template for displaying landing and archive pages
 *
 * @package Fell
 * @since   Fell 1.0
 */

$fell_archive_title       = '';
$fell_archive_description = '';

if ( is_search() ) {
  $fell_archive_title = sprintf(
    /* translators: %s: search term */
    __( 'Search results for: "%s"', 'fell' ),
    '<span>' . get_search_query() . '</span>'
  );

} elseif ( is_archive() && ! have_posts() ) {
  $fell_archive_title = __( 'Nothing Found', 'fell' );

} elseif ( ! is_home() ) {
  $fell_archive_title       = get_the_archive_title();
  $fell_archive_description = get_the_archive_description();
}
?>

<?php get_header(); ?>

<?php get_sidebar( 'above' ); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php if ( $fell_archive_title || $fell_archive_description ) : ?>
      <header class="archive-header">
        <?php if ( $fell_archive_title ) : ?>
          <h1><?php echo wp_kses_post( $fell_archive_title ); ?></h1>
        <?php endif; ?>

        <?php if ( $fell_archive_description ) : ?>
          <?php echo wp_kses_post( wpautop( $fell_archive_description ) ); ?>
        <?php endif; ?>
      </header>
    <?php endif; ?>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content/content', get_post_format() );
      }

      the_posts_pagination(
        array(
          'prev_text'          => __( 'Prev', 'fell' ) . '<span class="screen-reader-text">' . __( 'Previous page', 'fell' ) . '</span>',
          'next_text'          => __( 'Next', 'fell' ) . '<span class="screen-reader-text">' . __( 'Next page', 'fell' ) . '</span>',
          'before_page_number' => '<span class="screen-reader-text">' . __( 'Page', 'fell' ) . '</span>',
        )
      );

    } else {
      get_template_part( 'template-parts/content/content', 'none' );
    }
    ?>

  </section><!-- .contant-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_sidebar( 'below' ); ?>

<?php get_footer(); ?>
