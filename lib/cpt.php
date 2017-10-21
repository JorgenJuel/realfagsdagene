<?php
// Register Custom Post Type
function foredragsholder_cpt() {

  $labels = array(
    'name'                  => _x( 'Foredragsholdere', 'Post Type General Name', 'sage' ),
    'singular_name'         => _x( 'Foredragsholder', 'Post Type Singular Name', 'sage' ),
    'menu_name'             => __( 'Foredragsholder', 'sage' ),
    'name_admin_bar'        => __( 'Foredragsholder', 'sage' ),
    'archives'              => __( 'Foredragsholdere', 'sage' ),
    'attributes'            => __( 'Attributter', 'sage' ),
    'parent_item_colon'     => __( '', 'sage' ),
    'all_items'             => __( 'Alle foredragsholdere', 'sage' ),
    'add_new_item'          => __( 'Legg til ny foredragsholder', 'sage' ),
    'add_new'               => __( 'Legg til ny', 'sage' ),
    'new_item'              => __( 'Ny foredragsholder', 'sage' ),
    'edit_item'             => __( 'Rediger foredragsholder', 'sage' ),
    'update_item'           => __( 'oppdater foredragsholder', 'sage' ),
    'view_item'             => __( 'Vis foredragsholder', 'sage' ),
    'view_items'            => __( 'Vis foredragsholdere', 'sage' ),
    'search_items'          => __( 'Søk blant foredragsholdere', 'sage' ),
    'featured_image'        => __( 'Profilbilde', 'sage' ),
    'set_featured_image'    => __( 'Bestem profilbilde', 'sage' ),
    'remove_featured_image' => __( 'Fjern profilbilde', 'sage' ),
    'use_featured_image'    => __( 'Bruk som profilbilde', 'sage' ),
  );
  $args = array(
    'label'                 => __( 'Foredragsholder', 'sage' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
    'taxonomies'            => array( 'arstall' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-businessman',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,   
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'foredragsholder', $args );

}
add_action( 'init', 'foredragsholder_cpt', 0 );

// Register Custom Taxonomy
function arstall_tax() {

  $labels = array(
    'name'                       => _x( 'Årstall', 'Taxonomy General Name', 'sage' ),
    'singular_name'              => _x( 'Årstall', 'Taxonomy Singular Name', 'sage' ),
    'menu_name'                  => __( 'Årstall', 'sage' ),
    'all_items'                  => __( 'Alle årstall', 'sage' ),
    'new_item_name'              => __( 'Nytt årstall', 'sage' ),
    'add_new_item'               => __( 'Legg til nytt årstall', 'sage' ),
    'edit_item'                  => __( 'Rediger årstall', 'sage' ),
    'update_item'                => __( 'Oppdater årstall', 'sage' ),
    'view_item'                  => __( 'Vis årstall', 'sage' ),
    'separate_items_with_commas' => __( 'Separer årstall med komma', 'sage' ),
    'add_or_remove_items'        => __( 'Legg til eller fjern årstall', 'sage' ),
    'choose_from_most_used'      => __( 'Velg fram mest brukte', 'sage' ),
    'popular_items'              => __( 'Populære årstall', 'sage' ),
    'search_items'               => __( 'Søk blant årstall', 'sage' ),
    'not_found'                  => __( 'Ingen funnet', 'sage' ),
    'no_terms'                   => __( 'Ingen årstall', 'sage' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'arstall', array( 'foredragsholder', 'arrangement' ), $args );

}
add_action( 'init', 'arstall_tax', 0 );

// Register Custom Post Type
function arrangement_cpt() {

  $labels = array(
    'name'                  => _x( 'Arrangementer', 'Post Type General Name', 'sage' ),
    'singular_name'         => _x( 'Arrangement', 'Post Type Singular Name', 'sage' ),
    'menu_name'             => __( 'Arrangement', 'sage' ),
    'name_admin_bar'        => __( 'Arrangement', 'sage' ),
    'archives'              => __( 'Arrangementer', 'sage' ),
    'attributes'            => __( 'Arrangementattributter', 'sage' ),
    'parent_item_colon'     => __( 'Foreldrearrengement', 'sage' ),
    'all_items'             => __( 'Alle arrengement', 'sage' ),
    'add_new_item'          => __( 'Legg til nytt arrangement', 'sage' ),
    'add_new'               => __( 'Legg til nytt', 'sage' ),
    'new_item'              => __( 'Nytt arrangement', 'sage' ),
    'edit_item'             => __( 'Rediger arrangement', 'sage' ),
    'update_item'           => __( 'Oppdater arrangement', 'sage' ),
    'view_item'             => __( 'Vis arrangement', 'sage' ),
    'view_items'            => __( 'Vis arrangementer', 'sage' ),
    'search_items'          => __( 'Søk blant arrangementer', 'sage' ),
  );
  $args = array(
    'label'                 => __( 'Arrangement', 'sage' ),
    'description'           => __( 'Hendelser', 'sage' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', ),
    'taxonomies'            => array( 'arstall' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-tickets-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,    
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'arrangement', $args );

}
add_action( 'init', 'arrangement_cpt', 0 );