<?php

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/acf.php';


// Подключаем секции
add_action('coffee_homepage', function() {
    get_template_part('template-parts/sections/about');
}, 20);

add_action('coffee_homepage', function() {
    get_template_part('template-parts/sections/new-blend');
}, 20);

add_action('coffee_homepage', function() {
    get_template_part('template-parts/sections/products');
}, 30);

add_action('coffee_homepage', function() {
    get_template_part('template-parts/sections/why');
}, 40); 

// Шрифты в прелоад
function coffee_preload_fonts() {
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>';
}
add_action('wp_head', 'coffee_preload_fonts');

// Подключаем классы компонентов 
require_once get_template_directory() . '/inc/components/Button.php';


// Подключаем классы для меню
add_filter( 'nav_menu_css_class', 'coffee_nav_menu_li_classes', 10, 4 );

function coffee_nav_menu_li_classes( $classes, $item, $args, $depth ) {
	if ( empty( $args->theme_location ) || 'header_menu' !== $args->theme_location ) {
		return $classes;
	}

	$classes[] = 'nav__item';

	if ( true === in_array( 'current-menu-item', $classes, true ) ) {
		$classes[] = 'is-active';
	}

	return $classes;
}


// Подключаем меню
add_filter( 'nav_menu_link_attributes', 'coffee_nav_menu_link_atts', 10, 4 );

function coffee_nav_menu_link_atts( $atts, $item, $args, $depth ) {
	if ( empty( $args->theme_location ) || 'header_menu' !== $args->theme_location ) {
		return $atts;
	}

	$existing_class = isset( $atts['class'] ) ? $atts['class'] . ' ' : '';
	$atts['class']  = $existing_class . 'nav__link link';

	// if ( true === in_array( 'current-menu-item', (array) $item->classes, true ) ) {
	// 	$atts['class'] .= ' is-active';
	// }

	return $atts;
}