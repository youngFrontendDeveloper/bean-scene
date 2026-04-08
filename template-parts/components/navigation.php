<?php
$menu_location = $args['menu'] ?? 'header_menu';
$container_class = $args['class'] ?? 'nav';
?>

<nav class="<?php echo esc_attr($container_class); ?>">
    <?php
    wp_nav_menu([
        'theme_location' => $menu_location,
        'container' => false,
        'menu_class' => 'nav__list',
        'fallback_cb' => false,
    ]);
    ?>
</nav>