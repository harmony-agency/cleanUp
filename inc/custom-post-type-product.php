<?php
add_action( 'init', 'codex_health_products_init' );
/**
 * Register a health-products post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_health_products_init() {
    $labels = array(
        'name'               => _x( 'محصولات ', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'محصولات ', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'محصولات ', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'محصولات ', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'محصولات  جدید', 'محصولات ', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'ایجاد محصولات  جدید', 'your-plugin-textdomain' ),
        'new_item'           => __( 'محصولات  جدید', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'ویرایش محصولات ', 'your-plugin-textdomain' ),
        'view_item'          => __( 'نمایش محصولات ', 'your-plugin-textdomain' ),
        'all_items'          => __( 'تمام محصولات  ', 'your-plugin-textdomain' ),
        'search_items'       => __( ' جستجوی محصولات ', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'والد محصولات :', 'your-plugin-textdomain' ),
        'not_found'          => __( 'محصولات  ای وجود ندارد', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'محصولات  ای در زباله دان وجود ندارد', 'your-plugin-textdomain' )
    );

    $args = array(
        'label'               => __('MyPostType', 'key'),
        'description'         => __('MyPostType', 'key'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
         'taxonomies'          => array('post_tag'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-tools',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,

        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'rewrite'            => array( 'slug' => 'health-products' ),
        'show_in_rest' => true,
        'query_var'          => true,
        'has_archive'        => true,
    );

    register_post_type( 'health-products', $args );
}



// custom taxonomies

add_action( 'init', 'create_health_product_taxonomy' );

function create_health_product_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'دسته بندی محصولات ', 'taxonomy general name' ),
        'singular_name'     => _x( 'محصولات  ', 'taxonomy singular name' ),
        'search_items'      => __( 'جستجوی دسته بندی محصولات ' ),
        'all_items'         => __( 'همه دسته بندی محصولات ' ),
        'parent_item'       => __( 'محصولات   مادر' ),
        'parent_item_colon' => __( 'محصولات   مادر : ' ),
        'edit_item'         => __( 'ویرایش محصولات  ' ),
        'update_item'       => __( 'به روز رسانی محصولات  ' ),
        'add_new_item'      => __( 'اضافه کردن محصولات   جدید' ),
        'new_item_name'     => __( 'نام محصولات   جدید' ),
        'menu_name'         => __( 'دسته بندی محصولات ' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'health-product' ),
    );
    register_taxonomy( 'health-product', array( 'health-products' ), $args );



}