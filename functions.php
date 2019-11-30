<?php 

add_filter('use_block_editor_for_post', '__return_false');

if ( function_exists( 'register_nav_menus' ) )
{
	register_nav_menus(
		array(
			'custom-menu'=>__('Custom menu')
		)
	);
}



if ( function_exists('register_sidebar') ) {


    register_sidebar(array(
        'name' => 'First_footer',
        'id' => 'footer_1',
        'before_widget' => '<div class="first_footer">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Second_footer',
        'id' => 'footer_2',
        'before_widget' => '<div class="second_footer">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Third_footer',
        'id' => 'footer_3',
        'before_widget' => '<div class="third_footer">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Fourth_footer',
        'id' => 'footer_4',
        'before_widget' => '<div class="fourth_footer">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));

}

add_theme_support( 'post-thumbnails' );

function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mytheme_setup');


function remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'home-page.php':
            // the below removes 'editor' support for 'pages'
            // if you want to remove for posts or custom post types as well
            // add this line for posts:
            // remove_post_type_support('post', 'editor');
            // add this line for custom post types and replace 
            // custom-post-type-name with the name of post type:
            // remove_post_type_support('custom-post-type-name', 'editor');
            remove_post_type_support('page', 'editor');
            break;
            default :
            // Don't remove any other template.
            break;
        }
    }
}
add_action('init', 'remove_editor');



// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );






function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
    $submenu['edit.php'][16][0] = 'News Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'News';
    $labels->view_item = 'View News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All News';
    $labels->menu_name = 'News';
    $labels->name_admin_bar = 'News';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );






require_once( __DIR__ . '/includes/team-post-type.php');
require_once( __DIR__ . '/includes/testimonial-post-type.php');