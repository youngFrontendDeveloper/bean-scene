<?php
$menu_location = $args['menu'] ?? 'header_menu';
$className = $args['className'] ?? '';
?>

<nav class="nav <?php echo esc_attr($className); ?>">
    
    <button class="nav__toggle" aria-label="Мобильное меню">
        <span class='nav__span'></span>
        <span class='nav__span'></span>
        <span class='nav__span'></span>
    </button>
    
    
    <div class="nav__menu">
        <div class="nav__overlay"></div>  
        <?php
    wp_nav_menu([
        'theme_location' => 'header_menu',
        'container' => false,
        'menu_class' => 'nav__list',
        'fallback_cb' => false,
        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
    ]);
    ?>
    </div>
</nav>

   
