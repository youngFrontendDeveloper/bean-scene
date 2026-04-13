 <?php

 require_once get_template_directory() . '/inc/setup.php';
 require_once get_template_directory() . '/inc/enqueue.php';
 require_once get_template_directory() . '/inc/acf.php';

 // Подключаем CSS (один главный файл)
wp_enqueue_style('coffee-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');

// // Подключаем CSS (один главный файл)
// wp_enqueue_style('coffee-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');

// // Подключаем скрипт для активного меню
// add_action( 'wp_enqueue_scripts', 'coffee_enqueue_menu_script' );

// function coffee_enqueue_menu_script() {
// 	wp_enqueue_script(
// 		'coffee-menu-active',
// 		get_template_directory_uri() . '/assets/js/menu-active.js',
// 		array(),
// 		'1.0',
// 		true
// 	);
// }

// add_action( 'wp_enqueue_scripts', 'coffee_enqueue_assets' );

// function coffee_enqueue_assets() {
// 	// CSS.
// 	wp_enqueue_style(
// 		'coffee-style',
// 		get_template_directory_uri() . '/assets/css/style.css',
// 		array(),
// 		'1.0'
// 	);

// 	// JS: меню (активные якоря).
// 	wp_enqueue_script(
// 		'coffee-menu-active',
// 		get_template_directory_uri() . '/assets/js/menu-active.js',
// 		array(),
// 		'1.0',
// 		true
// 	);

// 	// JS: например, слайдер (зависит от menu-active или нет — на ваше усмотрение).
// 	wp_enqueue_script(
// 		'coffee-slider',
// 		get_template_directory_uri() . '/assets/js/slider.js',
// 		array(),
// 		'1.0',
// 		true
// 	);

// 	// JS: общий файл.
// 	wp_enqueue_script(
// 		'coffee-main',
// 		get_template_directory_uri() . '/assets/js/main.js',
// 		array(),
// 		'1.0',
// 		true
// 	);
// }



//  Подключаем секции
 add_action('coffee_homepage', function() {
     get_template_part('template-parts/sections/about');
 }, 20);

 add_action('coffee_homepage', function() {
     get_template_part('template-parts/sections/products');
 }, 30);

 add_action('coffee_homepage', function() {
     get_template_part('template-parts/sections/why');
 }, 40); 

//  Шрифты в прелоад
 function coffee_preload_fonts() {
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>';
}
add_action('wp_head', 'coffee_preload_fonts');

// Подключаем классы компонентов 
require_once get_template_directory() . '/inc/components/Button.php';