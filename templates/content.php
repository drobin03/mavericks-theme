<article <?php post_class(); ?>>
  <header>
    <?php get_template_part('templates/entry-meta'); ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/social-share-bar'); ?>
  </header>
  <div class="entry-summary">
    <section class="featured-image"><?php the_post_thumbnail(); ?></section>
    <?php the_excerpt(); ?>
  </div>
</article>
