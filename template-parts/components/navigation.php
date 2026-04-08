<?php
$menu_location = $args['menu'] ?? 'header_menu';
$className = $args['className'] ?? '';
?>

<nav class="nav <?php echo esc_attr($className); ?>">
    <?php
    wp_nav_menu([
        'theme_location' => $menu_location,
        'container' => false,
        'menu_class' => 'nav__list',
        'fallback_cb' => false,
    ]);
    ?>
</nav>