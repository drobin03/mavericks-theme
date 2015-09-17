<?php
/**
 * Template Name: Embedded Template
 */
?>

<?php $args = array(
    'posts_per_page' => '3',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post');
    query_posts($args);
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<!-- Posts -->
<?php wp_reset_postdata(); ?>