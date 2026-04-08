<?php

function coffee_enqueue() {
    wp_enqueue_style(
        'coffee-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'coffee-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'coffee_enqueue');