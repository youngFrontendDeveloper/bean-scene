<?php

function coffee_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'header_menu' => 'Header Menu',
    ]);
}

add_action('after_setup_theme', 'coffee_setup');