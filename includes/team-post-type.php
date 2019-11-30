<?php
add_action( 'init', 'team_init' );

function team_init() {
    $labels = array(
        'name'               => _x( 'Person', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Person', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Our Team', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Person', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'products', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Person', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Person', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Person', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Person', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Persons', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Person', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Person:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Person found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Person found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title' )
    );

    register_post_type( 'team', $args );
}