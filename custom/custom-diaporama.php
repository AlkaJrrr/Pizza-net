<?php

/**
 * Register a custom post type called "diaporama".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_diapo_init() {
    $labels = array(
        'name'                  => _x( 'diaporamas', 'Post type general name', 'diaporama' ),
        'singular_name'         => _x( 'diaporama', 'Post type singular name', 'diaporama' ),
        'menu_name'             => _x( 'diaporamas', 'Admin Menu text', 'diaporama' ),
        'name_admin_bar'        => _x( 'diaporama', 'Add New on Toolbar', 'diaporama' ),
        'add_new'               => __( 'Ajouter nouveau livre', 'diaporama' ),
        'add_new_item'          => __( 'Add New diaporama', 'diaporama' ),
        'new_item'              => __( 'New diaporama', 'diaporama' ),
        'edit_item'             => __( 'Edit diaporama', 'diaporama' ),
        'view_item'             => __( 'View diaporama', 'diaporama' ),
        'all_items'             => __( 'All diaporamas', 'diaporama' ),
        'search_items'          => __( 'Search diaporamas', 'diaporama' ),
        'parent_item_colon'     => __( 'Parent diaporamas:', 'diaporama' ),
        'not_found'             => __( 'No diaporamas found.', 'diaporama' ),
        'not_found_in_trash'    => __( 'No diaporamas found in Trash.', 'diaporama' ),
        'featured_image'        => _x( 'diaporama Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'diaporama' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'diaporama' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'diaporama' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'diaporama' ),
        'archives'              => _x( 'diaporama archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'diaporama' ),
        'insert_into_item'      => _x( 'Insert into diaporama', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'diaporama' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this diaporama', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'diaporama' ),
        'filter_items_list'     => _x( 'Filter diaporamas list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'diaporama' ),
        'items_list_navigation' => _x( 'diaporamas list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'diaporama' ),
        'items_list'            => _x( 'diaporamas list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'diaporama' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'diapo' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 43,
        'menu_icon'          => 'dashicons-slides',
        'supports'           => array( 'title','thumbnail')
    );

    register_post_type( 'diapo', $args );
}

add_action( 'init', 'wpdocs_codex_diapo_init' );
