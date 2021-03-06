<?php
/**
 * The functions for this theme
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */

// We clearly need no admin bar on mobile
add_filter('show_admin_bar', '__return_false');

// Add class names to pagination links (http://css-tricks.com/snippets/wordpress/add-class-to-links-generated-by-next_posts_link-and-previous_posts_link/)
add_filter('next_posts_link_attributes', 'next_posts_attributes');
add_filter('previous_posts_link_attributes', 'previous_posts_attributes');

function next_posts_attributes() {
    return 'class="btn btn-link btn-nav pull-right" data-transition="slide-in"';
}
function previous_posts_attributes() {
    return 'class="btn btn-link btn-nav pull-left" data-transition="slide-out"';
}

// resize thumbnails to 42x42 (doesn't seem to work yet)
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 42, 42, true );
}

?>