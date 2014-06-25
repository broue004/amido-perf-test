<?php



function amido_enqueue_styles() {
    wp_register_style( 'theme-css', get_template_directory_uri() . '/css/amido.css' );
    wp_enqueue_style( 'theme-css' );
}
function amido_enqueue_scripts() {
    wp_register_script( 'theme-js', get_template_directory_uri() . '/js/jquery.main.js', array('jquery') );
    wp_register_script( 'profile-js', get_template_directory_uri() . '/js/amido.js', array('jquery') );
    wp_enqueue_script( 'theme-js' );
    wp_enqueue_script( 'profile-js' );
}


add_action( 'wp_enqueue_scripts', 'amido_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'amido_enqueue_scripts' );

function register_menus() {
    register_nav_menu( 'primary-menu', 'Main Menu' );
    register_nav_menu( 'primary-menu-mobile', 'Main Menu Mobile' );
    register_nav_menu( 'top-right-menu', 'Top Right Menu' );
    register_nav_menu( 'footer-menu', 'Footer' );
}
add_action( 'init', 'register_menus' );

add_action( 'init' , 'create_post_type_team' );
function create_post_type_team()
{
    $labels = array(
        'name' => 'Team Members',
        'singular_name' => 'Team Member',
        'menu_name' => 'Team Members',
        'add_new_item' => __('Add New Team Member'),
        'edit_item' => __('Edit Team Member'),
        'new_item' => __('New Team Member'),
        'all_items' => __('All Team Members'),
        'view_item' => __('View Team Members'),
        'search_items' => __('Search Team Members'),
        'not_found' =>  __('No team members found'),
        'not_found_in_trash' => __('No team members found in Trash'),

    );

    //Team member post types
    $args = array(
        'label' => 'Team',
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'has_archive' => 'the-team',
        'rewrite' => array('slug' => 'who-we-are'),
        'supports' => array('title', 'editor')

    );

    register_post_type( "team", $args );
}

register_sidebar(array(
    'name'          => 'Blogs Sidebar',
    'id'            => 'blogs-sidebar',
    'class'         => 'sidebar'
));

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );
add_theme_support( 'post-thumbnails' );
add_image_size( 'timeline-year-photo', 117, 117 );
add_image_size( 'team-member-large', 460, 460 );

include( 'functions-acf-team.php' );
