<?php
/**
 * Template for displaying singular content
 *
 * @package Fell
 * @since   Fell 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php fell_entry_meta_header(); ?>
    <?php edit_post_link(); ?>
  </header>

  <section class="entry-content">
    <?php the_content(); ?>

    <?php
    wp_link_pages(
      array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'fell' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );
    ?>
  </section><!-- .entry-content -->

  <footer class="entry-footer">
    <?php get_template_part( 'template-parts/author-bio' ); ?>
    <?php fell_entry_meta_footer(); ?>
  </footer>

</article>

<?php
the_post_navigation(
  array(
    'prev_text' =>
      '<span class="screen-reader-text">' . __( 'Previous post', 'fell' ) . '</span>
     <span>' . __( 'Previous', 'fell' ) . '</span>
     <span>%title</span>',
    'next_text' =>
      '<span class="screen-reader-text">' . __( 'Next post', 'fell' ) . '</span>
     <span>' . __( 'Next', 'fell' ) . '</span>
     <span>%title</span>',
  )
);
?>
