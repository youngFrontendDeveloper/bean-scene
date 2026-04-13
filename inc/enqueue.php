<?php
add_action( 'wp_enqueue_scripts', 'coffee_enqueue_assets' );

function coffee_enqueue_assets() {
	wp_enqueue_style(
		'coffee-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		'1.0'
	);

	wp_enqueue_script(
		'coffee-menu-active',
		get_template_directory_uri() . '/assets/js/menu-active.js',
		array(),
		'1.0',
		true
	);

	wp_enqueue_script(
    'coffee-mobile-menu',
    get_template_directory_uri() . '/assets/js/mobile-menu.js',
    array(),
    '1.0',
    true
);

	wp_enqueue_script(
		'coffee-slider',
		get_template_directory_uri() . '/assets/js/slider.js',
		array(),
		'1.0',
		true
	);

	wp_enqueue_script(
		'coffee-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		'1.0',
		true
	);
}


// <?php

// function coffee_enqueue() {
//     wp_enqueue_style(
//         'coffee-style',
//         get_template_directory_uri() . '/assets/css/style.css',
//         [],
//         '1.0'
//     );

//     wp_enqueue_script(
//         'coffee-js',
//         get_template_directory_uri() . '/assets/js/main.js',
//         [],
//         '1.0',
//         true
//     );
// }

// add_action('wp_enqueue_scripts', 'coffee_enqueue'); 