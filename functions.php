<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

remove_all_actions( 'do_feed_rss2' );
add_action( 'do_feed_rss2', 'mavericks_blog_feed_rss2', 10, 1 );

function mavericks_blog_feed_rss2( $for_comments ) {
    $rss_template = get_template_directory() . '/templates/feeds/mavericks_blog_feed_rss2.php';
    // if( get_query_var( 'post_type' ) == 'acme_product' and file_exists( $rss_template ) )
    load_template( $rss_template );
    // else
        // do_feed_rss2( $for_comments ); // Call default function
}