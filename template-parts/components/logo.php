<?php

$args = $args ?? [];
$size = $args['size'] ?? 'sm'; 
$className = $args['className'] ?? '';
$logo_text = get_theme_mod('logo_text', 'Bean Scene');
$logo_url = home_url('/');
$logo_classes = 'logo logo--' . $size;

if (!empty($className)) {
    $logo_classes .= ' ' . esc_attr($className);
}
?>

<div  class='logo-wrap'>
    <a href="<?php echo esc_url($logo_url); ?>" class="<?php echo esc_attr($logo_classes); ?>">        
        <?php echo esc_html($logo_text); ?>        
    </a>
</div>