<?php
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

add_editor_style();


if ( ! isset( $content_width ) ) $content_width = 750;
/**
* Widget Areas
*/
add_action('widgets_init', 'simple_widgets' );
function simple_widgets(){
	register_sidebar(array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1" class="widget %2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
	register_sidebar(array(
		'name'          => 'Footer Widgets',
		'id'            => 'footer-widgets',
		'before_widget' => '<section id="%1" class="widget %2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
}
/**
 * Menu Areas
 */
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'utilities' => 'Utilities',
	'mobile' => 'Mobile Menu'

) );

/**
 * Make wp_title better on the home page
 */
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

/**
 * Javascript 
 */
add_action('wp_enqueue_scripts', 'simple_scripts' );
function simple_scripts(){
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}