<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');



/**
 * Change query on some pages
 */
function custom_query_vars( $query ) {
  if ( !is_admin() ){
    if ( $query->query['post_type'] == 'arrangement' && $query->is_archive) {
      // Include all arrangement cpts on archive page
      if($query->query["posts_per_page"] != 3){
        $query->set( 'posts_per_page', -1 );
      }
    }
  }
  return $query;
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\\custom_query_vars' );


if(function_exists('acf_add_options_page')){
  acf_add_options_page();
}