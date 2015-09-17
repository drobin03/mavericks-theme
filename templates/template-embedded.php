<?php
/**
 * Template Name: Embedded Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Posts -->
<?php wp_reset_postdata(); ?>
<?php $args = array(
    'posts_per_page' => '3',
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post');
    $recent_posts = new WP_Query($args);
?>
<?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
