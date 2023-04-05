<?php
// Product Custom Post Type
function create_custom_post_type_course()
{
    // set up product labels
    $labels = array(
        'name' => 'course',
        'singular_name' => 'course',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New course',
        'edit_item' => 'Edit course',
        'new_item' => 'New course',
        'all_items' => 'All course',
        'view_item' => 'View course',
        'search_items' => 'Search course',
        'not_found' =>  'No course Found',
        'not_found_in_trash' => 'No course found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'course',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'course'),
        'query_var' => true,
        'taxonomies' => array('post_tag', 'post'),
        'menu_icon' => 'dashicons-table-row-after',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type('course', $args);

    $labels = array(
        'name'              => _x('course Categories', 'phoronesis'),
        'singular_name'     => _x('course Category', 'phoronesis'),
        'search_items'      => __('Search Category', 'phoronesis'),
        'all_items'         => __('All Category', 'phoronesis'),
        'parent_item'       => __('Parent Category', 'phoronesis'),
        'parent_item_colon' => __('Parent Category:', 'phoronesis'),
        'edit_item'         => __('Edit Category', 'phoronesis'),
        'update_item'       => __('Update Category', 'phoronesis'),
        'add_new_item'      => __('Add New Category', 'phoronesis'),
        'new_item_name'     => __('New Category Name', 'phoronesis'),
        'menu_name'         => __('Category', 'phoronesis'),
    );

    $rewrite = array(
        'slug'                       => 'course-category',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite'                    => $rewrite,
    );

    register_taxonomy('course-category', array('course'), $args);
}
add_action('init', 'create_custom_post_type_course');