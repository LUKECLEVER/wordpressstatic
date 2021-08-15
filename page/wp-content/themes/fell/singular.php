<?php
/**
 * Template for displaying single posts or pages
 *
 * @package Fell
 * @since   Fell 2.0
 */

?>

<?php get_header(); ?>

<?php get_sidebar( 'above' ); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php while ( have_posts() ) : ?>

      <?php the_post(); ?>

      <?php get_template_part( 'template-parts/singular/singular', get_post_type() ); ?>

      <?php
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
      ?>
    <?php endwhile; ?>

  </section><!-- .content-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_sidebar( 'below' ); ?>

<?php get_footer(); ?>
