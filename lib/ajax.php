<?php

add_action( 'wp_ajax_hent_foredragsholder', 'delta_hent_foredragsholder' );
add_action( 'wp_ajax_nopriv_hent_foredragsholder', 'delta_hent_foredragsholder', 10, 1 );

function delta_hent_foredragsholder() {
  //global $wpdb; // this is how you get access to the database
  if(isset($_POST) && isset($_POST['foredragsholder'])){
    $id = intval($_POST['foredragsholder']);
    $content_post = get_post($id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $out = ['title' => $content_post->post_title, 'image' => get_the_post_thumbnail_url( $id, 'halvskjerm' ), 'content' => $content, 'id' => $content_post->ID];
    wp_die(json_encode($out));
  }

  wp_die(); // this is required to terminate immediately and return a proper response
}