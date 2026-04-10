 <?php

 require_once get_template_directory() . '/inc/setup.php';
 require_once get_template_directory() . '/inc/enqueue.php';
 require_once get_template_directory() . '/inc/acf.php';

 // Подключаем CSS (один главный файл)
wp_enqueue_style('coffee-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');

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