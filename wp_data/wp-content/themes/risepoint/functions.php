<?php function risepoint_theme_setup()
{

	register_nav_menus(['main-menu' => 'Основное меню']);
	add_theme_support('custom-logo');
	add_theme_support('title-tag');
}
function risepoint_enqueue_assets()
{
	$dist = get_template_directory() . '/dist';
	wp_enqueue_style('style', get_template_directory_uri() . '/dist/styles.css', [], filemtime($dist . '/styles.css'));
	wp_enqueue_script('script', get_template_directory_uri() . '/dist/script.js', [], filemtime($dist . '/script.js'), true);
}

add_action('after_setup_theme', 'risepoint_theme_setup');
add_action('wp_enqueue_scripts', 'risepoint_enqueue_assets');

require_once get_template_directory() . '/inc/Header_Menu_Walker.php';
require_once get_template_directory() . '/app/Data/FeaturedProductsProvider.php';
require_once get_template_directory() . '/app/Data/CategoriesProvider.php';
