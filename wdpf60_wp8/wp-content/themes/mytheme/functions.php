<?php
add_theme_support('post-thumbnails');
// function mytheme_setup()
// {
//     add_theme_support('post-thumbnails');
// }
// add_action('init', 'mytheme_setup');

function register_mohiuddin_menu()
{
    register_nav_menu('primary', __('Main Location', 'mytheme'));
    // register_nav_menu( 'primary',__('Footer Menu Location','mytheme') );
}

add_action('after_setup_theme', 'register_mohiuddin_menu');

function slider_post_type()
{
    register_post_type(
        'mohiuddin_slider',
        array(
            'labels'      => array(
                'name'          => __('Sliders', 'mytheme'),
                'singular_name' => __('Sliders', 'mytheme'),
            ),
            'public'      => true,
            'supports' => array( 'title','thumbnail' ),
        )
    );
}
add_action('init', 'slider_post_type');


/**
 * Add a sidebar.
 */
function sidbar_widgets_areas() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'mytheme' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'mytheme' ),
		'before_widget' => '<div class="box"><div class="heading">',
		'after_widget'  => '</div></div>'
		
	) );


	register_sidebar( array(
		'name'          => __( 'Footer Sidebar-1', 'mytheme' ),
		'id'            => 'footer-sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'mytheme' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'sidbar_widgets_areas' );
