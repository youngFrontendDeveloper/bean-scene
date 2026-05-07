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
    get_template_part('template-parts/sections/different');
}, 40); 

add_action('coffee_homepage', function() {
    get_template_part('template-parts/sections/order');
}, 40); 

add_action('coffee_homepage', function() {
    get_template_part('template-parts/sections/reviews');
}, 40); 

add_action('coffee_homepage', function() {
	get_template_part('template-parts/sections/subscribe');
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

	return $atts;
}

/**
 * Разрешаем загрузку SVG файлов
 */
function allow_svg_upload( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

/**
* Исправляем отображение SVG в медиатеке
*/
function fix_svg_thumb_display() {
	echo '<style>
			td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-preview {
					width: 100% !important;
					height: auto !important;
			}
	</style>';
}
add_action( 'admin_head', 'fix_svg_thumb_display' );

/**
* Добавляем поддержку SVG для ACF полей
*/
function allow_svg_in_acf( $args ) {
	$args['mime_types'] = 'jpg, jpeg, png, gif, svg';
	return $args;
}
add_filter( 'acf/fields/image/field', 'allow_svg_in_acf' );

// Подключаем слайдер Glide.js
function enqueue_glide_slider() {
    // 1. Стили Glide.js (базовые и тема оформления)
    wp_enqueue_style('glide-core', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/css/glide.core.min.css');
    wp_enqueue_style('glide-theme', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/css/glide.theme.min.css');
    
    // 2. Скрипт Glide.js
    wp_enqueue_script('glide-js', 'https://cdn.jsdelivr.net/npm/@glidejs/glide@3.6.0/dist/glide.min.js', [], '3.6.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_glide_slider');


//   Форма cf7 - убираем теги p и br

add_filter('wpcf7_autop_or_not', '__return_false');





