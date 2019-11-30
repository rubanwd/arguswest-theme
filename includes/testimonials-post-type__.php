<?php
add_action( 'init', 'testimonial_init' );

function testimonial_init() {
    $labels = array(
        'name'               => _x( 'Testimonial', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Testimonial', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'products', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Testimonial', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Testimonial', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Testimonial', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Testimonial', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Testimonial', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Testimonial', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Testimonial:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Testimonial found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Testimonial found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'testimonial', $args );
}