<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/social-share-bar'); ?>
    </header>
    <div class="entry-content">
      <section class="featured-image"><?php the_post_thumbnail(); ?></section>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php get_template_part('templates/social-share-bar'); ?>
      <iframe class='blog-optin' src='https://deliberateu.clickfunnels.com/blog-optin' width='100%' height='300px' frameborder='0'></iframe>
      <p class="links"><a href="https://mavericksdu.com/about" target="_blank">About the Author</a></p>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
