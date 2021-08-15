<?php
/**
 * Template for displaying status content
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php fell_entry_meta_header(); ?>
    <?php edit_post_link(); ?>
  </header>

  <section class="entry-content">
    <?php the_content(); ?>
  </section><!-- .entry-content -->

</article>
