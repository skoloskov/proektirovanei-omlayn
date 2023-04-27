<?php


require get_template_directory() . '/inc/carbon-fields/entry.php';

add_filter( 'use_block_editor_for_post_type', '__return_false' );

add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', 'enqueue_scripts');
 
function enqueue_scripts() {
 	wp_enqueue_style( 'child_style', get_stylesheet_directory_uri() . '/css/main.css');
 	wp_enqueue_style( 'child_styles', get_stylesheet_directory_uri() . '/css/vendor.css');
}


add_action("admin_menu", "remove_menus");
function remove_menus() {
                # Внешний вид
    remove_menu_page("plugins.php");   
    remove_menu_page("themes.php"); # Плагины
}





