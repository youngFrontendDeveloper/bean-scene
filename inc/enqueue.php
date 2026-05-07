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

	// слайдер 
	wp_enqueue_script('glide-slider', get_template_directory_uri() . '/assets/js/glide-slider.js', ['glide-js'], '1.0', true);


	wp_enqueue_script(
    'coffee-mobile-menu',
    get_template_directory_uri() . '/assets/js/mobile-menu.js',
    array(),
    '1.0',
    true
);


wp_enqueue_script(
	'coffee-modal',
	get_template_directory_uri() . '/assets/js/modal.js',
	array(),
	'1.0',
	true
);

	wp_enqueue_script(
    'coffee-form',
    get_template_directory_uri() . '/assets/js/cf7-form.js',
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

