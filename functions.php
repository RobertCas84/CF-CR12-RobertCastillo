<?php

function travellingblog_files(){


wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
wp_enqueue_style('style sheet', get_template_directory_uri().'/style.css');
wp_enqueue_script('bootstrap.js', get_template_directory_uri().'/js/bootstrap.js', array(),'1.0',true);


add_funtion('wp_enqueue_scripts','travellingblog_files');
}
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
        'primary' => __( 'Top Menu', 'THEMENAME' ),
    ) );
    
}
add_action( 'after_setup_theme', 'register_navwalker' );

function wpb_init_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
         ));
 }
 add_action('widgets_init', 'wpb_init_widgets');

?>