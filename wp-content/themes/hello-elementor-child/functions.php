<?php
function hello_elementor_child_enqueue_styles()
{
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');

// Include and register custom widget
require_once get_stylesheet_directory() . '/widgets/news-widget.php';

//  Register Right Sidebar
function hello_elementor_child_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Right Sidebar',
        'id'            => 'right-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'hello_elementor_child_widgets_init');

function register_news_widget() {
    register_widget('News_Widget');
}
add_action('widgets_init', 'register_news_widget');