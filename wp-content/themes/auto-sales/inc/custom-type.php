<?php

add_theme_support( 'post-thumbnails' );

function reviews_post_type() {


    $labels = array(
        'name'                => _x( 'Reviews', 'Post Type General Name' ),
        'singular_name'       => _x( 'Reviews', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Reviews'),
        'all_items'           => __( 'All reviews'),
        'view_item'           => __( 'View reviews'),
        'add_new_item'        => __( 'Add reviews'),
        'add_new'             => __( 'Add reviews'),
        'edit_item'           => __( 'Edit reviews'),
        'update_item'         => __( 'Update reviews'),
        'search_items'        => __( 'Find reviews'),
        'not_found'           => __( 'Not found reviews'),
        'not_found_in_trash'  => __( 'Not found in the cart'),
    );


    $args = array(
        'label'               => __( 'reviews'),
        'description'         => __( 'reviews description'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'menu_icon'           => 'dashicons-welcome-add-page',
        // You can associate this CPT with a taxonomy or custom taxonomy.
//        'taxonomies'          => array( 'space_children_categories' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 56,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'pedagogic', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
        ),
    );

    register_post_type( 'reviews', $args );


}
add_action( 'init', 'reviews_post_type' );
